<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\home;
use Carbon\carbon;

class HomeController extends Controller
{

    public function index(){
        $data = home::all();
        return view('admin.home',compact('data'));
    } 
    public function tambahberita(){
        return view('admin.tambahberita');
    }
    public function insertberita(Request $request)
{ 
    $today = Carbon::today()->toDateString();
    $messages =[
        'tanggal.before_or_equal'=>'Tanggal tidak boleh melewati tanggal hari ini.',
    ];
    $validated = $request->validate([
        'judul' =>'required|max:255',
        'gambar' =>  'required|mimes:jpg,jpeg,png',
        'date'=>'required|date|before_or_equal:' . $today,
        'keterangan' =>'max:200'
    ],$messages);

    $gambar = $request->file('gambar');
    $tanggal = $request->date;
    $name_gen = hexdec(uniqid());
    $img_ext = strtolower($gambar->getClientOriginalExtension());
    $img_name = $name_gen.'.'.$img_ext;
    $lokasi ='image/gambar/';
    $image = $lokasi.$img_name;
    $gambar->move($lokasi,$img_name);

    Home::insert([
        'judul' => $request->judul,
        'gambar' => $image,
        'date' => $tanggal,
        'keterangan' => $request->keterangan,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    return redirect()->route('home')->with('success','Data berhasil dimasukkan ke tabel Home');
}

    
    public function tampilkanberita($id){
        $data = Home::find($id);
        return view('admin.tampilberita',compact('data')); 

    }

    
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
 


    public function edit($id, Request $request)
    {
        // Ambil data dari database berdasarkan id
        $data = home::findOrFail($id);
    
        // Jika data tidak ditemukan, tampilkan 404 error
        if (!$data) {
            abort(404);
        }
    
        // Jika form di-submit, proses update data
        if ($request->isMethod('post')) {
            // Validasi input
            $request->validate([
                'judul' => 'required|max:255',
                'keterangan' => 'required',
            ]);
    
            // Update data
            $data->judul = $request->judul;
            $data->keterangan = $request->keterangan;
            $data->save();
    
            // Redirect ke halaman detail data
            return redirect()->route('home', $data->id)->with('success', 'Data berhasil diupdate');
        }
    
        // Tampilkan view untuk form edit
        return view('admin.tampilberita', compact('data'));
    }

    public function deleteberita($id){
        $data = home::find($id);
        $data ->delete();
        return redirect()->route('home')->with('success','Data Berhasil dihapus'); 
    }
    public function indexx()
    {
        // Ambil 6 data terbaru
        $latestHome = home::latest()->take(6)->get();

        // Jika jumlah data melebihi 6, hapus data yang terlama
        if ($latestHome->count() > 6) {
            $oldestHome = Berita::oldest()->first();
            $oldestHome->delete();
        }

        // Ambil kembali 5 data terbaru setelah mungkin menghapus data terlama
        $allHome =home::latest()->take(6)->get();
    
        return view('home', compact('allHome'));
 }
}

