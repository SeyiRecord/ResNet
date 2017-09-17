@extends('header')
<?php
    define("TITLE", "View Profile");
    
?>

	<div class="content">
        <div class="title m-b-md">
            Profile Page
        </div>

        <div style="text-align: center;">
        	<b>First Name</b> <br>
        	<b>M.I.</b> <br>
        	<b>Last Name</b> <br>
        	<b>UserName</b> <br>
        	<b>Email</b> <br>
        	<b>Personal Statement</b> <br>
            <b>Address</b> <br>
            <b>City</b> <br>
            <b>State</b> <br>
            <b>Country</b> <br>
            <b>Zip Code</b> <br>
            <b>Skills</b> <br>
        </div>

        <div>
            EDUCATION
        </div>

        <div>
            CAREER
        </div>
    </div>

@extends('footer')




<!-- @extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('status'))
        <p class="alert alert-info">
            {{  session()->get('status') }}
        </p>
    @endif
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                User Details
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">First Name</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->fName }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Last Name</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->lName }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Email</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Password</label>
                        <div class="col-sm-9">
                            <p class="form-control">********</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <a href="{{ route('users.index') }}" class="btn btn-success">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->