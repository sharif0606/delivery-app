<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in form</title>
    <link rel="stylesheet" href="{{asset('backend/css/auth.css')}}">
</head>

<body>
    <div class="box">
        <form name="formId" method="post" action="{{route('register')}}" id="formId">
            @csrf
            <h2>Sign Up</h2>
            <div class="inputbox">
                <input type="name" required="required" name="name" value="{{old('name')}}">
                <span>Username</span>
                <i></i>
            </div>
            @if($errors->has('name'))
                <small class="d-block text-danger">
                    {{$errors->first('name')}}
                </small>
            @endif

            <div class="inputbox">
                <input type="email" required="required" name="email" value="{{old('email')}}">
                <span>Email</span>
                <i></i>
            </div>
            @if($errors->has('email'))
                <small class="d-block text-danger">
                    {{$errors->first('email')}}
                </small>
            @endif

            <div class="inputbox">
                <input type="password" required="required" name="password">
                <span>Password</span>
                <i></i>
            </div>
            @if($errors->has('password'))
                <small class="d-block text-danger">
                    {{$errors->first('password')}}
                </small>
            @endif

            <div class="inputbox">
                <input type="password" required="required" name="password_confirmation">
                <span>Confirm password</span>
                <i></i>
            </div>

            <div class="links">
                <a href="{{route('loggedin')}}">Log In</a>
            </div>
            <input type="submit" value="Sign up">
        </form>
    </div>
    
    <script>
        let password_confirmation = document.getElementById("confirm_password");
        document.formId.action = "{{route('register')}}";
    </script>
</body>
</html>