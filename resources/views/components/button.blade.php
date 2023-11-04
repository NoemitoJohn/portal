<button wire:click={{$click}}  {{$attributes->merge(['class' => 'border-slate-400  border-2 px-3 py-1 rounded bg-slate-200 font-medium hover:bg-slate-300'])}}>
    {{$slot}}
</button>
