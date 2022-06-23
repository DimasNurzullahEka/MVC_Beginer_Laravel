<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data=[
            'nama_sekolah'=>'SMA Dr Soetomo Surabaya',
            'alamat'=>', Jl. SEMOLOWARU NO. 9. Kodepos, 60118'
        ];
        return view('layout.v_home',$data);
    }
  public function about($id)
  {
      return'Ini Halaman About <br>' .$id;
  }
}
