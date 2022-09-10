@extends('template.penjual')
@section('base')
<br>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>{{ $produk->nama_produk }}</td>
                                </tr>

                                <tr>
                                    <td>Nama Penjual</td>
                                    <td>{{ $produk->penjual->nama }}</td>
                                </tr>

                                <tr>
                                    <td>Nama Toko</td>
                                    <td>{{ $produk->penjual->nama_toko }}</td>
                                </tr>

                                <tr>
                                    <td>Jenis Kategori</td>
                                    <td>{{ $produk->kategori->nama_kategori }}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection