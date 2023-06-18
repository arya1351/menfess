<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 text-white">
                <form action="{{route('tweets.store')}}" method="post">
                @csrf
                <textarea placeholder="Bio" name="content" class=" textarea textarea-bordered textarea-lg shadow-lg w-full max-w-full bg-neutral" ></textarea>
                        <input type="submit" value="Tweet" class="btn btn-primary">
               </form>
              </div> 
            </div>
        </div>
    </div>
  
</x-app-layout>
