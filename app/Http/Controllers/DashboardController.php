<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DashboardController extends Controller
{
    public function dashboard(){
        $datas=Pegawai::latest()->paginate()->all();
        return view('admin.dashboard',compact(['datas']));
    }
    public function create(){
        return view('admin.tambahpegawai');
    }
    public function store( Request $request){
        
        $request->validate([
        'nama'=>'required',
        'nip'=>'required|unique:pegawais',
        'gol'=>'required',
        'jabatan'=>'required',
        'pendidikan'=>'required',
        'file'=>'mimes:jpeg,jpg,png|max:2048',
        ]);
         //upload image:
         $foto=$request->file('file');
         $foto->storeAs('public/pegawai_foto',$foto->hashName());

         Pegawai::create([
            'nama'=>$request->nama,
            'nip'=>$request->nip,
            'gol'=>$request->gol,
            'jabatan'=>$request->jabatan,
            'pendidikan'=>$request->pendidikan,
            'file'=>$foto->hashName()
         ]);
         return redirect('/dashboard')->with('success','Data Berhasil Ditambahkan');


    }
    public function edit($id){
        $data=Pegawai::where('id',$id)->first();
        return view('admin.editpegawai',compact('data'));
    }

    public function update(Request $request,$id){

        $data=Pegawai::where('id',$id)->first();
        $request->validate([
        'nama'=>'required',
        'nip'=>'required',Rule::unique('pegawais')->ignore('pegawais'),
        'gol'=>'required',
        'jabatan'=>'required',
        'pendidikan'=>'required',
        'file'=>'mimes:jpeg,jpg,png|max:2048',
        ]);

        if($request->hasFile('file')){
            //upload foto baru
            $foto=$request->file('file');
            $foto->storeAs('public/pegawai_foto',$foto->hashName());

            //hapus foto lama
            Storage::disk('public')->delete('pegawau_foto/'.$data['file']);

            //update 
            $data->update([
                'nama'=>$request->nama,
            'nip'=>$request->nip,
            'gol'=>$request->gol,
            'jabatan'=>$request->jabatan,
            'pendidikan'=>$request->pendidikan,
            'file'=>$foto->hashName()
            ]);
        }else{
            $data->update([
                'nama'=>$request->nama,
                'nip'=>$request->nip,
                'gol'=>$request->gol,
                'jabatan'=>$request->jabatan,
                'pendidikan'=>$request->pendidikan,
            ]);
        }
        return redirect('/dashboard')->with('success','Data Berhasil Diubah');
    }
    public function destroy($id){
        $alumni=Pegawai::where('id',$id)->first();
        Storage::disk('public')->delete('pegawai_foto/'.$alumni['file']);
        $alumni->delete();
        return redirect('/dashboard')->with('success','Data Berhasil Dihapus');
    }
}