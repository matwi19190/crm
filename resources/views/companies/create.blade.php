@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-sm-9 col-md-9 col-lg-9 pull-left">
    <div class="row" style="background-color: #FFF; padding: 10px">
        <h1>Add Company</h1>
        <form method="post" action="{{ route('companies.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="company-name">Name<span class="required">*</span></label>
                <input
                    type="text"
                    placeholder="Enter Name"
                    id="company-name"
                    name="name"
                    required
                    spellcheck="false"
                    class="form-control"
                    value="{{old('name')}}"
                    />
            </div>

            <div class="form-group">
                <label for="establishment-date">Establishment Date<span class="required">*</span></label>
                <input
                    type="date"
                    placeholder="Enter Date"
                    id="establishment-date"
                    name="establishmentDate"
                    required
                    class="form-control"
                    value="{{old('establishmentDate')}}"
                    />
            </div>

            <div class="form-group">
                <label for="employees-nb">Employees Number<span class="required">*</span></label>
                <input
                    type="number"
                    placeholder="Enter Employees Number"
                    id="employees-nb"
                    name="employeesNb"
                    required
                    class="form-control"
                    value="{{old('employeesNb')}}"
                    />
            </div>
            
            <div class="form-group">
                <label for="street">Street<span class="required">*</span></label>
                <input
                    type="text"
                    placeholder="Enter Street"
                    id="street"
                    name="street"
                    required
                    spellcheck="false"
                    class="form-control"
                    value="{{old('street')}}"
                    />
            </div>

            <div class="form-group">
                <label for="city">City<span class="required">*</span></label>
                <input
                    type="text"
                    placeholder="Enter City"
                    id="city"
                    name="city"
                    required
                    spellcheck="false"
                    class="form-control"
                    value="{{old('city')}}"
                    />
            </div>

            <div class="form-group">
                <label for="state">State<span class="required">*</span></label>
                <input
                    type="text"
                    placeholder="Enter State"
                    id="state"
                    name="state"
                    required
                    spellcheck="false"
                    class="form-control"
                    value="{{old('state')}}"
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
                    value="{{old('email')}}"
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
                    value="{{old('website')}}"
                    />
            </div>

            <div class="form-group">
                <label for="about">About text</label>
                <textarea  id="about"
                    name="about"
                    spellcheck="false"
                    class="form-control"
                    value="{{old('about')}}" cols="30" rows="4">Enter Text</textarea>
            </div>


            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>
</div>
@endsection