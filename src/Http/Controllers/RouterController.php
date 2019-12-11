<?php

namespace Mero\AppendableDynamicDropdown\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class RouterController extends Controller
{
    use ValidatesRequests;

    /**
     * @param Request         $request
     * @param ResponseFactory $response
     *
     */
    public function retrieve(Request $request, ResponseFactory $response)
    {
        $modelName = $request->input('modelName');
        $tableName = $request->input('tableName');

        if (null !== $tableName) {
            $routers = DB::table($modelName)->select($tableName)->distinct()->get();
        } else {
            $routers = DB::table($modelName)->get();
        }

        return response()->json($routers);
    }
}
