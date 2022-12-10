@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Companies Listing
            <a class="btn btn-primary pull-right btn-sm" href="/companies/create">Create New Company</a>
            </h5> 
            @if(count($companies) > 0)
            <ul class="list-group" id="list-container">
                @foreach($companies as $company)
                <li class="list-group-item"><a href="/companies/{{$company->id}}">{{ $company->name }}</a></li>
                @endforeach
            </ul>
            {{ $companies->links() }}
            @else
            <h4>No Companies</h4>
            @endif
        </div>
    </div>
</div>
</div>

@endsection