<?php

namespace App\Http\Controllers;

use App\Models\Pantais;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class PantaiStakeholderController extends Controller
{
    public function json()
    {
        $pantais = Pantais::select(['id', 'nama_pantai', 'lokasi_pantai', 'longitude', 'latitude'])
             ->get();
        $index = 1;
        return DataTables::of($pantais)
            ->addColumn('DT_RowIndex', function ($data) use (&$index) {
                return $index++; // Menambahkan nomor urutan baris
            })
            ->toJson();
    }
    public function index(){
        return view('stakeholder.pantai.index');
    }
}
