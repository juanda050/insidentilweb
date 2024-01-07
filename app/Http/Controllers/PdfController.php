<?php

namespace App\Http\Controllers;

use App\Models\Insident;
use App\Models\Pengajuan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;



class PdfController extends Controller
{
    public function insidentpdf()
    {
        $insidents = Insident::all();

        // Generate timestamp untuk nama file
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');

        // Load view dan atur ukuran ke A4
        $pdf = PDF::loadView('admin.pdf.insidentil-pdf', compact('insidents'))->setPaper('a4');

        // Nama file sesuai dengan format yang diinginkan
        $fileName = 'insidentil_' . $timestamp . '.pdf';

        // Return untuk streaming dengan nama file yang telah dibuat
        return $pdf->download($fileName);
    }

    public function userspdf()
    {
        $users = User::all();

        // Generate timestamp untuk nama file
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');

        // Load view dan atur ukuran ke A4
        $pdf = PDF::loadView('admin.pdf.users-pdf', compact('users'))->setPaper('a4');

        // Nama file sesuai dengan format yang diinginkan
        $fileName = 'users_' . $timestamp . '.pdf';

        // Return untuk streaming dengan nama file yang telah dibuat
        return $pdf->download($fileName);
    }

    public function pengajuanpdf()
    {
        $pengajuans = Pengajuan::all();

        // Generate timestamp untuk nama file
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');

        // Load view dan atur ukuran ke A4
        $pdf = PDF::loadView('admin.pdf.pengajuan-pdf', compact('pengajuans'))->setPaper('a4', 'landscape');

        // Nama file sesuai dengan format yang diinginkan
        $fileName = 'pengajuan_' . $timestamp . '.pdf';

        // Return untuk streaming dengan nama file yang telah dibuat
        return $pdf->download($fileName);
    }
}
