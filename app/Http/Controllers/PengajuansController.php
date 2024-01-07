<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\Contracts\DataTable;
use Datatables;

class PengajuansController extends Controller
{
    public function index(): View
    {
        $totalPengajuans = Pengajuan::count(); // Menghitung jumlah pengguna
        $pengajuans = Pengajuan::all();

        if (request()->ajax()) {
            return datatables()->of(Pengajuan::select('*'))
                ->addColumn('action', 'admin.pages.pengajuan-action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pages.permohonan', [
            'title' => 'Pengajuan'
        ], compact('pengajuans', 'totalPengajuans'));
    }

    public function store(Request $request)
    {
        $pengajuanId = $request->id;

        $pengajuan = Pengajuan::updateOrCreate(
            ['id' => $pengajuanId],
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'tanggal_kejadian' => $request->tanggal_kejadian,
                'link_website' => $request->link_website,
                'peretas' => $request->peretas,
                'deskripsi' => $request->deskripsi,
                // Tambahan ini untuk memastikan 'status' tidak berubah
                'status' => $request->status,
            ]
        );

        return Response()->json($pengajuan);
    }

    public function edit(Request $request)
    {
        $where = ['id' => $request->id];
        $pengajuan = Pengajuan::where($where)->first();

        // Di sini Anda dapat membatasi atribut yang dapat diubah.
        $pengajuan->status = $request->status;
        $pengajuan->save();

        return Response()->json($pengajuan);
    }

    public function destroy(Request $request)
    {
        $pengajuan = Pengajuan::where('id', $request->id)->delete();

        return Response()->json($pengajuan);
    }
}
