@extends('admin.layouts.main')
@section('content')


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Question Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form method="post" action="{{url('admin/readings/question_category/save')}}">
                       @csrf
                       <div class="row">
                           <div class="col-lg-12">
                               <input type="text" name="name" required  class="form-control mb-2" placeholder="Category Name">
                               <input type="submit" class="btn btn-primary" value="submit">
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
                        <h4 class="card-title">Questions Category</h4>
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
                                    @foreach($category as $cat)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$cat->name}}</td>

                                        <td><a data-toggle="modal" data-target="#exampleModal{{$cat->id}}" ><i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a><a href="{{url('admin/readings/question_category/del/'.$cat->id.'')}}" onclick="return confirm('Are you sure you want to Remove?');"><i style="color: red;font-size: 20px"  class="fa fa-trash p-2"></i></a></td>
                                    </tr>




                                    <div class="modal fade" id="exampleModal{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{url('admin/readings/question_category/update/'.$cat->id.'')}}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <input type="text" name="name" required value="{{$cat->name}}" class="form-control mb-2" placeholder="Category Name">
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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
@if(Session::has('success'))

    toastr.success('{{ Session::get('success') }}');
@elseif(Session::has('error'))
    toastr.error('{{ Session::get('error') }}');
@endif

</script>
@endsection
