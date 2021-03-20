@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @section('content')
                    <div class="container" >
                    <div class="row justify-content-center" >
                    <div class="col-md-8" >
                    
                    <div class="card" style="background-color: #B0C249;">
                        <div class="card-header text-center">{{ __('Active Your License') }}</div>
                            <div class="card-body">
                            <h6 class="text-center">Enter Your License</h6>
                            <form method="POST" action="{{ route('active-key') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="lincense_key" class="col-md-4 col-form-label text-md-right">{{ __('License Key') }}</label>

                                    <div class="col-md-6">
                                        <input id="lincense_key" type="text" class="form-control @error('lincense_key') is-invalid @enderror" name="lincense_key" value="{{ old('lincense_key') }}" required>

                                        @error('lincense_key')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-5 float-right mr-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                          <div class="text-center mt-5">
                                <div class="col-md-6 float-right">
                                Return to   <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Login') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> page
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    @endsection

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
