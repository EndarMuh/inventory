@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pemasok
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id Pemasok: </b>{{ $pemasok->idPemasok }}</li>
                    <li class="list-group-item"><b>Nama Pemasok: </b>{{ $pemasok->namaPemasok }}</li>
                    <li class="list-group-item"><b>Alamat Pemasok : </b>{{ $pemasok->alamatPemasok }}</li>
                    <li class="list-group-item"><b>No Telepon Pemasok : </b>{{ $pemasok->telpPemasok }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('pemasok.index') }}">Kembali</a>
        </div>
    </div>
</div>
