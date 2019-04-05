@extends('layouts/app',['title'=>'contact | '])


@section('content')
    <div class="container">
            <h2> Get In Touch</h2>

            <p class="text-muted">If you having trouble with this service, please 
                <a href="mailto:{{config('laracarte.admin_support_email')}}">ask for help.</a>
            </p>

            <form action="{{route('contact.store')}}" method="POST" >
                
                {{csrf_field()}}

                <div class="form-group {{$errors->has('name') ? 'has-error' : '' }}">

                    <label for="name" class="control-label">Name</label>
                    <input class="form-control" type="text" name="name" id="name" required="required" value="{{old('name')}}" }} >

                    {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">

                    <label for="email" class="control-label">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required="required" value="{{old('email')}}">

                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{$errors->has('message') ? 'has-error' : '' }}">

                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea class="form-control" type="text" name="message" id="message" cols="50" rows="10" required="required" >{{old('message')}}</textarea> 
                    
                    {!! $errors->first('message','<span class="help-block">:message</span>') !!} 
                </div>

                <div class="form-group">
                    <input class="form-control btn btn-primary"  type="submit" value="Submit Enquiry &raquo;">
                </div>
            </form>
    </div>
    

@stop

