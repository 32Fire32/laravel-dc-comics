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

                            {{-- <button class="btn btn-danger" onclick="deleteConfirm(event)">Delete</button> --}}
                            <!-- Button trigger modal -->
                            <a href="#" class="btn btn-danger delete" data-bs-toggle="modal"
                                data-bs-target="#ModalDelete{{ $comic->id, $comic->title }}">{{ __('Delete') }}</a>

                            <!-- Delete Warning Modal -->

                            <div class="modal fade" id="ModalDelete{{ $comic->id, $comic->title }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Comic</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <input type=hidden id="id" name=id> --}}
                                            <h5 class="text-center">Are you sure to delete {{ $comic->title }}?
                                            </h5>
                                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">{{ __('Yes Delete') }}</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Delete Modal -->
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
