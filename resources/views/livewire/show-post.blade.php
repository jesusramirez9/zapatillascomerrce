<div class="bg-gray-100">
    <div class="container py-10">
        <h1 class="text-center text-2xl font-bold mb-10 text-gray-700 uppercase tracking-wide">Nuestros viajes</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mx-6 md:mx-0">
            @foreach ($posts as $item)
            <div>
                <div class="shadow-lg   bg-white">
                    <img src="{{Storage::url($item->image)}}" class="w-full h-64 object-cover object-center" alt="">
                    <h1 class="text-gray-700 pb-2 font-semibold p-4  uppercase">{{$item->title}}</h1>
                    <p class="pt-2 text-justify font-normal p-4 ">{{$item->content}}</p>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="px-6 py-3">
            {{ $posts->links() }}
        </div>
    </div>
</div>
