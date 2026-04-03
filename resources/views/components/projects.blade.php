<section id="projects" class="py-24 relative bg-white dark:bg-transparent transition-colors duration-500">
    <div class="absolute right-0 top-1/4 w-96 h-96 bg-cyan-600/10 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <h2
                class="text-sm font-bold text-indigo-600 dark:text-indigo-400 tracking-wider uppercase mb-2 transition-colors duration-500">
                Portfolio</h2>
            <h3 class="text-3xl md:text-5xl font-bold text-slate-900 dark:text-white transition-colors duration-500">
                Featured Projects</h3>
        </div>

        <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
            <!-- Project 1: Sistem Inventory Tembakau -->
            <div
                class="group relative bg-slate-50 dark:bg-slate-900/80 rounded-3xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:border-indigo-400 dark:hover:border-indigo-500/50 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(99,102,241,0.2)] dark:hover:shadow-[0_20px_40px_-15px_rgba(99,102,241,0.3)]">

                <!-- Image Container -->
                <div
                    class="h-60 bg-slate-200 dark:bg-slate-800 relative overflow-hidden transition-colors duration-500">
                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-100 dark:from-slate-900 via-transparent to-transparent z-10 opacity-80 transition-colors duration-500">
                    </div>
                    <!-- Glow Effect -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-indigo-400/30 dark:bg-indigo-500/40 blur-[60px] group-hover:bg-indigo-500/50 dark:group-hover:bg-indigo-500/60 transition-colors duration-500 rounded-full z-0">
                    </div>

                    <!-- Gunakan gambar Unsplash sebagai placeholder sementara yang elegan -->
                    <img src="{{ asset('images/Projects/S-Tembakau.png') }}" alt="Sistem Inventory Tembakau"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 relative z-0 opacity-90 dark:opacity-70 group-hover:opacity-100">

                    <!-- Floating Tags -->
                    <div class="absolute bottom-5 left-5 z-20 flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 text-xs font-bold bg-white/90 dark:bg-slate-900/80 backdrop-blur-md text-red-600 dark:text-red-500 border border-slate-200 dark:border-slate-700 rounded-full shadow-lg transition-colors duration-500">Laravel</span>
                        <span
                            class="px-3 py-1.5 text-xs font-bold bg-white/90 dark:bg-slate-900/80 backdrop-blur-md text-cyan-600 dark:text-cyan-400 border border-slate-200 dark:border-slate-700 rounded-full shadow-lg transition-colors duration-500">Tailwind</span>
                        <span
                            class="px-3 py-1.5 text-xs font-bold bg-white/90 dark:bg-slate-900/80 backdrop-blur-md text-pink-600 dark:text-pink-500 border border-slate-200 dark:border-slate-700 rounded-full shadow-lg transition-colors duration-500">Livewire</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 relative flex flex-col h-[calc(100%-15rem)]">
                    <h4
                        class="text-2xl font-bold mb-3 text-slate-800 dark:text-slate-100 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-300">
                        Sistem Inventory Tembakau</h4>
                    <p
                        class="text-slate-600 dark:text-slate-400 text-sm mb-8 leading-relaxed flex-grow transition-colors duration-500">
                        Aplikasi sistem inventaris khusus untuk industri tembakau. Fitur utamanya mencakup manajemen
                        stok barang, pencatatan masuk-keluar bahan baku secara real-time, dan pelaporan yang efisien
                        menggunakan Livewire untuk interaktivitas UI yang mulus tanpa reload.
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mt-auto">
                        <a href="https://danuwarta.my.id/"
                            class="flex-1 inline-flex justify-center items-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 dark:hover:bg-indigo-500 text-white text-sm font-semibold rounded-xl transition-all duration-300 shadow-[0_0_15px_rgba(79,70,229,0.2)] dark:shadow-[0_0_20px_rgba(79,70,229,0.3)] hover:shadow-[0_0_20px_rgba(79,70,229,0.4)] dark:hover:shadow-[0_0_25px_rgba(79,70,229,0.6)] group/btn"
                            target="_blank">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                </path>
                            </svg>
                            Live Website
                        </a>
                        <a href="https://github.com/Danuwarta13/Sistem-Tembakau"
                            class="flex-1 inline-flex justify-center items-center px-4 py-2.5 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:text-slate-900 dark:hover:text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:border-slate-400 dark:hover:border-slate-500">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z">
                                </path>
                            </svg>
                            Source Code
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2: Sistem Rekomendasi Kuliner -->
            <div
                class="group relative bg-slate-50 dark:bg-slate-900/80 rounded-3xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:border-cyan-400 dark:hover:border-cyan-500/50 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(34,211,238,0.2)] dark:hover:shadow-[0_20px_40px_-15px_rgba(34,211,238,0.3)]">

                <!-- Image Container -->
                <div
                    class="h-60 bg-slate-200 dark:bg-slate-800 relative overflow-hidden transition-colors duration-500">
                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-100 dark:from-slate-900 via-transparent to-transparent z-10 opacity-80 transition-colors duration-500">
                    </div>
                    <!-- Glow Effect -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-cyan-400/30 dark:bg-cyan-500/40 blur-[60px] group-hover:bg-cyan-500/50 dark:group-hover:bg-cyan-500/60 transition-colors duration-500 rounded-full z-0">
                    </div>

                    <!-- Gunakan gambar kuliner sebagai placeholder sementara yang elegan -->
                    <img src="{{ asset('images/Projects/S-Kuliner.png') }}" alt="Sistem Rekomendasi Kuliner"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 relative z-0 opacity-90 dark:opacity-70 group-hover:opacity-100">

                    <!-- Floating Tags -->
                    <div class="absolute bottom-5 left-5 z-20 flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 text-xs font-bold bg-white/90 dark:bg-slate-900/80 backdrop-blur-md text-red-600 dark:text-red-500 border border-slate-200 dark:border-slate-700 rounded-full shadow-lg transition-colors duration-500">Laravel</span>
                        <span
                            class="px-3 py-1.5 text-xs font-bold bg-white/90 dark:bg-slate-900/80 backdrop-blur-md text-cyan-600 dark:text-cyan-400 border border-slate-200 dark:border-slate-700 rounded-full shadow-lg transition-colors duration-500">Tailwind</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 relative flex flex-col h-[calc(100%-15rem)]">
                    <h4
                        class="text-2xl font-bold mb-3 text-slate-800 dark:text-slate-100 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors duration-300">
                        Sistem Rekomendasi Kuliner</h4>
                    <p
                        class="text-slate-600 dark:text-slate-400 text-sm mb-8 leading-relaxed flex-grow transition-colors duration-500">
                        Platform direktori dan rekomendasi cerdas untuk menemukan tempat makan dan kuliner terfavorit.
                        Dibangun dengan desain Tailwind yang responsif untuk kemudahan pengaksesan melalui perangkat
                        seluler maupun desktop.
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mt-auto">
                        <a href="#"
                            class="flex-1 inline-flex justify-center items-center px-4 py-2.5 bg-cyan-600 hover:bg-cyan-700 dark:hover:bg-cyan-500 text-white text-sm font-semibold rounded-xl transition-all duration-300 shadow-[0_0_15px_rgba(34,211,238,0.2)] dark:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:shadow-[0_0_20px_rgba(34,211,238,0.4)] dark:hover:shadow-[0_0_25px_rgba(34,211,238,0.6)] group/btn">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                </path>
                            </svg>
                            Live Website
                        </a>
                        <a href="https://github.com/Danuwarta13/Sistem-Rekomendasi-Kuliner-"
                            class="flex-1 inline-flex justify-center items-center px-4 py-2.5 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:text-slate-900 dark:hover:text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:border-slate-400 dark:hover:border-slate-500">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z">
                                </path>
                            </svg>
                            Source Code
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>