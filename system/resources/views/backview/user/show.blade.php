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
                            Detail Data User
                        </div>
                        <div class="card-body">
                            <h3>{{$user->nama}}</h3>
                            <hr>
                            <p>
                                {{$user->username}} |
                                Email : {{$user->email}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>


@endsection