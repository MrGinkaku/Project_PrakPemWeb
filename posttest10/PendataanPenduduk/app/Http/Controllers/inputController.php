<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class inputController extends Controller
{
    
    public function submitData(Request $request)
    {
    $data = [
    'nik' => $request->input('nik'),
    'nama' => $request->input('nama'),
    'provinsi' => $request->input('provinsi'),
    'kota' => $request->input('kota'),
    'telpon'=> $request->input('telpon'),
    ];
    
    return view('dashboardAdmin', compact('data'));
    }
}