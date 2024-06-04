<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="container mx-auto login-container">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <div class="bg-blue-600 text-white text-center py-4 rounded-t-lg">
            <h3 class="text-2xl font-semibold">Login</h3>
        </div>
        <div class="p-6">
            <form action="login-method" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div>
                    <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
