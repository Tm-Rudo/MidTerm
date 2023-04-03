@extends('master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Song Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('songs.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Title</b></label>
            <div class="col-sm-10">
                {{ $song->title }}
            </div>
        </div>
       
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>artist</b></label>
            <div class="col-sm-10">
                {{ $song->artist }}
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>album</b></label>
            <div class="col-sm-10">
                {{ $song->album }}
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>length</b></label>
            <div class="col-sm-10">
                {{ $song->length }}
            </div>
        </div>
    </div>
</div>

@endsection('content')


