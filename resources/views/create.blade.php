@extends('master')

@section('content')

@if($errors->any())

<!-- <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div> -->

<!-- value="{{old('album')}}" : dữ liệu cũ trên form giữ nguyên -->

@endif

<div class="card">
    <div class="card-header">Add Song</div>
    <div class="card-body">
        <form method="post" action="{{ route('songs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{old('title')}}" />
                    <!-- hiển thị lỗi -->
                    @error('title')
                        <!-- <p style="color: red;">{{$message}}</p> -->
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Artist</label>
                <div class="col-sm-10">
                    <input type="text" name="artist" class="form-control" value="{{old('artist')}}" />
                     <!-- hiển thị lỗi -->
                     @error('artist')
                        <!-- <p style="color: red;">{{$message}}</p> -->
                        <span style="color: red;">{{$message}}</span>
                    @enderror                   
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Album</label>
                <div class="col-sm-10">
                    <input type="text" name="album" class="form-control" value="{{old('album')}}" />
                  
                    <!-- hiển thị lỗi -->
                    @error('album')
                        <!-- <p style="color: red;">{{$message}}</p> -->
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Length</label>
                <div class="col-sm-10">
                    <input type="text" name="length" class="form-control" value="{{old('length')}}" />
                    <!-- hiển thị lỗi -->
                    @error('length')
                        <!-- <p style="color: red;">{{$message}}</p> -->
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
            </div>


            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
