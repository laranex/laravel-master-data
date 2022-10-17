<?php

namespace Laranex\LaravelMasterData\Http\Controllers;

use Laranex\LaravelMasterData\Helpers\ModelHelper as Helper;

class MasterDataController extends Controller
{
    public function list()
    {
        return Helper::getModelList();
    }

    public function index()
    {
        $slug = request()->route('model');

        return Helper::getModel($slug)->get();
    }

    public function show()
    {
        $slug = request()->route('model');
        $id = request()->route('id');

        return Helper::getModel($slug)->find($id);
    }
}
