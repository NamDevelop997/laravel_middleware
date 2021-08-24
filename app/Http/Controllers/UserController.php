<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    function index()
    {
        return 'Trang danh cho nguoi 18+';
    }

    function dashboard()
    {
        return 'Trang danh cho Admin';
    }
}
