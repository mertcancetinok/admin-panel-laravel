@extends('layouts.app', ['activePage' => 'comment', 'titlePage' => __('Comments')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Comments Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Blog Title
                                    </th>
                                    <th>
                                        Comment
                                    </th>
                                    <th>
                                        User Full Name
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    @forelse($comments as $comment)
                                        <tr>
                                            <td>
                                                {{$comment->blog->title}}
                                            </td>
                                            <td>
                                                {{$comment->comment_text}}
                                            </td>
                                            <td>
                                                {{$comment->user->name}}
                                            </td>
                                            <td>
                                                {{$comment->created_at->diffForHumans()}}
                                            </td>
                                            <td>
                                                <a href="{{env('MAIN_SITE').'detail.php?id='.$comment->blog->id}}" target="_blank">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                <form action="/comment/{{$comment->id}}" method="post" style="display: inline !important;" id="delete">
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
