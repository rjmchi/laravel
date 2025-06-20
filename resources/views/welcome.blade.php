<x-main-layout>

    <h1 class="text-teal-800 text-center text-3xl mt-2 bg-teal-50">
        This is the welcome page
    </h1>

    <div>
        @foreach ($posts as $post)
            <p>{{ $post->title }}</p>
            <p>{{ $post->body }} </p>
        @endforeach
    </div>


    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf

            <x-text-input name="title" id="title" />
            <x-text-input name="body" id="body" />

            <x-primary-button>Submit</x-primary-button>

        </form>
    </div>
</x-main-layout>
