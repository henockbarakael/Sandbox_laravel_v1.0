@extends('layouts.app')

@section('content')
<div class="container">
    <div id="login-box">
        <div class="logo">
            <img src="{{ asset('checkout/images/logo.png')}}" class="img-responsive center-block" alt="image" />
            <p>Réinitialiser votre mot de passe</p>
        </div><!-- /.logo -->
        <div class="controls">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <input type="text" placeholder="Adresse e-mail" class="form-control margin-bottom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-default btn-block btn-custom">{{ __('Envoyer le lien de réinitialisation') }}</button>
            </form>
        </div>
        <!-- /.controls -->
    </div>
    <!-- /#login-box -->
</div>
<!-- /.container -->
@endsection

