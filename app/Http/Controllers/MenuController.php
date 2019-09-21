<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    //



    //
    public function index(){
        $menus = Menu::all();
        return view('menu.menu')->with('menus',$menus);
    }

    public function create(){
        return view('menu.menu-create');
    }

    public function post_data(Request $request){
     $name = $request->input('name');
     
     $menu = new Menu();
     $menu->name = $name;
     $menu->save();
     return back();
    }

    public function edit_menu($id){
        $find_menu = Menu::where('id',$id)->first();
        return view('menu.menu-update')->with('find_menu',$find_menu);
    }

    public function update_menu(Request $request,$id){
         $name = $request->input('name');
         Menu::where('id',$id)->update([
             'name'=>$name,
         ]);
         return back();
    }


}
