@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
{{--Campo Nombres--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}s</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
{{--Campo Apellidos--}}
                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">Apellidos</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control{{ $errors->has('LastName') ? ' is-invalid' : '' }}" name="LastName" value="{{ old('LastName') }}" required autofocus>

                                @if ($errors->has('LastName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
{{--Campo Email--}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
{{--Campo Fecha--}}

                        <div class="form-group row">
                            <label for="DateBirth" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento</label>
                            <div class="col-md-6">
                                <input id="DateBirth" type="date" class="form-control{{ $errors->has('DateBirth') ? ' is-invalid' : '' }}" name="DateBirth" value="{{ old('DateBirth') }}" required>

                                @if ($errors->has('DateBirth'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('DateBirth') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
{{--Campo Zona horaria--}}
                        <div class="form-group row">
                            <label for="DateZone" class="col-md-4 col-form-label text-md-right">Zona Horaria</label>
                            <div class="col-md-6">
                                <select id="DateZone" class="form-control{{ $errors->has('DateZone') ? ' is-invalid' : '' }}" name="DateZone" value="{{ old('DateZone') }}" required>
                                    @for($i = -12;$i <=-1;$i++)
                                        <option value="$i">UTC {{$i}}</option>
                                    @endfor
                                        <option value="0" selected>UTC</option>
                                    @for($i = 1;$i <=14;$i++)
                                        <option value="$i">UTC {{$i}}</option>
                                    @endfor
                                </select>
                                @if ($errors->has('DateZone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('DateZone') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

{{--Campo Contraseña--}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
