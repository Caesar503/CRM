<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class LoginController extends Controller
{
	//后台首页
    public function index(){
    	return view('Login/index');
    }
    
    
    //登陆
    public function login(){
    	return view('Login/login');
    }
    // 注册
    public function regist(){
    	return view('Login/regist');
    }
    //执行注册
  //   public function registdo(){
  //   	// dd(request()->all());
  //   	$res = App\User::select('name')->where(['name'=>request()->name])->first();
  //   	if($res){
  //   		echo 1;	
  //   		exit;
  //   	}
    	
  //   	$res1 = App\User::select('email')->where(['email'=>request()->email])->first();
  //   	if($res1){
  //   		echo 1;
  //   		exit;	
  //   	}

  //   	$res = request()->only('name','email','password');
  //   	$res['remember_token'] = request()->_token;
  //   	$res['create_time'] = time();
  //   	$result = App\User::insert($res);
  //   	if($result){
  //   		echo 2;
  //   	}else{
  //   		echo 1;
  //   	}
 	// }
    // 退出
    public function back(){
    	request()->session()->flush();
    	return redirect('login');
    }
    // 综合查询
    public function allFind(){
    	return view('Find/all');
    }
}
