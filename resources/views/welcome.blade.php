@extends('layouts.master')

@section('title')
    Webapp!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="ID">Your ID</label>
                    <input class="form-control" type="text" name="ID" id="ID">
                </div>
                <div class="form-group">
                    <label for="First-name">Your First-name</label>
                    <input class="form-control" type="text" name="First-name" id="First-name">
                </div>
                <div class="form-group">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>    
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="ID">Your ID</label>
                    <input class="form-control" type="text" name="ID" id="ID">
                </div>
                <div class="form-group">
                    <label for="First-name">Your First-name</label>
                    <input class="form-control" type="text" name="First-name" id="First-name">
                </div>
                <div class="form-group">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>    
                </form>
        </div>
    </div>
@endsection