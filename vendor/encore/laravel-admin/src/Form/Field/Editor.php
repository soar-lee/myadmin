<?php

namespace Encore\Admin\Form\Field;

use Encore\Admin\Form\Field;

class Editor extends Field
{
    protected static $js = [
        //'//cdn.ckeditor.com/4.5.10/standard/ckeditor.js',
        '/packages/admin/ckeditor-full/ckeditor.js',
    ];

    public function render()
    {
        $this->script = "CKEDITOR.replace('{$this->column}');";

        return parent::render();
    }
}
