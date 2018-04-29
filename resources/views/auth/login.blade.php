@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="row justify-content-center ">
                <div class="card ">
                    <div class="card-body ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row justify-content-center ">
                                <img src="{{ asset('assets/images/user.png') }}" width="140px;" height="140px;"
                                     style="margin-bottom: 35px;">
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-md-12 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8;"><i class="lni-envelope"
                                                                                   style="font-size: 36px; color:#d9534f;"></i></span>
                                        </div>
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} "
                                               name="email" value="{{ old('email') }}" required style="background-color: #f8f8f8;">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background-color: #f8f8f8;"><i class="lni-lock"
                                                                                   style="font-size: 36px; color:#d9534f;"></i></span>
                                        </div>
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required style="background-color: #f8f8f8;">
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row col-md-12">
                                <div class="col-md-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 justify-content-center">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #D9534F; border-color: #D9534F">
                                        {{ __('Prijavi se') }}
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card col-md-6">
                    <div class="card-body">
                        <div class="col-md-12 row justify-content-center ">
                            <img src="{{ asset('assets/images/loginimg.png') }}" width="370px;" height="370px;"
                                 style="margin-bottom: 35px;">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
