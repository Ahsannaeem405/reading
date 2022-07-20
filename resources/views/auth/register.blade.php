@extends('userSide.layouts.main')

@section('content')


    <main>


        <!-- <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Register</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="container mt-5 mb-5">
            <div class="row">
                <form class=" col-lg-12 col-sm-12" method="post" action="{{route('register')}}" >
                    @csrf
                    <div style="margin-right: auto;margin-left: auto;border: 1px solid blueviolet;border-radius:20px;padding: 50px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="col-lg-6 col-sm-12">
                        <h1 style="text-align: center;color: rebeccapurple">Register</h1>


                        <div class="row mt-4 mb-3 col-lg-12  " style="padding-right: 0px !important;">
                            <div class="col-lg-6 " >
                                <label for="exampleInputEmail1" style="text-align: left !important;">First Name</label>

                                <input type="text" name="f_name" value="{{old('f_name')}}" required class="form-control" placeholder="First name">
                            </div>
                            <div class="col-lg-6" style="padding-right: 0px !important;">
                                <label for="exampleInputEmail1" style="text-align: left !important;">Last Name</label>

                                <input type="text" name="l_name" value="{{old('l_name')}}" required class="form-control" placeholder="Last name">
                            </div>
                        </div>

                        <div class=" col-lg-12 mb-1">
                            <label for="exampleInputEmail1" style="text-align: left !important;">Email</label>

                            <input type="email"  name="email" value="{{old('email')}}" required class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                            @if($errors->has('email'))

                                <span style="color: red" >
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                            @endif

                        </div>




                        <div class="form-group  col-lg-12">
                            <label for="exampleInputEmail1">Password</label>

                            <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">


                            @if($errors->has('password'))

                                <span style="color: red" >
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                            @endif


                        </div>

                        <div class="form-group  col-lg-12">
                            <label for="exampleInputEmail1">Confirm Password</label>

                            <input type="password" name="password_confirmation" required class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                        </div>


                        <div class="form-group  col-lg-12">
                            <label for="exampleInputEmail1">Phone</label>

                            <input type="number" name="phone" required class="form-control" id="exampleInputPassword1" placeholder="phone number">


                            @if($errors->has('password'))

                                <span style="color: red" >
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                            @endif


                        </div>

                        <div class="col-lg-12 mb-4">
                            <span> Already register? <a style="color: blueviolet"  href="{{url('/login')}}">login</a></span>
                        </div>
                        <div class="form-group text-center mt-5  col-lg-12">
                            <button type="submit" style="border-radius: 10px" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>


@endsection
