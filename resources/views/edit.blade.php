@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Song</div>
    <div class="card-body">
        <form method="post" action="{{ route('songs.update', $song->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $song->title }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">artist</label>
                <div class="col-sm-10">
                    <input type="text" name="artist" class="form-control" value="{{ $song->artist }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">album</label>
                <div class="col-sm-10">
                    <input type="text" name="album" class="form-control" value="{{ $song->album }}" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">length</label>
                <div class="col-sm-10">
                    <input type="text" name="length" class="form-control" value="{{ $song->length }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $song->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
<script>
</script>

@endsection('content')
