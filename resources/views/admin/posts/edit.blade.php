@extends('layouts.app')

@section('page-title', 'Tutti i post')

@section('main-content')
    <div class="container">
         {{-- Mi da Azione non autorizzata ERRORE 403 --}}
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
               
                <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="">Titolo</label>
                        <input type="text" name="title" required maxlength="255" value="{{ old('title', $post->title) }}">
                    </div>

                    <div>
                        <label for="">contenuto</label>
                        <textarea name="content"  rows="3" required value="{{ old('content', $post->content) }}"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success" > Aggiorna </button>
                </form>
            </div>
        </div>
    </div>
@endsection
        