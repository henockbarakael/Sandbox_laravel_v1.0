@extends('layouts.app')

@section('content')
<div class="container">
    <div id="login-box">
        <div class="logo">
            <img src="{{ asset('checkout/images/logo.png')}}" class="img-responsive center-block" alt="image" />
            <p>Welcome | Bienvenue </p>
        </div><!-- /.logo -->
        <div class="controls">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" placeholder="Adresse e-mail" class="form-control margin-bottom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Mot de passe" class="form-control margin-bottom @error('password') is-invalid @enderror" name="password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <button type="submit" class="btn btn-default btn-block btn-custom">{{ __('Connexion') }}</button>
                <div class="login-footer">
                    <a href="{{route('register')}}" title="Do not have an account?" class="pull-left">{{ __('S\'enregistrer') }}</a>
                    @if (Route::has('password.request'))
                    <a href="{{route('password.request')}}" title="Click to recover password" class="pull-right">{{__('Mot de passe oublié?')}}</a>
                    @endif
                </div>
            </form>
        </div>
        <!-- /.controls -->
    </div>
    <!-- /#login-box -->
</div>
<!-- /.container -->
@endsection
