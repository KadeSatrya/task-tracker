<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form action="{{ route('login.submit') }}" method="post">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required> 
        </div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        <div> 
        </div>

        <button type="submit">Login</button>
    </form>
    <div>
        Don't have an account yet? 
        <a href="{{ route('register') }}">
            Register
        </a>
    </div>
</body>

</html>