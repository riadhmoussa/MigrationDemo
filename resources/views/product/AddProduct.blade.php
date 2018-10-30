@extends('layouts.menubar')
@section('content')

    <form action="addproduct" method="post">
    {{csrf_field()}}
    Name: <input class="form-control" type="text" name="name"><br>
    Price: <input class="form-control" type="text" name="price"><br>
    <input type="submit" value="Add Product" class="btn btn-primary btn-block">
</form>
@endsection