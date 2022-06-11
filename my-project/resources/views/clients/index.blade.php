@extends('clients.clientsLayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card-header">
                    <h2>
                        Laravel Clients crud
                    </h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/client/store') }}" class="btn btn-success btn-sm"> 
                         <i class="fa fa-plus" aria-hidden="true"></i> Add new
                    </a>

                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> #</th>
                                    <th> Name</th>
                                    <th> Email</th>
                                    <th> CPF</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td> {{ $client ->id}} </td>
                                        <td> {{ $client ->nomecliente}} </td>
                                        <td> {{ $client ->email}} </td>
                                        <td> {{ $client ->cpf}} </td>
                                        <td>
                                            <a href="{{ url('/client/'. $client->id) }}">Edit</a>
                                            <a href="">Delete</a>
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