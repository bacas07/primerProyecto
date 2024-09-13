<x-layout>
    <x-navbar></x-navbar>
    
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <x-create-form></x-create-form>
    </form>
    
</x-layout>