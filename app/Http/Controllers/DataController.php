<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14 0014
 * Time: 14:00
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class DataController extends Controller{
//    存储上传的数据

public function setData($setdata){
    DB::table('data')->insert([
        ["data"=>$setdata]
    ]);
    return "数据存储成功";
  }
//  从数据库得到数据并通过getdata返回json数据。
  public function getData(){
    $result=DB::table('data')->get();;
    return json_encode($result);
  }
}
?>