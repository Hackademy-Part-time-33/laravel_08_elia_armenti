<x-main>
    
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center container">
            @if (session('success'))
                {{session('success')}}
            @endif
        </div>
        <div class="container mt-5">
            <div
            class="align-middle gap-2 d-flex justify-content-between">
            <h3>Elenco Articoli inseriti</h3>
            <form class="d-flex" role="search" action="#"
            method="POST">
            <input class="form-control me-2" name="search"
            type="search" placeholder="Cerca Articolo"
            aria-label="Search">
        </form>
        <a href="{{route('book.create')}}" type="button"
        class="btn btn btn-success me-md-2"
        data-bs-toggle="modal"
        data-bs-target="#formModalArticle">
        Crea Nuovo Articolo
    </a>
</div>
<table class="table border mt-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($books as $book)
        <tr>
            <th scope="row">#{{$book->id}}</th>
            <td>
                <img class="card-img-top" style="width:3rem"
                src="https://images.freeimages.com/images/large-previews/83c/barn-silo-detail-5-1210478.jpg"
                alt="..." />
            </td>
            <td>{{$book->title}}</td>
            <td>
                
                <div
                class="d-grid gap-2 d-md-flex justify-content-md-end">
                
                <a href="{{route('book.show', ['book'=>$book->id])}}"
                class="btn btn-primary me-md-2">
                Visualizza
            </a>
            <a href="#"
            class="btn btn-warning me-md-2">
            Modifica
        </a>
        <button type="button"
        class="btn btn-danger me-md-2">Elimina</button>
    </div>
</td>
</tr>
        @empty
            
        @endforelse
       
</tbody>
</table>
</div>
</div>

</main>
<footer
class="footer py-5 mt-auto text-center text-body-secondary bg-body-tertiary">
<p>Copyright</p>
</footer>
</body>

</html>

</x-main>