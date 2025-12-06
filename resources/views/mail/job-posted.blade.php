<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobsLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google Sans Code">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="antialiased font-semibold bg-blue-900 text-white min-h-screen" style="font-family:Google Sans Code">

    <div class="p-3">
        <h2 class="text-2xl text-center font-bold mb-4">New Job Posted Successfully!</h2>
        {{-- <p>Job Title: {{ $job->title }}</p>
        <p>Company: {{ $job->employer->name }}</p>
        <p>Salary: {{ $job->salary }} per year</p>
        <p>Description: {{ $job->description }}</p>
        <p>To view the job posting, click
            <a href="{{ url('/jobs/' . $job->id) }}">here</a>.</p> --}}
        <p class="p-3 m-3">Thank you for using our job portal!</p>
        <p class="p-3 m-3">Best regards,<br>The Job Portal Team</p>

    </div>
</body>
</html>
