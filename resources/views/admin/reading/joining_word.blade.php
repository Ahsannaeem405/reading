@extends('admin.layouts.main')
@section('content')


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Joining words</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form method="post" action="{{url('admin/readings/joining_word/save')}}" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                           <div class="col-lg-12">
                                
                               <input type="text" name="name" required  class="form-control mb-2" placeholder="Joining word">
                               
                               <input type="submit" style="border-color: #4839EB !important;background-color: #7367F0 !important;color: white;padding: 10px;border-radius: 5px;border: none" value="submit">
                           </div>

                           

                        </div>
                   </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <section id="column-selectors">
        <div class="row" >

            <div class="col-12">
                <div class="row">
                </div>
                <div class="card">
                    <div class="card-header" data-toggle="modal" data-target="#exampleModal">
                        <h4 class="card-title">Joining words</h4>
                        <input type="button" class="btn btn-primary"  value=" ADD">

                    </div>
                    


                        <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">

                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php $count=1; @endphp
                                    @foreach($word as $cat)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$cat->word}}</td>

                                        <td><a data-toggle="modal" data-target="#exampleModal{{$cat->id}}" ><i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a><a href="{{url('admin/readings/joining_word/del/'.$cat->id.'')}}" onclick="return confirm('Are you sure you want to Remove?');"><i style="color: red;font-size: 20px"  class="fa fa-trash p-2"></i></a></td>
                                    </tr>




                                    <div class="modal fade" id="exampleModal{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Joining Word</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{url('admin/readings/joining_word/update/'.$cat->id.'')}}" enctype='multipart/form-data'>
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <lable>Joining word</lable>
                                                                <input type="text" name="name" required value="{{$cat->word}}" class="form-control mb-2" placeholder="">
                                                               
                                                                <input type="submit" style="border-color: #4839EB !important;background-color: #7367F0 !important;color: white;padding: 10px;border-radius: 5px;border: none" value="submit">
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
