@extends('layouts.dashboard')

@section('content')
  @php
    $apps = DB::table('addapps')->get();
    $contacts = DB::table('contacts')->get();
  @endphp
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Add your apps information:</h3>
        <p class="text-danger">This will append in the fontend of the website.</p>
        <form action="{!! route('appspost') !!}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-4 mt-3">
              <label for="exampleFormControlFile1">Apps Name:</label>
              <input type="text" name="appsName" class="form-control" id="exampleFormControlFile1" placeholder="Enter your apps name...">
          </div>
          <div class="form-group mb-4 mt-3">
              <label for="exampleFormControlFile1">Apps Store Link:</label>
              <input type="text" name="appsLink" class="form-control" id="exampleFormControlFile1" placeholder="Enter your apps store link...">
          </div>
          <div class="form-group mb-4 mt-3">
              <label for="exampleFormControlFile1">How this app works?</label>
              <textarea class="form-control" name="appsDesc" id="exampleFormControlTextarea1" rows="3" placeholder="Enter a short description..."></textarea>
          </div>
          <div class="form-group mb-4 mt-3">
              <label for="exampleFormControlFile1">Screen-Shot 1:</label>
              <input type="file" name="ss1" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-group mb-4 mt-3">
              <label for="exampleFormControlFile1">Screen-Shot 2:</label>
              <input type="file" name="ss2" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="submit" name="button" class="btn btn-success">Add Now</button>
        </form>
      </div>
      <div class="col-md-12">
        <hr>
        <h3>Your apps:</h3>
        <hr>
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
           <div class="widget-content widget-content-area br-6">
              <div class="table-responsive mb-4 mt-4">
                 <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                       <div class="col-sm-12">
                          <table id="zero-config" class="table table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-config_info">
                             <thead>
                                <tr role="row">
                                   <th class="sorting_asc" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 147px;">#</th>
                                   <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 230px;">Apps Name</th>
                                   <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 101px;">Apps description</th>
                                   <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 49px;">Apps Link</th>
                                   <th class="no-content sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 21px;"></th>
                                </tr>
                             </thead>
                             <tbody>
                               @foreach ($apps as $value)
                                <tr role="row">
                                   <td class="sorting_1">{{ $loop->index+1 }}</td>
                                   <td>{{ $value->appsName }}</td>
                                   <td>{{ $value->appsDesc }}</td>
                                   <td>{{ $value->appsLink }}</td>
                                   <td>
                                     @if ($value->status == 0)
                                       <a href="{!! route('appsactive',$value->id) !!}" class="btn btn-success">Active</a>
                                     @endif
                                     <a href="{!! route('appsdelete',$value->id) !!}" class="btn btn-danger">Delete</a>
                                   </td>
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
      </div>
      <div class="col-md-12">
        <h3>Inbox:</h3>
        <div class="col-sm-12">
           <table id="zero-config" class="table table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-config_info">
              <thead>
                 <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 147px;">#</th>
                    <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 230px;">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 101px;">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 49px;">Message</th>
                    <th class="no-content sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 21px;"></th>
                 </tr>
              </thead>
              <tbody>
                @forelse ($contacts as $value)
                  <tr role="row">
                     <td class="sorting_1">{{ $loop->index+1 }}</td>
                     <td>{{ $value->name }}</td>
                     <td>{{ $value->email }}</td>
                     <td>{{ $value->message }}</td>
                     <td>
                       <a href="{!! route('ContactUsDelete',$value->id) !!}" class="btn btn-danger">Delete</a>
                     </td>
                  </tr>
                @empty
                  <td colspan="5" class="text-center"> No Message </td>
                @endforelse
              </tbody>

           </table>
        </div>
      </div>
  </div>
  </div>
@endsection
