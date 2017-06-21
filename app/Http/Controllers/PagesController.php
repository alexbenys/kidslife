<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
     *
     */
    public function index() {
       return view('pages.index');
    }

    public function getAvailabilityPage() {
        return view('pages.availability');
    }

    public function getLogin() {
        return view('auth.login');
    }
}
