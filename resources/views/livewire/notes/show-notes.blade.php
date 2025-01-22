<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            "notes" => Auth::user()->notes()->orderBy("sent_date", "asc")->get(),
        ];
    }
}; ?>

<div class="space-y-2">
    <div class="grid grid-cols-3 gap-4">
    @foreach( $notes as $note )
        <x-card wire:key='{{ $note->id }}'>
            <div class="flex justify-between">
                <div>
                    <a href=""
                        class="text-xl font-bold hover:underline hover:text-blue-500">
                        {{ $note->title }}
                    </a>
                </div>
                <div class="text-xs text-gray-500">
                    {{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }}
                </div>
            </div>
            <div class="flex items-end justify-between mt-4 space-x-1">
                <p class="text-xs">Recipient: <span class="font-semibold">{{ $note->recipient }}</span></p>
                <div>
                    <x-mini-button rounded outline icon="eye" href="#">
                    </x-button.circle>
                    <x-mini-button rounded outline icon="trash" href="#">
                    </x-button.circle>
                </div>
            </div>
        </x-card>
    @endforeach
    </div>
</div>
