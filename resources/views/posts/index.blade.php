<x-app-layout>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post )
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif"
                style="background-image: url({{ Storage::url($post->image->url) }})">
                <div class='w-full h-full px-8 flex flex-col justify-center'>

                    <div>
                        @foreach ($post->etiquetas as $etiqueta)
                        <a href="{{route('posts.etiqueta',$etiqueta)}}" class="inline-block px-3 h-6 bg-{{ $etiqueta->color }}-600 text-white rounded-full">
                            {{ $etiqueta->name }}
                        </a>
                        @endforeach

                    </div>


                    <h1 class="text-4xl text-white leading-8 fond-bold">
                        <a href="{{route('posts.show',$post)}} " >
                            {{$post->name}}
                        </a>
                    </h1>
                </div>
            </article>
            @endforeach
        </div>


    <div class=" mt-4 py-4 items-center justify-between">

        {{ $posts->links() }}
    </div>
    </div>
</div>

</x-app-layout>
