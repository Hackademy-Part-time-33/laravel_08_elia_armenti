<x-main>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="mb-3">
                <label for="name_surname" class="form-label">Nome e Cognome</label>
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
            </div>
            @error('name')
            <span class="small text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
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
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password_confirmation">
            </div>
            @error('name')
            <span class="small text-danger">{{ $message }}</span>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-primary">Già registarto? Accedi!</button>
        </form>
    </div>
    
    
</x-main>