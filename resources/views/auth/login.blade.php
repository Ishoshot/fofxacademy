@extends('layouts.app')

@section('content')
            <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                            <div class="login100-form-title" style="background-image: url(assets/images/fofxII.jpg);">
                                <span class="login100-form-title-1">
                                </span>
                            </div>

                            <form class="login100-form mt-3" method="POST" action="{{ route('login') }}">
                                    @csrf

                                <div class="wrap-input100 m-b-26">
                                    <span class="label-input100">Username</span>
                                    <input id="username" type="username" class="input100 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" autofocus""  placeholder="Enter Username">
                                </div>

                                <div class="">
                                    @error('username')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="wrap-input100 m-b-18 mt-4">
                                    <span class="label-input100">Password</span>
                                    <input id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password"  autocomplete="current-password"   placeholder="Enter password">
                                </div>

                                <div class="">
                                    @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mt-4 mb-4">
                                        <div class="contact100-form-checkbox">
                                            <input class="form-control input-checkbox100"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="label-checkbox100" for="remember">
                                                    {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                </div>

                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
