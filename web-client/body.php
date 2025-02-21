<?php
// web-client/body.php
?>
<div class="container mx-auto mt-8 flex flex-col md:flex-row">
    <!-- Main Content -->
    <main class="flex-1 p-4 bg-white rounded-lg shadow-md">
        <section id="welcome-section" class="text-center">
            <h2 class="text-3xl font-bold text-gray-800">Welcome to WG-TaskMate</h2>
            <p class="mt-4 text-gray-600">
                Your ultimate productivity companion designed to help you take control of your time, break bad habits, and build a more fulfilling life.
            </p>
        </section>

        <section id="cta-buttons" class="mt-8 flex justify-center space-x-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                View Tasks
            </button>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                View Schedule
            </button>
        </section>

        <section id="about-section" class="text-center mt-8">
            <h3 class="text-3xl font-bold text-gray-800">What is <span class="font-bold">WG-TaskMate</span>?</h3>
            <p class="mt-4 text-gray-600">
                <span class="font-bold">WG-TaskMate</span> is more than just a task manager—it's a personal productivity tool designed to transform the way you live your life. By helping you track how you spend your time, <span class="font-bold">WG-TaskMate</span> empowers you to identify areas for improvement, replace unproductive habits with healthier ones, and gamify your journey toward success.
            </p>
            <p class="mt-4 text-gray-600">
                Whether you're looking to boost your productivity, manage your daily schedule, or simply understand how you use your time, <span class="font-bold">WG-TaskMate</span> has got you covered. It’s like having a personal coach in your pocket, guiding you every step of the way.
            </p>
        </section>

        <section id="features-section" class="mt-8">
            <h4 class="text-2xl font-bold text-gray-800 text-center mb-6">Why Choose <span class="font-bold">WG-TaskMate</span>?</h4>
            <div class="space-y-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-gray-700">
                        Track your daily activities and see exactly where your time goes with <span class="font-bold">WG-TaskMate</span>. Gain insights into your habits and make data-driven decisions to improve your life.
                    </p>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-gray-700">
                        Break free from unproductive habits by using actionable insights from <span class="font-bold">WG-TaskMate</span>. Replace bad habits with positive routines that align with your goals.
                    </p>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-gray-700">
                        Gamify your productivity journey with challenges, rewards, and progress tracking in <span class="font-bold">WG-TaskMate</span>. Stay motivated and celebrate small wins along the way.
                    </p>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-gray-700">
                        Access your data anytime, anywhere, across devices. <span class="font-bold">WG-TaskMate</span> ensures your information is always at your fingertips, whether you're on your phone, tablet, or desktop.
                    </p>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-gray-700">
                        Stay organized with intuitive task management tools. Create to-do lists, set reminders, and prioritize tasks effortlessly with <span class="font-bold">WG-TaskMate</span>.
                    </p>
                </div>
            </div>
        </section>

        <!-- Download Section -->
        <section id="download-section" class="mt-12 text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Also Available On</h3>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <!-- Google Play Store -->
                <div class="flex flex-col items-center group">
                    <a href="#" class="block relative overflow-hidden rounded-lg">
                        <img src="web-client/assets/images/google-play-badge.png" alt="Google Play Store" class="h-12 w-auto transition-transform duration-200 transform group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-200 p-10 rounded-lg"></div>
                    </a>
                    <p class="mt-2 text-sm text-gray-500">Coming Soon</p>
                </div>
                <!-- Apple App Store -->
                <div class="flex flex-col items-center group">
                    <a href="#" class="block relative overflow-hidden rounded-lg">
                        <img src="web-client/assets/images/app-store-badge.svg" alt="Apple App Store" class="h-12 w-auto transition-transform duration-200 transform group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-200 p-10 rounded-lg"></div>
                    </a>
                    <p class="mt-2 text-sm text-gray-500">Coming Soon</p>
                </div>
                <!-- Windows -->
                <div class="flex flex-col items-center group">
                    <a href="#" class="block relative overflow-hidden rounded-lg">
                        <img src="web-client/assets/images/windows-badge.png" alt="Windows Download" class="h-12 w-auto transition-transform duration-200 transform group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-200 p-10 rounded-lg"></div>
                    </a>
                    <p class="mt-2 text-sm text-gray-500">Coming Soon</p>
                </div>
                <!-- macOS -->
                <div class="flex flex-col items-center group">
                    <a href="#" class="block relative overflow-hidden rounded-lg">
                        <img src="web-client/assets/images/macos-badge.png" alt="macOS Download" class="h-12 w-auto transition-transform duration-200 transform group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-200 p-10 rounded-lg"></div>
                    </a>
                    <p class="mt-2 text-sm text-gray-500">Coming Soon</p>
                </div>
            </div>
        </section>

        <script>
            // Add click animation
            document.querySelectorAll('#download-section a').forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent default behavior (e.g., navigating to #)
                    const img = link.querySelector('img');
                    img.classList.add('clicked'); // Add custom animation class
                    setTimeout(() => {
                        img.classList.remove('clicked'); // Remove animation after 300ms
                    }, 300);
                });
            });
        </script>

        <style>
            /* Custom click animation */
            .clicked {
                animation: click-animation 0.3s ease-in-out;
            }

            @keyframes click-animation {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(0.9);
                }
                100% {
                    transform: scale(1);
                }
            }
        </style>
    </main>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
</div>