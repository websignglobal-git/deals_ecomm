<?php

namespace App\Http\Controllers\security;
session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout()
    {
        session_destroy();
        return Response()->json('success');
    }
}
