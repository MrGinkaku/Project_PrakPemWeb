<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Validator;
class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Karyawan::orderby('nama','asc')->get();
         return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data
         ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataKaryawan = new Karyawan;
        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'message' => 'gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }
        $dataKaryawan->nama = $request->nama;
        $dataKaryawan->jabatan = $request->jabatan;
        $dataKaryawan->gaji = $request->gaji;

        $post = $dataKaryawan->save();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses memasukkan data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Karyawan::find($id); 
        if($data){
            return response()->json([
                'status'=>true,
                'message'=>'Data ditemukan',
                'data'=>$data
            ],200);
        }else{
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak ditemukan'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataKaryawan = Karyawan::find($id);
        if(empty($dataKaryawan)){
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak ditemukan'
            ], 404);
        }
        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'message' => 'gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }
        $dataKaryawan->nama = $request->nama;
        $dataKaryawan->jabatan = $request->jabatan;
        $dataKaryawan->gaji = $request->gaji;

        $post = $dataKaryawan->save();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses melakukan update data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKaryawan = Karyawan::find($id);
        if(empty($dataKaryawan)){
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak ditemukan'
            ], 404);
        }
        
        $post = $dataKaryawan->delete();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses menghapus data'
        ]);
    }
}
