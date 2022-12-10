@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-sm-9 col-md-9 col-lg-9 pull-left">
    <div class="jumbotron">
        <h1>{{$company->name}}</h1>
        <p>Employees Number: {{$company->employeesNb}}</p>
        <p>EstablishmentDate: {{date('d-m-Y',strtotime($company->establishmentDate))}}</p>
        <p>Address: {{$company->street}} {{$company->city}} {{$company->state}}</p>
        <p><a href="mailto:{{$company->email}}">{{$company->email}}</a></p>
        <p><a href="{{$company->website}}" target="_blank">{{$company->website}}</a></p>
        <p>About: {{$company->about}}</p>
    </div>
</div>
</div>
@endsection