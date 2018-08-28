<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

	/*添加*/
    public function add()
    {
    	return view('add');
    }


    //插入
    public function insert()
    {
    	echo 'lalal';
    }

    //查看指定用户
    public function show($id)
    {
    	echo $id;

    }

    public function index()
    {
    	echo '用户列表';
    }

}
