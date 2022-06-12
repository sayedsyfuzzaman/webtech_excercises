@extends('layouts.app')

@section('title')
<title>Registration</title>
@endsection


@section('content')
<div class="bg-light py-5">
        <div class="container py-5 " style="padding-left: 30%; padding-right: 30%;">
            <h3 class="pb-4">
                Registration
            </h3>
            <form class="row g-3" action="{{route('registration')}}" method="post">
                <!-- Cross Site Request Forgery-->
                {{csrf_field()}}


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-12">
                    <label for="inputName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="inputName" name="name" value="{{old('name')}}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" value="{{old('email')}}">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" value="{{old('password')}}">
                </div>
                <div class="col-12">
                    <label for="inputDesignation" class="form-label">Designation</label>
                    <input type="text" class="form-control" id="inputDesignation" name="designation" value="{{old('designation')}}">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" value="{{old('address')}}">
                </div>

                <div class="col-12">
                    <button type="submit" class="w-100 btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection