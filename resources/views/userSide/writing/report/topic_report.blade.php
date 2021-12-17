@extends('userSide.layouts.main')

@section('content')


    <style>


        .rating {
            position: relative;
            width: 180px;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: .3em;
            padding: 5px;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 0 2px #b3acac;
        }

        .rating__result {
            position: absolute;
            top: 0;
            left: 0;
            transform: translateY(-10px) translateX(-5px);
            z-index: -9;
            font: 3em Arial, Helvetica, sans-serif;
            color: #ebebeb8e;
            pointer-events: none;
        }

        .rating__star {
            font-size: 1.3em;
            cursor: pointer;
            color: #dabd18b2;
            transition: filter linear .3s;
        }

        .rating__star:hover {
            filter: drop-shadow(1px 1px 4px gold);
        }
    </style>
    <main style="background-color: #c9faf3">
        <div class="container">

<form action="{{url('writing/topics/submit/'.$topic->id.'')}}" method="post">
    @csrf
            <div class="row ">
                <div class="col-lg-12 mt-5 p-0" >
                    <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">{{$topic->topic_data->name}}</span>
                    </div>


                </div>

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12 d-inline-block " style="padding: 0px !important; height: 650px;background-color: lightgray;border-radius: 0px 0px 25px 25px" >

                            <div class="inner-row text-center">
                                    <div class=" col-lg-12 mt-5">
                                     <textarea disabled name="content_data" class="form-control" style="width: 100%;">


                                         {{$topic->content}}
                                     </textarea>

                                        <label class="mt-5 text">Teacher Remarks</label>

                                        @php
                                            $max=5-$topic->obtain;

$i=1;
                                        @endphp

                                        @for($i=1; $i<=$topic->obtain;$i++ )
                                            <i class="rating__star fas fa-star star_num" abc="{{$i}}"></i>

                                        @endfor

                                        @for($j=1; $j<=$max;$j++ )

                                            <i class="rating__star far fa-star star_num" abc="{{$i++}}"></i>

                                        @endfor
                                        <textarea placeholder="Remaks..." disabled class="form-control">{{$topic->teacher_remax}}</textarea>
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
                      <a href="{{url('students/dashboard')}}">    <input type="button" class="btn btn-success" style="    bottom: -24px;left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="Go Back"></a>

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
