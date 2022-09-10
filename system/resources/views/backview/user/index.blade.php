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
                            <h3 class="card-title">Data User</h3>
                            <div class="float-right full">

                                <a href="{{url('admin/user/create')}}" class="btn btn-dark"><span class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url("admin/user/$user->id")}}" class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                <a href="{{url("admin/user/$user->id")}}/edit" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                                            </div>
                                        </td>
                                        <td> {{$user->username}}</td>
                                        <td> {{$user->nama}} </td>
                                        <td> {{$user->email}}</td>
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