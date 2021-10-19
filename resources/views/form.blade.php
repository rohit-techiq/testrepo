<!DOCTYPE html>
<html>
<head>
<title>Test Form</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container mt-4">

<div class="card">
<div class="card-header text-center font-weight-bold">
<h2>Laravel 8 Form Validation Tutorial</h2>
</div>
<div class="card-body">
<form name="employee" id="employee" method="post" action="{{url('store-form')}}">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control">

</div>        
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control">

</div>        
<div class="form-group">
<label for="exampleInputEmail1">Age</label>
<input type="number" id="age" name="age" class="@error('age') is-invalid @enderror form-control">

</div>        
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>  
</body>
</html>
