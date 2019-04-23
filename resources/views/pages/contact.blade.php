@extends('includes.layout')


@section('content')

<!--FORM CONTACT FOR EMAIL SENDING-->
<div class="form-contact">
    <div class="container">
        <h4>Send me en Email</h4>
        <form>  
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name">
            </div>

            <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email">
            <small class="form-text text-muted">My email is : ayoub77427@gmail.com</small>
            </div>

            <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject">
            </div>

            <div class="form-group">
            <label for="subject">Reason</label>
            <select class="form-control" id="subject">
                <option value="Just to say Hi">Just to say Hi</option>
                <option value="Business">Business</option>
                <option value="Software">Software</option>
                <option value="Others">Others</option>
            </select>
            </div>

            <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" id="subject"></textarea>
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
