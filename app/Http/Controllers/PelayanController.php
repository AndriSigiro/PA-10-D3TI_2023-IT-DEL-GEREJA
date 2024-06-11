<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\pelayan;
use Carbon\carbon;

class PelayanController extends Controller
{

    public function index(){
        $data = pelayan::all();
        return view('admin.pelayan',compact('data'));
    } 
    public function tambahpelayan(){
        return view('admin.tambahpelayan');
    }
   public function insertpelayan(Request $request)
{ 
    // Validasi input
    $validated = $request->validate([
        'nama' =>'required|max:255',
        'jabatan' =>'required',
        'photo' =>  'required|mimes:jpg,jpeg,png',
        'date'=>'required'
    ]);

    // Menyimpan foto ke dalam direktori yang ditentukan
            $lokasi ='image/pelayan/';
            $photo = $request->file('photo');
            $img_ext = strtolower($photo->getClientOriginalExtension());
            $img_name = hexdec(uniqid()) . '.' . $img_ext;
            $photo->move(public_path($lokasi), $img_name);

    try {
        // Memasukkan data pelayan ke dalam database
        $pelayan = new Pelayan();
        $pelayan->nama = $request->nama;
        $pelayan->photo = $lokasi.$img_name;
        $pelayan->date = $request->date;
        $pelayan->jabatan = $request->jabatan;
        $pelayan->save();
        
        return redirect()->route('pelayan')->with('success', 'Data berhasil dimasukkan ke tabel Pelayan');
    } catch (\Exception $e) {
        // Jika terjadi kesalahan, tangani dengan menampilkan pesan error
        return redirect()->back()->with('error', 'Gagal menyimpan data pelayan: ' . $e->getMessage());
    }
}


    
    public function tampilkanpelayan($id){
        $data = pelayan::find($id);
        return view('admin.tampilpelayan',compact('data')); 

    }

    public function editpelayan(Request $request, $id){
        // Validasi input
        $validated= $request->validate([
            'nama' =>'required|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048', // Ubah validasi sesuai kebutuhan Anda
        ]);
    
        try {
            $pelayan = pelayan::find($id);
            $pelayan->nama = $request->nama;
    
            // Update gambar jika ada yang diunggah
            if ($request->hasFile('photo')) {
                $gambar = $request->file('photo');
                $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
                $lokasi = 'image/pelayan/';
                $gambar->move(public_path($lokasi), $nama_gambar);
                $pelayan->photo = $lokasi . $nama_gambar;
            }
    
            $pelayan->save();
    
            return redirect()->route('pelayan')->with('success','Data berhasil diupdate');
        } catch (\Exception $e) {
            // Tangani kesalahan dengan menampilkan pesan error
            return redirect()->back()->with('error', 'Gagal memperbarui data pelayan: ' . $e->getMessage());
        }
    }
    public function deletepelayan($id){
        $data = pelayan::find($id);
        $data ->delete();
        return redirect()->route('pelayan')->with('success','Data Berhasil dihapus'); 
    }

    public function indexx(){
        $data = pelayan::all();
        return view('welcome2', compact('data'));
    }
}
