<x-layout title="Gymnasium Reservation System">
    <!-- 切り替えボタン制御 -->
    <div x-data="{
        open : false
    }">
        <div class="flex justify-center items-start my-4">
            <div class="w-1/2 my-1 bg-gray-800 rounded-lg">
                <div class="flex px-8 py-4 items-center justify-center">
                    <button type="submit" x-on:click="open = !open" x-text="open ? '学校管理者' : '一般利用者'" class="w-1/2 whitespace-nowrap mx-4 py-2 px-4 bg-transparent text-gray-50 border border-gray-600 rounded-lg hover:bg-gray-600 hover:border-transparent transition ease-in duration-200 transform"></button>
                </div>
            </div>
        </div>
        <!-- 一般 -->
        <template x-if="!open">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="flex justify-center items-start my-4">
                    <div class="w-1/2 my-1 bg-gray-800 rounded-lg">
                        <ul class="flex flex-col py-3">
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="name" class="whitespace-nowrap mx-4">&emsp;&emsp;&emsp;名前</label>
                                    <div class="relative w-full">
                                        <input type="text" name="name" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="address" class="whitespace-nowrap mx-4">&emsp;&emsp;&emsp;住所</label>
                                    <div class="relative w-full">
                                        <input type="text" name="address" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="tel" class="whitespace-nowrap mx-4">&emsp;&emsp;&emsp;TEL</label>
                                    <div class="relative w-full">
                                        <input type="text" name="tel" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="e-mail" class="whitespace-nowrap mx-4">&emsp;&emsp;e-mail</label>
                                    <div class="relative w-full">
                                        <input type="text" name="e-mail" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
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
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="password_confirmation" class="whitespace-nowrap mx-4">&emsp;&emsp;確認用</label>
                                    <div class="relative w-full">
                                        <input type="text" name="password_confirmation" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center justify-center">
                                    <a class="hover:border-b hover:border-white" href="{{ route('login') }}">既に登録されている方はこちら</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- button -->
                <div class=" flex justify-around items-center w-full p-5">
                    <x-button buttonName="登録"></x-button>
                </div>
            </form>
        </template>
        <!-- 管理者 -->
        <template x-if="open">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="flex justify-center items-start my-4">
                    <div class="w-1/2 my-1 bg-gray-800 rounded-lg">
                        <ul class="flex flex-col py-3">
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="name" class="whitespace-nowrap mx-4">&emsp;&emsp;学校名</label>
                                    <div class="relative w-full">
                                        <input type="text" name="name" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="address" class="whitespace-nowrap mx-4">&emsp;&emsp;&emsp;住所</label>
                                    <div class="relative w-full">
                                        <input type="text" name="address" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="tel" class="whitespace-nowrap mx-4">&emsp;&emsp;&emsp;TEL</label>
                                    <div class="relative w-full">
                                        <input type="text" name="tel" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="fax" class="whitespace-nowrap mx-4">&emsp;&emsp;&emsp;FAX</label>
                                    <div class="relative w-full">
                                        <input type="text" name="fax" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="e-mail" class="whitespace-nowrap mx-4">&emsp;&emsp;e-mail</label>
                                    <div class="relative w-full">
                                        <input type="text" name="e-mail" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
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
                                <div class="flex px-8 pt-4 items-center">
                                    <label for="password_confirmation" class="whitespace-nowrap mx-4">&emsp;&emsp;確認用</label>
                                    <div class="relative w-full">
                                        <input type="text" name="password_confirmation" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    </div>
                                </div>
                            </li>
                            <li class="my-2 py-3 px-6">
                                <div class="flex px-8 pt-4 items-center justify-center">
                                    <a class="hover:border-b hover:border-white" href="{{ route('login') }}">既に登録されている方はこちら</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- button -->
                <div class=" flex justify-around items-center w-full p-5">
                    <x-button buttonName="登録"></x-button>
                </div>
            </form>
        </template>
    </div>
</x-layout>