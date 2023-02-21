<x-layout title="Gymnasium Reservation System">
    <!-- reserve form -->
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="name" class="whitespace-nowrap mx-4">&emsp;&emsp;名前</label>
                            <div class="relative w-1/2">
                                <input type="text" name="name" value="北海道札幌丘珠高等学校" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="name" class="whitespace-nowrap mx-4">&emsp;&emsp;カナ</label>
                            <div class="relative w-1/2">
                                <input type="text" name="name" value="北海道札幌丘珠高等学校" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="address" class="whitespace-nowrap mx-4">&emsp;&emsp;住所</label>
                            <div class="relative w-1/2">
                                <input type="text" name="address" value="〒007-0881&nbsp;北海道札幌市東区北丘珠1条2-589-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="tel" class="whitespace-nowrap mx-4">&emsp;&emsp;TEL</label>
                            <div class="relative w-1/2">
                                <input type="text" name="tel" value="011-782-2911" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="tel" class="whitespace-nowrap mx-4">&emsp;e-mail</label>
                            <div class="relative w-1/2">
                                <input type="text" name="tel" value="011-782-2911" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="image" class="whitespace-nowrap mx-4">本人確認</label>
                            <div class="relative w-1/2 mr-4">
                                <input type="file" name="image" value="" class="">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- button -->
        <div class=" flex justify-around items-center w-full p-5">
            <x-button buttonName="登録"></x-button>
            <a href="/users/1">
                <x-button-type-get buttonName="戻る"></x-button-type-get>
            </a>
        </div>
    </form>
</x-layout>