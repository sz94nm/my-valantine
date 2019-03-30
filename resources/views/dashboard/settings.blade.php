@extends('layout.master')
@section('content')
    <div class="container " id="vue">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <a href="/dashboard/posts" class="btn btn-primary mx-5">Back</a>
                            </div>
                            <div class="col-auto">
                                <h3 class="my-0 mx-5">Website Info</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        @include('layout.errors')
                        <form action="/dashboard/options/1" method="post" class="form-group" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row justify-content-center mb-2">
                                <div class="col-md-4">
                                    <label for="brand">Brand</label>
                                    <input value="{{old('brand',$option->brand)}}" placeholder="Brand" type="text"
                                           name="brand"
                                           class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="profession">Description</label>
                                    <input value="{{old('profession',$option->profession)}}" placeholder="Description"
                                           type="text"
                                           name="profession"
                                           class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="email">Email</label>
                                    <input value="{{old('email',$option->email)}}" placeholder="Email" type="text"
                                           name="email"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-2  ">
                                <div class="col-md-6">
                                    <label for="instagram">Instagram URL</label>
                                    <input value="{{old('instagram',$option->instagram)}}" placeholder="Instagram URL" type="text"
                                           name="instagram"
                                           class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="facebook">Facebook URL</label>
                                    <input value="{{old('facebook',$option->facebook)}}" placeholder="Facebook URL" type="text"
                                           name="facebook"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-2 ">
                                <div class="col-md-6">
                                    <label for="about">About</label>

                                    <textarea class="form-control" name="about"
                                              placeholder="About Me" id="about" cols="30"
                                              rows="5">{{old('about',$option->about)}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="contact">Contact</label>
                                    <textarea class="form-control" name="contact"
                                              placeholder="Contact" id="contact" cols="30"
                                              rows="5">{{old('contact',$option->contact)}}</textarea>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <dov class="col-md-6">
                                    <label for="cover">Cover Photo</label>
                                    <input type="file" name="cover" id="cover" class="mt-3">
                                </dov>
                                <dov class="col-md-6">
                                    <label for="profile">Profile Photo</label>
                                    <input type="file" name="profile" id="profile" class="mt-3">
                                </dov>
                            </div>

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
