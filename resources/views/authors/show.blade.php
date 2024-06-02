<x-main>
    
    <main>
        <div class="container mt-5">
            <div class="row g-5">
                <div class="col-md-12">
                    <div>
                        <h1 class="pb-4 mb-4 fst-italic ">
                            {{$author->name}} {{$author->surname}}
                        </h1>
                    </div>
                    
                    <div>
                        <ul>
                            @foreach ($author->book as $book)
                                <li>{{ $book->title}}</li>
                            @endforeach
                        </ul>   
                    </div>
                    
                </div>
                
                
            </div>
        </div>
        
    </main>
    
</x-main>