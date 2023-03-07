<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="https://flowbite.com/" class="flex items-center">
        
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Buqo</span>
    </a>
    <div class="flex md:order-2">
      <div class="flex space-x-4">
        <a href="{{route('login')}}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a> 
        <a href="{{route('register')}}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button></a> 
      </div>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  
  <div class="flex justify-between m-24 " id="home">
    <div class="flex flex-col font-['Poppins'] mt-40 ">
      <h1 class="font-bold text-[38px]">Buqo</h1>
      <h1 class="text-[22px] max-w-2xl">Buqo merupakan sebuah website daftar buku yang berguna bagi kita melihat buku buku yang menarik untuk dibaca</h1>
    </div>
    <div class="mt-20">
      <img src="images/fix landing.png" alt="">
    </div>
  </div>

  <div class="bg-[#111827] flex flex-row justify-around mb-16 font-['Poppins']">
    <div class="flex flex-col mt-8 mb-8">
      <h1 class="text-5xl text-white font-semibold">1.400 +</h1>
      <p class="m-auto text-[#FFFFFF80] text-lg mt-8">Daftar Buku</p>
    </div>
    <div class="flex flex-col mt-8 mb-8">
      <h1 class="text-5xl text-white font-semibold">800 +</h1>
      <p class="m-auto text-[#FFFFFF80] text-lg mt-8">Pembaca</p>
    </div>
    <div class="flex flex-col mt-8 mb-8">
      <h1 class="text-5xl text-white font-semibold">200 +</h1>
      <p class="ml-2 text-[#FFFFFF80] text-lg mt-8">Member</p>
    </div>
  </div>  

  <div class="flex flex-col">
    {{-- bagian pertama --}}
    <div class="flex mx-auto flex-row space-x-20 font-[Poppins]">
      <div class="bg-white drop-shadow-lg rounded-lg">
        <div class="m-4">
          <p class="text-2xl mb-4">judul</p>
          <img src="images/demon.jpg" alt="" width="200" class="mb-4">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">edit</button>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">hapus</button>
        </div>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
    </div>

    {{-- bagian pertama --}}
    <div class="flex mx-auto flex-row space-x-20 mt-12 font-[Poppins]">
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
      <div>
        <p>judul</p>
        <img src="images/demon.jpg" alt="" width="200">
        <button>edit</button>
        <button>hapus</button>
      </div>
    </div>

  </div>
  
</body>
</html>