@extends('layout.main');
@section('page-content')
    <div class="container">
        <h1>Questa è l'index</h1>
        <h1>Lista Comics</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-warning">Create a new Comic</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Url immagine</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->thumb }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic) }}"class="btn btn-primary">View</a>
                            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Edit</a>
                            <form class="delete" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                                @csrf
                                @method('DELETE')
                                {{-- <input type="submit" class="btn btn-danger" value="Delete"> --}}
                                <button class="btn btn-danger" onclick="deleteConfirm(event)">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{-- <script>
            $(".delete").on("submit", function() {
                return confirm("Are you sure?");
            })
        </script> --}}
    </div>
@endsection
