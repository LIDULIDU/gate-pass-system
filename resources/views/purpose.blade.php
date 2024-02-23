
 <x-admin-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('update user information') }}
         </h2>
     </x-slot>

     <!-- show Post -->

     <div>
         <form class="w-full" 
             method="POST>     
            {{ csrf_field() }}
            <div class="w-full px-16 py-20 mt-6
             overflow-hidden bg-white rounded-lg lg:max-w-4xl">

             <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

                 <!-- Title -->
                 <div>
                     <label class=" mt-3 block text-sm font-bold text-gray-700" for="Name">
                                    {{ __(' purpose ') }}:

                     </label>
                     <p class="mt-3">
                         {{ $visit->purpose }}</p>

                 </div>




                 <div class="flex justify-end">
                     <button type="submit"
                         class="px-6 py-2 text-sm font-semibold align:right text-gray-100 bg-red-500 rounded-md shadow-md hover:bg-red-300 focus:outline-none focus:border-gray-700 focus:ring ring-gray-300">
                         <a href="{{ route('visits.index') }}">Back</a>
                     </button>
                 </div>


             </div>
     </div>
     </form>
     </div>


 </x-admin-layout>
