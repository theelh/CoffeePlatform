<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-white leading-tight">
            {{ __('Latest Posts') }}
        </h2>
    </x-slot>

    <div class="py-12 dark:bg-black bg-emerald-950">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden max-w-xl justify-center items-center shadow-sm sm:rounded-lg">
                @foreach ($last as $post)
                <div class="p-6 my-6 flex dark:bg-white bg-white items-center lg:rounded-lg flex-col dark:text-black text-black">
                    <div class="flex-col h-full">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                <img width="50" height="50" src="../images/CoffeBeainWithShadow.png" alt="logo"/>
                                <h1 class="font-black">{{ Auth::user()->name }}</h1>
                            </div>
                            @if (Auth::user()->id == 1)
                                <form action="{{ route('deletePost', $post->id) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="px-4 py-2 flex bg-red-500 text-black rounded hover:bg-red-600">
                                        <img height="20" width="20" src="../icons/trash.png" alt="deleteIcon"/>
                                    </button>
                                </form>                            
                            @endif
                        </div>
                        <h2 class="text-xl">{{$post->title}}</h2>
                        <p class="text-xs mb-6 mt-2 text-gray-400">created at - {{$post->created_at}}</p>
                        <img class="rounded-e-lg" width="300" height="300" src="/images/{{$post->image}}" alt="post img"/>
                        <h2 class="py-6 text-sm text-gray-800">{{$post->description}}</h2>
                    </div>
                </div>
                <div class="border-t mt-1"/>
                @endforeach
            </div>
        </div>
    </div>
    <!--Footer container-->
    <footer
    class="flex flex-col items-center bg-zinc-50 text-center text-surface dark:bg-neutral-700 dark:text-white">
        <div class="container px-6 pt-6">
            <!--Copyright section-->
            <div class="w-full bg-black/5 p-4 text-center">
            © 2024 Copyright - 
            <a href="/">Ecafflein</a>
            </div>
        </div>
    </footer>
</x-app-layout>

