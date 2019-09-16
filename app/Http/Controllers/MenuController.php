<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use App\Menu;
class MenuController extends Controller
{
    public function manageMenu(){
//        $categories =  DB::table('menu')
//            ->where('menu_type' , '=' ,'main')
//            ->get();
        $categories = menu::where('parents_menu_id', '=', 0)->get();
      //  dd($categories);

         $childmenu =DB::table('menu')
             ->where('menu_type' , '=' ,'sub')
             ->get();
         //dd($childmenu);
         return view('menu.menu',compact('categories','childmenu'));
    }
    public function recursivemenu(){

    }


}