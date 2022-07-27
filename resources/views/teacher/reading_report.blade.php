@extends('userSide.layouts.main')
@section('content')
<style>

</style>
<main style="background-color: #c9faf3">
    <div class="container">
        @if($reading->type == 'user')
        <!-- story start -->
            @include('teacher.story_report')
        <!-- story end -->
        @else
        <!-- quill connect start -->
            @include('teacher.quil_connect_report')
        <!-- quil connect end -->
        @endif
        <br>
        <div class="row" style="width: 100%">
            <div class="col-lg-12">
                <div class="buttons" style="position:absolute;bottom: 23px;width: 100%">
                    <div class="right-btn" style="display: inline-block;float: right">
                        <a href="{{url('teacher/student/report/'.$student_id.'')}}"><input type="button"
                                class="btn btn-success"
                                style="    left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "
                                value="Go Back">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection