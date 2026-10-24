@extends ('Layout.main')

@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="{{url('/signup')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Name" name="name" />
                        <input type="email" placeholder="Email Address" name="email" />
                        <input type="password" placeholder="Password" name="password" />
                        <p style="color: red;"><?php
                                                try {
                                                    echo $err;
                                                } catch (Exception $ex) {
                                                }
                                                ?></p>
                        <button name="submit" type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->


@endsection