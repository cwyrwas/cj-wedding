<x-app-layout>
    <x-slot name="header">
        <x-dashboard.header-title route="{{route('guests.index')}}" parent="Guest Management" page="Bulk Import" />
    </x-slot>

    <x-dashboard-body>
        <x-form.panel-title>Import Guestlist from CSV</x-form.panel-title>
        <div class="rounded-lg w-full mx-auto md:w-8/12">
            <form action="{{route('guest.bulk-create')}}" method="post" enctype="multipart/form-data">
                <x-form.panel>
                    @csrf
                    <x-form.file-input name="guest_csv" label="CSV File" />
                    <x-submit-button>Import Guests</x-submit-button>
                </x-form.panel>
            </form>
        </div>
    </x-dashboard-body>

    <x-form.success-message>
        {{session('success')}}
    </x-form.success-message>
</x-app-layout>
