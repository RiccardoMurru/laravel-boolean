<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * Homepage
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Privacy
     */
    public function privacy()
    {
        return view('privacy');
    }

    /**
     * FAQ
     */
    public function faq()
    {
        return view('faq');
    }
}
