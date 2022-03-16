<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth\pegawai;
use APP\Models\Pegawai;



class PegawaiController extends Controller
{
    public function index(){
        $data_pegawai = \App\Models\Pegawai::all();
        return view('pegawai.index',['data_pegawai'=>$data_pegawai]);
    }
    //public function create(){
        //return view('pegawai.create');
    //}

    public function create(Request $request){
      // return $request->all();
     \App\Models\Pegawai::create($request->all());
     return redirect('/pegawai')->with('sukses','data berhasil diinput');

    }
// ini yng sebelumnya
    public function edit($id){
       $Pegawai = \App\Models\Pegawai::find($id);
   //    dd($Pegawai);
       return view('pegawai.edit', ['Pegawai'=>$Pegawai] );
   }
///batasnya disini ya

public function update(Request $request,$id){
    $Pegawai = \App\Models\Pegawai::find($id);
    $Pegawai ->update($request->all());
    return redirect('/pegawai')->with('sukses', 'data berhasil diupdate');
}

public function delete($id){
    $Pegawai = \App\Models\Pegawai::find($id);
    $Pegawai ->delete($Pegawai);
    return redirect('/pegawai')->with('sukses', 'data berhasil dihapus');
    
}
}
