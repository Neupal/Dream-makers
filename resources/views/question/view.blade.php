@extends('light.table')

@section('title')
View Question
@endsection

@section('content')
<div class="row">
    <div class="d-flex justify-content-center card my-4 p-3">
        <div class="form-row d-flex justify-content-between">
            <h6 class="text-black text-capitalize ps-3">View Question</h6>
            <a href="{{url('/questionindex')}}" style="color:white">
                <button class="btn btn-primary mr-3"> Back </button>
            </a>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <div class="container">
                                <div class="container mt-4 card p-3 bg-white">

                                    <div class="form-group required" style="color: black">
                                        <label style="color:Black" for="topic">Question:</label>
                                        <p>{{$data->question??''}}</p>
                                    </div>
                                    <br>

                                    <div class="form-group required" style="color: black">
                                        <label style="color:Black" for="details">Answer</label>
                                        <p>
                                            {{$data->answer??''}}
                                        </p>
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
                                        <br>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection