<x-guest-layout>
  {{-- Breadcrumb --}}
  <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
    <div class="container mx-auto">
      <ul class="flex items-center">
        <li><a class="text-base text-red-800" href="{{route('home')}}">Home</a></li>
        <li class="mx-3"><i class="fa fa-angle-right"></i></li>
        <li><a class="text-base text-red-800" href="#">Properties</a></li>
      </ul>
    </div>
  </div>

  <!-- Title & Share -->
  <div class="bg-white py-8">
    <div class="container mx-auto">
      <h2 class="text-3xl text-gray-600">Properties
        @if(request('type') == '0')
          - All Lands
        @elseif(request('type') == 1)
          - All Villas
        @elseif(request('type') == 2)
          - All Apartments
        @endif
      </h2>
    </div>
  </div>

  <!-- Content -->
  <div class="container mx-auto py-10">
    <div class="md:flex md:justify-between">

      {{-- Left Content --}}
      <div class="md:w-9/12">
        <div class="flex flex-wrap justify-between mt-10">
          @foreach($latest_properties as $property)
            @include('components.single-property-card', ['property' => $property])
          @endforeach
        </div>
        {{$latest_properties->links()}}
      </div>{{-- Left Content End --}}

      {{-- Sidebar --}}
      <div class="md:w-3/12 mt-6 md:ml-6 md:mt-0">
        {{-- Form --}}

      </div>
    </div>
  </div>
</x-guest-layout>