<x-layout title="Gymnasium Reservation System">
    <!-- my infomation -->
    <form action="/users/1" method="get">
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="" class="whitespace-nowrap mx-4">日付選択</label>
                            <select name="filter" class="mr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 pl-10 p-2.5 ">
                                <option value="" selected>選択してください</option>
                            </select>
                            ～
                            <select name="filter" class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 pl-10 p-2.5 ">
                                <option value="" selected>選択してください</option>
                            </select>
                            <button type="submit" class="whitespace-nowrap mx-4 py-2 px-4 bg-transparent text-gray-600 border border-gray-600 rounded-lg hover:bg-gray-600 hover:text-white hover:border-transparent transition ease-in duration-200 transform">絞り込む</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </form>
    <!-- reserve list -->
    <form action="" method="post">
        @csrf
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="pt-4 pb-1 px-6 border-b border-white mx-10">
                        <ul class="flex text-center">
                            <li class="w-1/4 px-3 py-2">reserve date</li>
                            <li class="w-1/6 px-3 py-2">name</li>
                            <li class="w-1/6 px-3 py-2">tel</li>
                            <li class="w-1/4 px-3 py-2">address</li>
                            <li class="w-1/12 px-3 py-2">detail</li>
                            <li class="w-1/12 px-3 py-2">cancel</li>
                        </ul>
                    </li>
                    <li class="pt-4 pb-1 px-6 border-b border-white border-dashed mx-10">
                        <ul class="flex">
                            <li class="w-1/4 px-3 py-2">reserve date</li>
                            <li class="w-1/6 px-3 py-2">name</li>
                            <li class="w-1/6 px-3 py-2">tel</li>
                            <li class="w-1/4 px-3 py-2">address</li>
                            <li class="w-1/12 px-3 py-2">detail</li>
                            <li class="w-1/12 px-3 py-2">cancel</li>
                        </ul>
                    </li>
                    <li class="pt-4 pb-1 px-6 border-b border-white border-dashed mx-10">
                        <ul class="flex">
                            <li class="w-1/4 px-3 py-2">reserve date</li>
                            <li class="w-1/6 px-3 py-2">name</li>
                            <li class="w-1/6 px-3 py-2">tel</li>
                            <li class="w-1/4 px-3 py-2">address</li>
                            <li class="w-1/12 px-3 py-2">detail</li>
                            <li class="w-1/12 px-3 py-2">cancel</li>
                        </ul>
                    </li>
                    <li class="pt-4 pb-1 px-6 border-b border-white border-dashed mx-10">
                        <ul class="flex">
                            <li class="w-1/4 px-3 py-2">reserve date</li>
                            <li class="w-1/6 px-3 py-2">name</li>
                            <li class="w-1/6 px-3 py-2">tel</li>
                            <li class="w-1/4 px-3 py-2">address</li>
                            <li class="w-1/12 px-3 py-2">detail</li>
                            <li class="w-1/12 px-3 py-2">cancel</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </form>
    <!-- button -->
    <div class=" flex justify-around items-center w-full p-5">
        <a href="/reserves">
            <x-button buttonName="予約する"></x-button>
        </a>
        <a href="/users/1/history">
            <x-button buttonName="利用履歴"></x-button>
        </a>
        <a href="/users/1/form">
            <x-button buttonName="編集"></x-button>
        </a>
    </div>
</x-layout>