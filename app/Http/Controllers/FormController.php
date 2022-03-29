<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }
    public function hasil(Request $request)
    {
        Alert::success('Data Rekap Medis Telah Terkirim!');
        $messagesError = [
            'required' => ':attribute ini wajib diisi!',
            'min' => ':attribute harus diisi minimal :min karakter!',
            'max' => ':attribute harus diisi maksimal :max karakter!',
            'mimes' => ':foto harus berupa jpg,png,jpeg!',
            'numeric' => 'attribute harus diisi angka!',
        ];
        
        $this->validate($request,[
            'dokter'=> 'required',
            'pasien' => 'required',
            'kondisi_kesehatan' => 'required|max:120',
            'suhu_tubuh'=>'required|numeric|between: 35.0, 45.0',
            'resep' => 'required|mimes:jpg,png,jpeg|max:2048',
        ],$messagesError);
        $request->resep = $this->SavePhoto($request,1);
        return view('hasil',['data' => $request]);
    }

    /* Untuk menyimpan foto di dalam storage, sebelumnya tulis command (php artisan storage:link) untuk membuat folder storage di dalam folder public*/
    public function SavePhoto(Request $request, $id)
    {
        $img = $request->resep; 
        $img_name = ''; 
        if ($img !== NULL) {
            $img_name = 'image'. $id . "." . $img->extension();
            $img_name = str_replace(' ', '-', strtolower($img_name)); 
            $img->storeAs(null, $img_name, ['disk' => 'public']); 
        }
        return asset('storage') . '/' . $img_name; 
    }
}