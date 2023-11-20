<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function getAll()
    {
        $menus = DB::table("menu_items")->get();
        return $menus;
    }

    public function getByPrice($min, $max)
    {
        $menus = DB::table("menu_items")
            ->orWhereBetween("price", [$min, $max])
            ->get();

        // $menus = DB::select("select * from menu_items where price between 10 and 15 order by price asc");
        return $menus;
    
    }
}
