<section id="home" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
    <!-- Background Decoration -->
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[500px] bg-indigo-500/10 dark:bg-indigo-600/20 blur-[120px] rounded-full pointer-events-none transition-colors duration-500">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">

            <!-- Bagian Kiri: Teks -->
            <div class="text-center my-5 lg:text-left mb-16 lg:mb-0">
                <div
                    class="inline-block mb-4 px-4 py-1.5 rounded-full border border-indigo-200 dark:border-indigo-500/30 bg-indigo-100 dark:bg-indigo-500/10 backdrop-blur-sm transition-colors duration-500">
                    <span
                        class="text-sm font-medium text-indigo-600 dark:text-indigo-300 tracking-wide transition-colors duration-500">🚀
                        Available for new projects</span>
                </div>
                <h1
                    class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 mt-4 text-slate-900 dark:text-white transition-colors duration-500">
                    Hi, I'm a <br />
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-cyan-500 to-indigo-500 dark:from-indigo-400 dark:via-cyan-400 dark:to-indigo-400 animate-pulse">Muchalim
                        <br>
                        Danu Warta</span>
                </h1>
                <p
                    class="mt-4 max-w-2xl text-lg md:text-xl text-slate-600 dark:text-slate-400 mx-auto lg:mx-0 mb-10 transition-colors duration-500">
                    “Fresh Graduate yang Antusias Membangun Solusi Digital”
                    Saya adalah lulusan Teknik Informatika yang memiliki passion di bidang web development, khususnya
                    menggunakan Laravel untuk membangun aplikasi yang bermanfaat.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ asset('CV-MuchalimDanuWarta.pdf') }}" download
                        class="px-8 py-4 bg-indigo-600 text-white dark:bg-white dark:text-slate-950 rounded-full font-semibold hover:scale-105 transition-transform duration-300 shadow-[0_0_20px_-5px_rgba(79,70,229,0.4)] dark:shadow-[0_0_40px_-10px_rgba(255,255,255,0.5)] flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download CV
                    </a>
                    <a href="#contact"
                        class="px-8 py-4 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-white rounded-full font-semibold hover:bg-slate-50 dark:hover:bg-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-all duration-300 shadow-sm">
                        Let's Talk
                    </a>
                </div>
            </div>

            <!-- Bagian Kanan: Foto Transparan -->
            <div class="relative flex justify-center items-center group mt-16 md:mt-24 lg:mt-0 xl:mr-10">
                <!-- Efek cahaya (Glow) di belakang foto -->
                <div
                    class="absolute inset-0 bg-gradient-to-br from-indigo-400/30 to-cyan-400/30 dark:from-indigo-500/40 dark:to-cyan-500/40 blur-[100px] rounded-full scale-75 group-hover:scale-100 transition-all duration-700">
                </div>

                <!-- Ornamen Blob Animasi Belakang (Shape 1 - Lingkaran Solid) -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 md:w-80 md:h-80 bg-gradient-to-tr from-indigo-400 to-cyan-300 dark:from-indigo-600 dark:to-cyan-500 rounded-full opacity-60 dark:opacity-80 mix-blend-multiply dark:mix-blend-screen transition-opacity duration-500"
                    style="animation: spin 15s linear infinite;"></div>

                <!-- Ornamen Blob Animasi Belakang (Shape 2 - Bentuk Organik) -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 md:w-80 md:h-80 bg-gradient-to-bl from-purple-400 to-indigo-400 dark:from-purple-600 dark:to-indigo-500 rounded-[40%_60%_70%_30%/40%_50%_60%_50%] opacity-60 dark:opacity-80 mix-blend-multiply dark:mix-blend-screen blur-[1px] transition-opacity duration-500"
                    style="animation: spin 20s linear infinite reverse;"></div>

                <!-- Lingkaran Bergaris (Ring Putus-putus) -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[20rem] h-[20rem] md:w-[26rem] md:h-[26rem] rounded-full border border-indigo-300/40 dark:border-indigo-400/30 border-dashed transition-colors duration-500"
                    style="animation: spin 25s linear infinite;"></div>

                <!-- Floating Badges / Elemen dekoratif melayang -->
                <div class="absolute top-4 -left-4 md:-left-8 z-30 bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl border border-slate-100 dark:border-slate-700/50 p-3 rounded-2xl shadow-[0_10px_25px_-5px_rgba(0,0,0,0.1)] dark:shadow-[0_0_20px_rgba(0,0,0,0.5)] animate-bounce block sm:block transition-all duration-500"
                    style="animation-duration: 3s;">
                    <span class="text-2xl">✨</span>
                </div>

                <div class="absolute bottom-16 -right-4 md:-right-8 z-30 bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl border border-slate-100 dark:border-slate-700/50 px-4 py-3 rounded-2xl shadow-[0_10px_25px_-5px_rgba(0,0,0,0.1)] dark:shadow-[0_0_20px_rgba(0,0,0,0.5)] animate-bounce block sm:flex items-center gap-3 transition-all duration-500"
                    style="animation-duration: 4s; animation-delay: 1s;">
                    <div class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
                    </div>
                    <span
                        class="text-slate-700 dark:text-slate-200 font-medium text-sm tracking-wide transition-colors duration-500">Open
                        for Work</span>
                </div>

                <!-- Gambar Orang dengan efek mengambang saat hover -->
                <div
                    class="relative z-20 w-72 h-72 md:w-[26rem] md:h-[26rem] hover:-translate-y-4 transition-transform duration-500 flex items-end justify-center">
                    <!-- FOTO ANDA (.PNG dengan background transparan) -->
                    <img src="{{ asset('images/Hero/no-bg.png') }}" alt="Muchalim Danu Warta"
                        class="w-full h-full object-contain object-bottom filter drop-shadow-[0_20px_30px_rgba(79,70,229,0.2)] dark:drop-shadow-[0_20px_30px_rgba(79,70,229,0.4)] transition-all duration-500">
                </div>
            </div>

        </div>
    </div>
</section>