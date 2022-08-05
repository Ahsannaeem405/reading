@extends('admin.layouts.main')
@section('content')





    <section id="column-selectors">
        <div class="row" >

            <div class="col-12">
                <div class="row">
                </div>
                <div class="card">
                    <div class="card-header" >
                        <h4 class="card-title">Reading Grammer </h4>
                       <a href="{{url('admin/readings/grammer/create')}}"> <input type="button" class="btn btn-primary"  value=" ADD">
                       </a>
                    </div>
                   


                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">

                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Question</th>
                                        <th>Category</th>
                                        <th>Points</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1; @endphp
                                    @foreach($grammer as $gram)
                                       <tr>
                                            <td>{{$count++}}</td>
                                            
                                            <td><span style="">{{$gram->q_part1}}</span>
                                                <span style="text-decoration: underline;font-weight: bold">{{$gram->q_part2}}</span>
                                                <span style="">{{$gram->q_part3}}</span>
                                            <td>{{$gram->category->name}}</td>
                                            <td>{{$gram->points}}</td>


                                            <td><a  href="{{url('admin/readings/grammer/edit/'.$gram->id.'')}}" ><i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a><a  onclick="return confirm('Are you sure you want to delete this item?');" href="{{url('admin/readings/grammer/del/'.$gram->id.'')}}"><i style="color: red;font-size: 20px"  class="fa fa-trash p-2"></i></a></td>




                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
