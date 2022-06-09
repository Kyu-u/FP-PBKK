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
    <div class="h-screen">
        <Nav class="">
            <ul class="flex justify-between">
                <li class="pr-14">

                </li>
                <li class="pt-4">
                    <h1 class="text-4xl">Booking</h1>
                </li>
                <li class="pt-7">
                    <a class="text-2xl pr-9 " href="{{ route('signin') }}">Sign In</a>
                </li>
            </ul>
        </Nav>
        
        <!-- Picture -->
        <div class="pt-5">
            <img src="pictures/tempat2.png" alt="">
        </div>

        <!-- Card -->
        <div class="pt-10">
            <div class="pl-12">
                <p class="text-2xl font-bold">Recommended</p>
            </div>
            <div class="pl-12 pt-3 flex justify-between">
                @foreach($places as $place)
                <div>
                    <a href="">
                        <div class="w-96 h-72 relative">
                            <img class="absolute mix-blend-overlay" src="{{route('images.displayImage',$place->file)}}" alt="">
                            <div class="pt-36 text-black">
                                <p class="text-2xl pl-5">{{$place->name}}</p>
                                <p class="text-lg pl-6 break-normal">{{$place->location}}</p>
                                <p class="flex justify-end text-2xl font-bold pr-5">{{$place->price}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Form n Contact Us -->
        <div class="flex justify-between pt-16 pl-12 pb-10">
            <!-- Form -->
            <div>
                <h1 class="text-2xl font-bold">Interested in listing a place?</h1>
                <div>
                    <form method="POST" action="{{route('createplace.post')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex pt-5">
                            <p class="pr-5 text-2xl">Place Name : </p>
                            <input class="bg-[#D9D9D9] rounded-lg pl-2 w-[700px] h-11" type="text" id="name" name="name">
                        </div>
                        <div class="flex pt-3">
                            <p class="pr-14 text-2xl">Location : </p>
                            <input class="bg-[#D9D9D9] rounded-lg pl-2 w-[700px] h-11" type="text" id="location" name="location">
                        </div>
                        <div class="flex pt-3">
                            <p class="pr-24 text-2xl">Price : </p>
                            <input class="bg-[#D9D9D9] rounded-lg pl-2 w-[700px] h-11" type="text" id="price" name="price">
                        </div>
                        <div class="flex pt-3">
                            <p class="pr-[72px] text-2xl">Picture : </p>
                            <input class="bg-[#D9D9D9] rounded-lg pl-2 w-[700px] h-11" type="file" id="file" name="file">
                        </div>
                        <div class="flex justify-end pt-6">
                            <button class="bg-[#008525] text-white text-2xl w-28 h-11 rounded-lg" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Contact Us -->
            <div>
                <h1 class="text-2xl font-bold pr-80">Contact Us</h1>
                <p class="text-2xl pr-24 pt-7">Jalan Jembatan Besi Jaya No.9, <br> Jakarta Barat 11320, <br> DKI Jakarta, <br> Indonesia</p>
                <p class="text-2xl pr-56 pt-6">+(62)21-683-3204 <br> +(62)878-8689-3241</p>
            </div>
        </div>
    </div>
</body>
</html>
