<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')"/>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('{{asset('build/assets/bg/bglogin.jpg')}}')">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 rounded-xl bg-gray-500 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8 -mt-8 ">
                <div class="text-white">

                  <div class="mb-8 flex flex-col items-center">
                    <h1 class="mb-2 text-4xl text-black font-semibold">SIGN IN</h1>
                    <span class="text-gray-300">Enter Login Details</span>
                  </div>
                  <form method="POST"  action="{{ route('login') }}">
                     @csrf
                  <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

                        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

 <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"style="color:#D85B1F" href="{{ route('register') }}">
                    {{ __('Dont have an account ?') }}
                </a>


            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>



                  </form>
              </div>
            </div>


</div>

</x-guest-layout>
