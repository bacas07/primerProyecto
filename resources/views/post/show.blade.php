<x-layout>

    <x-navbar></x-navbar>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $post->category }}</li>
        </ul>
    </div>

</x-layout>