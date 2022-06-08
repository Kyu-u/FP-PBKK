<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="resources/css/app.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title>Home</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="paragraph">
    <div class="flex h-screen">
       <!-- Image -->
        <div class="w-3/5 h-screen">
           <img src="pictures/tempat1.png" alt="">
       </div>
       <!-- Sign In -->
       <div class="justify-center pt-96">
           <h2 class="font-bold text-4xl pl-64 pb-6">Sign In</h2>
           <div class="flex text-2xl pl-16">
               <div>
                   <form action="">
                        <div class="flex">
                            <p class="pr-14">Email : </p>
                            <input class="bg-[#D9D9D9] rounded-lg pl-2 w-80 h-11" type="text" id="fname" name="fname">
                        </div>
                        <div class="flex pt-3">
                            <p class="pr-3">Password : </p>
                            <input class="bg-[#D9D9D9] rounded-lg pl-2 w-80 h-11" type="password" id="fpassword" name="fpassword">
                        </div>
                        <div class="flex pt-3">
                            <p class="pr-11">Phone : </p>
                            <input class="bg-[#D9D9D9] rounded-lg pl-4 w-80 h-11" type="text" id="fphone" name="fphone">
                        </div>
                        <div class="flex justify-end pt-6">
                            <input class="bg-[#008525] text-white w-28 h-11 rounded-lg" type="submit" value="Submit">
                        </div>
                   </form>
               </div>
           </div>
           <!-- Yes Account -->
           <div class="flex pl-56 pt-72">
                <div>
                    <p class="text-lg">No account yet?</p>
                    <div class="pt-2 pl-2">
                        <a class="" href="{{ route('signin') }}">
                            <div class="flex justify-center bg-indigo-700 w-32 h-11 rounded-lg pt-1 text-white text-2xl">
                                Sign In
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</body>
</html>
