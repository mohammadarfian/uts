@extends('.master')
@section('master')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center mt-3">Halaman Review Barang</h1>
        <div class="card mt-5" style="max-width: 1110px;">
            <div class="row g-0">
                <div class="col">
                    <img src="{{asset('assets/'.$review_barang->fotoBarang)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">Nama Barang</div>
                            <div class="col-1">:</div>
                            <div class="col">
                                <h5 class="card-title">{{$review_barang->namaBarang}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">Harga</div>
                            <div class="col-1">:</div>
                            <p class="card-text col-7">Rp. {{$review_barang->harga}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Stock</div>
                            <div class="col-1">:</div>
                            <p class="card-text col-7">{{$review_barang->stok}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Ukuran : </div>
                            <div class="col-1"> : </div>
                            <p class="card-text col-7">{{$review_barang->ukuran}}</p>
                        </div>
                        <div class="row">
                            <div class="col-2">Deskripsi</div>
                            <div class="col-1">:</div>
                            <p class="card-text col">{{$review_barang->reviewBarang}}</p>
                        </div>
                        <p class="card-text"><small class="text-muted">{{$review_barang->tanggalDiPublish}}</small></p>
                        <a href="{{route('daftarBarang.view')}}" class="btn btn-success mb-2" style="float: right;">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection