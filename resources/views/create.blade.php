@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">Add Song</div>
    <div class="card-body">
        <form method="post" action="{{ route('songs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Artist</label>
                <div class="col-sm-10">
                    <input type="text" name="artist" class="form-control" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Album</label>
                <div class="col-sm-10">
                    <input type="text" name="album" class="form-control" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Length</label>
                <div class="col-sm-10">
                    <input type="text" name="length" class="form-control" />
                </div>
            </div>


            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
