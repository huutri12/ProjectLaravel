<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function create(){
        return view('admin.menu.add',[
            'title' => 'Thêm danh mục mới'
        ]);
    }
    public function list(){
        echo 123;
    }
}
