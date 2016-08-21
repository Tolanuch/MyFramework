<?php

namespace App\Controllers;

use App\Models\User;
class UserController extends Controller
{
    function index()
    {
        $model = new User();
        include_once $_SERVER['DOCUMENT_ROOT'] . 'app/views/user/index.php';
    }
}