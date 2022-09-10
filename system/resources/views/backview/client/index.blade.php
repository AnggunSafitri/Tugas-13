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
                                <h3 class="card-title">Data Kategori</h3>
                                <div class="float-right full">

                                    <a href="{{ url('admin/client') }}/create" class="btn btn-dark"><span
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
                                            <th>Nama Client</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_client as $client)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        @if ($client->level == 1)
                                                            <form action="{{ url('admin/konfir-client', $client->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="text" name="confir_password"
                                                                    value="{{ $client->confir_password }}" hidden>
                                                                <button class="btn btn-info"><span
                                                                        class="fa fa-check"></span> Konfirmasi</button>
                                                            </form>
                                                        @endif
                                                        <a href="{{ url("admin/client/$client->id") }}"
                                                            class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                        <a href="{{ url("admin/client/$client->id") }}/edit"
                                                            class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                        @include('template.utils.delete', [
                                                            'url' => url('admin/client', $client->id),
                                                        ])
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $client->nama }}
                                                </td>
                                                <td>
                                                    {{ $client->email }}
                                                </td>
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
