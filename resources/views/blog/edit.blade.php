@extends('layouts.app', ['activePage' => 'blog-edit', 'titlePage' => $blog->title])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                    <form method="post" action="/blog/{{$blog->id}}">
                        @csrf
                        @method('PUT')
                        <img src="{{asset('images/'.$blog->image_path)}}" class="img-fluid">
                        <input type="hidden" value="{{$blog->image_path}}" name="image_path">
                        <input type="file" name="image">
                        <div class="form-group my-5">
                            <input type="text" class="form-control" name="title" placeholder="Blog Title" value="{{$blog->title}}">
                        </div>
                        <div class="form-group my-5">
                            <textarea name="description" class="form-control">{{$blog->description}}</textarea>
                        </div>
                        <div class="form-group my-5">
                            <label for="category">Category Name</label>
                            <select name="category" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{ $category->name === $blog->categories->name ? "selected" : "" }} >{{$category->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@prepend('js')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endprepend
