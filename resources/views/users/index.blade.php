@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('Users')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Users Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Password
                                    </th>

                                    </thead>
                                    <tbody>
                                    @forelse($users as $user)
                                        <tr>

                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                {{$user->password}}
                                            </td>
                                            <td>
                                                <form action="/user/{{$user->id}}" method="post" style="display: inline !important;" id="delete">
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
