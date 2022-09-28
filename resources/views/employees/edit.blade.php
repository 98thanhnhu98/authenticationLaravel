@extends('employees.layout')
@section('content')
{{ dd(Auth::user()) }}
<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Edit Product</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('employees.index') }}">Back</a>
    </div>
</div>  

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with youor input.<br>
    <ul>    
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.update',$employee->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="employee_name" class="form-control" value="{{$employee->employee_name}}" placeholder="product name"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" class="form-control" value="{{$employee->employee_address}}" name="employee_address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="text" value="{{$employee->employee_phone}}" class="form-control" name="employee_phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text"  value="{{$employee->employee_email}}" class="form-control" name="employee_email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Salary:</strong>
                <input type="number" value="{{$employee->employee_salary}}" class="form-control" name="employee_salary">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
