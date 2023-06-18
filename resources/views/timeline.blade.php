<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            <a  href="{{ url('/timeline') }}" >Menfess</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 text-white">
                <form action="{{route('tweets.store')}}" method="post">
                @csrf
                <textarea maxlength="10" placeholder="Dari siapa?" name="from" class=" textarea textarea-bordered textarea-sm shadow-lg w-full max-w-full bg-neutral" required ></textarea>
                <textarea maxlength="10" placeholder="Untuk siapa?" name="for" class=" textarea textarea-bordered textarea-sm shadow-lg w-full max-w-full bg-neutral" required ></textarea>
                <textarea maxlength="255" placeholder="ISI MENFESS KAMU" name="content" class="textarea textarea-md textarea-bordered shadow-lg w-full bg-neutral" required></textarea>
                <input type="submit" value="Tweet" class="btn btn-primary">
               </form>
              </div> 
            </div>
        </div>
    </div>
   @foreach ($tweets as $tweet)
    <div class="card max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center space-y-2 bg-gray-100  text-gray-700-content my-4 bordered-white">
            <div class="card-body ">  
        <h1 class="font-bold uppercase card-title">teruntuk : {{ $tweet->for}}</h1>
           <h1 class="font-bold uppercase ">Dari : {{ $tweet->from}}</h1>
          <p>{{ $tweet->content}}</p>
          <div class="card-actions justify-end">
           @can('update', $tweet)
           <a href="{{route('tweets.edit', $tweet->id) }}"
            class="text-green-900">Edit</a>
           @endcan
           @can('delete', $tweet)
           <form action="{{route('tweets.destroy',$tweet->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error btn-xs">Hapus</button>
        </form>
           @endcan
           
            <h1>{{ $tweet->created_at->diffForHumans()}}</h1>
          </div>
        </div>
      </div>
      @endforeach
</x-app-layout>
