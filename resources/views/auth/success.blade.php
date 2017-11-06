@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              @if(session('status'))
                {{session('status')}}
              @endif
                <div class="panel-heading">Registrasi Berhasil</div>

                <div class="panel-body">
                <h1>Registrasi Berhasil, Silahkan Login <a href="{{route('login')}}">Login</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
