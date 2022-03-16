<x-guest-layout>

    <div>
        <div>
            <img src="/images/avatar_2021.jpeg" alt="Andrea Fomera avatar"
                class="object-cover shadow-lg rounded-lg h-48 w-48 [clip-path:circle()]">
        </div>

        <div class="mt-10">
            <h1 class="text-5xl dark:text-white font-semibold mb-8">👋 Hey there, I'm Andrea!</h1>
            <div class="text-2xl mb-6 dark:text-white">I'm a Senior Software Developer living outside Denver, Colorado
                🏔.</div>

            <div class="prose prose-xl dark:prose-invert mb-3">
                I currently work remotely for <a href="https://www.podia.com"
                    class="font-semibold underline decoration-2 text-[#4B2AAD] decoration-[#4B2AAD] dark:text-[#9979F7] dark:decoration-[#9979F7]"
                    target="_blank">Podia</a>.
                I love building products with Ruby on Rails and delivering high quality, robust and maintainable code.
                My pronouns are <a href="https://pronoun.is/she" target="_blank"
                    class="font-semibold text-amber-500 decoration-2 underline decoration-amber-500">she/her</a>.
            </div>

            <div class="prose prose-xl dark:prose-invert mb-3">
                In my spare time, I <a href="https://store.afomera.dev/"
                    class="font-semibold underline hover:text-pink-700 text-pink-500 decoration-wavy decoration-pink-500 decoration-2"
                    target="_blank">create courses teaching people</a> what I know.
                In 2022 I'm interested in learning how to better <span
                    class="font-semibold text-lime-500 decoration-2 underline decoration-lime-500">mentor
                    developers</span>, and
                <span class="font-semibold text-cyan-500 decoration-2 underline decoration-cyan-500">growing my
                    technical
                    skills</span>.
            </div>

            <div class="mt-10 flex items-center justify-items-center space-x-8">
                <div class="text-[#1da1f2] dark:hover:text-[#1da1f2]/50">
                    <a href="https://twitter.com/afomera" target="_blank"
                        class="font-semibold flex items-center justify-items-center">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                        <div class="text-lg ml-1">@afomera</div>
                    </a>
                </div>
                <div class="dark:text-white dark:hover:text-gray-300">
                    <a href="https://github.com/afomera" target="_blank"
                        class="font-semibold flex items-center justify-items-center">
                        <span class="sr-only">GitHub</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        <div class="text-lg ml-3">afomera</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- TODO, Latest post section -->
        <div class="prose prose-xl dark:prose-invert mt-20">
            <div class="flex items-center space-x-2">
                -if @latest_post.published_at.to_date > 1.month.ago
                <span
                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800">
                    New post!
                </span>
                endif

                <span>Want to read my latest post,
                    <a href="/#{@latest_post.slug}"
                        class="font-semibold underline text-fuchsia-500 decoration-2 decoration-fuchsia-500">latest_post.title</a>?</span>
            </div>
        </div>
    </div>
</x-guest-layout>
