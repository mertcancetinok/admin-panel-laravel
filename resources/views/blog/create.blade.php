@extends('layouts.app', ['activePage' => 'blog-create', 'titlePage' => __('Blog Create')])

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
                    <form method="post" action="/blog" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-5">
                            <input type="text" class="form-control" name="title" placeholder="Blog Title">
                        </div>
                        <div class="form-group my-5">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <label for="image">Select a file:</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                        <div class="form-group my-5">
                            <label for="category">Category Name</label>
                            <select name="category" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
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
