<div class="flex flex-row space-x-6 items-start">
    <div class="@if($isActive) bg-custom-orange @else bg-custom-grey @endif rounded-full py-1 w-6 items-center block mt-0.5 text-center text-xs font-normal text-white">
        <p>{{ $number }}</p>
    </div>
    <div class="flex flex-col font-normal text-base space-y-2">
        <h3 class="text-custom-orange">{{ $date }}</h3>
        <h3 class="text-custom-black">{{ $event }}</h3>
    </div>
</div>
