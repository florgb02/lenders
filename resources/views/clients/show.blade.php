@extends('layouts.app')

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{$client->name}}</h1>
            </div>

            <div class="panel-body">
               <p class="address">Address: {{$client->address}}</p>
               <p class="address">Phone Number: {{$client->phone_number}}</p>
            </div>
        </div>
@endsection