<x-panel>
    <form action="/guests/{{$guest->id}}/comments" method="post">
        @csrf
        <div class="flex flex-col items-center">
            <header class="">
                <h2 class="text-2xl font-semibold text-cj-blue">Want to leave a comment about this guest?</h2>
            </header>
            <div class="my-4 w-full">
                <textarea 
                name="body" 
                class="w-full border text-sm rounded-lg p-2 h-40 focus:outline-none focus:ring" 
                row="5"
                placeholder="Add a new note for this guest."
                required>
                </textarea>
                @error('body')
                    <invalid-message error-message="{{$message}}"></invalid-message>
                @enderror
            </div>
            <div class="w-full">
                <submit-btn text="Post Comment" class="w-full uppercase"></submit-btn>
            </div>
        </div>
    </form>
</x-panel>