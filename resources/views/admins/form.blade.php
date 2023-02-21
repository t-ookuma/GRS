<x-layout title="Gymnasium Reservation System">
    <!-- reserve form -->
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="name" class="whitespace-nowrap mx-4">&emsp;学校名</label>
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
                            <label for="fax" class="whitespace-nowrap mx-4">&emsp;&emsp;FAX</label>
                            <div class="relative w-1/2">
                                <input type="text" name="fax" value="011-782-8370" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4">
                            <label for="" class="whitespace-nowrap mx-4">&emsp;&emsp;種目</label>
                            <table class="w-full">
                                <tr>
                                    <td class="w-1/4 pb-2">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 rounded-sm text-gray-600" checked>
                                        <label for="" class="whitespace-nowrap">バレーボール</label>
                                    </td>
                                    <td class="w-1/4 pb-2">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 rounded-sm text-gray-600" checked>
                                        <label for="" class="whitespace-nowrap">バスケットボール</label>
                                    </td>
                                    <td class="w-1/4 pb-2">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 rounded-sm text-gray-600" checked>
                                        <label for="" class="whitespace-nowrap">バドミントン</label>
                                    </td>
                                    <td class="w-1/4 pb-2">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 rounded-sm text-gray-600" checked>
                                        <label for="" class="whitespace-nowrap">フットサル</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-1/4 py-2">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 rounded-sm text-gray-600" checked>
                                        <label for="" class="whitespace-nowrap">ハンドボール</label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="number-of-people" class="whitespace-nowrap mx-4">人数上限</label>
                            <div class="relative w-1/2 mr-4">
                                <select name="number-of-people" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="link" class="whitespace-nowrap mx-4">&emsp;リンク</label>
                            <div class="relative w-1/2 mr-4">
                                <input type="text" name="link" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="image" class="whitespace-nowrap mx-4">&emsp;&emsp;画像</label>
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
            <a href="/admins/1">
                <x-button-type-get buttonName="戻る"></x-button-type-get>
            </a>
        </div>
    </form>
</x-layout>