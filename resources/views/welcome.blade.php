@extends('layouts.master')

@section('title')
    Webapp!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
        <form action="{{ route('signup')}}" method="post">
                <div class="form-group">
                    <label for="id_name">Your ID</label>
                    <input class="form-control" type="text" name="id_name" id="id_name">
                </div>
                <div class="form-group">
                    <label for="first_name">Your First-name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> 
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route ('signin')}}" method="post">
                <div class="form-group">
                    <label for="id_name">Your ID</label>
                    <input class="form-control" type="text" name="id_name" id="id_name">
                </div>
                <div class="form-group">
                    <label for="first_name">Your First-name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> 
                <input type="hidden" name="_token" value="{{ Session::token() }}">   
                </form>
        </div>
    </div>
@endsection