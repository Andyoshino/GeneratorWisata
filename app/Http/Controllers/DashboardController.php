<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(Request $request) {


        if (!$request->session()->has('token')) {
            return redirect()->back();
        }


        $title = '';

        if ($request->has('type')) {

            if ($request->type == 'review') {

                $title .= 'Review';

                return view('dashboard_review', [
                    'title' => $title
                ]);
            }

            if ($request->type == 'tempat_wisata') {

                $title .= 'Tempat Wisata';

                return view('dashboard_tempat_wisata', [
                    'title' => $title
                ]);
            }

        }

        $title .= 'Akun User';

        return view('dashboard_akun', [
            'title' => $title
        ]);

    }

}
