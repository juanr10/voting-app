<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Category one</option>
                <option value="1">Category two</option>
                <option value="1">Category three</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Category one</option>
                <option value="1">Category two</option>
                <option value="1">Category three</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none px-4 py-2 pl-8 placeholder-gray-700">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> {{-- End filters --}}

    <div class="ideas space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl
                        transition duration-150 ease-in px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="image-avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam id laborum dicta accusamus nostrum ut sed inventore autem quaerat, necessitatibus rem adipisci temporibus eum sint cupiditate, molestiae optio animi. Commodi dolore perferendis vero? Aliquam minus pariatur explicabo ullam doloremque.
                    </div>
                </div>
            </div>
        </div>
    </div> {{-- End ideas --}}
</x-app-layout>
