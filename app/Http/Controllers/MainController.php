<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    function index()
    {
    	return view('/home/index',['title' => 'Home']);
    }
    function shops()
    {
    	return view('/shops/index',['title' => 'All Products']);
    }
    function recent()
    {
        return view('/shops/index',['title' => 'Recently Posts']);
    }
    function top()
    {
    	return view('/shops/index',['title' => 'Most Viewed']);
    }
    function popular()
    {
    	return view('/shops/index',['title' => 'Popular Posts']);
    }
    function search()
    {
        $ctr = $_GET['q'];
        //return view('/search/index',['title' => $ctr]);
        return view('/shops/index',['title' => $ctr]);
    }
    function product($id)
    {
        return view('/product/index',['title' => 'Product '.$id]);
    }
    function category($ctr)
    {
        //return view('/category/index',['title' => 'Category '.$ctr]);
        return view('/shops/index',['title' => $ctr]);
    }
    function tags($ctr)
    {
        //return view('/tags/index',['title' => 'Tag '.$ctr]);
        return view('/shops/index',['title' => $ctr]);
    }
    function orderCek()
    {
        return view('/main/cek',['title' => 'Order Cek']);
    }
    function orderProof()
    {
        return view('/main/proof',['title' => 'Order Proof']);
    }
    function cart()
    {
        return view('/cart/index',['title' => 'Cart']);
    }
    function signin()
    {
        return view('/sign/in',['title' => 'Signin']);
    }
    function signup()
    {
        return view('/sign/up',['title' => 'Signup']);
    }
}
