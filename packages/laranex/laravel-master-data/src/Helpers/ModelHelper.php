<?php

namespace Laranex\LaravelMasterData\Helpers;

class ModelHelper
{
    public static function getModel($slug)
    {
        $model = config('laravel-master-data.models')[$slug];
        if (! $model) {
            abort(404);
        }

        if (! class_exists($model)) {
            abort(404);
        }

        return new $model;
    }

    public static function getModelColumns($slug)
    {
        $model = self::getModel($slug);
        $unpublished = isset($model->unpublished) ? $model->unpublished : [];
        $hidden = array_merge($model->getHidden(), $unpublished);
        $columns = $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
        $columns = array_values(array_diff($columns, $hidden));

        return $columns;
    }

    public static function getModelList()
    {
        $prefix = config('laravel-master-data.prefix');
        $appUrl = config('app.url');

        $models = config('laravel-master-data.models');
        $list = [];
        foreach ($models as $slug => $model) {
            $list[] = [
                'endpoint' => $appUrl.'/'.$prefix.'/'.$slug,
                'model' => $model,
                'columns' => self::getModelColumns($slug),
            ];
        }

        return $list;
    }
}
