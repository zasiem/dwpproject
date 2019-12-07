<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Pesanan;

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
        return view('welcome');
    }

    public function pemesanan(){

      $foto = Pesanan::where('id_users', Auth::user()->id)->get();

      return view('pembayaran', ['foto' => $foto[0]]);

    }

    public function upload_pembayaran(Request $request){
      $path = $request->file('gambar')->store('bukti_pembayaran', 'public');

      Pesanan::where('id_users', Auth::user()->id)
      ->update([
        'bukti_pembayaran' => $path,
      ]);

      return redirect('/pesanan');

    }
}
