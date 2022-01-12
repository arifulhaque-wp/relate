<div class="flex-1 shadow-lg relative rounded-md mx-4 mb-8">
  <a href="" class="absolute top-3 left-3 w-9 h-9 leading-10 self-center text-base bg-black text-white bg-opacity-25 text-center hover:bg-blue-900 hover:text-white duration-200 rounded-full"><i class="fa fa-heart-o"></i></a>
  <div class="py-20 rounded-t-md bg-center" style="background-image: url('/images/hero-bg.jpg')"></div>
  <div class="p-3">
    <h2 class="leading-0 text-base">{{$property->name}}</h3>
    <h3 class="text-2xl py-3">{{number_format($property->price), '2'}} &#8378;</h2>
    <div class="border-t-2">
      <ul class="flex items-center -mx-1 my-4">
        <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bedrooms}} Bedrooms</li>
        <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bathrooms}} Bathrooms</li>
        <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->net_sqm}} ft<sup>2</sup></li>
      </ul>
    </div>
    <a href="{{route('single-property', $property->id)}}" class="fullwidth-btn hover:bg-gray-600 duration-300">More details</a>
  </div>
</div>