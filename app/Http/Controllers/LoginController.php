<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\BillModel;
use App\Models\ProductModel;
use Hash;
use Session;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Login.page-login');
    }
    public function register()
    {
        return view('Login.page-register');
    }
    public function login(Request $rq)
    {
        $temp = UserModel::find($rq->username);
        if(hash::check($rq->password,$temp->password)){
            if($temp->quyen == 'QL'){
                session(['admin'=>['name'=>$temp->tenht]]);
                return redirect('/admin');
            }else{
                session(['user'=>['username'=>$temp->username,'name'=>$temp->tenht,'phone'=>$temp->sdt,'address'=>$temp->diachi,'email'=>$temp->email]]);
                return redirect('/');
            }
        }
        else if($temp == null){
            session()->flash('FailTK','Tài khoản không tồn tại');
            return redirect('/login');
        }
        else{
            session()->flash('FailMK','Mật khẩu không chính xác');
            return redirect('/login');
        }
    }
    public function admin(){
               
        return view("Admin.index");
    }
    public function profile($id){
        $user= UserModel::find($id);
        $array= BillModel::all();       
        return view("User.profile",['TK'=>$user],['DS'=>$array]);
    }
    public function indexAdmin(){
        $array= UserModel::all();
        return view("Admin.tableND",['DSUser'=>$array]);
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
        $temp = UserModel::find($request->username);
        if($temp == null){
            $data= $request->all();
            $data['password']=hash::make($request->password);
            UserModel::create($data);
            session()->flash('Success','Đăng ký thành công');
            return redirect('/register');
        }
        else{
            session()->flash('Fail','Tài khoản này đã tồn tại');
            return redirect('/register');
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
        $id_temp= UserModel::find($id);
        $id_temp->tenht= $request->tenht;
        $id_temp->email= $request->email;
        $id_temp->sdt= $request->sdt;
        $id_temp->diachi= $request->diachi;
        $id_temp->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_temp= UserModel::find($id)->FKHoaDon;
        if(count($id_temp)<=0){
            UserModel::destroy($id);
            session()->flash("OK",'Xóa thành công');
            return redirect('/tableND');
        }else{ 
            session()->flash("Fail",'Người dùng này vẫn còn hóa đơn');        
            return redirect('/tableND');
        }
    }
}
