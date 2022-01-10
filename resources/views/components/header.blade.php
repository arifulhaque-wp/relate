<header>
  <div class="fixed top-0 w-full py-4 px-12 text-white flex justify-between items-center z-30 sticky-header duration-500 {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
      <a class="logo" href="#">
        <img width="60" src="/images/logo.png" alt="">
      </a>
    </div>

    <div class="w-full">
      <ul class="flex justify-center">
        <li><a class="inline-block p-4 border-b-2 border-transparent hover:border-b-2 hover:border-gray-400" href="#">Land</a></li>
        <li><a class="inline-block p-4 border-b-2 border-transparent hover:border-b-2 hover:border-gray-400" href="#">Villa</a></li>
        <li><a class="inline-block p-4 border-b-2 border-transparent hover:border-b-2 hover:border-gray-400" href="#">Apartment</a></li>
        <li><a class="inline-block p-4 border-b-2 border-transparent hover:border-b-2 hover:border-gray-400" href="#">About Us</a></li>
        <li><a class="inline-block p-4 border-b-2 border-transparent hover:border-b-2 hover:border-gray-400" href="#">Blog</a></li>
        <li><a class="inline-block p-4 border-b-2 border-transparent hover:border-b-2 hover:border-gray-400" href="#">Contact Us</a></li>
      </ul>
    </div>

    <div class="min-w-max">
      <a href="">🏳‍🌈</a>
      <a href="">🏴</a>
      <a href="">🏳</a>
    </div>
  </div>
</header>