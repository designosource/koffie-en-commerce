@extends('layout.fullscreen')

@section('title', 'Login')

@section('content')
<div class="container admin-login clearfix">
    <div class="panel panel-default col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3">
        <div class="panel-body">
            <img src="/image/kopje.png" class="img-responsive">
            <h1>Koffie & Commerce <small>Login</small></h1>
            <form method="POST" action="/admin/login">
                <div>
                    <input type="email" class="form-control" name="email" id="mail" placeholder="user@mail.be" value="{{ old('email') }}">
                </div>
                <div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password">
                </div>
                <div>
                    <input type="checkbox" name="remember"> Remember Me
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                {!! csrf_field() !!}
            </form>
        </div>
    </div>   
</div>
@if ($errors->has())
    <div class="alert alert-info">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>        
        @endforeach
    </div>
@endif

@endsection