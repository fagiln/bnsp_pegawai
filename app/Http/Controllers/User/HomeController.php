<?php

namespace App\Http\Controllers\User;

use App\DataTables\pegawai\PegawaiDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pegawai\PegawaiStoreReq;
use App\Http\Requests\Pegawai\PegawaiUpdateReq;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       $totalPegawai = Pegawai::count();
        return view('pegawai.dashboard',compact('totalPegawai'));
    }
    public function list(PegawaiDataTable $dataTable)
    {
        return $dataTable->render('pegawai.home');
    }
    public function store(PegawaiStoreReq $request)
    {
        $data = $request->validated();
        Pegawai::create($data);
        return redirect(route('home'))->with(['status' => 'Tambah Pegawai Berhasil']);
    }
    public function show()
    {
        return view('pegawai.add');
    }
    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }
    public function update(PegawaiUpdateReq $request, string $id)
    {
        $data = $request->validated();
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($data);
        return redirect(route('home'))->with(['status' => 'Update Pegawai Berhasil']);
    }
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return with(['status' => 'Pegawai Berhasil Di Hapus']);
    }
}
