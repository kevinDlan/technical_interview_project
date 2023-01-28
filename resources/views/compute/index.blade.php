@extends("layouts.index",['title'=> "Calcule"])
@section("content")
<div class="container my-5">
    <h1 class="text-center">Calcule</h1>
    <form method="POST" action="{{route('compute.store')}}">
        @csrf
        <div class="row mt-5">
            <label for="number" class="col-md-4 col-form-label text-md-end">{{ __('Entrer un nombre')
                }}</label>
            <div class="col-md-6">
                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror"
                    name="number" value="{{ old('nuumber') }}" required>
                @error('number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-info col-md-3 mr-1">Calculer</button>
        </div>
    </form>
</div>
@endsection