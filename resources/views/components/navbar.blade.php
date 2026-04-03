<nav
    class="fixed w-full z-50 top-0 transition-all duration-300 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md border-b border-slate-200 dark:border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#"
                    class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-cyan-500 dark:from-indigo-400 dark:to-cyan-400">
                    Portfo<span class="text-slate-900 dark:text-white">lio.</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-6">
                    <a href="#home"
                        class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#about"
                        class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="#experience"
                        class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Experience</a>
                    <a href="#projects"
                        class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 transition-colors px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                    
                    <!-- Theme Toggle Button -->
                    <button type="button" id="theme-toggle" class="p-2 ml-2 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg focus:outline-none transition-colors">
                        <!-- Sun Icon (dilihat saat Dark Mode hidup, untuk berganti ke Light mode) -->
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 4.22a1 1 0 011.415 0l.708.708a1 1 0 01-1.414 1.414l-.708-.708a1 1 0 010-1.414zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM14.142 15.556a1 1 0 010 1.415l-.708.708a1 1 0 01-1.414-1.414l.708-.708a1 1 0 011.414 0zM10 18a1 1 0 01-1-1v-1a1 1 0 112 0v1a1 1 0 01-1 1zm-4.22-4.22a1 1 0 01-1.415 0l-.708-.708a1 1 0 011.414-1.414l.708.708a1 1 0 010 1.414zM2 10a1 1 0 011-1h1a1 1 0 110 2H3a1 1 0 01-1-1zm4.22-4.22a1 1 0 010-1.415l-.708-.708a1 1 0 011.414-1.414l.708.708a1 1 0 01-1.414 1.414z"></path>
                            <path d="M10 15a5 5 0 100-10 5 5 0 000 10z"></path>
                        </svg>
                        <!-- Moon Icon (dilihat saat Light Mode hidup, untuk berganti ke Dark mode) -->
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>

                    <a href="#contact"
                        class="bg-indigo-600 hover:bg-indigo-500 text-white px-5 py-2 rounded-full text-sm font-medium transition-all shadow-lg shadow-indigo-500/30 ml-4">Contact
                        Me</a>
                </div>
            </div>

            <!-- Mobile menu button & Theme toggle -->
            <div class="-mr-2 flex md:hidden items-center">
                <!-- Theme Toggle Button Mobile -->
                <button type="button" id="theme-toggle-mobile" class="p-2 mr-2 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg focus:outline-none transition-colors">
                    <svg id="theme-toggle-light-icon-mobile" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 4.22a1 1 0 011.415 0l.708.708a1 1 0 01-1.414 1.414l-.708-.708a1 1 0 010-1.414zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM14.142 15.556a1 1 0 010 1.415l-.708.708a1 1 0 01-1.414-1.414l.708-.708a1 1 0 011.414 0zM10 18a1 1 0 01-1-1v-1a1 1 0 112 0v1a1 1 0 01-1 1zm-4.22-4.22a1 1 0 01-1.415 0l-.708-.708a1 1 0 011.414-1.414l.708.708a1 1 0 010 1.414zM2 10a1 1 0 011-1h1a1 1 0 110 2H3a1 1 0 01-1-1zm4.22-4.22a1 1 0 010-1.415l-.708-.708a1 1 0 011.414-1.414l.708.708a1 1 0 01-1.414 1.414z"></path><path d="M10 15a5 5 0 100-10 5 5 0 000 10z"></path></svg>
                    <svg id="theme-toggle-dark-icon-mobile" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                </button>

                <button type="button" id="mobile-menu-btn"
                    class="inline-flex items-center justify-center p-2 rounded-md text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" id="icon-menu" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-b border-slate-200 dark:border-white/10" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-center">
            <a href="#home"
                class="text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">Home</a>
            <a href="#about"
                class="text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">About</a>
            <a href="#experience"
                class="text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">Experience</a>
            <a href="#projects"
                class="text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400 block px-3 py-2 rounded-md text-base font-medium transition-colors">Projects</a>
            <a href="#contact"
                class="bg-indigo-600 hover:bg-indigo-500 text-white block px-3 py-2 mt-4 mx-4 rounded-full text-base font-medium transition-colors">Contact
                Me</a>
        </div>
    </div>
</nav>

<script>
    // Logika Theme Switcher (Dark/Light Mode)
    function setupThemeToggle(btnId, darkIconId, lightIconId) {
        const themeToggleBtn = document.getElementById(btnId);
        const themeToggleDarkIcon = document.getElementById(darkIconId);
        const themeToggleLightIcon = document.getElementById(lightIconId);

        if (!themeToggleBtn) return;

        // Cek localStorage dan tampilkan ikon yang tepat saat awal dimuat
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else if (localStorage.getItem('theme') === 'light') {
            themeToggleDarkIcon.classList.remove('hidden');
        } else {
            // Default project ini adalah dark mode
            themeToggleLightIcon.classList.remove('hidden');
        }

        // Terapkan toggle saat tombol diklik
        themeToggleBtn.addEventListener('click', function() {
            // Toggle icons
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // Cek kondisi saat ini
            if (localStorage.getItem('theme')) {
                if (localStorage.getItem('theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Init Mobile Menu
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        if (btn) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                iconMenu.classList.toggle('hidden');
                iconMenu.classList.toggle('block');
                iconClose.classList.toggle('hidden');
                iconClose.classList.toggle('block');
            });

            const links = menu.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    iconMenu.classList.remove('hidden');
                    iconMenu.classList.add('block');
                    iconClose.classList.add('hidden');
                    iconClose.classList.remove('block');
                });
            });
        }

        // Init Theme Toggles
        setupThemeToggle('theme-toggle', 'theme-toggle-dark-icon', 'theme-toggle-light-icon');
        setupThemeToggle('theme-toggle-mobile', 'theme-toggle-dark-icon-mobile', 'theme-toggle-light-icon-mobile');
    });
</script>