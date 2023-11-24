@extends('light.table')

@section('title')
Home Question
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <div class="row">
      <!-- Small table -->
      <h2 class="h4 mb-1">Home</h2>
      <p class="mb-3">Question</p>
      <div class="card shadow">
        <div class="card-body">
          <div class="toolbar">
            <div class="form-row d-flex justify-content-between">
              <div>
                <a href="{{url('/questioncreate')}}" style="color:white">
                  <button class="btn btn-primary"> Add </button>
                </a>
              </div>
              <!-- <div class="form-group">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" id="search1" value="" placeholder="Search">
              </div> -->
            </div>
          </div>
          <!-- table -->
          <table class="table table-borderless table-hover">
            <thead>
              <tr>

                <th class="text-dark">SN</th>
                <th class="text-dark">Question</th>
                <th class="text-dark">Answer</th>
                <th class="text-dark">Status</th>
                <th class="text-dark">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $i=1;
              @endphp
              @foreach ($info as $data)
              <tr>
                <td>{{$i}}</td>
                <td>{{$data->question}}</td>
                <td>
                  {{$data->answer,80}}
                </td>
                <td>
                  @if($data->status == "1")
                  <button class="btn">
                    <span class="badge badge-primary">Active</span>
                  </button>
                  @else
                  <button class="btn">
                    <span class="badge badge-danger">Inactive</span>
                  </button>
                  @endif
                </td>
                <td class="d-flex gap-1">
                  <a href="{{url('questiondelete', ['id'=>$data->id])}}"><button class=" btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                      </svg></button></a>
                  <a href="{{url('questionedit', ['id'=>$data->id])}}"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                      </svg></button></a>
                  <a href="{{url('questionview', ['id'=>$data->id])}}"><button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                      </svg>
                    </button>
                  </a>

                </td>
              </tr>
              @php
              $i++;
              @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- end section -->
  </div> <!-- .col-12 -->
</div> <!-- .row -->
@endsection