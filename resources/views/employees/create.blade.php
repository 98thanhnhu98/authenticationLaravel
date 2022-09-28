@extends('employees.layout')
@section('content')
{{ dd(Auth::user()) }}
<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Product Management</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-success" href="{{ route('employees.index') }}">Back</a>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Oops!</strong>There were some problems with your input.<br>
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="employee_name" class="form-control" placeholder="name"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Description:</strong>
                <input class="form-control" type="text" name="employee_address" placeholder="address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qty:</strong>
                <input type="text" class="form-control" name="employee_phone" placeholder="phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qty:</strong>
                <input type="text" class="form-control" name="employee_email" placeholder="phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qty:</strong>
                <input type="number" class="form-control" name="employee_salary" placeholder="phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection