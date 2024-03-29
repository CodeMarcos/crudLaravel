<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Tutorial Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 9 CRUD Example Tutorial</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('employee.create') }}"> Store New Employee</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Employee Name</th>
<th>Employee Charge</th>
<th width="280px">Action</th>
</tr>
@foreach ($employees as $employee)
<tr>
<td>{{ $employee->id }}</td>
<td>{{ $employee->name }}</td>
<td>{{ $employee->charge }}</td>
<td>
<form action="{{ route('employee.destroy',$employee->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>

</body>
</html>