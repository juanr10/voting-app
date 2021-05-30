<x-app-layout>
    <a href="" class="flex items-center font-semibold hover:underline">
        <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Back
    </a>

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount" />

    <div class="comments-container relative space-y-6 md:ml-22 my-8 mt-1 pt-6">
        <div class="comment-container relative flex bg-white hover:shadow-lg shadow-md rounded-xl transition duration-150 ease-in cursor-pointer md:mt-6">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#image">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face2&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full md:mx-4">
                    <div class="text-gray-600 text-justify mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-gray-900 font-bold">John doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 z-10">
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
                                    class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0"
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
                    </div>
                </div>
            </div>
        </div>

        <div class="comment-container is-admin relative flex bg-white hover:shadow-lg shadow-md rounded-xl border-2 border-blue border-opacity-50 transition duration-150 ease-in cursor-pointer mt-6">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#image">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face3&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                        <div class="text-blue font-bold text-center text-xxs mt-2">ADMIN</div>
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status updated to "In Consideration"</a>
                    </h4>
                    <div class="text-gray-600 text-justify mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, saepe!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-blue font-bold">John doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 z-10">
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
                                    class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0"
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
                    </div>
                </div>
            </div>
        </div>

        <div class="comment-container relative flex bg-white hover:shadow-lg shadow-md rounded-xl transition duration-150 ease-in cursor-pointer md:mt-6">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#image">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face2&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full md:mx-4">
                    <div class="text-gray-600 text-justify mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-gray-900 font-bold">John doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 z-10">
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
                                    class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0"
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
