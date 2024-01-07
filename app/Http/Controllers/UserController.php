<?php

namespace App\Http\Controllers;

use App\Models\Insident;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use App\Models\User;
use Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalPengajuans = Pengajuan::count(); // Menghitung jumlah pengguna
        $users = User::all();
        return view('admin.pages.users', [
            'title' => 'Pengguna'
        ], compact('users', 'totalPengajuans'));
    }
}
