@extends('layout.admin')

@section('main')
    <div class="layui-row">
        <div class="layui-col-xs12">
           操作系统版本：{{ PHP_OS }}
        </div>
        <div class="layui-col-xs12">
           Apache版本：{{ $_SERVER["SERVER_SOFTWARE"] }}
        </div>
        <div class="layui-col-xs12">
           PHP版本：{{ PHP_VERSION }}
        </div>
        <div class="layui-col-xs12">
            MYSQL版本：{{ $mysqlver }}
        </div>
        <div class="layui-col-xs12">
            ZEND版本：{{ zend_version() }}
        </div>
        <div class="layui-col-xs12">
           当前登录IP：{{ $_SERVER['SERVER_ADDR'] }}
        </div>
    </div>
@endsection

