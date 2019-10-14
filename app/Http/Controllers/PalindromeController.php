<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use App\Menu;
class PalindromeController extends Controller
{
//    public function Palindrome(){
//
//        for($i=1; $i<=100;$i++){
//            $new = 0;
//            $n = $i;
//            while (floor($n)) {
//                $d = $n % 10;
//              //  echo  $d . '<br/>';
//                $new = $new * 10 + $d;
//                $n = $n/10;
//            }
//           // echo $new  . '<br/>';;
//            if($new ==$i ){
//                echo $new  . '<br/>';
//                //echo sum($i);
//            }
//        }
//    }
    public function Palindrome(){
        //dd('hi');
//        for($i=1; $i<=10;$i++){
//            $new = 0;
//            //$revstring = $this->reverse($i);
//            //echo $revstring;
//            echo 'hi';
//            if( $revstring ==$i ){
//                echo $i  . '<br/>';
//                //echo sum($i);
//            }
//        }
        $i=125555333;
        $this->reverse($i);
    }
    public  function  reverse($n){
        $n = (string)$n;
        echo $n;
        //$n = 'alif';
        $revstring = '';
      // echo strlen($n);
        for($i=strlen($n)-1; $i >= 0; $i--){
            $revstring .= $n[$i];
           // echo $string[$i];
        }
        echo $revstring;
      //return $revstring;
    }
}