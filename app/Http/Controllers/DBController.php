<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //查询
    public function select()
    {	
    	//查询
    	 // $good = DB::select('select * from users limit 10');

    	// dd($good);

    	// 添加(必须所有的字段都要写上)
    	// DB::insert('insert into users (id,username) values (?,?)',[6, 'fan']);
    	// DB::insert('insert into users (id, username,password,email,account) values (?,?,?,?,?)', [11, 'Dayle',111,'1212@qq.com',1654]);

    	// 更新(修改)?是占位符
    	// $a = DB::update('update users set account=1 where username=?',['wf']);
    	// dd($a);

    	//删除
    	// $a = DB::delete('delete from users where id=11');
    	// dd($a);
    	//一般语句
    	// DB::statement('drop table users');



    	// 构造器
    	//查询所有
    	// $users = DB::table('users')->get();
    	// return view('user.index', ['users' => $users]);(转到文档里)

    	// dd($a);
    	//查询单条
    	// $user = DB::table('users')->where('id', 1)->first();
    	// dd($user);	

    	// 查询单条结果中的某个字段
    	// $email = DB::table('users')->where('id', 1)->value('email');
    	// $a = DB::table('users')->where('id',1)->value('username');

    	// 获取一列数据
    	// $a = DB::table('users')->pluck('username');

    	//设置字段(查询username和email的数据)
    	// $a = DB::table('users')->select('username', 'email as user_email')->get();

    	//按条件查询(username后面带f的)
    	// $a = DB::table('users')->where('username', 'like', '%f')->get();

    	// 按条件查询 id大于1  或者username为111的
    	// $a = DB::table('users')->where('id', '>', 1)->orWhere('username', '111')->get();

    	//按条件查询id在1到100之间的(Between....之间)
    	// $a = DB::table('users') ->whereBetween('id', [1, 100])->get();

    	//按条件查询(如果在这里面的)
    	// $a = DB::table('users') ->whereIn('id', [11, 21, 3]) ->get();

    	//排序desc(降序)    asc(升序)
    	// $a = DB::table('users')->orderBy('id', 'asc')->get();

    	//分页
    	// $a = DB::table('goods_1')->skip(0)->take(5)->get();
    	// 分页的第二种
    	// $a = DB::table('goods_1')
      	//            ->offset(10)
     	//            ->limit(5)
     	//            ->get();

    	//连接表(join) 连接表1和表2 显示出id相等的
   		// $a = DB::table('users')
     //        ->join('goods_1', 'users.id', '=', 'goods_1.id')
     //        ->select('users.*', 'goods_1.price')
     //        ->get();

    	// 总数
    	// $a = DB::table('users')->count();

    	// 最大值
    	// $a = DB::table('users')->max('account');

    	//最小值
    	// $a = DB::table('users')->min('account');

    	//平均值
    	// $a = DB::table('users')->avg('id');

    	dd($a);
    }

    // public function trans()
    // {
    // 	fan();
    // 	DB::transaction(function(){
    // 		$res1 = DB::update('update users set account = account - 100 where id = 1');
    // 		$res2 = DB::update('update users set account = account + 100 where id = 2');

	   //  	if($res1 && $res2) {
	   //  		DB::commit();
	   //  	}else{
	   //  		DB::rollback();
	   //  	}

    // 	});
    // 	return view('page1');


    // }
}
