@extends('layouts.app')

@section('content')

    @if (count($clients) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Clients
            </div>

            <div class="panel-body">
                <h1>Clients</h1>
                 
                 @foreach ($clients as $client)
                      <div><a href="{{ url('/clients/'.$client->id) }}">{{ $client->name }}</a></div>

                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection