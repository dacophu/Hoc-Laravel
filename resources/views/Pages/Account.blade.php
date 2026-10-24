@extends ('Layout.main')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Account</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">account</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <h4 class="panel-title"><a href="my-product.php">My product</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="add-product.php">Add product</a></h4>
                            </div>
                        </div>

                    </div><!--/category-products-->


                </div>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Update user</h2>
                    <div class="signup-form"><!--sign up form-->
                        <h2>User Detail!</h2>
                        <form action="{{url('/account')}}" method="POST">
                            @csrf
                            <input type="text" placeholder="Name" name="name" value="<?php try {
                                                                                            echo $user->name;
                                                                                        } catch (Exception $ex) {
                                                                                        }  ?>" />
                            <input type="email" placeholder="Email Address" name="email" value="<?php try {
                                                                                                    echo $user->email;
                                                                                                } catch (Exception $ex) {
                                                                                                } ?>" readonly />
                            <input type="password" placeholder="Password" name="password" value="<?php try {
                                                                                                        echo $user->password;
                                                                                                    } catch (Exception $ex) {
                                                                                                    } ?>" />
                            <p style="color: red;"><?php
                                                    try {
                                                        echo $err;
                                                    } catch (Exception $ex) {
                                                    }
                                                    ?></p>
                            <button type="submit" name="submit" class="btn btn-default">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection