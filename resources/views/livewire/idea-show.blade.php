<div class="idea-and-buttons container">
    <div
        class="idea-container flex bg-white hover:shadow-lg rounded-xl transition duration-150 ease-in cursor-pointer mt-6 shadow-md">
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none md:ml-3">
                <a href="#image">
                    <img src="{{ $idea->user->getAvatar() }}" alt="image-avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full md:mx-4">
                <h4 class="text-xl font-semibold mt-2 md:mt-0">
                    <a href="" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-600 text-justify mt-3">
                    {{ $idea->description }}
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="hidden md:block text-gray-900 font-bold">{{ $idea->user->name }}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-700">Comments</div>
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div
                            class="{{ $idea->status->getClasses() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            {{ $idea->status->name }}
                        </div>
                        <button @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue focus:border-transparent">
                            <svg class="h-3 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl z-10 py-3 ml-8">
                                <li>
                                    <a class="hover:bg-gray-100 block text-xs transition duration-150 ease-in  px-5 py-3"
                                        href="">Mark as spam</a>
                                </li>
                                <li>
                                    <a class="hover:bg-gray-100 block text-xs transition duration-150 ease-in px-5 py-3"
                                        href="">Delete Post</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none @if($hasVoted) text-blue @endif">{{ $votesCount}}
                            </div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                        </div>
                        @if($hasVoted)
                        <button wire:click.prevent="vote"
                            class="w-20 text-white bg-blue border-blue font-bold text-xxs uppercase rounded-xl hover:bg-blue-hover transition duration-150 ease-in px-4 py-3 -mx-5">
                            Voted
                        </button>
                        @else
                        <button wire:click.prevent="vote"
                            class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5">
                            Vote
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-row items-center space-x-6 md:space-x-4 md:ml-6">
            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center w-36 h-11 bg-blue border border-blue hover:bg-blue-hover transition duration-150 ease-in rounded-xl font-semibold text-xs text-white px-6 py-3">
                    <span class="ml-1">Reply</span>
                </button>
                <div x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-76 md:w-104 text-left font-semibold text-sm bg-white shadow-lg rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                Post Comment
                            </button>
                            <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center w-36 h-11 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in rounded-xl focus:outline-none focus:ring-2 focus:ring-blue focus:border-transparent font-semibold text-xs px-6 py-3">
                    <span class="mr-1">Set Status</span>
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-lg rounded-xl mt-2 md:ml-0 top-11 md:top-11 right-0 md:left-0">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status"
                                        value="1" checked>
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-purple border-none" name="status"
                                        value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-yellow border-none" name="status"
                                        value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-green border-none" name="status"
                                        value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-red border-none" name="status"
                                        value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in focus:outline-none focus:ring-2 focus:ring-blue focus:border-transparent px-6 py-3">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                <span class="ml-1">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-3">
            <div class="bg-white font semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug @if($hasVoted) text-blue @endif">{{ $votesCount }}</div>
                <div class="text-gray-400 text xs leading-none">Votes</div>
            </div>
            @if ($hasVoted)
            <button wire:click.prevent="vote" type="button"
                class="w-32 h-11 text-white bg-blue border-blue hover:bg-blue-hover transition duration-150 ease-in rounded-xl focus:outline-none focus:ring-2 focus:ring-blue focus:border-transparent font-semibold text-xs px-6 py-3">
                <span class="mr-1">Voted</span>
            </button>
            @else
            <button wire:click.prevent="vote" type="button"
                class="w-32 h-11 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in rounded-xl focus:outline-none focus:ring-2 focus:ring-blue focus:border-transparent font-semibold text-xs px-6 py-3">
                <span class="mr-1">Vote</span>
            </button>
            @endif

        </div>
    </div>
</div> {{-- End idea and buttons container --}}
