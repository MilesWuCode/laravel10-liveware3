<div>
    <span>{{ session('status') }}</span>

    <a href="{{ route('posts.create') }}">Create</a>

    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ url('/posts/' . $post->id) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

    <div>
        {{ $posts->links() }}
    </div>
</div>
