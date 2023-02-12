<x-layout title="Gymnasium Reservation System">
    <!-- my infomation -->
    <x-search-result-detail></x-search-result-detail>
    <!-- button -->
    <div class=" flex justify-around items-center w-full p-5">
        <a href="/schedules/1/form">
            <x-button buttonName="スケジュール登録"></x-button>
        </a>
        <x-button buttonName="予約確認"></x-button>
        <x-button buttonName="編集"></x-button>
    </div>
</x-layout>