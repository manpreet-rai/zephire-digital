<nav class="fixed w-full z-50 bg-white backdrop-blur-md border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo Section -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <img class="scale-50" src="{{ asset('/logo-dark.png') }}" alt="logo">
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:block">
                <div class="flex items-center space-x-8">
                    <a href="#services" class="text-gray-700 hover:text-orange-600 transition-colors duration-200 font-medium">Services</a>
                    <a href="#pricing" class="text-gray-700 hover:text-orange-600 transition-colors duration-200 font-medium">Pricing</a>
                    <a href="#workflow" class="text-gray-700 hover:text-orange-600 transition-colors duration-200 font-medium">Process</a>
                    <a href="#faq" class="text-gray-700 hover:text-orange-600 transition-colors duration-200 font-medium">FAQ</a>
                    <button class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-lg font-semibold hover:from-orange-600 hover:to-red-600 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobileMenuToggle" class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors duration-200">
                    <svg id="hamburgerIcon" class="w-6 h-6 text-gray-700 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="closeIcon" class="w-6 h-6 text-gray-700 hidden transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenuOverlay" class="lg:hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-40 opacity-0 invisible transition-all duration-300 ease-in-out"></div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="lg:hidden fixed top-0 right-0 h-full w-80 max-w-[85vw] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="p-6 bg-white">
            <!-- Mobile Menu Header -->
            <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-200">
                <div class="flex items-center">
                    <svg width="32" height="32" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                        <path d="M8 15 L32 25 L8 35 Z" fill="#FF6B35"/>
                        <path d="M8 15 L32 25 L22 15 Z" fill="#FF8A5C"/>
                    </svg>
                    <span class="text-lg font-bold gradient-text">Zephire</span>
                </div>
                <button id="closeMobileMenu" class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors duration-200">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Links -->
            <div class="space-y-4">
                <a href="#services" class="mobile-link block text-lg text-gray-700 hover:text-orange-600 transition-colors duration-200 py-3 px-4 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        Services
                    </div>
                </a>
                <a href="#pricing" class="mobile-link block text-lg text-gray-700 hover:text-orange-600 transition-colors duration-200 py-3 px-4 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                        Pricing
                    </div>
                </a>
                <a href="#workflow" class="mobile-link block text-lg text-gray-700 hover:text-orange-600 transition-colors duration-200 py-3 px-4 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Process
                    </div>
                </a>
                <a href="#faq" class="mobile-link block text-lg text-gray-700 hover:text-orange-600 transition-colors duration-200 py-3 px-4 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        FAQ
                    </div>
                </a>
            </div>

            <!-- Mobile CTA Button -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <button class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-red-600 transition-all duration-300 shadow-lg">
                    Schedule Free Consultation
                </button>
            </div>

            <!-- Contact Info -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    <i class="fas fa-envelope mr-2"></i>
                    admin@zephiredigital.com
                </p>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu functionality
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    let isMenuOpen = false;

    function openMobileMenu() {
        isMenuOpen = true;
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        mobileMenuOverlay.classList.remove('invisible', 'opacity-0');
        mobileMenuOverlay.classList.add('visible', 'opacity-100');
        document.body.classList.add('overflow-hidden');

        hamburgerIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    }
    function closeMobileMenuFunc() {
        isMenuOpen = false;
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        mobileMenuOverlay.classList.remove('visible', 'opacity-100');
        mobileMenuOverlay.classList.add('invisible', 'opacity-0');
        document.body.classList.remove('overflow-hidden');

        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }


    function toggleMobileMenu() {
        if (isMenuOpen) {
            closeMobileMenuFunc();
        } else {
            openMobileMenu();
        }
    }

    // Event listeners
    mobileMenuToggle.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        toggleMobileMenu();
        console.log('Menu toggle clicked'); // Debug log
    });

    closeMobileMenu.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        closeMobileMenuFunc();
    });

    mobileMenuOverlay.addEventListener('click', closeMobileMenuFunc);

    // Close mobile menu when clicking on links
    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenuFunc);
    });

    // Close mobile menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMenuOpen) {
            closeMobileMenuFunc();
        }
    });

    // Handle resize events
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && isMenuOpen) {
            closeMobileMenuFunc();
        }
    });

    // Prevent clicks inside the menu from closing it
    mobileMenu.addEventListener('click', (e) => {
        e.stopPropagation();
    });
</script>
