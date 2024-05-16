@extends('layouts.admin_dashboard')
@section('admin_content')




 {{-- Employee wise search Start --}}
 <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="card" style="height: 70px; width:280px">
        <div class="card-datatable">
            <form method="POST" action="{{ route('add_details') }}">
                @csrf

                <div class="row">
                    <div class="col-12" style="display: flex">
                        <div>
                            <label class="form-label" style="margin-left: 10px; font-weight:bold"
                                for="first-name-icon">Teacher ID wise search</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="student_id" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                class="btn btn-primary btn-sm me-1 waves-effect waves-float waves-light"
                                style="display: flex; margin-top:34.5px; margin-left: 14px">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Employee wise search End --}}



@if($errors->any())
<span>{{$errors->first()}}</span>

@endif




<div class="card">
    <div class="card-header">Teacher List</div>
    <div class="card-body">
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-30p">SN</th>
            <th class="wd-30p">Name</th>
            <th class="wd-30p">Teacher ID</th>
            <th class="wd-20p">Email</th>
            <th class="wd-20p">Action</th>
          </tr>
        </thead>
        <tbody>

            @php
            $sn=1;
            @endphp

           @foreach ($teachers as $teacher)

          <tr>
            <td>{{$sn++}}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->teacher_id  }}</td>
            <td>{{ $teacher->email }}</td>
            <td>
              <a href="" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>

              <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        {!! $teachers->links() !!}
    </div>

    </div><!-- table-wrapper -->
  </div>
  </div><!-- card -->




@endsection

