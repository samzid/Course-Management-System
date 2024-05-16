@extends('layouts.admin_dashboard')

@section('admin_content')

<section id="responsive-datatable">
    <div class="row">

      <div class="col-3"></div>

      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Certificate Update</h4>
          </div>
          <div class="card-body">
            <form  method="POST" action="{{ route('update.department') }}" enctype="multipart/form-data" class="form form-vertical">
                @csrf

                <input type="hidden" id="id" name="id" value="{{ $department_edit->id }}">



                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">Certificate Name</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="first-name-icon" class="form-control"
                                    name="name" value="{{ $department_edit->name }}" placeholder="Certificate Name">
                            </div>
                            @error('title_name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">Description</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="first-name-icon" class="form-control"
                                    name="description" value="{{ $department_edit->description }}" placeholder="Description">
                            </div>
                            @error('description_name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">Image</label>
                            <div class="input-group input-group-merge">
                                <input type="file" id="first-name-icon" class="form-control"
                                    name="image">
                            </div>
                            @error('slider_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-12">
                        <button type="submit"
                            class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </div>



            </form>
          </div>
        </div>
      </div>

      <div class="col-3"></div>

    </div>
  </section>

@endsection
