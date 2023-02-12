<x-layout title="Gymnasium Reservation System">
    <!-- reserve form -->
    <form action="" method="post">
        @csrf
        <div class="flex justify-center items-start my-4">
            <div class="w-full sm:w-10/12 my-1 bg-gray-800 rounded-lg">
                <ul class="flex flex-col py-3">
                    <li class="my-2 py-3 px-6">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="" class="whitespace-nowrap mx-4">曜日で絞り込む</label>
                            <select name="" id="filter" class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>選択してください</option>
                                @foreach($dayOfWeekList as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                </ul>
                <ul class="flex flex-col py-3">
                    @foreach($dateList as $date)
                    <li class="my-2 py-3 px-6" id="{{ $date }}">
                        <div class="flex px-8 pt-4 items-center">
                            <label for="" id="day_of_week" class="whitespace-nowrap mx-4">{{ $date }}</label>
                            <input type="time" name="started_time" class="mr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                            ～
                            <input type="time" name="finished_time" class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- button -->
        <div class=" flex justify-around items-center w-full p-5">
            <x-button buttonName="確定"></x-button>
        </div>
    </form>
</x-layout>
<script>
    $(function() {});
</script>