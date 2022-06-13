@extends('clients.clientsLayout')
@section('content')

<div class="card">
    <div class="card-header">Edit Client</div>
    <div class="card-body">
        <form action="{{ url('client/'.$client->id)}}" method="post">
            {!! csrf_field() !!}
           
            <input type="hidden" name='id' id='id' value='{{$client->id}}'/> 
            <label for="nomecliente"> Nome do cliente: </label>
            <input type="text" name='nomecliente' value="{{$client->nomecliente}}" class="form-control">

            <label for="cpf"> CPF : </label>
            <input type="text" name='cpf' value="{{$client->cpf}}" class="form-control">

            <label for="email"> email: </label>
            <input type="text" name='email' value="{{$client->email}}" class="form-control">
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>

@endsection