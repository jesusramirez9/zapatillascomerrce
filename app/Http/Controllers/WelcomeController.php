<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index()
   {
     
      // session()->flash('flash.bannerStyle', 'danger');

      if (auth()->user()) {
         $pendiente = Order::where('status',1)->where('user_id', auth()->user()->id)->count();

         if ($pendiente) {
            $mensaje = "Usted tiene $pendiente ordenes pendientes. <a class='font-bold' href='".route('orders.index') ."?status=1'>Ir a pagar</a>";
            session()->flash('flash.banner', $mensaje);
         }
    
      }

       $categories = Category::all();
       $products = Product::all();
    return view('welcome', compact('categories', 'products'));


   }
}
