<x-layout title="Gymnasium Reservation System">
    <!-- top image -->
    <img src="{{ asset('storage/sample.jpg') }}" alt="">
    <!-- news -->
    <x-title title="{{$title}}" subTitle="{{ $subTitle }}"></x-title>
    @isset($news)
    <x-news news=""></x-news>
    @endisset
    @empty($news)
    <x-news news="test"></x-news>
    @endempty
</x-layout>