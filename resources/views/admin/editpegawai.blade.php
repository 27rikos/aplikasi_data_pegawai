@extends('partials.admin')
@section('content')

<div class="mx-3 my-3">
    <h4 class="mb-3">Tambah Data Pegawai</h4>
    <form  method="POST" action="/dashboard/{{ $data->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">NAMA</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="nama" required value="{{ $data->nama }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">NIP</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="nip" required value="{{ $data->nip }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">GOL</label>
            <div class="col-sm-8">
                <select name="gol" id="" class="form-control">
                    <option value="{{ $data->gol }}">{{ $data->gol }}</option>
                    <option value="I/A">I/A</option>
                    <option value="I/B">I/B</option>
                    <option value="I/C">I/C</option>
                    <option value="I/D">I/D</option>
                    <option value="II/A">II/A</option>
                    <option value="II/B">II/B</option>
                    <option value="II/C">II/C</option>
                    <option value="II/D">II/D</option>
                    <option value="III/A">III/A</option>
                    <option value="III/B">III/B</option>
                    <option value="III/C">III/C</option>
                    <option value="III/D">III/D</option>
                    <option value="IV/A">IV/A</option>
                    <option value="IV/B">IV/B</option>
                    <option value="IV/C">IV/C</option>
                    <option value="IV/D">IV/D</option>
                  </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">JABATAN</label>
            <div class="col-sm-8">
                <input type="text" class="form-control border " name="jabatan" required  value="{{ $data->jabatan }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">PENDIDIKAN</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="pendidikan" required value="{{ $data->pendidikan }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="file" >

              <img src="{{ asset('storage/pegawai_foto/'.$data->file) }}" class="my-3" style="width:100px">
            </div>
          </div>
          <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
  </div>
@endsection