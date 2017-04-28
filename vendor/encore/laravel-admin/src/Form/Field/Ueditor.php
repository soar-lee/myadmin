<?php

namespace Encore\Admin\Form\Field;

use Encore\Admin\Form\Field;

class Ueditor extends Field
{
    protected static $js = [
        //'//cdn.ckeditor.com/4.5.10/standard/ckeditor.js',
        '/laravel-u-editor/ueditor.config.js',
        'laravel-u-editor/ueditor.all.min.js',
        '/laravel-u-editor/lang/zh-cn/zh-cn.js',
    ];

    public function render()
    {
        //$this->script = "CKEDITOR.replace('{$this->column}');";
        $this->script = "UE.getEditor('{$this->column}');";

        return parent::render();
    }
}
