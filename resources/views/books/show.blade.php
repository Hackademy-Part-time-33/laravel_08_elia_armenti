<x-main>
    
    <main>
        <div class="container mt-5">
            <div class="row g-5">
                <div class="col-md-12">
                    <div>
                        <h1 class="pb-4 mb-4 fst-italic ">
                            {{$book->title}}
                        </h1>
                    </div>
                    
                    <div>
                        <ul>
                            <li>
                                <p>Numero pagine: {{$book->pages ?? 'non definito'}}</p>
                            </li>
                            <li>
                                <p>Anno di pubblicazione: {{$book->year ?? 'anno ignoto'}}</p>
                            </li>
                        </ul>   
                    </div>
                    
                </div>
                
                
            </div>
        </div>
        
    </main>
    
</x-main>