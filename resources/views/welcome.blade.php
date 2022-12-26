<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

              <div class="nav flex items-center justify-between p-4">
                  <div class="flex items-center space-x-4  ">
                    <div class="barger my-4 space-y-1 ml-2 cursor-pointer md:hidden ">
                        <div class="bg-black w-[1.25rem] h-0.5"></div>
                        <div class="bg-black w-[1.25rem] h-0.5"></div>
                        <div class="bg-black w-[1.25rem] h-0.5"></div>
                        
                    </div>
                    <div class="search md:hidden"><i class="fa fa-search" style="font-size:18px;;color:rgb(150, 144, 144);"></i></div>
                </div>
                  <div class="text-center flex space-x-7 md:order-first">
                    <div>
                      <img width="100px" height="70px" src="images/logo.png" alt="">
                    </div>
                    <div class="feacture  display:hidden md:static w-fit md:w-auto md:flex md:wx-1 md:space-x-3   ">
                      <div>Miscrsoft 360</div>
                      <div>Office</div>
                      <div>Window</div>
                      <div>Support</div>
                    </div>
                  </div>
                  <div class="flex space-x-6  md:order-last">
                    <div class="search hidden md:block c"><i class="fa fa-search" style="font-size:18px;;color:rgb(150, 144, 144);"></i></div>
                    <div><i class="fa fa-shopping-cart" style="font-size:18px;;color:rgb(150, 144, 144);"></i></div>
                    <div><i class="fa fa-user" style="font-size:18px;color:rgb(150, 144, 144);"></i></div>
                  </div>
            </div>
        <div class="main flex flex-col-reverse  md:flex md:flex-row md:bg-slate-300">
          <div class="left flex flex-col items-center justify-center ">
            <h1 class="font-bold text-2xl text-black mb-4 md:text-white">Designed for life today – and tomorrow</h1>
            <p class="w-3/2 mx-5 text-center text-black mb-4 md:text-white">The next-generation of games. Your goals. Friends and family. Windows 11 was made to bring you closer to everything you love.</p>
            <a href="" class="hover:bg-blue-600 text-white bg-black px-7 py-2 mb-4 md:text-white md:bg-blue-500">See if your PC is ready</a>
          </div>
          <div class="right">
            <img class="mb-5" src="images/img1.avif" alt="">
          </div>
        </div >
        <div class="md:flex md:mt-16 md:space-x-4 md:px-16">
          <div class="gallary w-fit ">
            <div>
              <img class="mb-3" src="images/img2.avif" alt="">
            </div>
            <div class="ml-8 mb-5">
                  <h1 class="mb-3 text-2xl font-medium">Miscrsoft 360</h1>
                  <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
                  </p>
                  <a href="" class="text-blue-600 text-2xl ">Download</a>
            </div>
        
        </div>

        <div class="gallary w-fit">
          <div>
            <img class="mb-3" src="images/img3.webp" alt="">
          </div>
          <div class="ml-8 mb-5">
                <h1 class="mb-3 text-2xl font-medium">Miscrsoft edge</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
                </p>
                <a href="" class="text-blue-600 text-2xl mb-5">Download</a>
          </div>
      
      </div>

      <div class="gallary w-fit">
        <div>
          <img class="mb-3" src="images/img4.webp" alt="">
        </div>
        <div class="ml-8 mb-5">
              <h1 class="mb-3 text-2xl font-medium">Miscrsoft OneDrive</h1>
              <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
              </p>
              <a href="" class="text-blue-600 text-2xl mb-5">Download</a>
        </div>
    
    </div>

    
  <div class="gallary ">
    <div>
      <img class="mb-3" src="images/img7.webp" alt="">
    </div>
    <div class="ml-8 mb-5">
          <h1 class="mb-3 text-2xl font-medium">OneNote</h1>
          <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
          </p>
          <a href="" class="text-blue-600 text-2xl mb-5">Download</a>
    </div>

