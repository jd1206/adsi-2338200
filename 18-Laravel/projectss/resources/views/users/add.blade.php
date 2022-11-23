@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-2xl flex justify-center text-blue-900 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                      
                    Add Users
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.fullname'):
                        </label>

                        <input id="fullname" type="text" class="form-input w-full border  @error('fullname')  border-red-500 @enderror"
                            name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                        @error('fullname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.email')
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full border @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required >

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                  

                    <div class="flex flex-wrap">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.phone')
                        </label>

                        <input id="phone" type="number"
                            class="form-input w-full border border @error('phone') border-red-500 @enderror" name="phone"
                            value="{{ old('phone') }}" required >

                        @error('phone')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="birthdate" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.birthdate')
                        </label>

                        <input id="birthdate" type="date"
                            class="form-input w-full border @error('birthdate') border-red-500 @enderror" name="birthdate"
                            value="{{ old('birthdate') }}" required >

                        @error('birthdate')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap  ">
                        <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.gender')
                        </label>

                            <select name="gender" id="gender" class="form-select w-full border @error('gender') border-red-500 @enderror" required>
                                <option value="">@lang('general.option0')</option>
                                <option value="female">@lang('general.option1')</option>
                                <option value="male">@lang('general.option2')</option>
                            </select>

                        @error('gender')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.address')
                        </label>

                        <input id="address" type="text"
                        class="form-input w-full border @error('address') border-red-500 @enderror" name="address"
                        value="{{ old('address') }}" required >

                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.password')
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full border @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.confirm-password')
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full border"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('general.register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            @lang('general.alreadyaccount')
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('general.login-title') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
