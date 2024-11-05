<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <!-- Include Laravel's default CSS file (optional) -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="container">
            <h2>Register</h2>

            <!-- Success Message -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Registration Form -->
            <form action="" method="POST">
                @csrf

                <!-- Name Field -->
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Confirmation Field -->
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>

                <!-- Submit Button -->
                <button type="submit">Register</button>
            </form>
        </div>

    </body>

</html>