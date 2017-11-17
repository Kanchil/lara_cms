<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends CommonController
{
    public function index(){
        $data = [];
        $data['phpversion'] = phpversion();
        $data['os'] = PHP_OS;
        $mysqlver = DB::select('SELECT VERSION() as ver');
        if (is_array($mysqlver)){
            $data['mysqlver'] = $mysqlver[0]->ver;
        }else{
            $data['mysqlver'] = '';
        }
        return view('admin.index',$data);
    }
}
