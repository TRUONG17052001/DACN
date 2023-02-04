<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\ProductModel;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User.cart");
    }
    public function add(Request $request,$id)
    {
        $id_temp= ProductModel::find($id);
        $sl=$request->qty;
        $ms=$request->color;
        $kt=$request->size;
        $array = [
            'id'=>$id_temp->masp,
            'name'=>$id_temp->tensp,
            'qty'=>$sl,
            'price'=>$id_temp->giasp,
            'weight'=>0,
            'options'=>['color'=>$ms,'size'=>$kt,'img'=>$id_temp->anhsp]
        ];
        cart::add($array);
        return redirect('/cart');
    }
    public function remove($rowId)
    {
        cart::remove($rowId);
        return redirect('/cart');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
