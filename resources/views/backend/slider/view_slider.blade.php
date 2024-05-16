@extends('layouts.admin_dashboard')

@section('admin_content')

<section id="responsive-datatable">
    <div class="row">

      <div class="col-8">
        <div class="card">
          <div class="card-header border-bottom">
            <h4 class="card-title">All Slider</h4>
          </div>
          <div class="card-datatable">
            <table class="dt-responsive table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sn=1;
                    @endphp
                    @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>
                            <img src="{{ asset($slider->image) }}" alt="" height="80px">
                        </td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->description }}</td>

                        <td style="display: flex">
                            <a href="{{ route('edit.slider',$slider->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <form method="POST" action="{{ route('delete.slider',$slider->id) }}" style="margin-left: 5px">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm fa fa-trash" data-toggle="tooltip" title='Delete'></button>
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">SLider Add</h4>
          </div>
          <div class="card-body">
            <form  method="POST" action="{{ route('store.slider') }}" enctype="multipart/form-data" class="form form-vertical">
                @csrf
              <div class="row">
                <div class="col-12">
                  <div class="mb-1">
                    <label class="form-label" for="first-name-icon">Title</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="first-name-icon" class="form-control" name="title" placeholder="Title">
                    </div>
                    @error('title')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>



                <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-icon">Description</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="first-name-icon" class="form-control" name="description" placeholder="Description">
                      </div>
                      @error('description')
                            <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>



                  <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-icon">SLider Image</label>
                      <div class="input-group input-group-merge">
                        <input type="file" id="first-name-icon" class="form-control" name="image">
                      </div>
                      @error('slider')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                   </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                  <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

  <script type="text/javascript">

      $('.show_confirm').click(function(event) {
           var form =  $(this).closest("form");
           var name = $(this).data("name");
           event.preventDefault();
           swal({
               title: `Are you sure you want to delete this record?`,
               text: "If you delete this, it will be gone forever.",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
               form.submit();
             }
           });
       });

 </script>








@endsection
