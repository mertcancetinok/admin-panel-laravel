@extends('layouts.app', ['activePage' => 'category', 'titlePage' => __('Categories')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Categories Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Color
                                    </th>
                                    <th>
                                        Actions
                                    </th>

                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                        <tr>
                                            <td>
                                                {{$category->id}}
                                            </td>
                                            <td>
                                                {{$category->name}}
                                            </td>
                                            <td>
                                                {{$category->color}}
                                            </td>
                                            <td>
                                                <a href="/category/{{$category->id}}/edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <form action="/category/{{$category->id}}" method="post" style="display: inline !important;" id="delete">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="#" onclick="document.getElementById('delete').submit()">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </form>

                                            </td>
                                        </tr>
                                        @empty
                                        <p>No found data</p>
                                    @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
