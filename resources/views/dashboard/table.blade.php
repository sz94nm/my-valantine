@extends('layout.master')
@section('content')
    <div class="container " id="vue">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h3 class="my-0 mx-5">Dashboard</h3>
                            </div>
                            <div class="col-auto">
                                <a href="/dashboard/posts/create" class="btn btn-primary ">Add Post</a>
                                <a href="/dashboard/options/1/edit" class="btn btn-primary ">Edit Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table mw-100 ">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as$index=> $post)
                                <tr>
                                    <th scope="row">{{$index+1}}</th>
                                    <td>{{ $post->title }}</td>
                                    <td><div class="overflow-hidden max-width-340" >{{ $post->description }}</div></td>
                                    <td>
                                        <img height="30px" src="/{{$post->image}}" alt="">
                                    </td>


                                    <td>
                                        <div class="btn-group">
                                            <a href="/dashboard/posts/{{$post->id}}/edit"
                                               class=" btn-sm btn btn-primary">Edit</a>
                                            <form method="post" action="/dashboard/posts/{{$post->id}}">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                @csrf
                                                @method('delete')
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
