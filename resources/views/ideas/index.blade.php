<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Category one</option>
                <option value="1">Category two</option>
                <option value="1">Category three</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Category one</option>
                <option value="1">Category two</option>
                <option value="1">Category three</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none px-4 py-2 pl-8 placeholder-gray-700">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> {{-- End filters --}}


    <div class="ideas-container space-y-6 my-8">
        @foreach ( $ideas as $idea )
            <div
                x-data
                @click="
                    const clicked = $event.target
                    const target = clicked.tagName.toLowerCase()
                    const ignores = ['button', 'svg', 'path', 'a']
                    if (! ignores.includes(target)) {
                        clicked.closest('.idea-container').querySelector('.idea-link').click()
                    }
                "
                class="idea-container flex bg-white hover:shadow-lg shadow-md rounded-xl transition duration-150 ease-in cursor-pointer"
            >
                <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>
                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl
                            transition duration-150 ease-in focus:outline-none focus:ring-2 focus:ring-blue focus:border-transparent px-4 py-3">
                            Vote
                        </button>
                    </div>
                </div>

                <div class="flex flex-1 flex-col md:flex-row px-6 md:px-4 py-6">
                    <div class="flex-none">
                        <a href="#image">
                            <img src="{{ $idea->user->getAvatar() }}" alt="image-avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>
                    <div class="w-full flex flex-col justify-between md:mx-4"">
                        <h4 class="text-xl font-semibold mt-2 md:mt-0">
                            <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
                        </h4>
                        <div class="text-gray-600 text-justify mt-3 line-clamp-3">
                            {{ $idea->description }}
                        </div>
                        <div class="flex flex-col justify-between md:flex-row md:items-center mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>{{ $idea->category->name }}</div>
                                <div>&bull;</div>
                                <div class="text-gray-700">Comments</div>
                            </div>
                            <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                                <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                    Open
                                </div>
                                <button
                                    @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in focus:outline-none focus:ring-2 focus:ring-blue focus:border-transparent py-2 px-3"
                                >
                                    <svg class="h-3 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                    <ul
                                        x-cloak
                                        x-show.transition.origin.top.left="isOpen"
                                        @click.away="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl z-10 py-3 ml-8"
                                    >
                                        <li>
                                            <a class="hover:bg-gray-100 block text-xs transition duration-150 ease-in  px-5 py-3" href="">Mark as spam</a>
                                        </li>
                                        <li>
                                            <a class="hover:bg-gray-100 block text-xs transition duration-150 ease-in px-5 py-3" href="">Delete Post</a>
                                        </li>
                                    </ul>
                                </button>
                            </div>

                            <div class="flex items-center md:hidden mt-4 md:mt-0">
                                <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                    <div class="text-sm font-bold leading-none">12</div>
                                    <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                                </div>
                                <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5">
                                    Vote
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="idea-container flex bg-white hover:shadow-lg shadow-md rounded-xl transition duration-150 ease-in cursor-pointer">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl text-blue">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>
                    <div class="mt-8">
                        <button class="w-20 bg-blue border border-blue text-white hover:border-white font-bold text-xxs uppercase rounded-xl
                            transition duration-150 ease-in px-4 py-3">
                            Voted
                        </button>
                    </div>
                </div>

                <div class="flex flex-1 px-2 py-6">
                    <a href="" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face2&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="w-full flex flex-col justify-between mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="" class="hover:underline">A random title</a>
                        </h4>
                        <div class="text-gray-600 text-justify mt-3 line-clamp-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam id laborum dicta accusamus nostrum ut sed inventore autem quaerat, necessitatibus rem adipisci temporibus eum sint cupiditate, molestiae optio animi. Commodi dolore perferendis vero? Aliquam minus pariatur explicabo ullam doloremque.
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category 1</div>
                                <div>&bull;</div>
                                <div class="text-gray-700">Comments</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                    In progress
                                </div>
                                <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                    <svg class="h-3 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                    <ul class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                                        <li>
                                            <a class="hover:bg-gray-100 block text-xs transition duration-150 ease-in  px-5 py-3" href="">Mark as spam</a>
                                        </li>
                                        <li>
                                            <a class="hover:bg-gray-100 block text-xs transition duration-150 ease-in px-5 py-3" href="">Delete Post</a>
                                        </li>
                                    </ul>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        @endforeach
    </div> {{-- End ideas --}}
    <div class="my-8 ">
        {{ $ideas->links() }}
    </div>
</x-app-layout>
