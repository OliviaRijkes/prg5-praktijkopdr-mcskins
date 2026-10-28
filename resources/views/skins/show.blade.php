<x-app-layout>
    <a href="/skins"><- Back</a>
    <div class="bg-gray-300">
        <h1>
            {{$skin->name}}
        </h1>
        <p>
            {{$skin->description}}
        </p>
        <div class="flex flex-row p-1">
            <p class="mr-4">Author: {{$skin->author->name}}</p>
            <p>Uploader:{{$skin->user->name}}</p>
        </div>
    </div>
    @auth
    @if(Auth::user()->id === $skin->user_id)
    <a href="{{route('skins.edit',$skin)}}">edit</a>
    <form action="{{route('skins.destroy',$skin)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
    @endif
    @endauth


</x-app-layout>
