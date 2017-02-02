@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários Cadastrados</div>

                <div class="panel-body">
                    <table>
                        <tr>
                            <th style="width: 10%">id</th>
                            <th style="width: 20%">Nome</th>
                            <th>Email</th>
                        </tr>
                        @foreach($users as $us)
                            <tr>
                                <td style="width: 10%">{{$us->id}}</td>
                                <td style="width: 30%">{{$us->name}}</td>
                                <td style="width: 30%">{{$us->email}}</td>
                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
