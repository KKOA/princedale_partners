{{-- @extends('layouts.app') --}}
@extends('layouts.master')

{{-- @section('content') --}}
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Your Profile</h1></div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <h2>Personal infomation</h2>
                    <div class='row'>
                        <div class='col-3 offset-3 text-right fieldname'>Full Name :</div>
                        <div class='col-6'>{{$user->full_name()}}</div>
                    </div>
                    <div class='row'>
                        <div class='col-3 offset-3 text-right fieldname'>Alias :</div>
                        <div class='col-6'>{{$user->alias}}</div>
                    </div>
                    <h2>Contact Details</h2>
                    <div class='row'>
                        <div class='col-3 offset-3 text-right fieldname'>Address :</div>
                        <div class='col-6'>{{$user->full_address() }}</div>
                    </div>
                    <div class='row'>
                        <div class='col-3 offset-3 text-right fieldname'>Email :</div>
                        <div class='col-6'>{{$user->email}}</div>
                    </div>
                    <div class='row'>
                        <div class='col-3 offset-3 text-right fieldname'>Telephone :</div>
                        <div class='col-6'>{{$user->telephone }}</div>
                    </div>

                    {{-- {{ $user; }}<br> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    
</style>


@endsection
