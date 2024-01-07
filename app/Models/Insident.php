<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insident extends Model
{
    use HasFactory;

    protected $fillable = ['nama_website', 'link_website', 'tanggal_kejadian', 'peretas', 'deskripsi'];

    public static function countIncidentsPerMonth($year)
    {
        return static::selectRaw('MONTH(tanggal_kejadian) as month, COUNT(*) as total')
            ->whereYear('tanggal_kejadian', $year)
            ->groupByRaw('MONTH(tanggal_kejadian)')
            ->orderByRaw('MONTH(tanggal_kejadian)')
            ->get();
    }
}
