<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\video;
use Carbon\carbon;

class videoController extends Controller
{

    public function index(){
        $data = video::all();
        return view('admin.video',compact('data'));
    } 
    public function tambahvideo(){
        return view('admin.tambahvideo');
    }
    public function insertvideo(Request $request)
    { 
        // Validasi input
        $validated = $request->validate([
            'judul' =>'required|max:255',
            'link' =>'required',
            'gambar' =>  'mimes:jpg,jpeg,png',
            'keterangan'=>'required'
        ]);
    
        try {
            // Menyimpan foto ke dalam direktori yang ditentukan
            $lokasi ='image/video/';
            $photo = $request->file('gambar');
            $img_ext = strtolower($photo->getClientOriginalExtension());
            $img_name = hexdec(uniqid()) . '.' . $img_ext;
            $photo->move(public_path($lokasi), $img_name);
    
            // Memasukkan data video ke dalam database
            $video = new Video();
            $video->judul = $request->judul;
            $video->link = $request->link;
            $video->tanggal = $request ->tanggal;
            $video->gambar = $lokasi.$img_name; // Menyimpan path gambar ke dalam database
            $video->keterangan = $request->keterangan;
            $video->save();
    
            return redirect()->route('video')->with('success', 'Data berhasil dimasukkan ke tabel Video');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, tangani dengan menampilkan pesan error
            return redirect()->back()->with('error', 'Gagal menyimpan data video: ' . $e->getMessage());
        }
    }
    

    
    public function tampilkanvideo($id){
        $data = video::find($id);
        return view('admin.tampilvideo',compact('data')); 

    }


    public function editvideo($id, Request $request)
{
    // Ambil data dari database berdasarkan id
    $data = video::findOrFail($id);

    // Jika data tidak ditemukan, tampilkan 404 error
    if (!$data) {
        abort(404);
    }

    // Jika form di-submit, proses update data
    if ($request->isMethod('post')) {
        // Validasi input
        $request->validate([
            'judul' => 'required|max:255',
            'link' => 'required',
        ]);

        // Update data
        $data->judul = $request->judul;
        $data->link = $request->link;
        $data->save();

        // Redirect ke halaman detail data
        return redirect()->route('video', $data->id)->with('success', 'Data berhasil diupdate');
    }

    // Tampilkan view untuk form edit dengan data yang akan diubah
    return view('tampilvideo', compact('data'));
}


    public function deletevideo($id){
        $data = video::find($id);
        $data ->delete();
        return redirect()->route('video')->with('success','Data Berhasil dihapus'); 
    }
}