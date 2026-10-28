<?php
$statusText = ['private','public']
?>
<x-app-layout>
    <a href="{{route('skins.create')}}">add a skin</a>
    <table>
        <tr>
            <td>name</td>
            <td>description</td>
            <td>author</td>
            <td>status</td>
            <td>details</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
    @foreach($skins as $skin)
        <tr>
            <td>{{$skin->name}}</td>
            <td>{{$skin->description}}</td>
            <td>{{$skin->author->name}}</td>
            <td>
                <form action="{{route('uploads.update',$skin)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit">{{$statusText[$skin->status]}}</button>
                </form>
            </td>
            <td>
                <a href="{{route('skins.show', $skin->id)}}">Details</a>
            </td>
            <td>
                <a href="{{route('skins.edit',$skin->id)}}">edit</a>
            </td>
            <td>
                <form action="{{route('skins.destroy',$skin)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>

    @endforeach
    </table>
</x-app-layout>
