<nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li>
            <a wire:click.prevent="setStatus('All')" href="#"
                class="border-b-4 pb-3 @if($status === 'All') border-blue text-gray-900 @endif hover:border-blue">All
                ideas (87)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Considering')" href="#"
                class=" transition duration-150 ease-in border-b-4 pb-3 @if($status === 'Considering') border-blue text-gray-900 @endif hover:border-blue">Considering
                (6)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('In Progress')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 @if($status === 'In Progress') border-blue text-gray-900 @endif hover:border-blue">In
                progress (3)</a>
        </li>
    </ul>

    <ul class="flex uppercase font-semibold border-b-4 pb-3 border-gray space-x-10">
        <li>
            <a wire:click.prevent="setStatus('Implemented')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 @if($status === 'Implemented') border-blue text-gray-900 @endif hover:border-blue">Implemented
                (9)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Closed')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 @if($status === 'Closed') border-blue text-gray-900 @endif hover:border-blue">Closed
                (55)</a>
        </li>
    </ul>
</nav>
