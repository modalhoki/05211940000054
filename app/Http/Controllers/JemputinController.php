<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JemputinController extends Controller
{
    public function halamanUtama() {
        return view('jemputin.homePage');
    }

    public function halamanProduct() {
        return view('jemputin.productPage');
    }

    public function halamanAboutUs() {
        return view('jemputin.aboutUsPage');
    }

    public function halamanContactUs() {
        return view('jemputin.contactUsPage');
    }

    public function halamanOrder() {
        return view('jemputin.orderPage');
    }
}
