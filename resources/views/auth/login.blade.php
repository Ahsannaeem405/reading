@extends('userSide.layouts.main')

@section('content')


    <main>


        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Login</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5 mb-5">
            <div class="row">
                <form class=" col-lg-12 col-sm-12" method="post" action="{{route('login')}}">
                    @csrf
                    <div
                        style="margin-right: auto;margin-left: auto;border: 1px solid blueviolet;border-radius:20px;padding: 50px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
                        class="col-lg-6 col-sm-12 ">
                        <h1 style="text-align: center;color: rebeccapurple">Login</h1>

                        <div class="form-group col-lg-12">
                            <label for="exampleInputEmail1" style="text-align: left !important;">Email</label>

                            <input type="email" name="email" class="form-control" required id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter email">

                            @if($errors->has('email'))

                                <span style="color: red">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                            @endif


                        </div>


                        <div class="form-group  col-lg-12">
                            <label for="exampleInputEmail1">Password</label>

                            <input name="password" type="password" class="form-control" required
                                   id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="col-lg-12 mb-4">
                            <span> Not register yet? <a style="color: blueviolet" href="{{url('/register')}}">Signup</a></span>
                            <span style="float: right"><a href="#"
                                                          style="color: blueviolet;">Forget Password?</a></span>
                        </div>
                        <div class="form-group text-center mt-5  col-lg-12">
                            <button type="submit" style="border-radius: 10px" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>


@endsection
