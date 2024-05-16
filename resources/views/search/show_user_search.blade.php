@extends('layouts.admin_dashboard')
@section('admin_content')



<div class="col-lg-4 col-md-4 col-sm-4">
    <div class="card" style="height: 70px; width:280px">
        <div class="card-datatable">
            <form method="POST" action="{{ route('add_details') }}">
                @csrf

                <div class="row">
                    <div class="col-12" style="display: flex">
                        <div>
                            <label class="form-label" style="margin-left: 10px; font-weight:bold"
                                for="first-name-icon">Studen ID wise search</label>
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


<div class="card">
    <div class="card-header">Users List</div>
    <div class="card-body">
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>

            <th class="wd-30p">Name</th>
            <th class="wd-30p">Student ID</th>
            <th class="wd-20p">Email</th>
            <th class="wd-20p">Action</th>
          </tr>
        </thead>
        <tbody>


          <tr>

            <td>{{ $item->name }}</td>
            <td>{{ $item->student_id }}</td>
            <td>{{ $item->email }}</td>




            <td>
                <a href="{{ route('user_list.edit',$item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>

                <a href="{{ route('user.delete',$item->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
              </td>


          </tr>

        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        {{-- {!! $users->links() !!} --}}
    </div>

    </div><!-- table-wrapper -->
  </div>
  </div><!-- card -->






@endsection

