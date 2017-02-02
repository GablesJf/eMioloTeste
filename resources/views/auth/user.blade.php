@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dados do Usuário</div>

                <div class="panel-body">
                    Id : {{$user[0]->id}}<br>
                    Nome : {{$user[0]->name}}<br>
                    Email : {{$user[0]->email}}<br>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
