@extends('app')

@section('content')
<h2>Battlefield</h2>
<table class='stats table'>
    <thead>
    <th class='{{$racestyle}}'>Ranking</th><th  class='{{$racestyle}}' width='20%'>User</th><th class='{{$racestyle}}' width='20%'>Treasure</th><th class='{{$racestyle}}' width='20%'>Fort</th><th class='{{$racestyle}}' width='20%'>Units</th>
</thead>
@foreach ($usuarios as $index=>$usuario)
@if ($index%2==0)
<tr class="par">
    <td >{{$index}}</td><td>{{$usuario->usuario}}</td><td>{{$usuario->gold}}</td><td>{{$usuario->fort}}</td><td>{{$usuario->units}}</td>
</tr>
@else
<tr class="impar">
    <td >{{$index}}</td><td>{{$usuario->usuario}}</td><td>{{$usuario->gold}}</td><td>{{$usuario->fort}}</td><td>{{$usuario->units}}</td>
</tr>
@endif
@endforeach
</table>
@endsection
