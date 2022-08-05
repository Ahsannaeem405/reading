@extends('userSide.layouts.main')

@section('content')



    <main>


        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Students</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="container">


    <table class="table mt-5 mb-5 pt-5 pb-5">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">New Reports</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @php $count=1; @endphp
        @foreach($student as $stu)
        <tr>
            <th scope="row">{{$count++}}</th>
            <td>{{$stu->name}}</td>
            <td>{{$stu->email}}</td>
            <td>{{$stu->phone}}</td>
            <td><div style="background-color: green;width: 25px;height: 25px;border-radius: 50%;color: white;text-align: center;"><span>
                @php 
                $var=$stu->readings->count(); 
                $var2=$stu->grammer_reports->count();
                echo $var+$var2;
                @endphp</span></div></td>
            <td><a href="{{url('teacher/student/report/'.$stu->id.'')}}"> <input type="button" class="btn btn-success p-3" style="border-radius: 5px" value="View Report" ></a></td>
        </tr>
        @endforeach








        </tbody>
    </table>

</div>
        </div>






    </main>
    @endsection
