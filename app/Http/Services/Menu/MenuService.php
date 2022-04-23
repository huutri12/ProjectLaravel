<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService
{

    public function getParent(){
        return Menu::where('parent_id', 0)->get();
    }

    public function create($request)
    {
        try {
            Menu::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (string) $request->input('parent_id'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active'),
            ]);

            Session::flash('success','Tạo Danh Mục Thành Công');
        }catch (\Exception $error){
            Session::flash('error', $error->getMessage());
            return false;
        }

        return true;
    }
}
