<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-500">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-80">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold">Account</h1>
            </div>
            <div class="mt-6">
                <input type="email" id="email" placeholder="E-mail" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mt-4">
                <input type="password" id="password" placeholder="Password" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mt-6 flex items-center">
                <input type="checkbox" id="terms" class="mr-2">
                <label for="terms" class="text-gray-600">Agree with Terms & Conditions</label>
            </div>
            <div class="mt-8">
                <a href="{{url('/')}}">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-lg w-full">Create account</button>
                </a>
            </div>
            <div class="mt-8">
                <a href="{{url('/')}}">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-lg w-full">Login account</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>