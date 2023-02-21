<x-layout title="Gymnasium Reservation System">
    <!-- my infomation -->
    <x-search-result-detail></x-search-result-detail>
    <!-- button -->
    <div class=" flex justify-around items-center w-full p-5">
        <a href="/schedules/1/form">
            <x-button buttonName="スケジュール確認"></x-button>
        </a>
        <a href="/schedules/1/list">
            <x-button buttonName="予約確認"></x-button>
        </a>
        <a href="/admins/1/form">
            <x-button buttonName="編集"></x-button>
        </a>
    </div>
</x-layout>