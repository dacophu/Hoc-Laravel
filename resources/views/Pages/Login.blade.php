@extends('Layout.main')
@section('content')

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>

                    <form action="{{url('/login')}}" method="POST">
                        @csrf
                        <input type="email" placeholder="Email Address" name="email" />
                        <input type="password" placeholder="Password" name="password" />
                        <p style="color: red;"><?php
                                                try {
                                                    echo $err;
                                                } catch (Exception $ex) {
                                                }
                                                ?></p>
                        <a href="{{url('/signup')}}">SignUp?</a>
                        <button name="submit" type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->


@endsection