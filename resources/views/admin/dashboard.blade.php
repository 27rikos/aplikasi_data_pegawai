@extends('partials.admin')
@section('content')

<div class="row  mb-3">
    <div class="col">
         <a href="dashboard/create" class="btn text-light" style="background-color: #0A6EBD">Tambah Data Pegawai</a>
    </div>
</div>
<div class="card">
    <div class="mx-3 my-4">
        <table class="table"  id="data" class="display "  style="width:100%" >
            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>NIP</th>
                    <th>GOL</th>
                    <th>JABATAN</th>
                    <th>PENDIDIKAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($datas as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->gol}}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->pendidikan }}</td>
                        <td class="d-flex">
                            <button type="button" class="btn btn-info me-2" data-bs-toggle="modal" data-bs-target="#detail{{ $item->id }}">
                                <i class="bi bi-eye fa-lg" style="color:#F0F0F0"></i>
                                </button>
                               <!-- Detail Data -->
                                      <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data Alumni</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row-lg-12">
                                                  <div class="col">
                                                      <div class="row">
                                                          <div class="col mb-3 text-center me-2 mt-5">
                                                              <img src="{{ asset('storage/pegawai_foto/'.$item->file) }}" alt=".." id="profile" style="width:300px; height:300px">
                                                          </div>
                                                          <div class="col ">
                                                          <table class="table table-stripped">
                                                              <tr>
                                                                  <th>NIP</th>
                                                                  <td>:</td>
                                                                  <td>{{ $item->nama}}</td>
                                                              </tr>
                                                              <tr>
                                                                  <th>NAMA</th>
                                                                    <td>:</td>
                                                                  <td>{{ $item->nip }}</td>
                                                              </tr>
                                                              <tr>
                                                                  <th>STAMBUK</th>
                                                                    <td>:</td>
                                                                  <td>{{ $item->gol }}</td>
                                                              </tr>
                                                              <tr>
                                                                  <th>PEMINATAN</th>
                                                                    <td>:</td>
                                                                  <td>{{ $item->jabatan }}</td>
                                                              </tr>
                                                              <tr>
                                                                  <th>PROGRAM STUDI</th>
                                                                    <td>:</td>
                                                                  <td>{{ $item->pendidikan }}</td>
                                                              </tr> 
                                                          </table>          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                            <a href="/dashboard/{{ $item->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                            <form action="/dashboard/{{ $item->id }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash3 fa-lg"></i></button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>

    new DataTable('#data', {
        scrollX: true
    
        
    });
     </script>
@endsection