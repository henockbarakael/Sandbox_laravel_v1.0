@extends('layouts.app')

@section('content')
<div class="container">
    <div id="login-box">
        <div class="logo">
            <img src="img/users/user4.jpg" class="img-responsive lock-screen-img center-block" alt="image" />
            <h1 class="logo-caption"><span class="tweak">Jasmine</span> Carlos</h1>
            <p>Réinitialiser mot de passe</p>
        </div><!-- /.logo -->
        <div class="controls">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="text" placeholder="Adresse e-mail" class="form-control margin-bottom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Mot de passe" class="form-control margin-bottom @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Confirmer le mot de passe" class="form-control margin-bottom @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-default btn-block btn-custom">{{ __('Réinitialiser mot de passe') }}</button>
            </form>
        </div>
        <!-- /.controls -->
    </div>
    <!-- /#login-box -->
</div>
<!-- /.container -->
@endsection
