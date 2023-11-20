<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getMenusOrderId($orderId)
    {
        $menus = DB::table("order_details")
                ->join("menu_items","menu_item_id","=","item_id")
                ->where("order_id", $orderId)
                ->get();

        return $menus;
    }

    public function getOrdersByDate($date){
        $orders = DB::table("order_details")
                ->where("order_date", $date)
                ->get();
        return $orders;
    }


    public function getTotalOrdersByDate($date){
        $total = DB::table("order_details")
                ->join("menu_items","menu_item_id","=","item_id")
                ->select(DB::raw("sum(price) as total"))
                ->where("order_date", $date)
                ->get();

        return $total;
    }
}
