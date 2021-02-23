@extends('template.main2')
@section('content')
<section class="mt-5">
    <form action="/create-Nav" method="POST">
        @csrf
        <label for="">Link : </label>
        <input type="text" name="ContenuLi">
        <button class="btn btn-danger" type="submit">Créer</button>
    </form>
</section>
    
@endsection