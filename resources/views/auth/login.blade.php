<x-main>
    <div class="container">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
            </div>
            @error('email')
            <span class="small text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            @error('name')
            <span class="small text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ricordami!</label>
            </div>
            <button type="submit" class="btn btn-primary">Entra</button>
        </form>
    </div>
    
    
</x-main>