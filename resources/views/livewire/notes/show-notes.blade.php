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

<div>
    @foreach( $notes as $note )
        <x-card wire:key='{{ $note->id }}'>
            <div class="flex justify-between">
                <a href=""
                    class="text-xl font-bold hover:underline hover:text-blue-500">
                    {{ $note->title }}
                </a>
            </div>
        </x-card>
    @endforeach
</div>
