@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between">

    <h1 class="display-6">Add Questions Data</h1>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Disimpan</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

</div>
<hr class="my-4">

<form method="POST" action="/store">
    @csrf
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Question?</label>
        <div class="col-md-6">
            <input type="text" class="form-control" id="inputPassword3" name="question">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios1" value="option1"
                    checked>
                <label class="form-check-label" for="gridRadios1">
                    Pertemanan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Percintaan
                </label>
            </div>
        </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
@endsection