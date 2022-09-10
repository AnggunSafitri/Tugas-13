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
                                <h3 class="card-title">Data Penjual</h3>
                                <div class="float-right full">

                                    <a href="{{ url('admin/penjual') }}/create" class="btn btn-dark"><span
                                            class="fa fa-plus"></span> Tambah Data</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Nama Penjual</th>
                                            <th>Nama Toko</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_penjual as $penjual)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        @if ($penjual->level == 1)
                                                            <form action="{{ url('admin/konfir-penjual', $penjual->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="text" name="confir_password"
                                                                    value="{{ $penjual->confir_password }}" hidden>
                                                                <button class="btn btn-info"><span
                                                                        class="fa fa-check"></span> Konfirmasi</button>
                                                            </form>
                                                        @endif

                                                        <a href="{{ url("admin/penjual/$penjual->id") }}"
                                                            class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                        <a href="{{ url("admin/penjual/$penjual->id") }}/edit"
                                                            class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                        @include('template.utils.delete', [
                                                            'url' => url('admin/penjual', $penjual->id),
                                                        ])
                                                    </div>
                                                </td>
                                                <td>{{ $penjual->nama }}</td>
                                                <td>{{ $penjual->nama_toko }}</td>
                                                <td>{{ $penjual->email }}</td>
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
