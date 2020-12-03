<h1>Posts</h1>

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Filtrar</button>
</form>
<a href="{{ route('posts.create') }}">Criar Novo Post</a>
<hr>

@if(session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

@foreach ($posts as $post)
    <p>
        {{ $post->title }}
        [
            <a href="{{ route('posts.show', $post->id) }}">Detlalhes</a> |
            <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
        ]
    </p>
@endforeach

<hr>

<!--
    { !!$posts->appends()->links() !! }-->

