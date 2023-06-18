<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Edit Menfess
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 text-white">
                <form action="{{route('tweets.update', $tweet->id)}}" method="post">
                @csrf
                @method('put')
                <textarea placeholder="Dari siapa?" name="from" class=" textarea textarea-bordered textarea-sm shadow-lg w-full max-w-full bg-neutral" required >{{ $tweet->from}}</textarea>
                <textarea placeholder="Untuk siapa?" name="for" class=" textarea textarea-bordered textarea-sm shadow-lg w-full max-w-full bg-neutral" required >{{ $tweet->for}}</textarea>
                <textarea placeholder="ISI MENFESS KAMU" name="content" class="textarea textarea-md textarea-bordered shadow-lg w-full bg-neutral" required>{{ $tweet->content}}</textarea>
                    <input type="submit" value="Edit" class="btn btn-primary" onclick = "fun();">
               </form>
              </div> 
            </div>
        </div>
    </div>
</x-app-layout>
<script type = "text/javascript">  
    function fun() {  


       alert ("Telah di edit");  
    }  
</script>    