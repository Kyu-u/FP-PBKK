<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="/resources/css/app.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title>Home</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="paragraph">
    <div class="h-screen">
        <Nav class="pl-[643px]">
            <ul class="flex justify-between">
                <li class="pt-4">
                    <h1 class="text-4xl">Booking</h1>
                </li>
                <li class="pt-7">
                    <a class="text-2xl pr-9 " href="{{ route('signin') }}">Sign In</a>
                </li>
            </ul>
        </Nav>
    </div>
</body>
</html>
