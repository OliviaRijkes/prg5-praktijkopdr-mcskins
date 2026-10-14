<x-layout title="skins">
    @foreach($skins as $skin)
        <article>
            <h2>{{$skin->name}}</h2>
            <p>{{$skin->description}}</p>
        </article>
    @endforeach

</x-layout>
