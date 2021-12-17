<x-layout>
    <x-slot name="content">
        <form action="/logout" method="post">
            @csrf
            <submit-btn text="Logout"></submit-btn>
        </form>
    </x-slot>
</x-layout>
