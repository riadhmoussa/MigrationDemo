<html>
<body>
<h1>Add Product</h1>
<form action="/edit/{{$p->id}}" method="post">
    {{csrf_field()}}
    Name: <input type="text" name="name" value="{{$p->name}}"><br>
    Price: <input type="text" name="price" value="{{$p->price}}"><br>
    <input type="submit" value="Edit Product">
</form>

</body>
</html>