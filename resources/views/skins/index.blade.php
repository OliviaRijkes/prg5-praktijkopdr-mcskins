<x-app-layout>
    @foreach($skins as $skin)
        <article>
            <h2>{{$skin->name}}</h2>
            <p>{{$skin->description}}</p>
        </article>
    @endforeach
        <a href="skins/create">add a skin</a>
</x-app-layout>
