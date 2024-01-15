<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>
    <h2>Register</h2>
    <form action="{{ route('register.submit') }}" method="post">
        @csrf
        <div>
            <label for="email">Name:</label>
            <input type="email" id="email" name="email" required> 
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required> 
        </div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        <div> 
        </div>
        <div>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="password_confirmation" required>
        </div>

        <button type="submit">Register</button>

    </form>
    <div>
        Already have an account? 
        <a href="{{ route('login') }}">
            Login
        </a>
    </div>
</body>

</html>