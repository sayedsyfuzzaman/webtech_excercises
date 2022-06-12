@extends('layouts.app')

@section('title')
    <title>Login</title>
@endsection

@section('content')
    <div class="bg-light py-5">
        <div class="container py-5 " style="padding-left: 30%; padding-right: 30%;">
            <form  action="{{route('login')}}" method="post">

                <!-- Cross Site Request Forgery-->
                {{csrf_field()}}

                <div class="text-center pb-3">
                    <h3>
                      MY COMPANY
                    </h3>
                </div>

                @if (!empty($message))
                    <div class="alert alert-danger">
                        <p>{{$message}}</p>
                    </div>
                @endif

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </form>
        </div>
    </div>



@endsection
