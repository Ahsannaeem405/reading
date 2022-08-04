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
        @elseif($reading->type == 'quilconct_user')
        <!-- quill connect start -->
            @include('teacher.quil_connect_report')
        <!-- quil connect end -->
        @else
        <!-- quill connect start -->
            @include('teacher.proofread_report')
        <!-- quil connect end -->
        @endif

        
    </div>
</main>

@endsection