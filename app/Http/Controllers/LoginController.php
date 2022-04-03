<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;

class LoginController extends Controller
{

    public function authen(Request $request)
    {

        if ($request-> username == 'admin' && $request->password == 'admin') {

            $request->session()->put('token', time());

            return (new ResponseController)->toResponse('login berhasil', 200);
        }

        return (new ResponseController)->toResponse(null, 400, ['Username atau password salah...']);

    }

    public function logout(Request $request) {

        if ($request->session()->has('token')) {
            $request->session()->forget('token');
        }

        return;

    }

}
