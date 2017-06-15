@extends('layout.fullscreen')

@section('title', 'Paswoord resetten')

@section('content')
    <div class="container admin-login clearfix">
        <div class="panel panel-default col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3">
            <div class="panel-body">
                <img src="/image/kopje.png" class="img-responsive">
                <h1>Koffie & Commerce <small>Nieuw paswoord aanvragen</small></h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Vul hier je emailadres in" value="{{ $email or old('email')}}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Je nieuwe paswoord">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Herhaal het nieuwe paswoord nogmaals">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">
                            Nieuwe paswoord opslaan
                            </button>
                        </div>
                    </div>
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
