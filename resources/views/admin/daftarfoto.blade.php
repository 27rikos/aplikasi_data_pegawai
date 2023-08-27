@extends('partials.admin')
@section('content')

<div class="mx-3 my-3">
   <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1">
    @forelse ($fotos as $item)
    <div class="col mt-3">
      
      <div class="col">
        <div class="d-flex justify-content-center">
            <div class="card mb-3 text-center shadow" style="width: 18rem;height:27rem">
                <div class="card-header">
                   <h6 class="mt-2"> {{ $item->nama }}</h6>
                   <p><small>{{ $item->nip }}</small></p>
                </div>
                <div class="card-body">
                 <img src="{{ asset('storage/pegawai_foto/'.$item->file) }}" alt=".." id="profile" class="rounded-circle" style="width:200px;height:200px"> <hr>
                <div class="mt-3">
                    <h5> {{ $item->jabatan }}</h5>
                    <p>{{ $item->gol }}</p>
                   
                </div>
                </div>
            </div>
        </div>
    </div>

      
    </div>
    @empty
        
    @endforelse
    
   </div>
  </div>
@endsection