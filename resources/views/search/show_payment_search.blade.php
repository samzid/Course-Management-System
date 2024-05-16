@extends('layouts.admin_dashboard')
@section('admin_content')



<div class="col-lg-4 col-md-4 col-sm-4">
    <div class="card" style="height: 70px; width:280px">
        <div class="card-datatable">
            <form method="POST" action="{{ route('search_payment') }}">
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






<div class="card" style="width: 3100px">
    <div class="card-header">Payment List</div>
    <div class="card-body">
        <div class="table-wrapper">
            <table style="text-align: center" id="datatable1" class="table display responsive nowrap">
                <thead>
                    <tr>
                      
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>Student ID</th>
                        <th>Certificate Type</th>
                        <th>Expected Time</th>
                        <th>Fee</th>
                        <th>Payment Method</th>
                        <th>Account Number</th>
                        <th>Transaction ID</th>
                    </tr>
                </thead>

                <tbody>

             
                  
                        <tr>
                          
                            <td>{{ $payments->user_name }}</td>
                            <td>{{ $payments->email }}</td>
                            <td>{{ $payments->phone }}</td>
                            <td>{{ ($payments->department) }}</td>
                            <td>{{ $payments->student_id }}</td>
                            <td>{{ $payments->certificate_type }}</td>
                            <td>{{ $payments->expected_time }} days</td>
                            <td>{{ $payments->fee }} Taka</td>
                            <td>{{ $payments->payment_method }}</td>
                            <td>{{ $payments->account_number }}</td> 
                            <td>{{ $payments->transaction_id }}</td>                                                        
       
                        </tr>
                  
                </tbody>
            </table>
        </div><!-- table-wrapper -->
    </div>
</div><!-- card -->






@endsection

