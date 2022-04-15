<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use function view;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.home',[
            'title' => 'ShopFlower'
        ]);
    }
}
