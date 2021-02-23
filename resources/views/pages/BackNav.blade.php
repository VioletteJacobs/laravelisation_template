@extends('template.main2')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Lien</th>
        <th scope="col">Delete</th>
        <th scope="col">Show</th>
      </tr>
    </thead>
    @foreach ($DBNav as $item)
    <tbody>
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->ContenuLi}}</td>
        <td> 
            <form action="/delete-Nav/{{$item->id}}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
        <td><a href="/show-Nav/{{$item->id}}" class="btn btn-success">Show</a></td>
        <td><a href="/edit-Nav/{{$item->id}}" class="btn btn-primary">Edit</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
  
        
@endsection