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
<div style='margin-left:70px; margin-top:30px;'>
    <span class="h1">R P L - B</span>
</div>

<div style='margin-left:70px; margin-top:15px;'>
    <span class="h6 text-white">SMK NEGERI 1 KOTA BEKASI</span>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                <div class="card-body d-flex justify-content-center">
                    <span class="h4 text-white" style="text-align: center">Mark</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                <div class="card-body d-flex justify-content-center">
                    <span class="h4 text-white" style="text-align: center">Mark</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                <div class="card-body d-flex justify-content-center">
                    <span class="h4 text-white" style="text-align: center">Mark</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-body">
                <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                <div class="card-body d-flex justify-content-center">
                    <span class="h4 text-white" style="text-align: center">Mark</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                    <div class="card-body d-flex justify-content-center">
                        <span class="h4 text-white" style="text-align: center">Mark</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                    <div class="card-body d-flex justify-content-center">
                        <span class="h4 text-white" style="text-align: center">Mark</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                    <div class="card-body d-flex justify-content-center">
                        <span class="h4 text-white" style="text-align: center">Mark</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card-body">
                    <img src="{{ asset('gambar/siswa.jpg') }}" class="card-img-top" alt="Image 1" style="width: 70%; height: 100%; object-fit: cover; border-radius: 20px;">
                    <div class="card-body d-flex justify-content-center">
                        <span class="h4 text-white" style="text-align: center">Mark</span>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection