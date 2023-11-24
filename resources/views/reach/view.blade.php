@extends('light.table')

@section('title')
View Reach
@endsection

@section('content')
<div class="row">
  <div class="d-flex justify-content-center card my-4 p-3">
    <div class="form-row d-flex justify-content-between">
      <h6 class="text-black text-capitalize ps-3">View Reach</h6>
      <a href="{{url('/reachindex')}}" style="color:white">
        <button class="btn btn-primary mr-3"> Back </button>
      </a>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <div class="container">
                <form action="{{route('reachupdate', ['id'=> $data->id])}}" method="post">
                  @method('PUT')
                  @csrf
                  <div class="container mt-4 card p-3 bg-white">

                    <div class="form-group required" style="color: black">
                      <label style="color:Black" for="topic">Icon:</label>
                      <p>{{$data->icon??''}}</p>
                      <br>

                      <div class="form-group required" style="color: black">
                        <label style="color:Black" for="topic">Topic:</label>
                        <p>{{$data->topic??''}}</p>
                        <br>

                        <div class="form-group required" style="color: black">
                          <label style="color:Black" for="details">Details</label>
                          <p>{{$data->details??''}}</p>
                        </div>
                        <br>

                        <div class="form-group required" style="color: black">
                          <label style="color:Black" for="topic">Status:</label>
                          <p>{{$data->status??''}}</p>
                        </div>
                        <br>

                        <div class="form-group required" style="color: black">
                          <label style="color:Black" for="details">Created At</label>
                          <p>{{$data->created_at??''}}</p>
                        </div>
                        <br>

                        <div class="form-group required" style="color: black">
                          <label style="color:Black" for="details">Update At</label>
                          <p>{{$data->updated_at??''}}</p>
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