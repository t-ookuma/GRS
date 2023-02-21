<x-layout title="Gymnasium Reservation System">
    <form action="/schedules/1/form" method="get">
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="" class="whitespace-nowrap mx-4">曜日選択</label>
                            <select name="filter" class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 pl-10 p-2.5 ">
                                @if($result == '')
                                <option value="" selected>選択してください</option>
                                @foreach($dayOfWeekList as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                                @else
                                <option value="">選択してください</option>
                                @foreach($dayOfWeekList as $key => $value)
                                <option value="{{ $key }}" @selected($result==$key)>{{ $value }}</option>
                                {{$key}}
                                @endforeach
                                @endif
                            </select>
                            <button type="submit" class="whitespace-nowrap mx-4 py-2 px-4 bg-transparent text-gray-600 border border-gray-600 rounded-lg hover:bg-gray-600 hover:text-white hover:border-transparent transition ease-in duration-200 transform">絞り込む</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </form>
    <!-- reserve form -->
    <form action="" method="post">
        @csrf
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    @foreach($dateList as $date)
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="" class="whitespace-nowrap mx-4">{{ $date }}</label>
                            <input type="time" name="started_time" step="900" list="data_list" class="mr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            ～
                            <input type="time" name="finished_time" step="900" list="data_list" class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                        </div>
                    </li>
                    @endforeach
                    <datalist id="data_list">
                        <option value="09:00"></option>
                        <option value="09:15"></option>
                        <option value="09:30"></option>
                    </datalist>
                </ul>
            </div>
        </div>
        <!-- button -->
        <div class=" flex justify-around items-center w-full p-5">
            <a href="/admins/1">
                <x-button buttonName="戻る"></x-button>
            </a>
            <x-button buttonName="確定"></x-button>
        </div>
    </form>
</x-layout>