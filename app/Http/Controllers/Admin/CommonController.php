<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
        if (!session('user')){
            $this->dispatch();
        }
    }
}
