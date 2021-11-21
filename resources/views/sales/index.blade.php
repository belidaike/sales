@extends('base')
@section('content')
<br><h1 class="text-center">Sales</h1><br>
<table class="table table-bordered table-stripped table-sm"> 
    <thead>
        <th>ProductId</th>
        <th>Total_sales</th>
    </thead>
    <tbody>
        @foreach($sales as $sale)
        <tr>
            <td>{{$sale->ProductId}}</td>
            <td>{{$sale->Total_sales}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop