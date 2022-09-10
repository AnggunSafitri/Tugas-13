@extends('template.admin')
@section('base')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Filter
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/produk/filter')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk" value=" {{$nama_produk ?? ""}}">
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Stok</label>
                                    <input type="text" class="form-control" name="stok" value=" {{$stok ?? ""}}">
                                </div>
                                <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Produk</h3>
                            <div class="float-right full">

                                <a href="{{url('admin/produk')}}/create" class="btn btn-dark"><span class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url("admin/produk/$produk->id")}}" class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                <a href="{{url("admin/produk/$produk->id")}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                @include('template.utils.delete', ['url' => url('admin/produk', $produk->id)])
                                            </div>
                                        </td>
                                        <td> {{$produk->nama_produk}} </td>
                                        <td> {{$produk->harga}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection