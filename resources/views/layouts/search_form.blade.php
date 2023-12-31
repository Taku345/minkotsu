<div x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center max-w-md bg-white rounded-lg " x-data="{ search: '' }">
                <div class="w-full">
                    <input type="search" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none"
                        placeholder="search" x-model="search">
                </div>
                <div>
                    <button type="submit" class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r-lg"
                        :class="(search.length > 0) ? 'bg-primary-light dark:bg-primary-dark' : 'bg-primary-light dark:bg-primary-dark cursor-not-allowed'"
                        :disabled="search.length == 0">
                        <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
