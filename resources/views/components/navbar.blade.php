<!-- Header -->
        <header class="bg-[#191A1B] px-4 py-3">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/logo.webp') }}" alt="logo.png" class="h-5" />
                </div>

                <!-- Navigation -->
                <div class="flex items-center space-x-2">
                    <!-- Search Button -->
                    <button
                        class="bg-transparent border border-gray-600 hover:bg-gray-600 p-2 rounded-full transition-colors"
                    >
                        <svg
                            class="w-4 h-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            ></path>
                        </svg>
                    </button>

                    <!-- Language Selector -->
                    <div
                        class="flex items-center bg-transparent border border-gray-600 rounded-full px-3 py-1.5"
                    >
                        <div
                            class="w-6 h-6 rounded-full mr-2 flex items-center justify-center"
                        >
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M31.8 62c16.6 0 30-13.4 30-30h-60c0 16.6 13.4 30 30 30" fill="#f9f9f9"></path><path d="M31.8 2c-16.6 0-30 13.4-30 30h60c0-16.6-13.4-30-30-30" fill="#ed4c5c"></path></g></svg>
                            <span class="text-white text-[28px]"></span>
                        </div>
                        <span class="text-white text-[14px]">ID</span>
                    </div>

                    <!-- Menu Button -->
                    <button
                        class="bg-transparent border border-gray-600 hover:bg-gray-600 px-2 py-1.5 rounded-full transition-colors"
                    >
                        <svg
                            class="w-5 h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            ></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>