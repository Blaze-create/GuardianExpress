@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="background: var(--text);">
        <div class="login-wrapper">
            <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-header">
                        <div class="form-logo">
                            <i class="fa-solid fa-icons fa-2x"></i>
                            <div class="website-name">
                                GuardianExpress
                            </div>
                        </div>
                        <div class="form-slogan">
                            Your Guardians Angel
                        </div>
                    </div>
                    <div class="social-login">
                        <div class="socialite">
                            <a href="{{ route('google-auth') }}" class="socialite-btn socialite-google">
                                <i class="fa-brands fa-google"></i>
                                Google
                            </a>
                            <a href="#" class="socialite-btn socialite-facebook disabled">
                                <i class="fa-brands fa-facebook"></i>
                                Facebook
                            </a>
                        </div>
                        <div class="divider">
                            or use email
                        </div>
                    </div>


                    <div class="input-grp @error('name') invalid @enderror">
                        <label for="email">Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>
                        @error('name')
                            <div class="input-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>


                    <div class="input-grp @error('email') invalid @enderror">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <div class="input-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="input-grp @error('password') invalid @enderror">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <div class="input-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>




                    <div class="input-grp">
                        <label for="password">Confirm Password</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required
                            autocomplete="new-password">
                        <div class="input-feedback">
                        </div>
                    </div>




                    <div class="checkbtn-grp">
                        <div class="checkbtn">
                            <input type="checkbox" id="rememberCheck">
                            <label for="rememberCheck">Remember this Device</label>
                        </div>
                        <!-- <div class="form-link">
                                <a href="#">Forgot Password?</a>
                            </div> -->
                    </div>
                    <div class="submit-grp">
                        <button type="submit">Register</button>
                    </div>
                    <div class="form-create">
                        Already have an account? <a href="{{ route('login') }}">sign in</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
