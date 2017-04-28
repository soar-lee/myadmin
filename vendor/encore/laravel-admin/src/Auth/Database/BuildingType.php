<?php

namespace Encore\Admin\Auth\Database;

use Illuminate\Database\Eloquent\Model;

class BuildingType extends Model
{
    protected $fillable = ['name'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('admin.database.building_type_table'));

        parent::__construct($attributes);
    }
}
