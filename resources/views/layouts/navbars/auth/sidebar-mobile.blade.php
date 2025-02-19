{{-- <aside id="mobile-sidenav" class="fixed inset-y-0 left-0 z-50 w-64 transform -translate-x-full bg-white shadow-lg transition-transform duration-300 ease-in-out">
    <!-- Mobile Sidebar Header -->
    <div class="flex items-center justify-between p-4 bg-gray-800">
        <h2 class="text-lg font-bold text-white">Menu</h2>
        <button id="mobile-sidenav-close" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Sidebar Menu -->
    <div class="p-4 overflow-y-auto">
        <ul>
            <!-- Dashboard Nav Item -->
            <li class="mb-2">
                <a href="{{ route('dashboard') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'dashboard' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Dashboard Icon (copied from the desktop version) -->
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>shop</title>
                            <g id="Basic-Elements" stroke="none" stlroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                   fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                  d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                  id="Path" opacity="0.598981585"></path>
                                            <path class="color-background"
                                                  d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                                                  id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="flex-1">Dashboard</span>
                </a>
            </li>

            <!-- Sliders Nav Item -->
            <li class="mb-2">
                <a href="{{ route('sliders') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'sliders' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Sliders Icon -->
                        <svg class="{{ request()->routeIs('slider') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('sliders') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24l16 0 0 33.3C119.6 157.2 32 252.4 32 368l448 0c0-115.6-87.6-210.8-200-222.7l0-33.3 16 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-40 0-40 0zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24l464 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L24 400z" />
                        </svg>
                    </div>
                    <span class="flex-1">Sliders</span>
                </a>
            </li>

            <!-- Contact Nav Item -->
            <li class="mb-2">
                <a href="{{ route('contact') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'contact' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Contact Icon -->
                        <svg class="{{ request()->routeIs('contact') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('contact') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                        </svg>
                    </div>
                    <span class="flex-1">Contact</span>
                </a>
            </li>

            <!-- Testimony Nav Item -->
            <li class="mb-2">
                <a href="{{ route('testimonials') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'testimonials' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Testimony Icon -->
                        <svg class="{{ request()->routeIs('testimonials') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('testimonials') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                        </svg>
                    </div>
                    <span class="flex-1">Testimony</span>
                </a>
            </li>

            <!-- Booking Nav Item -->
            <li class="mb-2">
                <a href="{{ route('booking') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'booking' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Booking Icon -->
                        <svg class="{{ request()->routeIs('booking') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('booking') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                        </svg>
                    </div>
                    <span class="flex-1">Booking</span>
                </a>
            </li>

            <!-- Sections Nav Item -->
            <li class="mb-2">
                <a href="{{ route('sections') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'sections' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Sections Icon -->
                        <svg class="{{ request()->routeIs('sections') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('sections') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                        </svg>
                    </div>
                    <span class="flex-1">Sections</span>
                </a>
            </li>

            <!-- Subscriptions Nav Item -->
            <li class="mb-2">
                <a href="{{ route('subscription') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'subscription' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Subscriptions Icon -->
                        <svg class="{{ request()->routeIs('subscription') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('subscription') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                        </svg>
                    </div>
                    <span class="flex-1">Subscriptions</span>
                </a>
            </li>

            <!-- Tours Nav Item -->
            <li class="mb-2">
                <a href="{{ route('tour') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'tour' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Tours Icon -->
                        <svg class="{{ request()->routeIs('tour') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('tour') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                        </svg>
                    </div>
                    <span class="flex-1">Tours</span>
                </a>
            </li>

            <!-- Schedules Nav Item -->
            <li class="mb-2">
                <a href="{{ route('schedule') }}" wire:navigate
                   class="flex items-center p-2 rounded-lg hover:bg-[#56C596] hover:text-white {{ Route::currentRouteName() == 'schedule' ? 'bg-[#56C596] text-white font-bold' : 'text-gray-700' }}">
                    <div class="p-2 bg-white rounded-full mr-3 shadow">
                        <!-- Schedules Icon -->
                        <svg class="{{ request()->routeIs('schedule') ? 'text-white' : 'text-dark' }}"
                             style="width: 24px; height: 24px; {{ request()->routeIs('schedule') ? 'fill:black;' : 'fill: black;' }}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                        </svg>
                    </div>
                    <span class="flex-1">Schedules</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'videos' ? 'bg-[#56C596] text-white font-bold rounded-2xl' : '' }}"
                    wire:navigate href="{{ route('videos') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288..." />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Videos</span>
                </a>
            </li>
            <!-- Logout Nav Item -->
            <li class="mt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center p-2 rounded-lg hover:bg-red-600 hover:text-white text-gray-700">
                        <div class="p-2 bg-white rounded-full mr-3 shadow">
                            <!-- Logout Icon -->
                            <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-8V5"></path>
                            </svg>
                        </div>
                        <span class="flex-1">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<script>
    // Toggle mobile sidebar example script
    const mobileSidenav = document.getElementById('mobile-sidenav');
    const mobileSidenavClose = document.getElementById('mobile-sidenav-close');

    mobileSidenavClose.addEventListener('click', () => {
        mobileSidenav.classList.add('-translate-x-full');
    });

    // Define a function to open the sidebar (e.g., on hamburger click)
    function openMobileSidebar() {
        mobileSidenav.classList.remove('-translate-x-full');
    }
</script> --}}