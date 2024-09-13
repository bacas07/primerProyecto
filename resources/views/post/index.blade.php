<x-layout>

    <x-navbar></x-navbar>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', $post -> id) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>