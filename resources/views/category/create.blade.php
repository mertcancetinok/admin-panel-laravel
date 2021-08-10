@extends('layouts.app', ['activePage' => 'category-create', 'titlePage' => __('Category Create')])

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
                    <form method="post" action="/category">
                        @csrf
                        <div class="form-group my-5">
                            <input type="text" class="form-control" name="name" placeholder="Category Name">
                        </div>
                        <div class="form-group my-5">
                            <label for="#">Color:</label>
                            <input type="color" class="form-control" name="color" placeholder="Color">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
