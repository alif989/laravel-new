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
        $arr =array();
        $parents =  DB::table('menus')
            ->get();
       // dd($parents);
        foreach ($parents as $parent  ){
            if
           // dd($arr);
        }

//
// //      $categories = menu::where('parents_menu_id', '=', 0)->get();
//      dd($categories);
//        if(is_array($categories)){
//            foreach($categories as $category){
//
//            }
//
//        }
//         $childmenu =DB::table('menu')
//             ->where('menu_type' , '=' ,'sub')
//             ->get();
//         //dd($childmenu);
//         return view('menu.menu',compact('categories','childmenu'));
        }
        public function getchildrecursion($childs){
       // dd($childs);
        foreach ($childs as $child ){
            $child_menu = array();
           // dd($child,1);
//            echo "<pre>";
//            print($child->menu_id);
            $child_menu['menu_id'] =$child->menu_id;
            $child_menu['menu_name'] =$child->menu_name;
            $child_menu =DB::table('menus')
                ->where('parents_menu_id' , '=', $child->menu_id )
                ->get()->toArray();
            if(count($child_menu)>0){
                $child_menu['child'] =  $this->getchildrecursion($child);
            }
            else{
                $child_menu['child'] = array();
            }
            return  $child_menu;

        }
        }

//    public function manageMenu(){
//        $arr = array(
//            'AA' => array(
//                'a1' => 'america',
//                'a2' => 'afganisthan'
//            ),
//            'BB' => array(
//                'b1' => array(
//                    'b11' => 'banana',
//                    'b12' => 'bangi'
//                ),
//                'b2' => array(
//                    'b21' => 'begun',
//                    'b22' => 'borboti',
//                    'b23' => array(
//                        'b231' => 'marigold',
//                        'b232' => 'rose',
//                        'b233' => 'tulip'
//                    )
//                ),
//                'b3' => 'belgium'
//            ),
//            'CC' => 'canada',
//            'DD' => 'denmark'
//        );
//
//        $this->doRecursion($arr);
//    }
//
//    public function doRecursion($a, $k = ''){
//        if(is_array($a)){
//            if($k != '') echo '<li>'.$k.'</li>';
//            echo '<ul>';
//            foreach ($a as $key => $coa){
//                $this->doRecursion($coa, $key);
//            }
//            echo '</ul>';
//        }else{
//            echo '<li>'.$a.'</li>';
//        }
//    }
}