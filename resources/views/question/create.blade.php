@extends('light.table')

@section('title')
Home Question
@endsection

@section('content')
<div class="row">
  <div class="d-flex justify-content-center card my-4 p-3">
    <div class="w-100">
      <div class="form-row d-flex justify-content-between">
        <h6 class="text-black text-capitalize ps-3">Add Question</h6>
        <a href="{{url('/questionindex')}}" style="color:white">
          <button class="btn btn-primary"> Back </button>
        </a>
      </div>
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <div class="container">
                <form action="{{url('/questionstore')}}" method="post">
                  @csrf
                  <div class="container mt-4 card p-3 bg-white">

                    <div class="form-group required">
                      <label style="color:Black" for="topic">Question:</label>
                      <input type="text" id="question" name="question" class="form-control border border-black border-2">
                      <span class="text-danger">
                      </span>
                    </div>
                    <br>

                    <div class="form-group required" style="color: black">
                      <label style="color:Black" for="details">Answer</label>
                      <input type="text" id="answer" name="answer" class="form-control border border-black border-2">
                      <span class="text-danger">
                      </span>
                    </div>
                    <br>

                    <div class="form-group col-md-6 required">
                      <label for="status">Status:</label>
                      <select id="status" name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                      <span class="text-danger">
                      </span>
                    </div>
                    <div>
                      <input class="btn btn-primary m-1" type="submit" value="Submit">
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