<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<title>Register</title>
</head>
<body>
	<div class="register-wrap">
        <div class="register-htmll">
            <div>
                <h1 style="text-align: center;color:#1161ee;margin-bottom: 60px;margin-left:-20px;font-family: 'nunito';font-weight: normal;">Welcome !</h1>
            </div>
            <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Register</label>
            <input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab"><a href="{{ route('login') }}">Login</a></label>
       <div class="register-form">
        <div class="sign-up-htm">
     <form action="{{ route('register') }}" method="post">
    @csrf
        <div class="group">
            <label for="username" class="label">Name</label>
            <input id="username" type="text" name="name" class="input @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="group">
            <label for="user" class="label">Email Address</label>
            <input id="user"  type="email" name="email" class="input  @error('email') is-invalid @enderror"  value="{{ old('email') }}"required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
		<div class="group">
			<label for="pass" class="label">Password</label>
			<input id="pass" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
			@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		</div>
		<div class="group">
			<label for="passw" class="label"> Confirm Password</label>
			<input id="passw" type="password" class="input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
			
		</div>
         
		<div class="hr"></div>
        <div class="foot-lnk">
        <div class="group">
            <input type="submit" class="button" value="Register"> 
            
        </div>
     </form>
        </div>
       </div>
        </div>
    </div>
</body>
</html>