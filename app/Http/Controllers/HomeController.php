<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function set()
    {
    	// \Cookie::queue('name','lamp207', 2);
    	// return response('<p>这是啥</p>')->withCookie('class','kansha',10);

    	// $name = \Cookie::get('class');
    	// dd($name);

    }

    //写入闪存
    public function flash()
    {
    	// \Session::flash('info','添加成功');
    	return redirect('/get-flash')->with('info','添加成功');
    }


    // 读取闪存
    public function getFlash()
    {

    	// echo \Session::get('info');
    	return view('admin');
    }

    //表单
    public function user()
    {
    	return view('/user');
    }

    public function insert()
    {
        //表单验证   检测用户   密码
        if(empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20) {
            \Session::flash('error','用户名格式不正确');
            return back()->withInput();
        }

    }

    public function response()
    {
    	// echo 'lala';
    	//返回字符串
    	// return '<span>这是什么</span>';

    	//返回json
    	// return response()->json(['name'=>'fan','age'=>21]);

    	//下载
    	// return response()->download('../readme.md');`

    }

    // 视图
  	public function views()
  	{
  		return view('user.add',[
  			'title'=>'第一次',
  			'content'=>'看不见的',

  		]);

  	}


  	//模板
  	//页面1
  	public function page1()
  	{
  		return view('page1');

  	}

  	 //页面2
  	public function page2()
  	{
  		return view('page2');

  	}

  	//控制
  	public function control()
  	{
  		return view('control',[
  			'isVip'=>false,
  			'classman'=>[
  				'男人',
  				'卡上的那',
  				'读取温度'
  			]
  		]);
  	}

}
