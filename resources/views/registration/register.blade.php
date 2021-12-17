<x-layout>
    <x-slot name="content">
        <div class="w-5/12 mt-8 mx-auto flex flex-col justify-center items-center px-10 py-8 bg-white shadow-md rounded-xl">
            <!-- Registration form -->
            <div class="w-full mb-4">
                <h1 class="text-2xl font-garamond text-center py-4 border-2">Register today!</h1>
            </div>
            <div class="w-full">
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-8">
                        <fancy-input field-name="Name" field-type="text" field-value="{{ old('name') }}"></fancy-input>
                        @error('name')
                           <invalid-message error-message="{{$message}}"></invalid-message>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <fancy-input field-name="Username" field-type="text" field-value="{{ old('username') }}" />
                        @error('username')
                            <invalid-message error-message="{{$message}}" /></invalid-message>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <fancy-input field-name="Email" field-type="email" field-value="{{ old('email') }}" />
                        @error('email')
                            <invalid-message error-message="{{$message}}" /></invalid-message>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <fancy-input field-name="Password" field-type="password" />
                        @error('password')
                            <invalid-message error-message="{{$message}}"/></invalid-message>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <submit-btn text="Sign Up Now!" class="w-full"></submit-btn>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>