<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-200">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-semibold mb-6 text-black text-center">Create Account</h2>
        <form action="/create-account" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" placeholder="Full Name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm text-gray-600">E-mail</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" placeholder="Password" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm text-gray-600">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" placeholder="Confirm Password" required>
            </div>
            <div class="flex items-center mb-4">
                <input type="checkbox" id="terms" name="terms" class="mr-2">
                <label for="terms" class="text-sm text-gray-600">Agree with Terms & Conditions</label>
            </div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Create Account</button>
        </form>
        <p class="mt-4 text-sm text-center text-gray-600">Already have an account? <a href="/login_akun" class="text-blue-500 hover:underline">Login here</a></p>
    </div>
</body>
</html>
