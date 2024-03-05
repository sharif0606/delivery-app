<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('backend/css/auth.css')}}">
    <script src="https://kit.fontawesome.com/03605a480d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form name="formId" method="post" action="{{route('register')}}" id="formId">
            @csrf
            <div class="input-group">
                <div class="input-field" id="nameField" >
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
                    @if($errors->has('name'))
                        <small class="d-block text-danger">
                            {{$errors->first('name')}}
                        </small>
                    @endif
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>  
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email">
                    @if($errors->has('email'))
                        <small class="d-block text-danger">
                            {{$errors->first('email')}}
                        </small>
                    @endif
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" name="password" placeholder="Password">
                    @if($errors->has('password'))
                        <small class="d-block text-danger">
                            {{$errors->first('password')}}
                        </small>
                    @endif
                </div>
                <div class="input-field" id="password_confirmation">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" name="password_confirmation" placeholder="Retype Password">
                </div>
                <p><b>By clicking sign up button you are agree to our<br>Terms and Condition and Privacy Policies.</b></p>
            </div>
            <div class="btn-field">
                <button type="submit" id="submitBtn">Sign Up</button>
            </div>
            <div class="">
                <a href="javascript:void(0)" id="signupBtn">Sign Up</a>
                <a href="javascript:void(0)" id="signinBtn" class="disable">Sign In</a>
            </div>
        </form>
    </div>
</div>
<script>
    let signupBtn = document.getElementById("signupBtn");
    let signinBtn = document.getElementById("signinBtn");
    let nameField = document.getElementById("nameField");
    let password_confirmation = document.getElementById("password_confirmation");
    let submitBtn = document.getElementById("submitBtn");
    let title = document.getElementById("title");

    signinBtn.onclick=function(){
        nameField.style.maxHeight="0";
        password_confirmation.style.maxHeight="0";
        submitBtn.innerHTML="Sign In";
        title.innerHTML="Sign In";
        document.formId.action = "{{route('login')}}";
        signupBtn.classList.add("disable");
        signinBtn.classList.remove("disable");
    }
    signupBtn.onclick=function(){
        nameField.style.maxHeight="60px";
        password_confirmation.style.maxHeight="60px";
        submitBtn.innerHTML="Sign Up";
        title.innerHTML="Sign Up";
        document.formId.action = "{{route('register')}}";
        signupBtn.classList.remove("disable");
        signinBtn.classList.add("disable");
    }
</script>
</body>
</html>