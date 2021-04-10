<x-app-layout>
    <a href="" class="flex items-center font-semibold hover:underline">
        <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Back
    </a>

    <div class="idea-container flex bg-white hover:shadow-md rounded-xl transition duration-150 ease-in cursor-pointer mt-6">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#image">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face1&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">A random title</a>
                </h4>
                <div class="text-gray-600 text-justify mt-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem placeat aliquam ipsam atque quisquam unde itaque consectetur corporis, repudiandae molestiae porro numquam enim ipsum cupiditate nam et eveniet modi excepturi dolore. Laborum perferendis voluptatum hic, vero odit possimus odio at!
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="text-gray-900 font-bold">John doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-700">Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
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
    </div>

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button" class="flex items-center justify-center w-36 h-11 bg-blue border border-blue hover:bg-blue-hover transition duration-150 ease-in rounded-xl font-semibold text-xs text-white px-6 py-3">
                <span class="ml-1">Reply</span>
            </button>
            <button type="button" class="flex items-center justify-center h-11 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in rounded-xl font-semibold text-xs px-6 py-3">
                <span class="mr-1">Set Status</span>
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text xs leading-none">Votes</div>
            </div>
            <button type="button" class="w-32 h-11 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in rounded-xl font-semibold text-xs px-6 py-3">
                <span class="mr-1">Vote</span>
            </button>
        </div>
    </div>

    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-6">
        <div class="comment-container relative flex bg-white hover:shadow-md rounded-xl transition duration-150 ease-in cursor-pointer mt-6">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#image">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face2&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <div class="text-gray-600 text-justify mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-gray-900 font-bold">John doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2 z-10">
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
        </div>

        <div class="comment-container is-admin relative flex bg-white hover:shadow-md rounded-xl transition duration-150 ease-in cursor-pointer mt-6">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#image">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face3&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                        <div class="text-blue font-bold text-center text-xxs mt-2">ADMIN</div>
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status updated to "Consideration"</a>
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
                        <div class="flex items-center space-x-2 z-10">
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
        </div>

        <div class="comment-container relative flex bg-white hover:shadow-md rounded-xl transition duration-150 ease-in cursor-pointer mt-6">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#image">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face4&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <div class="text-gray-600 text-justify mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-gray-900 font-bold">John doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2 z-10">
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
        </div>
    </div>
</x-app-layout>
