<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Insident;
use App\Models\Pengajuan;
use Datatables;
use PDF;

class InsidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalPengajuans = Pengajuan::count(); // Menghitung jumlah pengguna

        if (request()->ajax()) {
            return datatables()->of(Insident::select('*'))
                ->addColumn('action', 'admin.pages.insidents-action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pages.insidents', compact('totalPengajuans'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insidentId = $request->id;

        $insident = Insident::updateOrCreate(
            [
                'id' => $insidentId
            ],
            [
                'nama_website' => $request->nama_website,
                'link_website' => $request->link_website,
                'tanggal_kejadian' => $request->tanggal_kejadian,
                'peretas' => $request->peretas,
                'deskripsi' => $request->deskripsi,
            ]
        );

        return Response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan!'
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $insident  = Insident::where($where)->first();

        return Response()->json($insident);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $insident = Insident::where('id', $request->id)->delete();

        return Response()->json($insident);
    }
}
