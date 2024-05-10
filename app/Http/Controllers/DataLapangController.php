<?php

namespace App\Http\Controllers;

use App\Models\DataLapang;
use App\Http\Requests\DataLapangRequest;
use App\Models\Pantais;
use Yajra\DataTables\DataTables;

class DataLapangController extends Controller
{
    /**
     * Menampilkan daftar jenis mangrove.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function json()
     {
        $users = DataLapang::select(['id', 'tahun', 'luasan', 'pantai_id'])
        ->with('pantai:id,nama_pantai') // Load relasi pantai
        ->get();
         $index = 1;
         return DataTables::of($users)
             ->addColumn('DT_RowIndex', function ($data) use (&$index) {
                 return $index++; // Menambahkan nomor urutan baris
             })
             ->addColumn('action', function ($row) {
                 $editUrl = url('/dashboard_admin/lapang/edit/' . $row->id);
                 $deleteUrl = url('/dashboard_admin/lapang/destroy/' . $row->id);
                 return '<button type="button" class="btn btn-primary" onclick="window.location.href=\'' . $editUrl . '\'"><i class="fas fa-edit"></i></button> <button type="button" class="btn btn-danger delete-users" data-url="' . $deleteUrl . '"><i class="fas fa-trash-alt"></i></button>';
             })
             ->toJson();
     }
     

    public function index()
    {
        $dataLapangs = DataLapang::all();
        return view('admin.lapang.index', compact('dataLapangs'));
    }

    /**
     * Menampilkan formulir untuk membuat jenis mangrove baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataPantai = Pantais::pluck('nama_pantai', 'id');
        return view('admin.lapang.create', compact('dataPantai'));
    }


    /**
     * Menyimpan jenis mangrove yang baru dibuat ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataLapangRequest $request)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'luasan' => 'required|numeric',
        ]);

        DataLapang::create([
            'tahun' => $request->tahun,
            'luasan' => $request->luasan,
            'pantai_id' =>$request->pantai_id,
        ]);

        return redirect()->route('admin.lapang')
                         ->with('success', 'Data Laapang created successfully.');
    }

    /**
     * Menampilkan formulir untuk mengedit data lapang.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataLapang = DataLapang::findOrFail($id);
        $dataPantai = Pantais::pluck('nama_pantai', 'id'); // Mengambil daftar pantai untuk dropdown
    
        return view('admin.lapang.edit', compact('dataLapang', 'dataPantai'));
    }

    /**
     * Memperbarui data lapang yang telah ada di dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataLapangRequest $request, $id)
    {
        $request->validate([
            'pantai_id' => 'required',
            'tahun' => 'required',
            'luasan' => 'required'
        ]);
    
        $dataLapang = DataLapang::findOrFail($id);
        $dataLapang->pantai_id = $request->input('pantai_id');
        $dataLapang->tahun = $request->input('tahun');
        $dataLapang->luasan = $request->input('luasan');
        $dataLapang->save();
    
        return redirect()->route('admin.lapang')->with('success', 'Data Lapang berhasil diupdate!');
    }

    /**
     * Menghapus data lapang dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataLapang = DataLapang::findOrFail($id);
        $dataLapang->delete();

        return response()->json(['success' => 'Data Lapang deleted successfully.']);
    }

    public function view($id)
    {
        $dataLapang = DataLapang::findOrFail($id);
        return view('admin.lapang.view', compact('dataLapang'));
    }
}
