@extends('layouts.app', ['activePage' => 'blog', 'titlePage' => __('Blogs')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Blogs Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Category Name
                                    </th>
                                    <th>
                                        Author
                                    </th>
                                    <th>
                                        Actions
                                    </th>

                                    </thead>
                                    <tbody>
                                    @forelse($blogs as $blog)
                                        <tr>
                                            <td>
                                                {{$blog->id}}
                                            </td>
                                            <td>
                                                {{$blog->title}}
                                            </td>
                                            <td>
                                                {{$blog->categories->name}}
                                            </td>
                                            <td>
                                                {{$blog->user->name}}
                                            </td>
                                            <td>
                                                <a href="/blog/{{$blog->id}}/edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <form action="/blog/{{$blog->id}}" method="post" style="display: inline !important;" id="delete">
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
