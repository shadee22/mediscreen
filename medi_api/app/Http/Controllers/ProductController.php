<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Exception;

class ProductController extends Controller
{
    /**
     *
     * @param  Request  $request
     * @return Response
     */
    public function show(Request $request)
    {
        return Product::all();
    }
    public function posting(Request $request)

    {
        try {
            $one = new Product(['name' => $request->name, 'detail' => $request->detail]);
            $one->save();
            return response()->json([
                'succuss' => $request->name
            ]) ;
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(Request $req)
    {
        $model  = Product::find(intval($req->id));
        $model->update(['name' => $req->name, 'detail' => $req->detail]);
        $model->save();
        return ('edited' + $req->id);
    }

    public function delete(Request $r)
    {       
        $obj = Product::find(intval($r->id));
        $obj->delete();

        return response()->json([
            'deleted' => $r->id
        ]);
    }
}
