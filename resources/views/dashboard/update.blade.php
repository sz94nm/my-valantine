@extends('layout.master')
@section('content')
    <div class="container " id="vue">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <a href="/dashboard/posts" class="btn btn-primary mx-5">Back</a>
                            </div>
                            <div class="col-auto">
                                <h3 class="my-0 mx-5">Add</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        @include('layout.errors')
                        <form action="/dashboard/posts/{{$post->id}}" method="post" class="form-group">
                            @csrf
                            @method('patch')
                            <label for="title">Title</label>

                            <input value="{{old('title',$post->title)}}" placeholder="Title" type="text" name="title"
                                   class="form-control">

                            <label for="description">Description</label>

                            <textarea class="form-control" name="description"
                                      placeholder="Description" id="description" cols="30"
                                      rows="5">{{old('description',$post->description)}}</textarea>

                            <div class="row justify-content-center m-3">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
