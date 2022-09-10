@extends('template.penjual')
@section('base')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            Edit Data Produk
                        </div>
                        <!-- form start -->
                        <form action="{{url('admin/produk', $produk->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Warna</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="warna" value="{{$produk->warna}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Stok</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-info">Batal</button>
                                    <button class="btn btn-default float-right">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection