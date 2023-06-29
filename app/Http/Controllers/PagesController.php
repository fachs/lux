<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }

    public function profil()
    {
        return view('pages/profil');
    }

    public function kepanitiaan()
    {
        return view('pages/kepanitiaan/index');
    }

    public function kepanitiaanDetail()
    {
        return view('pages/kepanitiaan/detail_id');
    }

    public function kepanitiaanApply()
    {
        return view('pages/kepanitiaan/apply');
    }
    
    public function keuangan()
    {
        return view('pages/keuangan');
    }

    public function sptbh()
    {
        return view('pages/sptbh');
    }

    public function kontak()
    {
        return view('pages/kontak');
    }
}
