<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //  HomeController.php
    //  * Create a new controller instance.
    //  *
    //  * @return void

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function store()
    {
        // hàm set() gồm 2 giá trị truyền vào đó là key và value, như ví dụ thì key là 'name', còn value là 'Huyen so cute'
        $user = Redis::set('name', 'Huyen so cute');
    }
    public function getData()
    {
        // hàm get() gồm 1 giá trị truyền vào đó là key
        $user = Redis::get('name');

        // dd() thử xem có đúng không nhé
        dd($user);
    }
}