</div>
        </div>

        <div class="gallary  md:flex md:flex-row-reverse md:w-[80rem]" >
          <div>
            <img class="mb-3" src="images/img5.avif" alt="">
          </div>
          <div class="ml-8 mb-3 md:bg-[#e6e6e6] md:flex md:flex-col  md:justify-center ">
                <h1 class="mb-3 text-2xl font-medium md:ml-28">Outlook for IOS and<br> Android</h1>
                <p class="mb-3 md:ml-28">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
                </p>
                <a href="" class="text-blue-600 text-2xl md:font-sans md:text-lg mb-5 md:ml-28 md:bg-blue-700 md:px-6 md:w-[8rem] md:h-[2.25rem] md:py-1 md:text-white md:font-medium ">Download</a>
          </div>
      
      </div>

  
      <div class="ml-3 mb-5 md:ml-16 md:mt-8">
        <h1 class="text-2xl font-bold">For business</h1>
      </div>
      <div class="md:flex md:mt-16 md:space-x-4 md:px-16">
        <div class="gallary w-fit ">
          <div>
            <img class="mb-3" src="images/img7.webp" alt="">
          </div>
          <div class="ml-8 mb-5">
                <h1 class="mb-3 text-2xl font-medium">Get Miscrsoft Team For Free</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
                </p>
                <a href="" class="text-blue-600 text-2xl ">Sign up for free</a>
          </div>
      
      </div>

      <div class="gallary w-fit">
        <div>
          <img class="mb-3" src="images/img8.webp" alt="" width="100%">
        </div>
        <div class="ml-8 mb-5">
              <h1 class="mb-3 text-2xl font-medium">Welcome to your Window 365 cloud PC</h1>
              <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
              </p>
              <a href="" class="text-blue-600 text-2xl mb-5">Get it Today</a>
        </div>
    
    </div>

    <div class="gallary w-fit">
      <div>
        <img class="mb-3" src="images/img9.webp" alt="" width="100%">
      </div>
      <div class="ml-8 mb-5">
            <h1 class="mb-3 text-2xl font-medium">Miscrsoft 365 for business</h1>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
            </p>
            <a href="" class="text-blue-600 text-2xl mb-5">Shop Now</a>
      </div>
  
  </div>

  
        <div class="gallary w-fit">
          <div>
            <img class="mb-3" src="images/img10.webp" alt="" width="100%">
          </div>
          <div class="ml-8 mb-5">
                <h1 class="mb-3 text-2xl font-medium">Get Visual Studio 2022</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti numquam id at?
                </p>
                <a href="" class="text-blue-600 text-2xl mb-5">Download Now ></a>
          </div>

        </div>
      <div>
      </div>
    </div>
        <div class="flex items-center space-x-10 ml-3 md:mt-5 md:ml-14">
          <h1>Follow Microsoft</h1>
          <a href=""><i class="fa fa-facebook" style="font-size:24px"></i></a>
          <a href=""><i class="fa fa-twitter" style="font-size:24px"></i></a>
          <a href=""><i class="fa fa-linkedin" style="font-size:24px"></i></a>
        </div>
        <div class=" mt-5 mx-4 md:pl-[72rem]">
          <a href="" class="flex justify-center rounded font-semibold bg-gray-400 py-3 hover:bg-white hover:shadow-md">Back to top</a>
        </div>

        <div class="bg-gray-200 pl-5 mt-5 pt-5 space-y-4 md:flex  md:space-x-5">
          <div class="flex flex-col bg-gray-200 pl-5 mt-5 pt-5 space-y-4">
            <h1 class="font-bold">Microsoft Store</h1>
            <a href="" class="text-xs">Account profile</a>
            <a href="" class="text-xs">Download Center</a>
            <a href="" class="text-xs">Returns</a>
            <a href="" class="text-xs">Order tracking</a>
          </div>
          <div class="flex flex-col bg-gray-200 pl-5 mt-5 pt-5 space-y-4">
            <h1 class="font-bold">Education</h1>
            <a href="" class="text-xs" >Microsoft in education</a>
            <a href="" class="text-xs">Devices for education</a>
            <a href="" class="text-xs">Microsoft Teams for Education</a>
            <a href="" class="text-xs">Microsoft 365 Education</a>
            <a href="" class="text-xs">Office Education</a>
            <a href="" class="text-xs">Educator training and development</a>
            <a href="" class="text-xs">Deals for students and parents</a>
            <a href="" class="text-xs">Azure for students</a>
          </div>
          <div class="flex flex-col bg-gray-200 pl-5 mt-5 pt-5 space-y-4">
            <h1 class="font-bold">Business</h1>
            <a href="" class="text-xs">Account profile</a>
            <a href="" class="text-xs">Download Center</a>
            <a href="" class="text-xs">Returns</a>
            <a href="" class="text-xs">Order tracking</a>
          </div>
          <div class="flex flex-col bg-gray-200 pl-5 mt-5 pt-5 space-y-4">
            <h1 class="font-bold">Education</h1>
            <a href="" class="text-xs" >Microsoft in education</a>
            <a href="" class="text-xs">Devices for education</a>
            <a href="" class="text-xs">Microsoft Teams for Education</a>
            <a href="" class="text-xs">Microsoft 365 Education</a>
            <a href="" class="text-xs">Office Education</a>
            <a href="" class="text-xs">Educator training and development</a>
            <a href="" class="text-xs">Deals for students and parents</a>
            <a href="" class="text-xs">Azure for students</a>
          </div>
          <div class="flex flex-col bg-gray-200 pl-5 mt-5 pt-5 space-y-4">
            <h1 class="font-bold">Company</h1>
            <a href="" class="text-xs">Microsoft in education</a>
            <a href="" class="text-xs">Devices for education</a>
            <a href="" class="text-xs">Microsoft Teams for Education</a>
            <a href="" class="text-xs">Microsoft 365 Education</a>
            <a href="" class="text-xs">Office Education</a>
            <a href="" class="text-xs">Educator training and development</a>
            <a href="" class="text-xs">Deals for students and parents</a>
            <a href="" class="text-xs">Azure for students</a>
          </div>
        </div>
        <div class="bg-gray-200 pl-5  pt-5 space-x-4">
          <div class="flex space-x-4">
            <i class="fa fa-globe" style="font-size:24px; color:light-gray;"></i>
            <h4 class="text-xs">English (pakistan)</h4>
          </div>
          <div class="pt-5 space-x-2 md:pl-[50rem] md:pb-5">
            <a href="" class="text-xs">Contact Microsoft</a>
            <a href="" class="text-xs">Privacy</a>
            <a href="" class="text-xs">Terms of use</a>
            <a href="" class="text-xs">Trademarks</a>
            <a href="" class="text-xs">About our ads</a>
          </div>
        </div>
     


    
</body>
</html>