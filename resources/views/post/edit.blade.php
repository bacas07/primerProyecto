<x-layout>

    <x-navbar></x-navbar>

    <form action="{{ route('post.store') }}" method="POST">

        @csrf

        @method('put')

        <div class="mb-3">
            <div>
                <label for="title" class="form-label">Title</label>
                <input type="title" class="form-control" id="title" name="title" value="{{ $post->title}}">
            </div><br>
            <div>
                <label for="category" class="form-label">Category</label>
                <input type="categoty" class="form-control" id="category" name="category" value="{{ $post->category }}">
            </div><br>
            <div>
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>

</x-layout>
