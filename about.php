<?php ob_start(); ?>

<section class="min-h-screen py-20">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Header -->
        <h1 class="text-5xl font-bold mb-12 reveal">About Me</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Sidebar / Key Info -->
            <div class="md:col-span-1 reveal delay-100">
                <div class="bg-surface p-6 rounded-2xl border border-white/5 sticky top-24">
                    <img src="assets/img/hero.jpg" alt="Mumtaz" class="w-full aspect-square object-cover rounded-xl mb-6 grayscale hover:grayscale-0 transition-all duration-500">
                    
                    <div class="space-y-4">
                        <div>
                            <span class="block text-xs uppercase tracking-wider text-gray-500 mb-1">Location</span>
                            <span class="text-white">Indonesia</span>
                        </div>
                        <div>
                            <span class="block text-xs uppercase tracking-wider text-gray-500 mb-1">Focus</span>
                            <span class="text-white">Fullstack Development <br> & Product Design</span>
                        </div>
                         <div>
                            <span class="block text-xs uppercase tracking-wider text-gray-500 mb-1">Experience</span>
                            <span class="text-white">4+ Years</span>
                        </div>
                        
                        <div class="pt-4 border-t border-white/10">
                             <a href="./contact.php" class="block w-full py-2 bg-white text-black text-center font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                Get in touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-2 space-y-12 text-lg text-gray-300 leading-relaxed reveal delay-200">
                <section>
                    <h2 class="text-white text-2xl font-bold mb-4">Background</h2>
                    <p>
                        Halo! Saya Mumtaz, seorang software engineer yang berfokus pada pembangunan aplikasi web modern yang cepat, scalable, dan user-friendly. Saya menggabungkan keahlian teknis dalam <strong>PHP (Laravel), JavaScript (Vue/React)</strong>, dan <strong>System Architecture</strong> dengan kepekaan desain yang minimalis.
                    </p>
                    <p class="mt-4">
                        saya percaya bahwa software tools harus terasa ajaib—cepat, responsif, dan memberdayakan penggunanya, bukan menghalangi mereka.
                    </p>
                </section>

                <section>
                    <h2 class="text-white text-2xl font-bold mb-4">What I Do</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="text-primary mr-3 mt-1">▹</span>
                            <div>
                                <strong class="text-white block">Fullstack Development</strong>
                                Membangun aplikasi end-to-end dari database schema hingga frontend interaction.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-accent mr-3 mt-1">▹</span>
                            <div>
                                <strong class="text-white block">System Design</strong>
                                Merancang arsitektur sistem yang modular dan mudah dipelihara (clean code & scalable pattern).
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-400 mr-3 mt-1">▹</span>
                            <div>
                                <strong class="text-white block">UI/UX Implementation</strong>
                                Menerjemahkan desain menjadi kode yang piksel-perfect dengan fokus pada aksesibilitas dan performa.
                            </div>
                        </li>
                    </ul>
                </section>

                <section>
                    <h2 class="text-white text-2xl font-bold mb-4">Tech Stack</h2>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">PHP</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">JavaScript</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">React</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">MySQL</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">Docker</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full border border-white/10 text-sm">Git</span>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- Removed inline styles as we use global CSS now -->

<?php 
$content = ob_get_clean(); 
include 'layouts/main.php'; 
?>
