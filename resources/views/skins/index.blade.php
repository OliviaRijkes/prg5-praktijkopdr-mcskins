<x-app-layout>
    <form action="{{route('skins.index')}}" method="get">
        <input type="text" name="search">
        <button>search</button>
    </form>
    @foreach($skins as $skin)
        <article class="mt-1 bg-gray-300 p-2">
            <h2>{{$skin->name}}</h2>
            <p>{{$skin->description}}</p>
            <a class="bg-gray-50" href="{{route('skins.show', $skin->id)}}">Details</a>
        </article>
    @endforeach
    @if(Auth::user())
        <a href="{{route('skins.create')}}">add a skin</a>
    @endif
</x-app-layout>
