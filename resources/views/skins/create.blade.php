<x-layout title="create">
    <h1>Create new skin</h1>
    <form action="{{route('skins.store')}}" method="post">
        <div>
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" value="{{old('name')}}">
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="description">Uitleg</label>
            <input type="text" id="description" name="description" value="{{old('description')}}">
            @error('description')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="status">Status</label>
            <input type="text" id="status" name="status" value="{{old('status')}}">
            @error('status')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="img_url">Image url</label>
            <input type="text" id="img_url" name="img_url" value="{{old('img_url')}}">
            @error('img_url')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="source_link">source_link</label>
            <input type="text" id="source_link" name="source_link" value="{{old('source_link')}}">
            @error('source_link')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="file_url">file_url</label>
            <input type="text" id="file_url" name="file_url" value="{{old('file_url')}}">
            @error('file_url')
            <span>{{$message}}</span>
            @enderror
        </div>



        <button type="submit" name="submit" value="Save">Save</button>
    </form>
</x-layout>
