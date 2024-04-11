<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ env('APP_NAME') }}!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="">
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <header class="flex justify-center items-center h-screen">
                <img class="w-1/12" src="https://cdn-icons-png.flaticon.com/512/751/751805.png" alt="">
        </header>

        <main class="">
            <h2 class="mt-6 text-gray-700 dark:text-gray-200">Hi {{ $user->name }},</h2>

            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                Welcome to {{ env('APP_NAME') }}! Get ready to meet your true love❤️!<br>
                If you have any questions, <a href="mailto:{{ env('CONTACT_MAIL') }}" class="underline transition-colors duration-200 hover:text-blue-600 dark:hover:text-blue-400">please get in touch</a>.
            </p>

            <p class="mt-2 text-gray-600 dark:text-gray-300">
                Thanks, <br>
                {{ env('APP_NAME') }} team
            </p>
            <div class="flex justify-center items-center mt-3 w-full">
                <a href="https://localhost:8000" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Get Started</a>
            </div>
        </main>

        <hr class="m-5">
        <footer class="text-center">
            <p class="mt-6 text-gray-500 dark:text-gray-400">
                This email was sent to <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">{{ $user->email }}</a>.
            </p>

            <p class="mt-3 text-gray-500 dark:text-gray-400">© {{ now()->format('Y') }} {{ env('APP_NAME') }}. All Rights Reserved.</p>
        </footer>
    </section>

</body>
</html>
