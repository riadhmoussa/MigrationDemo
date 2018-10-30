@extends('layouts.menubar')
@section('content')

<link href="liste.css" rel="stylesheet" type="text/css">
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete </th>

    </tr>
    @foreach($prod as $p)
    <tr>

        <td>{{$p->name}}</td>
        <td>{{$p->price}}</td>
        <td><a href="products/{{$p->id}}" class="button" >Delete</a></td>
        <td><a href="edit/{{$p->id}}" class="button" >Edit</a></td>

    </tr>
    @endforeach
</table>
@endsection

