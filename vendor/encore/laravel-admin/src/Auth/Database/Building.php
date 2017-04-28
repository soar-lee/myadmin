<?php

namespace Encore\Admin\Auth\Database;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['name', 'type', 'status', 'page_view'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('admin.database.building_table'));

        parent::__construct($attributes);
    }

    public function image()
    {
        $pivotTable = config('admin.database.building_image_table');

        $relatedModel = config('admin.database.building_image_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'bid', 'url');
    }
}
