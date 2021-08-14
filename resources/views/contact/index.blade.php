@extends('layouts.app', ['activePage' => 'contact', 'titlePage' => __('Contacts')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Contact Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    @forelse($contacts as $contact)
                                        <tr>
                                            <td>
                                                {{$contact->full_name}}
                                            </td>
                                            <td>
                                                {{$contact->email}}
                                            </td>
                                            <td>
                                                {{$contact->phone}}
                                            </td>
                                            <td>
                                                {{$contact->subject}}
                                            </td>
                                            <td>
                                                {{$contact->message}}
                                            </td>
                                            <td>
                                                <form action="/contact/{{$contact->id}}" method="post" style="display: inline !important;" id="delete">
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
