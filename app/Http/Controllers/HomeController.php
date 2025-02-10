<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['meta_title'] = 'Home Page';
        return view('index',$data);
    }
}
?>