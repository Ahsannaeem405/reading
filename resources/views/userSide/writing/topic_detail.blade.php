@extends('userSide.layouts.main')

@section('content')


    <style>


    </style>
    <main style="background-color: #c9faf3">
        <div class="container">

<form action="{{url('writing/topics/submit/'.$topic->id.'')}}" method="post">
    @csrf
            <div class="row ">
                <div class="col-lg-12 mt-5 p-0" >
                    <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">{{$topic->name}}</span>
                    </div>


                </div>

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12 d-inline-block " style="padding: 0px !important; height: 520px;background-color: lightgray;border-radius: 0px 0px 25px 25px" >

                            <div class="inner-row text-center">
                                    <div class=" col-lg-12 mt-5">
                                     <textarea name="content_data" class="form-control" style="width: 100%;"></textarea>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 100%">
                <div class="col-lg-12">
                    <div class="buttons" style="position:absolute;bottom: 25px;width: 100%">

                        <div class="right-btn" style="display: inline-block;float: right">
                          <input type="submit" class="btn btn-success" style="    bottom: -24px;left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="Submit">

                        </div>
                    </div>

                </div>

            </div>
</form>
        </div>
        <br>


        </div>

    </main>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content_data' );
    </script>
@endsection
