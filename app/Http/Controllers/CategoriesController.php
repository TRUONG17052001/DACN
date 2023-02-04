<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModel;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= CategoriesModel::all();
        return view("User.index",['DSCate'=>$data]);
    }
    public function FormAdd()
    {
        $data1= CategoriesModel::all();
        return view("Admin.formDM",['DSCate'=>$data1]);
    }
    public function FormEdit($id)
    {
        $data1= CategoriesModel::find($id);
        return view("Admin.formD",['Cate'=>$data1]);
    }
    public function indexAdmin()
    {
        $data= CategoriesModel::all();
        return view("Admin.tableDM",['DSCate'=>$data]);
    }
    public function indexUser()
    {
        $data= CategoriesModel::all();
        return view("User.Layout.navbar",['DSCate'=>$data]);
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
        $id=CategoriesModel::find($request->madm);
        if($id!=null)
        {
        session()->flash('TM','Đã tồn tại mã danh mục này');
        return redirect('/formDM');
        }else{
        $data= $request->all();
        CategoriesModel::create($data);
        return redirect('/tableDM');
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
        $id_temp= CategoriesModel::find($request->madm);
        $id_temp->tendm= $request->tendm;
        $id_temp->soluong= $request->soluong;
        $id_temp->save();
        return redirect('/tableDM');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_temp= CategoriesModel::find($id)->FKSanPham;
        if(count($id_temp)<=0){
            CategoriesModel::destroy($id);
            session()->flash("OK",'Xóa thành công');
            return redirect('/tableDM');
        }else{
            session()->flash("Fail",'Xóa không thành công'); 
            return redirect('/tableDM');
        }
    }
}