@extends('app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <button class="btn btn-outline-primary btn-lg btn-block mb-3" onclick="location.href='#'">
                <img src="maths.png" alt="Mathematics" class="img-fluid mr-2" style="max-height: 200px;"> Mathematics
            </button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-outline-primary btn-lg btn-block mb-3" onclick="location.href='#'">
                <img src="science.jpeg" alt="Science" class="img-fluid mr-2" style="max-height: 200px;"> Science
            </button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-outline-primary btn-lg btn-block mb-3" onclick="location.href='#'">
                <img src="maths.png" alt="Mathematics" class="img-fluid mr-2" style="max-height: 200px;"> Mathematics
            </button>
        </div>
    </div>
</div>
@endsection

