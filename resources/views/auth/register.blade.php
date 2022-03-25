@extends('layouts.app')

@section('content')
<div class="container">
    <div id="login-box">
        <div class="logo">
            <img src="{{ asset('checkout/images/logo.png')}}" class="img-responsive center-block" alt="image" />
            <p>Enregistrez-vous gratuitement. </p>
        </div><!-- /.logo -->
        <div class="controls">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" placeholder="Nom" class="form-control margin-bottom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" placeholder="Prénom" class="form-control margin-bottom @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus/>
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="tel" placeholder="N° Téléphone" minlength="10" maxlength="10" class="form-control margin-bottom @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus/>
                @error('telephone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
                <input type="password" placeholder="Confirmer mot de passe" class="form-control margin-bottom @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-default btn-block btn-custom">{{ __('S\'enregistrer') }}</button>
                <div class="login-footer">
                    <a href="{{route('login')}}" title="Vous n'avez pas de compte?" class="pull-left">{{ __('Vous avez déjà un compte? Connectez-vous ici') }}</a>
                </div>
            </form>
        </div>
        <!-- /.controls -->
    </div>
    <!-- /#login-box -->
</div>
<!-- /.container -->
@endsection

