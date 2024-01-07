<?php

namespace App\Http\Controllers;

use App\Models\Insident;
use App\Models\Pengajuan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $insidents = Insident::all();
        $pengajuans = Pengajuan::get();
        return view('home', compact('pengajuans', 'insidents'));
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'tanggal_kejadian' => 'required',
            'peretas' => 'required',
            'link_website' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required' => 'Kolom Nama Lengkap wajib diisi.',
            'email.required' => 'Kolom Email wajib diisi.',
            'tanggal_kejadian.required' => 'Kolom Tanggal Kejadian wajib diisi.',
            'peretas.required' => 'Kolom Peretas wajib diisi.',
            'link_website.required' => 'Kolom Link Website wajib diisi.',
            'deskripsi.required' => 'Kolom Deskripsi wajib diisi.',
        ]);

        try {
            Pengajuan::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'tanggal_kejadian' => $request->tanggal_kejadian,
                'peretas' => $request->peretas,
                'link_website' => $request->link_website,
                'deskripsi' => $request->deskripsi,
            ]);

            return response()->json(['success' => 'Pengajuan Berhasil Dikirim!!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat mengirim pengajuan.']);
        }
    }
}
