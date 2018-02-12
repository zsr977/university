<?php
namespace app\index\controller;

use think\Controller;

//SPA应用入口

class Index extends Controller
{
    //此处定位到PC端SPA应用
    public function index()
    {
        return $this -> fetch();
    }



    //此处定位到移动端SPA应用
    public function mobile()
    {
        return $this -> fetch();
    }



    //未定义路由指定的404页面
    public function miss()
    {
        //获取请求方式
        $method = $this -> request ->method();

        //GET方式时返回404页面
        if ($method == 'GET') 
        {
            return $this -> fetch();
        }

        //POST方式时返回404信息
        else
        {
            return response('error : page not found!','404',['error','page not found!']) -> contentType("text/plain");
        }
        
    }
}
