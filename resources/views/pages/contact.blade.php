@extends('includes.layout')


@section('content')

<!--FORM CONTACT FOR EMAIL SENDING-->
<div class="form-contact">
    <div class="container">
        <h4>Send me en Email</h4>
        <small class="form-text text-muted">My email is : ayoub77427@gmail.com</small>
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{Session::get('flash_message')}}
                </div>
            @endif
        <form method="POST" action="/contact">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
                @if($errors->has('subject'))
                    <div class="invalid-feedback">
                        {{$errors->first('subject')}}
                    </div>
                @endif
            </div>

    
            <div class="form-group">
            <label for="subject">Message</label>
            <textarea class="form-control" id="subject" rows="5"name="message"></textarea>
                @if($errors->has('message'))
                    <div class="invalid-feedback">
                        {{$errors->first('message')}}
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>

        </form>
    </div>
</div>
@endsection



@section('script-navbar-change')

<script>

        var nav = document.getElementById('nav');
        
        window.onload = function(){

            nav.style.background = "#000";
           
        }
        
        window.onscroll = function(){
            if(window.pageYOffset > 0){
            nav.classList.remove('navbar-light');
            nav.classList.add('navbar-dark');
            }
        }
</script>
@endsection
