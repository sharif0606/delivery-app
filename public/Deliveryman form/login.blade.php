<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
    <link rel="stylesheet" href="{{asset('backend/css/auth.css')}}">
</head>

<body>
    <div class="box">
        <form name="formId" method="post" action="{{route('register')}}" id="formId">
            @csrf
            <h2>Log In</h2>
            <div class="inputbox">
                <input type="email" required="required" name="email" value="{{old('email')}}">
                @if($errors->has('email'))
                    <small class="d-block text-danger">
                        {{$errors->first('email')}}
                    </small>
                @endif
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="password">
                @if($errors->has('password'))
                    <small class="d-block text-danger">
                        {{$errors->first('password')}}
                    </small>
                @endif
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="{{route('signin')}}">SignUp</a>
            </div>
            <input type="submit" value="Log In">
        </form>
    </div>
<script>
    document.formId.action = "{{route('login')}}";
</script>
</body>

</html>