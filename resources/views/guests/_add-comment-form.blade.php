<form action="/admin/guests/{{$guest->id}}/comments" method="post">
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
                <x-invalid-message>{{$message}}</x-invalid-message>
            @enderror
        </div>
        <div class="w-full">
            <x-submit-button text="Post Comment" class="w-full uppercase"></x-submit-button>
        </div>
    </div>
</form>
