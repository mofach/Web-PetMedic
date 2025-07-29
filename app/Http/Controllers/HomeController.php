<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['jumlahPasien'] = \App\Models\Pasien::count();
        $data['jumlahDokter'] = \App\Models\Dokter::count();
        $data['jumlahDepartemen'] = \App\Models\Poli::count(); // atau model departemen spesialis kamu

        return view('home', $data);
    }

}
