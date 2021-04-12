<x-app-layout>
    <a href="" class="flex items-center font-semibold hover:underline">
        <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Back
    </a>

    <div class="idea-container flex bg-white hover:shadow-lg rounded-xl transition duration-150 ease-in cursor-pointer mt-6 shadow-md">
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
            <div class="relative">
                <button type="button" class="flex items-center justify-center w-36 h-11 bg-blue border border-blue hover:bg-blue-hover transition duration-150 ease-in rounded-xl font-semibold text-xs text-white px-6 py-3">
                    <span class="ml-1">Reply</span>
                </button>
                <div class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-lg rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                            >
                                Post Comment
                            </button>
                            <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                            >
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="relative">
                <button type="button" class="flex items-center justify-center h-11 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in rounded-xl font-semibold text-xs px-6 py-3">
                    <span class="mr-1">Set Status</span>
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-lg rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status" value="1" checked>
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-purple border-none" name="status" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-yellow border-none" name="status" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-green border-none" name="status" value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-red border-none" name="status" value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button
                                type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                            >
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button
                                type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                            >
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
        <div class="comment-container relative flex bg-white hover:shadow-lg shadow-md rounded-xl transition duration-150 ease-in cursor-pointer mt-6">
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

        <div class="comment-container relative flex bg-white hover:shadow-lg shadow-md rounded-xl transition duration-150 ease-in cursor-pointer mt-6">
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
