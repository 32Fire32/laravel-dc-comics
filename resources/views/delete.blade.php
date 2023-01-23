@extends('layout.main')
@section('page-content')
    <div class="container">
        <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-flex flex-column align-items-center">
            <div class="modal-body">
                @csrf
                @method('DELETE')
                <h5>Are you sure you want to delete {{ $comic->title }} ?</h5>
            </div>
            <div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Yes, Delete Comic</button>
            </div>
        </form>
    </div>
    {{-- !-- Delete Warning Modal -->  --}}
@endsection
