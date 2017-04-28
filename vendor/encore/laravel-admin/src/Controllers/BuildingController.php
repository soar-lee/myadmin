<?php

namespace Encore\Admin\Controllers;

use Encore\Admin\Auth\Database\Building;
use Encore\Admin\Auth\Database\Permission;
use Encore\Admin\Auth\Database\BuildingType;
use Encore\Admin\Auth\Database\BuildingImage;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Encore\Admin\Form\Builder;

class BuildingController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('admin::lang.building'));
            $content->description(trans('admin::lang.list'));
            $content->body($this->grid()->render());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     *
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header(trans('admin::lang.building'));
            $content->description(trans('admin::lang.edit'));
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('admin::lang.building'));
            $content->description(trans('admin::lang.create'));
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Building::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name(trans('admin::lang.name'));
            $grid->type(trans('admin::lang.type'));
            $grid->status(trans('admin::lang.status'));
            $grid->page_view(trans('admin::lang.page_view'));

            $grid->created_at(trans('admin::lang.created_at'));
            $grid->updated_at(trans('admin::lang.updated_at'));

            /*$grid->actions(function (Grid\Displayers\Actions $actions) {
                if ($actions->row->slug == 'administrator') {
                    $actions->disableDelete();
                }
            });*/

            $grid->tools(function (Grid\Tools $tools) {
                $tools->batch(function (Grid\Tools\BatchActions $actions) {
                    $actions->disableDelete();
                });
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        return Admin::form(Building::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name', trans('admin::lang.name'))->rules('required');
            $form->select('type', trans('admin::lang.type'))->options(BuildingType::all()->pluck('name', 'id'))->rules('required');
            $form->select('status', trans('admin::lang.status'))->options(config("variables.building_status"));
            $form->multipleImage('image', trans('admin::lang.multipleImage'));
            $form->ueditor('content', trans('admin::lang.content'));
        });
    }
}
