<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang as ModelsBarang;

class BarangController extends Controller
{
   public function daftarBarang()
    {
        $data = [
            'barang' => ModelsBarang::all()
        ];
        return view('daftarBarang', $data);
    }
    public function reviewBarang($id)
    {
        $review_barang = ModelsBarang::Find($id);
        return view('review_barang', compact('review_barang'));
    }
};
