@extends('welcome')
@section('header')
<div class="row mb-2">
    </section>
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
    </section>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
@endsection
@section('main_content')
<table class="table table-responsive">
    <thead>
        <th>S.N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
</thead>
<tbody>
    <tr>
    <td>01</td>
    <td>Manish</td>
    <td>manish@gmail.com</td>
    <td>98028282828</td>
    </tr>
    <tr>
    <td>02</td>
    <td>Prashant</td>
    <td>prashatstha@gmail.com</td>
    <td>98459282828</td>
    </tr>
    
    <tbody>
</table>
@endsection