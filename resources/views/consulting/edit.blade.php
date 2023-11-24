@extends('light.table')

@section('title')
Products Product
@endsection

@section('content')

<div class="row">
    <div class="d-flex justify-content-center card my-4 p-3">
        <div class="form-row d-flex justify-content-between">
            <h6 class="text-black text-capitalize ps-3">Update Product</h6>
            <a href="{{url('/consultingview')}}" style="color:white">
                <button class="btn btn-primary mr-3"> Back </button>
            </a>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <div class="container">
                                <form action="{{route('consultingupdate', ['id'=> $data->id])}}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="container mt-4 card p-3 bg-white">

                                        <div class="form-group col-md-6 required">
                                            <label style="color:Black" for="name">Project</label>
                                            <input type="text" id="project" name="project" class="form-control border border-black border-2" value="{{$data->project??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>

                                        <div class="form-group col-md-6 required" style="color: black">
                                            <label style="color:Black" for="position">Buyer</label>
                                            <input type="text" id="buyer" name="buyer" class="form-control border border-black border-2" value="{{$data->buyer??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group col-md-6 required" style="color: black">
                                            <label style="color:Black" for="position">Location</label>
                                            <input type="text" id="location" name="location" class="form-control border border-black border-2" value="{{$data->location??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6 required" style="color: black">
                                            <label style="color:Black" for="position">Date</label>
                                            <input type="text" id="date" name="date" class="form-control border border-black border-2" value="{{$data->date??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>

                                        <div class="form-group col-md-6 required" style="color: black">
                                            <label style="color:Black" for="image">Image</label>
                                            <input type="file" id="image" name="image" class="form-control border border-black border-2" value="{{$data->image??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6 required">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status" class="form-control" value="{{$data->status??''}}">
                                                <option value="1" {{$data['status'] == "active" ? 'checked' : ''}}>Active</option>
                                                <option value="0" {{$data['status'] == "inactive" ? 'checked' : ''}}>Inactive</option>
                                            </select>
                                            <span class="text-danger">
                                            </span>
                                        </div>

                                        <div>
                                            <input class="btn btn-primary ml-2" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </tr>
                    </thead>
            </div>
        </div>
    </div>
</div>
@endsection
@section('yield')
@endsection