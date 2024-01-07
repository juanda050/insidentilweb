<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\DataForm;
use App\Models\Insident;
use App\Models\Pengajuan;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    /** 
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        $visit = Visitor::all();
        $totalUsers = User::count(); // Menghitung jumlah pengguna
        $totalInsidents = Insident::count(); // Menghitung jumlah data insidentil
        $totalPengajuans = Pengajuan::count(); // Menghitung jumlah pengguna
        $insidents = Insident::all();
        $users = User::all();

        // Hitung jumlah insiden per bulan untuk tahun 2023
        $year = 2023;
        $incidentsPerMonth = Insident::countIncidentsPerMonth($year);

        // Inisialisasi array untuk menyimpan data bulan dan jumlah insiden
        $months = [];
        $incidentCounts = [];

        // Loop melalui hasil query dan mengisi array dengan data yang diperlukan untuk chart
        foreach ($incidentsPerMonth as $incident) {
            // Menggunakan nama bulan dalam Bahasa Indonesia
            $namaBulan = date("F", mktime(0, 0, 0, $incident->month, 1));
            $months[] = $namaBulan;
            $incidentCounts[] = $incident->total;
        }

        // Data yang akan dimasukkan ke dalam chart
        $chartData = [
            'categories' => $months,
            'data' => $incidentCounts,
        ];

        $jumlahTinjau = Pengajuan::where('status', 'Tinjau')->count();
        $jumlahSudahDitinjau = Pengajuan::where('status', 'Sudah ditinjau')->count();

        // Data yang akan dimasukkan ke dalam chart
        $chartDataTinjau = [
            'series' => [$jumlahSudahDitinjau, $jumlahTinjau],
            'labels' => ["Sudah Ditinjau", "Belum Ditinjau"],
        ];

        return view('admin.pages.dashboard', [
            'title' => 'Dashboard'
        ], compact('insidents', 'users', 'totalUsers', 'totalInsidents', 'totalPengajuans', 'visit', 'chartData', 'chartDataTinjau'));
    }

    public function permohonan(): View
    {
        $totalPengajuans = Pengajuan::count(); // Menghitung jumlah pengguna
        $pengajuans = Pengajuan::all();
        return view('admin.pages.permohonan', [
            'title' => 'Pengajuan'
        ], compact('pengajuans', 'totalPengajuans'));
    }

    // Method untuk mengubah status permohonan
    public function ubahStatusPermohonan($id)
    {
        // Lakukan logika perubahan status di sini, contoh:
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = ($pengajuan->status === 'Tinjau') ? 'Sudah ditinjau' : 'Tinjau';
        $pengajuan->save();

        // Mungkin Anda ingin mengembalikan respons atau melakukan sesuatu setelah perubahan status
        return response()->json(['message' => 'Status permohonan berhasil diubah']);
    }

    // Method untuk menghapus permohonan
    public function hapusPermohonan($id)
    {
        // Lakukan logika penghapusan di sini, contoh:
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->delete();

        // Mungkin Anda ingin mengembalikan respons atau melakukan sesuatu setelah penghapusan
        return response()->json(['message' => 'Permohonan berhasil dihapus']);
    }

    public function profiles(): View
    {
        $totalPengajuans = Pengajuan::count(); // Menghitung jumlah pengguna

        return view('admin.pages.profiles', [
            'title' => 'Profiles'
        ], compact('totalPengajuans'));
    }

    public function security(): View
    {
        $totalPengajuans = Pengajuan::count(); // Menghitung jumlah pengguna

        return view('admin.pages.security', [
            'title' => 'Security'
        ], compact('totalPengajuans'));
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}
