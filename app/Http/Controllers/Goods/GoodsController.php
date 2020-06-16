<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use App\Model\GoodsModel;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    //商品详情
    public function detail(){
        $goods_id=$_GET["goods_id"];
        echo $goods_id;
        //查询
        $info=GoodsModel::where(["goods_id"=>$goods_id])->get()->toArray();
        var_dump($info);
    }
}
