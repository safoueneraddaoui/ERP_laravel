<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\User;
use Hyn\Tenancy\Models\Hostname;
use App\Client_User;


class UserController extends Controller
{
    public function index()
    {
        $user = Client_User::oldest()->get();
        return view('superAdmin.users',[
            'users' => $user,
        ]);
    }
}
