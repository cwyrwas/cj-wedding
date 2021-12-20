@props(['comment'])
<article class="relative">
    <x-panel>
        <standard-modal :showing="modalShowing"></standard-modal>
        <div class="absolute top-[45px] left-[70px]">
            <x-pencil-icon></x-pencil-icon>
        </div>
        <div class="absolute top-0 right-0">
            <button id="triggerDelete" class="p-2">X</button>
        </div>
        <header class="w-full border-b-2 border-cj-blue">
            <small class="uppercase font-xs">Note</small>
            <h3>
                Added <time>{{ $comment->created_at->format('F d, Y h:i A') }}</time>
            </h3>
        </header>
        <p class="mt-4">
            {{ $comment->body }}
        </p>
    </x-panel>
</article>