@extends('template.main2')
@section('content')
    <section class="mt-5">
        <form action="/update-Nav/{{$editNav->id}}" method="POST">
            @csrf
            <label for="">Link : </label>
            <input type="text" name="ContenuLi" value="{{$editNav->ContenuLi}}">
            <button class="btn btn-danger" type="submit">Edit</button>
        </form>
    </section>
@endsection
