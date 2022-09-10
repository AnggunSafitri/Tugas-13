@extends('template.admin')
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
                        <label for=""> Detail Nama Kategori</label><br>
                        <label for=""> {{$client->nama_kategori}}</label>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection