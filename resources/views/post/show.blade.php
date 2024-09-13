<x-layout>

    <x-navbar></x-navbar>

    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $post->category }}</li>
        </ul>
        <div>
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Editar</a>
            
            <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                
                @csrf

                @method('delete')

                <button type="submit" class="btn btn-danger">
                    Eliminar
                </button>
            </form>
        </div>
        
    </div>

</x-layout>