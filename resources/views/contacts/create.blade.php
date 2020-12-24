@extends('layouts.default', ['title' => 'contact'])

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-md-8 ">
            <br>
            @if (! session()->has('message'))
                <h2>Get In Touch</h2>

                <p><span class="text-muted">If you having trouble with this service, please <a href="
                mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>.</span></p>

                <form method="POST" action="/contact">

                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label class="control-label" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" value="{{ old('name')}}" required="required">
                        {!! $errors->first('name', '<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>

                    <div class="form-group ">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email')}}" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" required="required">
                        {!! $errors->first('email', '<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <br>
                    <div class="form-group ">
                        <label class="control-label sr-only" for="message">Message</label>
                    <textarea name="message" id="message" cols="10" rows="10" class="form-control {{ $errors->has('message') ? 'is-invalid' : ''}}">{{ old('message')}}</textarea>
                    {!! $errors->first('message', '<span class="help-block" style="color: red;">:message</span>') !!} 
                    </div>
                    <br>    
                    <div class="form-group">
                        <button class="btn btn-primary btn-block form-control" type="submit">Submit Enquiry &raquo;</button>
                    </div>

                </form>
            @endif
        </div>
    </div>
</div>
@endsection