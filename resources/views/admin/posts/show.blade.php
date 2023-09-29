@extends('layouts.app')

@section('page-title', 'Tutti i post')

@section('main-content')
<div class="container">

    <div class="row">
        <div class="col">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success w-100"> Aggiungi </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Slug</th>
                        <th scope="col">contetnuto</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            {{ $post->id }}
                            </th>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                {{ $post->slug }}
                            </td>
                            <td>
                                {{ $post->content }}
                            </td>
                            <td>
                                <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">
                                    Vedi
                                </a>
                                <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-warning">
                                    Modifica
                                </a>
                                <a href="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" class="btn btn-danger">
                                    Elimina
                                </a>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        @endsection
        