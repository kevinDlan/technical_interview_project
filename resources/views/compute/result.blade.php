@extends("layouts.index",['title'=>"Result"])
@section("content")
<div class="container my-5">
    <h1 class="text-center">Resultat</h1>
     <div class="text-center font-weight-bold">
        @foreach ($result as $r)
        <span>{{$r}}</span>
        @endforeach
     </div>
</div>
@endsection