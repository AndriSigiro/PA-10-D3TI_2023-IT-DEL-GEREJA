<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;
use Carbon\Carbon;

class KeuanganController extends Controller
{
    public function index(){
        $pengeluaran = keuangan::sum('pemasukan');
        $pemasukan = keuangan::sum('pengeluaran');
        $saldo = $pengeluaran - $pemasukan;
        $data = keuangan::all();
        return view('admin.keuangan',compact('data','saldo','pemasukan','pengeluaran' ));
    }
    public function tambahkeuangan(){
        return view('admin.tambahkeuangan');
    }
    public function insertkeuangan(Request $request){
        Keuangan::create($request->all());
       return redirect()->route('keuangan')->with('success','Data berhasil di tambahkan');
    }
    public function tampilkankeuangan($id){
        $data =keuangan::find($id);
        return view('admin.tampilkeuangan',compact('data'));
    }
    public function updatekeuangan(Request $request, $id){
        $data =keuangan::find($id);
        $data->update($request->all());
        return redirect()->route('keuangan')->with('success','Data berhasil di update');
    }
    public function deletekeuangan(Request $request, $id){
        $data =keuangan::find($id);
        $data->delete();
        return redirect()->route('keuangan')->with('success','Data berhasil di Hapus');
    }
    
    public function indexx(Request $request)
{
    // Dapatkan bulan dari parameter URL (jika ada), jika tidak atur ke bulan saat ini
    $bulan_sekarang = $request->query('bulan', Carbon::now()->month);

    // Dapatkan data untuk bulan yang dipilih dari model Anda
    $data = keuangan::whereMonth('tanggal', $bulan_sekarang)->get();

    // Hitung total pemasukan dan pengeluaran untuk bulan yang dipilih
    $pengeluaran = keuangan::whereMonth('tanggal', $bulan_sekarang)->sum('pengeluaran');
    $pemasukan = keuangan::whereMonth('tanggal', $bulan_sekarang)->sum('pemasukan');
    
    // Hitung saldo untuk bulan yang dipilih
    $saldo = $pemasukan - $pengeluaran;

    // Kirim variabel $bulan_sekarang ke tampilan
    return view('user.keuangan', compact('data', 'saldo', 'pemasukan', 'pengeluaran', 'bulan_sekarang'));
}

}