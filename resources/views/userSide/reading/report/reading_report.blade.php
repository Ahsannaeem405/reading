@extends('userSide.layouts.main')
@section('content')
    <style>

    </style>
    <main style="background-color: #c9faf3">
        <div class="container">
            @if($reading->type == 'user')
            <!-- story report start-->
                @include('userSide.reading.report.story_report')
            <!-- story report end -->


            @else
                <!-- quill report start-->

                @include('userSide.reading.report.quil_connect_report')
                <!-- quil report end -->
            
            @endif
            

            
            <br>

            <div class="row" style="width: 100%">
                <div class="col-lg-12">
                    <div class="buttons" style="position:absolute;bottom: 23px;width: 100%">

                        <div class="right-btn" style="display: inline-block;float: right">
                            <a href="{{url('students/dashboard')}}"><input type="button" class="btn btn-success" style="    left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="Go Back">
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

@endsection
