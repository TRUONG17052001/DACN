<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillModel;
use App\Models\DetailBillModel;
use App\Models\UserModel;
use Cart;


class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User.checkout");
    }
    public function admin()
    {
        $data= BillModel::all();
        return view("Admin.tableHD",['DSBill'=>$data]);
    }
    public function add(Request $request,$id)
    {
        // dd($request->all());
        // exit;
        $id_temp= UserModel::find($id);
        $id_temp->tenht= $request->tenht;
        $id_temp->email= $request->email;
        $id_temp->sdt= $request->sdt;
        $id_temp->diachi= $request->diachi;
        $id_temp->save();
        $mahd=time();
        $hd = [
            'mahd'=>$mahd,
            'username'=>$id,
            'tongtien'=>Cart::subtotal(0),
            'soluong'=>Cart::count(),
            'thanhtoan'=>$request->thanhtoan,
            'tinhtrang'=>"Chờ xác nhận"
        ];
        BillModel::create($hd);

        foreach(Cart::content() as $items){
            $array = [
                'mahd'=>$mahd,
                'masp'=>$items->id,
                'mausac'=>$items->options['color'],
                'kichthuoc'=>$items->options['size'],
                'soluong'=>$items->qty,
                'tongtien'=>$items->qty*$items->price
            ];
            DetailBillModel::create($array);
        }
        Cart::destroy();
        session()->flash('Success','Đặt hàng thành công');
        return redirect('/checkout');
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
        $hd= BillModel::find($id);
        // dd($hd);
        // exit;
        if($hd->tinhtrang=="Chờ xác nhận")
        {
            $hd->tinhtrang="Đang giao";
            $hd->save();
            return redirect('/tableHD');
        }
        else if($hd->tinhtrang=="Đang giao")
        {
            $hd->tinhtrang="Đã giao";
            $hd->save();
            return redirect('/tableHD');
        }
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
