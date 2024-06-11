<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datajemaat;
use App\Models\datakeluarga;
use App\Models\keuangan;
use App\Models\pelayan;
use App\Models\video;
use App\Models\galeri;
use App\Models\jadwalibadah;
use Carbon\carbon;


class DatajemaatController extends Controller
{
    public function index(){
        $data = datajemaat::paginate(10);
        return view('admin.datajemaat', compact('data'));
    }
    public function tambahjemaat(){ 
        return view('admin.tambahjemaat');
    }
    public function insertdata(Request $request)
{
    $validate = [
        'namakeluarga' => 'required',
        'namaayah' => 'required',
        'namaibu' => 'required',
        'sektor' => 'required',
        'alamat' => 'required',
        'namaanak' => 'required|array',
        'namaanak.*' => 'required|string',
    ];

    $message = [
        'namakeluarga.required' => 'Nama Keluarga Harus Diisi',
        'namaayah.required' => 'Nama Ayah Harus Diisi',
        'namaibu.required' => 'Nama Ibu Harus Diisi',
        'sektor.required' => 'Sektor Harus Diisi',
        'alamat.required' => 'Alamat Harus Diisi',
        'namaanak.required' => 'Nama Anak Harus Diisi',
        'namaanak.*.required' => 'Nama Anak Harus Diisi',
    ];

    $this->validate($request, $validate, $message);

    $newDatajemaat = new datajemaat;
    $newDatajemaat->namakeluarga = $request->namakeluarga;
    $newDatajemaat->sektor = $request->sektor;
    $newDatajemaat->alamat = $request->alamat; 
    $newDatajemaat->save();

    $numAnak = count($request->namaanak);

    for ($i = 0; $i < $numAnak; $i++) {
        $newDatakeluarga = new datakeluarga;
        $newDatakeluarga->datajemaat_id = $newDatajemaat->id;
        $newDatakeluarga->namaayah = $request->namaayah;
        $newDatakeluarga->namaibu = $request->namaibu;
        $newDatakeluarga->namaanak = $request->namaanak[$i];
        $newDatakeluarga->save();
    }
    return redirect()->route('datajemaat')->with('success', 'Data Berhasil ditambahkan'); 
}
public function tampilkandata($id)
{
    $keluarga = datakeluarga::where('datajemaat_id', $id)->get();
    $jemaat = datajemaat::find($id);
    return view('admin.tampildata', compact('keluarga', 'jemaat'));
}

    public function show($id)
{
    $keluarga = datakeluarga::where('datajemaat_id', $id)->get();
    $jemaat = datajemaat::find($id);
    if (!$jemaat) {
        return redirect()->route('datajemaat')->with('error', 'Data tidak ditemukan');
    }
    return view('admin.viewdatajemaat', compact('keluarga', 'jemaat'));
}
public function showw($id){
    $keluarga = datakeluarga::where('datajemaat_id', $id)->get();
    $jemaat = datajemaat::find($id);

    return view('user.viewdatajemaat', compact('keluarga', 'jemaat'));
}
public function edit($id) {
    $jemaat = datajemaat::with('keluarga')->find($id);

    if (!$jemaat) {
        return redirect()->route('datajemaat')->with('error', 'Data tidak ditemukan');
    }

    $keluarga = $jemaat->keluarga ?? collect();

    return view('editjemaat', compact('jemaat', 'keluarga'));
}
public function updatedata(Request $request, $id) {
    // Validasi input
    $validate = [
        'namakeluarga' => 'required',
        'sektor' => 'required',
        'alamat' => 'required',
        'namaayah' => 'required',
        'namaibu' => 'required', // Pastikan namaibu diisi
        'namaanak' => 'required|array',
        'namaanak.*' => 'required|string',
    ];

    $message = [
        'namakeluarga.required' => 'Nama Keluarga Harus Diisi',
        'sektor.required' => 'Sektor Harus Diisi',
        'alamat.required' => 'Alamat Harus Diisi',
        'namaayah.required' => 'Nama Ayah Harus Diisi',
        'namaibu.required' => 'Nama Ibu Harus Diisi',
        'namaanak.required' => 'Nama Anak Harus Diisi',
        'namaanak.*.required' => 'Nama Anak Harus Diisi',
    ];

    $this->validate($request, $validate, $message);

    // Temukan data jemaat yang akan diperbarui
    $jemaat = datajemaat::find($id);
    if (!$jemaat) {
        return redirect()->route('datajemaat')->with('error', 'Data tidak ditemukan');
    }

    // Perbarui data jemaat
    $jemaat->update([
        'namakeluarga' => $request->namakeluarga,
        'sektor' => $request->sektor,
        'alamat' => $request->alamat,
    ]);

    // Hapus data keluarga lama
    datakeluarga::where('datajemaat_id', $id)->delete();

    // Simpan data keluarga baru
    foreach ($request->namaanak as $index => $namaanak) {
        datakeluarga::create([
            'datajemaat_id' => $jemaat->id,
            'namaayah' => $request->namaayah,
            'namaibu' => $request->namaibu,
            'namaanak' => $namaanak,
            'sektor' => $request->sektor, // Tambahkan nilai sektor
            'alamat' => $request->alamat, // Tambahkan nilai alamat
        ]);
    }

    return redirect()->route('datajemaat')->with('success', 'Data Berhasil diupdate');
}

    public function deletedata($id){
        $data = datajemaat::find($id);
        $data ->delete();
        return redirect()->route('datajemaat')->with('success','Data Berhasil dihapus'); 
    }
    public function indexx(){
        $data = datajemaat::all();
        return view('user.datajemaat', compact('data'));
    }
    public function other(){
    $totalJemaat = $this->getTotalJemaat();
    $totalPelayan = $this->getTotalPelayan();
    $pengeluaran = keuangan::sum('pemasukan');
    $pemasukan = keuangan::sum('pengeluaran');
    $saldo = $pengeluaran - $pemasukan;
    $dataKeuangan = keuangan::all();
    $dataPelayan = pelayan::all();
    $dataVideo = video::latest()->take(3)->get();
    $dataGaleri = galeri::latest()->take(4)->get();
    $dataKhotbah = jadwalibadah::latest()->take(1)->pluck('ayatalkitab')->first();
    return view('welcome2', compact('totalJemaat', 'saldo', 'dataKeuangan', 'dataPelayan', 'dataVideo', 'dataGaleri','totalPelayan', 'dataKhotbah'));
}
    private function getTotalJemaat(){
        return datajemaat::count();
    }
    private function getTotalPelayan(){
        return pelayan::count();
    }

}