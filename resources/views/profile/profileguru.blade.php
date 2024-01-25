@extends('layout.index')
@section('content')

{{-- <html> --}}
    {{-- <div class="col-md-10 d-flex">
        <div class="col-md-3 mx-5" style="width: 200px; height: 200px; background-image: url('{{ asset("gambar/kesiswaan.jpg") }}')">
        </div>
        <div class="col-md-3 mx-5" style="width: 200px; height: 200px; background-image: url('{{ asset('gambar/ketua_BTS.jpg') }}')">
        </div>
        <div class="col-md-3 mx-5" style="width: 200px; height: 200px; background-image: url('{{ asset('gambar/ketua_osis.jpg') }}')">
        </div>
        <div class="col-md-3 mx-5" style="width: 200px; height: 200px; background-image: url('{{ asset('gambar/kpl_sekolah.jpg') }}')">        
        </div>
    </div> --}}
{{-- </html> --}}

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/ketua_osis.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                <h4 class="text-center">jeno.spd</h4>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/ketua_BTS.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/kesiswaan.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/kpl_sekolah.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/ketua_osis.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/ketua_BTS.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/kesiswaan.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/kpl_sekolah.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                </div>
            </div>
        </div>
</div>

@endsection