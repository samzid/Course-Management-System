@extends('layouts.frontend_master')

@section('main_content')
    <section class="section" data-section="section3" style="margin: 100px 20px">
        <div class="row p-2 gx-5">
            <div class="col-9 tabel_container">
                <h3>All Course</h3>
                <table class="table table-bordered" align="center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Credit</th>
                            <th>Type</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td style="width: 30%">{{ $courseGeneralView->course_name }}</td>
                            <td style="width: 10%">{{ $courseGeneralView->credit }}</td>
                            <td style="width: 17%">{{ $courseGeneralView->type }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
