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
                        <div class="card-header text-center">{{ __('Create License') }}</div>
                        <table class="table table-bordered bg-white w-75 mt-3" style="margin-left: 90px;">
                            <tbody>
                            <tr>
                                <td>First Name</td>
                                <td> {{ Auth::user()->fname }}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td> {{ Auth::user()->lname }}</td>
                            </tr>
                            <tr>
                                <td>Name of Organization</td>
                                <td> {{ Auth::user()->organization_name }}</td>
                            </tr>
                            <tr>
                                <td >Street</td>
                                <td> {{ Auth::user()->street }}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td> {{ Auth::user()->city }}</td>
                            </tr>
                            <tr>
                                <td >Phone</td>
                                <td> {{ Auth::user()->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> {{ Auth::user()->email }}</td>
                            </tr>
                            </tbody>
                            </table>
                            <div class="card-body">
                            <form method="POST" action="{{ route('update-key') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client ID') }}</label>

                                    <div class="col-md-6">
                                        <input id="client_id" type="text" class="form-control @error('fname') is-invalid @enderror" name="client_id" value="{{ old('client_id') }}" required >

                                        @error('client_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
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
                                <div class="form-group row mb-2">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lincense_for" class="col-md-4 col-form-label text-md-right">{{ __('Lincense For') }}</label>

                                    <div class="col-md-6">
                                        <!-- <input id="lincense_for" type="text" class="form-control @error('lincense_for') is-invalid @enderror" name="lincense_for" value="{{ old('lincense_for') }}" required> -->
                                        <select class="form-control" placeholder="Select Month" class="form-control @error('lincense_for') is-invalid @enderror" name="lincense_for" value="{{ old('lincense_for') }}" required>
                                            <option value="">--Select License Time--</option>
                                            <option value = "3" selected>3 Month</option>
                                            <option value = "6">6 Months</option>
                                            <option value = "12">12 Months</option>
                                        </select>
                                        @error('lincense_for')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Create Key') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                          <div class="text-center">
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
