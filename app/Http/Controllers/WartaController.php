<?php

namespace App\Http\Controllers;

use App\Models\warta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WartaController extends Controller
{   
    public function index()
    {
            $data = warta::latest()->paginate(5);
            return view('admin.wartajemaat',compact('data'));
        
    }
public function tambahwarta(){
        return view('admin.tambahwarta');
    }

    public function insertwarta(Request $request){
        // Validasi input
        $validated = $request->validate([
            'judul' =>'required|unique:wartas|max:30',
            'keterangan' =>'max:200',
            'tanggal' =>'required',
            'file' => 'required|mimes:pdf|max:2048', // Batas ukuran file PDF adalah 2048 KB (2MB)
        ],
        [
            'judul.required' =>'Judul tidak boleh kosong',
            'judul.max' => 'Maksimal 30 karakter',
            'keterangan.max'=> 'Keterangan maksimal 200 karakter',
            'tanggal.required' => 'Tanggal tidak boleh kosong', 
            'file.required' => 'File PDF tidak boleh kosong',
            'file.mimes' => 'File PDF hanya dapat berformat PDF',
            'file.max' => 'Ukuran file PDF tidak boleh lebih dari 2MB',   
        ]);
    
        // Mengunggah file PDF
        if($request->hasFile('file')) {
            $pdf_file = $request->file('file');
            $pdf_name_gen = hexdec(uniqid());
            $pdf_ext = strtolower($pdf_file->getClientOriginalExtension());
            $pdf_name = $pdf_name_gen.'.'.$pdf_ext;
            $pdf_lokasi ='pdf/warta/';
            $pdf_path = $pdf_lokasi.$pdf_name;
            $pdf_file->move($pdf_lokasi,$pdf_name);
        } else {
            return redirect()->back()->with('error','File PDF tidak ditemukan');
        }
    
        // Memasukkan data ke database
        warta::insert([
            'judul' =>  $request->judul,
            'keterangan' => $request->keterangan,
            'file' => $pdf_path,
            'tanggal' => $request->tanggal,
            'created_at' => Carbon::now()
        ]);
    
        return redirect()->route('wartajemaat')->with('success','Data berhasil dimasukkan');
    }    


    public function tampilkanwarta($id){
        $data = warta::find($id);
        return view('admin.tampilwarta',compact('data')); 

    }
    
    public function updatewarta(Request $request, $id){

        // Validasi input
        $validated = $request->validate([
            'judul' =>'required|unique:wartas,judul,'.$id.',id|max:30',
            'keterangan' =>'max:200',
        ], 
        [
            'judul.required' =>'Judul tidak boleh kosong',
            'judul.unique' => 'Judul sudah ada, harap pilih judul yang lain',
            'judul.max' => 'Maksimal 30 karakter',
            'keterangan.max'=> 'Keterangan maksimal 200 karakter',  
        ]);
    
        // Temukan data warta yang akan diperbarui
        $warta = Warta::find($id);
        if (!$warta) {
            return redirect()->route('wartajemaat')->with('error', 'Data tidak ditemukan');
        }
    
        // Update data warta tanpa mengubah file
        $warta->update([
            'judul' =>  $request->judul,
            'keterangan' => $request->keterangan,
            'tanggal' =>$request->tanggal,
            'created_at' => Carbon::now()
        ]);
    
        return redirect()->route('wartajemaat')->with('success','Data berhasil diupdate');
    }
    
    
    public function deletewarta($id){
        Warta::find($id)->delete();
        return redirect()->route('wartajemaat')->with('success','Data berhasil dihapus');
    }
 
      
    public function indexx()
    {
            $data = warta::latest()->paginate(6);
            return view('user.wartajemaat',compact('data'));
        
    }
}