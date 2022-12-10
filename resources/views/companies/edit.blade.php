@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-sm-9 col-md-9 col-lg-9 pull-left">
    <div class="row" style="background-color: #FFF; padding: 10px">
        <h1>Edit Company</h1>
        <form method="post" action="{{ route('companies.update', [$company->id]) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put" />
            <div class="form-group">
                <label for="company-name">Name<span class="required">*</span></label>
                <input
                    type="text"
                    placeholder="Enter Name"
                    id="company-name"
                    required
                    name="name"
                    spellcheck="false"
                    class="form-control"
                    value="{{$company->name}}"
                    />
            </div>
            <div class="form-group">
                <label for="company-email">Email</label>
                <input
                    type="email"
                    placeholder="Enter Email"
                    id="company-email"
                    name="email"
                    spellcheck="false"
                    class="form-control"
                    value="{{$company->email}}"
                    />
            </div>

       

            <div class="form-group">
                <label for="company-website">Website</label>
                <input
                    type="url"
                    placeholder="Enter Website"
                    id="company-website"
                    name="website"
                    spellcheck="false"
                    class="form-control"
                    value="{{$company->website}}"
                    />
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>
</div>
@endsection