<x-main>
    <div class="container">
        <form role="search" action="{{route('book.store')}}"
        method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="name" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('title')}}">
        </div>
        @error('title')
        {{$message}}
        @enderror
        
        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="name" class="form-control" name="pages" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('pages')}}">
        </div>
        @error('pages')
        {{$message}}
        @enderror
        
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="name" class="form-control" name="year" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('year')}}">
        </div>
        @error('year')
        {{$message}}
        @enderror
        
        <select name="author_id" class="form-control">
            @foreach ($authors as $author)
            <option value="{{author_id}}">{{$author->name . ' ' . $author->surname}}</option> 
            @endforeach
            
        </select>
        
        <div class="form-floating mb-3">
            <input class="form-control" id="image"
            name="image"
            type="file">
            
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</x-main>