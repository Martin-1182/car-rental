<x-guest-layout>
   <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
         <div class="p-6">
            <nav class="flex flex-wrap items-center justify-between p-4 border-b-2 border-fuchsia-600">
               <div class="lg:order-2 w-auto lg:w-1/5 lg:text-center"><a class="text-xl text-indigo-600 font-semibold font-heading" href="#">Cars for rent</a></div>
               <div class="block lg:hidden">
                  <button class="navbar-burger flex items-center py-2 px-3 text-indigo-500 rounded border border-indigo-500">
                     <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                     </svg>
                  </button>
               </div>
               <div class="navbar-menu hidden lg:order-1 lg:block w-full lg:w-2/5">
                 <a class="
                 block lg:inline-block mt-4 lg:mt-0 
                 mr-10 text-blue-900 hover:text-indigo-600"
                 href="{{ route('cars.index', array_merge(request()->query(), ['access' => 'free']))}}">Available Cars</a>
                 <a class="block lg:inline-block mt-4
                  lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="#">Team</a>
                  <a class="block lg:inline-block mt-4 lg:mt-0 
                  text-blue-900 hover:text-indigo-600" href="#">Customers</a>
                  </div>
            </nav>
            <!-- Grid -->
            <div class="flex flex-wrap -mx-1 overflow-hidden p-6">

               @foreach($cars as $car )
               <div class="my-1 px-1 w-1/6 overflow-hidden xl:w-1/3">
                  <div class="bg-white w-full flex items-center p-2 rounded-xl shadow-md border">
                     <div class="flex items-center space-x-4">
                        <img src="https://via.placeholder.com/150C/O https://placeholder.com/" alt="My profile" class="w-16 h-16 rounded-lg">
                     </div>
                     <div class="flex-grow p-3">
                        <div class="font-semibold text-gray-700">
                           <a href="">
                           {{$car->formatedBrand}}
                           </a>
                           <span class="uppercase">{{$car->formattedAccess}}</span>
                           
                        </div>
                        <div class="text-sm text-gray-500 uppercase">
                           Type: {{$car->type}} | Rent Price:{{$car->price}}
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach

            </div>
            <!-- End Grid -->
            <div class="flex p-4">
               <ul class="flex mx-auto md:mx-0 list-reset border border-grey-light rounded">
                  <li><a class="block px-3 py-2 text-indigo-600 hover:text-white hover:bg-indigo-700 border-r border-grey-light" href="#">Previous</a></li>
                  <li><a class="block px-3 py-2 text-indigo-600 hover:text-white hover:bg-indigo-700 border-r border-grey-light" href="#">1</a></li>
                  <li><a class="block px-3 py-2 text-indigo-600 hover:text-white hover:bg-indigo-700 border-r border-grey-light" href="#">2</a></li>
                  <li><a class="block px-3 py-2 text-indigo-600 hover:text-white hover:bg-indigo-700 border-r border-grey-light" href="#">3</a></li>
                  <li><a class="block px-3 py-2 text-indigo-600 hover:text-white hover:bg-indigo-700" href="#">Next</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</x-guest-layout>