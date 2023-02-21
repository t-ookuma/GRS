<x-layout title="Gymnasium Reservation System">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <!-- login form -->
    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-center items-start my-4">
            <div class="w-1/2 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="tel" class="whitespace-nowrap mx-4">&emsp;&emsp;e-mail</label>
                            <div class="relative w-full">
                                <input type="text" name="tel" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="password" class="whitespace-nowrap mx-4">パスワード</label>
                            <div class="relative w-full">
                                <input type="text" name="password" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center justify-center">
                            <a class="hover:border-b hover:border-white" href="{{ route('password.request') }}">パスワードを忘れた方はこちら</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- button -->
        <div class=" flex justify-around items-center w-full p-5">
            <x-button buttonName="ログイン"></x-button>
        </div>
    </form>
</x-layout>