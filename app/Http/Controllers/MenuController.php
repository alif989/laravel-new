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
    public function manageMenu()
    {
        $parents = array();
        $parents = DB::table('menus')
          //  ->where('parents_menu_id',"=",'0')
            ->get();
         //dd($parents);
        $this->bulidtreee($parents);
    }
    public function bulidtreee($elements,$parentId = 0){
        $branch = array ();
        foreach ($elements as $element) {
            if ($element->parents_menu_id == $parentId) {
                $children = $this->buildTree($elements, $element->menu_id);
                if ($children) {
                    $element->children = $children;
                }
                $branch[] = $element;
            }
        }
      //  print_r($branch);exit;
        return $branch;


    }
}