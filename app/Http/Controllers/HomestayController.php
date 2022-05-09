<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function readdata()
    {
        //ambil data dari tabel informations
        $informations= DB::table('informations')->get();

        // mengirim ke halaman informations untuk ditampilkan data
        return view('datausers',['informations'=>$informations]);
    }

    //metode untuk memasukkan data
    public function input()
    {
        return view('inputdata');
    }
    //metode untuk menyimpan data ke database
    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('informations')->insert([
            'ID' => $request->ID,
            'name' => $request->name,
            'roomtype' => $request->roomtype,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
        ]);

        return redirect('/tampildata');
    }

    //metode memilih data untuk mengubah
    public function edit($ID)
    {
    
        $informations = DB::table('informations')->where('ID', $ID)->get();

        
        return view('edit', ['informations' => $informations]);
    }

    //metode untuk mengubah data
    public function update(Request $request)
    {

        DB::table('informations')->where('ID', $request->ID)->update([
            'ID' => $request->ID,
            'name' => $request->name,
            'roomtype' => $request->roomtype,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
        ]);

        return redirect('/tampildata');
    }

    //meode untuk menghapus data
    public function hapus($ID)
    {
        DB::table('informations')->where('ID', $ID)->delete();
        return redirect('/tampildata');
    }

}