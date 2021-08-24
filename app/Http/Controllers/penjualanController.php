<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjualanModel;

class penjualanController extends Controller
{
    public function penjualan()
    {
        return view('kd_penjualan.kd_penjualan',[
            "title" => "Kelola Data Penjualan",
            "name" => "Gredo Tarigan",
            "judul_konten" => "Data Penjualan",
            "data_penjualan" => penjualanModel::all()
        ]);
    }

    public function editDataPenjualan(penjualanModel $penjualan_slug)
    {
        return view('kd_penjualan.edit_penjualan', [
            "title" => "Edit Data Penjualan",
            "name" => "Gredo Jack",
            "judul_konten" => "Data Penjualan",
           "penjualan" => $penjualan_slug
        ]);
    }
}
