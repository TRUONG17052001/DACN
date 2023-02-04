<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoriesModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= ProductModel::all();
        $data1= CategoriesModel::all();
        return view("User.index",['DSProduct'=>$data],['DSCate'=>$data1]);
    }
    public function FormAdd()
    {
        $data1= CategoriesModel::all();
        return view("Admin.formSP",['DSCate'=>$data1]);
    }
    public function FormEdit($id)
    {
        $data= ProductModel::find($id);
        $data1= CategoriesModel::all();
        return view("Admin.formS",['Product'=>$data],['DSCate'=>$data1]);
    }
    public function indexAdmin()
    {
        $data= ProductModel::all();
        return view("Admin.tableSP",['DSProduct'=>$data]);
    }
    public function search(Request $request)
    {
        $kw= $request->keywords;
        $data = ProductModel::where('tensp','like',"%$kw%")->paginate(6)->withQueryString();
        return view('User.search',['search'=>$data]);
    }
    public function searchDM($id)
    {
        $kw= $id;
        $data = ProductModel::where('madm','like',"%$kw%")->paginate(6)->withQueryString();
        return view('User.search',['search'=>$data]);
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
        $id=ProductModel::find($request->masp);
        if($id!=null)
        {
        session()->flash('TM','Đã tồn tại mã sản phẩm này');
        return redirect('/formSP');
        }else{
        $data= $request->all();
        $tenanh=$request->anhsp->getClientOriginalName();
        $request->anhsp->storeAs('public',$tenanh);
        $data['anhsp']=$tenanh;
        ProductModel::create($data);
        return redirect('/tableSP');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ProductModel::find($id);
        $array = ProductModel::all();
        return view('User.detail',['Product'=>$data],['DSProduct'=>$array]);
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
        $id_temp= ProductModel::find($request->masp);
        $id_temp->tensp= $request->tensp;
        $id_temp->giasp= $request->giasp;
        $id_temp->donvitinh= $request->donvitinh;
        $id_temp->motasp= $request->motasp;
        $id_temp->save();
        return redirect('/tableSP');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductModel::destroy($id);
        return redirect('/tableSP');
    }
}
