<x-layout title="Gymnasium Reservation System">
    <!-- reserve form -->
    <form action="" method="post">
        @csrf
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="name" class="whitespace-nowrap mx-4">&emsp;学校名</label>
                            <div class="relative w-1/2">
                                <input type="text" name="name" value="北海道札幌丘珠高等学校" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " readonly>
                            </div>
                            <label for="address" class="whitespace-nowrap mx-4">&emsp;&emsp;住所</label>
                            <div class="relative w-1/2 mr-4">
                                <input type="text" name="address" value="〒007-0881&nbsp;北海道札幌市東区北丘珠1条2-589-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " readonly>
                            </div>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="tel" class="whitespace-nowrap mx-4">&emsp;&emsp;TEL</label>
                            <div class="relative w-1/2">
                                <input type="text" name="tel" value="011-782-2911" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " readonly>
                            </div>
                            <x-form-space></x-form-space>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="time" class="whitespace-nowrap mx-4">&emsp;時間帯</label>
                            <div class="relative w-1/2">
                                <select name="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                            <label for="date" class="whitespace-nowrap mx-4">&emsp;&emsp;日付</label>
                            <div class="relative w-1/2 mr-4">
                                <select name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="category" class="whitespace-nowrap mx-4">&emsp;&emsp;種目</label>
                            <div class="relative w-1/2">
                                <select name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                            <label for="number-of-people" class="whitespace-nowrap mx-4">&emsp;&emsp;人数</label>
                            <div class="relative w-1/2 mr-4">
                                <select name="number-of-people" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- button -->
        <div class=" flex justify-around items-center w-full p-5">
            <x-button buttonName="確定"></x-button>
        </div>
    </form>
</x-layout>