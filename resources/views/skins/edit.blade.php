<x-app-layout>
    <h1>Create new skin</h1>
    <form action="{{route('skins.update',$skin->id)}}" method="post">
        @method('PATCH')
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{$skin->name}}">
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" id="description" name="description" value="{{$skin->description}}">
            @error('description')
            <span>{{$message}}</span>
            @enderror
        </div>

        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <div>
            <label for="author">Author</label>
            <select name="author_id" id="author">
                @foreach($authors as $author)
                    <option value="{{$author->id}}" @if($skin->author_id === $author->id) selected @endif>{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="0" @if($skin->status ===0 ) selected @endif >private</option>
                <option value="1" @if($skin->status ===1 ) selected @endif >public</option>
            </select>
            @error('status')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="img_url">Image url</label>
            <input type="text" id="img_url" name="img_url" value="{{$skin->img_url}}">
            @error('img_url')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="source_url">source url</label>
            <input type="text" id="source_url" name="source_url" value="{{$skin->source_url}}">
            @error('source_url')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="file_url">file url</label>
            <input type="text" id="file_url" name="file_url" value="{{$skin->file_url}}">
            @error('file_url')
            <span>{{$message}}</span>
            @enderror
        </div>



        <button type="submit" name="submit" value="Save">Save</button>
    </form>
    <form action="{{route('skins.destroy',$skin)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</x-app-layout>

