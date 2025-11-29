<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>

    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-sm bg-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <form action="#" method="POST" class="space-y-5">

            <!-- Email -->
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter your email" required />
            </div>

            <!-- Password -->
            <div>
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter your password" required />
            </div>

            <!-- Login Button -->
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Login
            </button>

            <!-- Register Link -->
            <p class="text-center text-sm">
                Belum punya akun?
                <a href="http://localhost/" class="text-blue-600 hover:underline">Register</a>
            </p>

        </form>
    </div>

</body>

</html>