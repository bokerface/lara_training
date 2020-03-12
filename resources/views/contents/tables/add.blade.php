@extends('layouts.master')

@section('main-content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{ url('/table/store') }}" method="POST" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="name" placeholder="Username" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <input class="btn btn-secondary btn-sm" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
