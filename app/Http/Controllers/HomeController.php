<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemisah;
use App\Models\User;
use App\Models\Pemisahs;
use App\Models\PenilaianKerja;

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
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    
    {
        $countUser = User::count();
        $countPemisah = Pemisah::count();
        $countPenilaianKerja = PenilaianKerja::count();
        $pemisahs = Pemisah::take(2)->get();

        foreach ($pemisahs as $pemisah) {
            $penilaianKerja = PenilaianKerja::where('pemisah_id',$pemisah->id)->get();
            
            foreach ($penilaianKerja as $penilaianKerjax) {
                $penilaianKerjax['linkArray'] = explode(PHP_EOL, $penilaianKerjax->link);
            }
            $pemisah['penilaianKerjap'] = $penilaianKerja;

        }

        return view('home', compact('countUser','countPemisah','countPenilaianKerja'))->with('pemisahs', $pemisahs);
    }
}
