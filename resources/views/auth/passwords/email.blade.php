@extends('layout.fullscreen')

@section('title', 'Paswoord resetten')

@section('content')
    <div class="container admin-login clearfix">
        <div class="panel panel-default col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3">
            <div class="panel-body">
                <img src="/image/kopje.png" class="img-responsive">
                <h1>Koffie & Commerce <small>Paswoord resetten</small></h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ !empty($errors) && $errors->has('email') ? ' has-error' : '' }}">
                        <div>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Vul hier je emailadres in" value="{{ old('email') }}">
                            @if (!empty($errors) && $errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Paswoord reset aanvragen
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


