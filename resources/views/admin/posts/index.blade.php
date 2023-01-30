@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->title }}</td>

                       @auth
                        <td>
                            <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Visita</a>
                        </td>
                        <td>
                            <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edita</a>
                        </td>
                        <td>
                            <form class="form-check form-check-inline" action="{{ route('admin.posts.destroy', ['post' => $post]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                       @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
@endsection
