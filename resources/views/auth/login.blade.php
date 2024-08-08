<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen text-gray-800 font-inter">
    
    <!-- Login Container -->
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-white mb-6">Admin Login</h2>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-400 mb-2">Email</label>
                <input type="email" id="email" class="w-full p-3 rounded bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-400 mb-2">Password</label>
                <input type="password" id="password" class="w-full p-3 rounded bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
            </div>
            <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Login</button>
        </form>
    </div>

</body>
</html>
