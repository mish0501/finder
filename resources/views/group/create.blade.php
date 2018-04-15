@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create group') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('groups.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Group name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info" class="col-sm-4 col-form-label text-md-right">{{ __('Group information') }}</label>

                            <div class="col-md-6">
                                <input id="info" type="text" class="form-control{{ $errors->has('info') ? ' is-invalid' : '' }}" name="info" value="{{ old('info') }}" required autofocus>

                                @if ($errors->has('info'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('info') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="conditions" class="col-sm-4 col-form-label text-md-right">{{ __('Group conditions') }}</label>

                            <div class="col-md-6">
                                <input id="conditions" type="text" class="form-control{{ $errors->has('conditions') ? ' is-invalid' : '' }}" name="conditions" value="{{ old('conditions') }}" required autofocus>

                                @if ($errors->has('conditions'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('conditions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contacts" class="col-sm-4 col-form-label text-md-right">{{ __('Group contacts') }}</label>

                            <div class="col-md-6">
                                <input id="contacts" type="text" class="form-control{{ $errors->has('contacts') ? ' is-invalid' : '' }}" name="contacts" value="{{ old('contacts') }}" required autofocus>

                                @if ($errors->has('contacts'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contacts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create group') }}
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
