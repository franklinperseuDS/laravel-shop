<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">hello</div>
            <div class="col-md-3">boot</div>
            <div class="col-md-3">strap</div>
            <div class="col-md-3">teste</div>
        </div>
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
                    <td> {{ $client ->nomeclient}} </td>
                    <td> {{ $client ->email}} </td>
                    <td> {{ $client ->cpf}} </td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>

    </div>
</body>
</html>

