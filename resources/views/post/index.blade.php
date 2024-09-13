<x-layout>

    <x-navbar></x-navbar>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/post/show/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>