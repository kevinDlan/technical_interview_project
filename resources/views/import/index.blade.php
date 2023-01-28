<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/main.css')}}">
    <title>Importation</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Importation de Fichier</h1>
        <form method="POST" action="{{route('importation.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5">
                <label for="csv_file" class="col-md-4 col-form-label text-md-end">{{ __('Chargez Le fichier CSV') }}</label>
                <div class="col-md-6">
                    <input id="csv_file" type="file" class="form-control @error('csv_file') is-invalid @enderror" name="csv_file"
                        value="{{ old('csv_file') }}" required accept=".csv">
                    @error('csv_file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center my-3">
                <button type="submit" class="btn btn-info col-md-3 mr-1">Importer</button>
                <div class="col-md-1"></div>
                <a  href="{{route('importation.show',1)}}" class="btn btn-success col-md-3">Aperçu</a>
            </div>
        </form>
    </div>
</body>
</html>