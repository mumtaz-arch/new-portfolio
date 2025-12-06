<?php ob_start(); ?>

<!-- Hero Section -->
<section class="h-screen relative flex items-center overflow-hidden">
    <!-- 3D Background Container -->
    <div id="hero-canvas" class="absolute inset-0 z-0"></div>
    
    <!-- Background Overlay to ensure text readability -->
    <div class="absolute inset-0 bg-background/50 z-0 backdrop-blur-[1px]"></div>

    <div class="max-w-7xl mx-auto px-6 w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
        <!-- Content (Left) -->
        <div class="fade-in-up">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                MUMTAZ <br/>
                <span class="text-gradient">Fullstack & App Builder</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 font-light max-w-lg">
                Membangun sistem, aplikasi, dan pengalaman digital yang cepat, modern, dan scalable.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#projects" class="px-8 py-3 bg-white text-black font-medium rounded-full hover:bg-gray-200 transition-colors text-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    View Projects
                </a>
                <a href="./contact.php" class="px-8 py-3 border border-white/20 text-white font-medium rounded-full hover:bg-white/10 transition-colors text-center backdrop-blur-sm">
                    Contact Me
                </a>
            </div>
        </div>

        <!-- Hero Image (Right) -->
        <div class="hidden md:flex justify-end fade-in-up" style="animation-delay: 0.2s;">
            <div class="relative w-[350px] h-[450px] rounded-2xl overflow-visible">
                <!-- Decorative Elements behind image -->
                <div class="absolute -inset-4 bg-gradient-to-tr from-primary to-accent opacity-30 rounded-2xl blur-xl animate-pulse"></div>
                
                <img src="assets/img/hero.jpg" alt="Mumtaz" class="relative z-10 w-full h-full object-cover rounded-2xl shadow-2xl border border-white/10 grayscale hover:grayscale-0 transition-all duration-700">
            </div>
        </div>
    </div>
</section>

<!-- Skills Marquee Section -->
<section class="reveal py-10 border-y border-white/5 bg-surface/30 backdrop-blur-sm overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 mb-6 text-center md:text-left">
        <span class="text-sm font-semibold text-gray-500 uppercase tracking-widest">Technologies</span>
    </div>
    
    <div class="marquee-container relative flex overflow-x-hidden">
        <div class="marquee-content flex gap-12 animate-marquee whitespace-nowrap items-center text-gray-400">
            <!-- Set 1 -->
            <i class="devicon-html5-plain text-4xl hover:text-[#E34F26] transition-colors"><span class="text-lg font-sans ml-2">HTML</span></i>
            <i class="devicon-css3-plain text-4xl hover:text-[#1572B6] transition-colors"><span class="text-lg font-sans ml-2">CSS</span></i>
            <i class="devicon-javascript-plain text-4xl hover:text-[#F7DF1E] transition-colors"><span class="text-lg font-sans ml-2">JavaScript</span></i>
            <i class="devicon-vuejs-plain text-4xl hover:text-[#4FC08D] transition-colors"><span class="text-lg font-sans ml-2">Vue</span></i>
            <i class="devicon-react-original text-4xl hover:text-[#61DAFB] transition-colors"><span class="text-lg font-sans ml-2">React</span></i>
            <i class="devicon-figma-plain text-4xl hover:text-[#F24E1E] transition-colors"><span class="text-lg font-sans ml-2">Figma</span></i>
            <i class="devicon-bootstrap-plain text-4xl hover:text-[#7952B3] transition-colors"><span class="text-lg font-sans ml-2">Bootstrap</span></i>
            <i class="devicon-tailwindcss-original text-4xl hover:text-[#06B6D4] transition-colors"><span class="text-lg font-sans ml-2">Tailwind</span></i>
            <i class="devicon-wordpress-plain text-4xl hover:text-[#21759B] transition-colors"><span class="text-lg font-sans ml-2">WordPress</span></i>
            <i class="devicon-php-plain text-4xl hover:text-[#777BB4] transition-colors"><span class="text-lg font-sans ml-2">PHP</span></i>
            <i class="devicon-mysql-plain text-4xl hover:text-[#4479A1] transition-colors"><span class="text-lg font-sans ml-2">MySQL</span></i>
            <i class="devicon-laravel-original text-4xl hover:text-[#FF2D20] transition-colors"><span class="text-lg font-sans ml-2">Laravel</span></i>
            <i class="devicon-git-plain text-4xl hover:text-[#F05032] transition-colors"><span class="text-lg font-sans ml-2">Git</span></i>
            <i class="devicon-github-original text-4xl hover:text-[#ffffff] transition-colors"><span class="text-lg font-sans ml-2">GitHub</span></i>
            <i class="devicon-docker-plain text-4xl hover:text-[#2496ED] transition-colors"><span class="text-lg font-sans ml-2">Docker</span></i>
            
            <!-- Duplicate for loop -->
            <i class="devicon-html5-plain text-4xl hover:text-[#E34F26] transition-colors"><span class="text-lg font-sans ml-2">HTML</span></i>
            <i class="devicon-css3-plain text-4xl hover:text-[#1572B6] transition-colors"><span class="text-lg font-sans ml-2">CSS</span></i>
            <i class="devicon-javascript-plain text-4xl hover:text-[#F7DF1E] transition-colors"><span class="text-lg font-sans ml-2">JavaScript</span></i>
            <i class="devicon-vuejs-plain text-4xl hover:text-[#4FC08D] transition-colors"><span class="text-lg font-sans ml-2">Vue</span></i>
            <i class="devicon-react-original text-4xl hover:text-[#61DAFB] transition-colors"><span class="text-lg font-sans ml-2">React</span></i>
            <i class="devicon-figma-plain text-4xl hover:text-[#F24E1E] transition-colors"><span class="text-lg font-sans ml-2">Figma</span></i>
            <i class="devicon-bootstrap-plain text-4xl hover:text-[#7952B3] transition-colors"><span class="text-lg font-sans ml-2">Bootstrap</span></i>
            <i class="devicon-tailwindcss-original text-4xl hover:text-[#06B6D4] transition-colors"><span class="text-lg font-sans ml-2">Tailwind</span></i>
            <i class="devicon-wordpress-plain text-4xl hover:text-[#21759B] transition-colors"><span class="text-lg font-sans ml-2">WordPress</span></i>
            <i class="devicon-php-plain text-4xl hover:text-[#777BB4] transition-colors"><span class="text-lg font-sans ml-2">PHP</span></i>
            <i class="devicon-mysql-plain text-4xl hover:text-[#4479A1] transition-colors"><span class="text-lg font-sans ml-2">MySQL</span></i>
            <i class="devicon-laravel-original text-4xl hover:text-[#FF2D20] transition-colors"><span class="text-lg font-sans ml-2">Laravel</span></i>
            <i class="devicon-git-plain text-4xl hover:text-[#F05032] transition-colors"><span class="text-lg font-sans ml-2">Git</span></i>
            <i class="devicon-github-original text-4xl hover:text-[#ffffff] transition-colors"><span class="text-lg font-sans ml-2">GitHub</span></i>
            <i class="devicon-docker-plain text-4xl hover:text-[#2496ED] transition-colors"><span class="text-lg font-sans ml-2">Docker</span></i>
        </div>
    </div>
</section>

<!-- Projects Section Anchor -->
<div id="projects" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="mb-12 reveal">
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Selected Work</h2>
            <p class="text-gray-400">Beberapa project yang telah saya kerjakan.</p>
        </div>

        <!-- Projects Grid -->
        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal delay-200">
            <?php
            // Extended Mock Data for Pagination Demo
            $projects = [
                // 1
                ['title' => 'E-Commerce Platform', 'description' => 'Platform toko online modern dengan fitur lengkap: checkout, payment gateway, dan dashboard admin.', 'tags' => ['Website', 'Fullstack', 'Laravel'], 'link' => '#'],
                // 2
                ['title' => 'Sistem Informasi Sekolah', 'description' => 'Aplikasi manajemen sekolah terintegrasi untuk pengelolaan data siswa, guru, nilai, dan presensi.', 'tags' => ['App', 'System', 'Backend'], 'link' => '#'],
                // 3
                ['title' => 'Company Profile Corporate', 'description' => 'Website profil perusahaan dengan desain elegan dan animasi interaktif.', 'tags' => ['Landing Page', 'Three.js'], 'link' => '#'],
                // 4
                ['title' => 'Task Management App', 'description' => 'Aplikasi produktivitas mirip Linear untuk manajemen tugas tim.', 'tags' => ['App', 'Vue.js'], 'link' => '#'],
                // 5
                ['title' => 'Resto POS System', 'description' => 'Sistem Point of Sale (POS) untuk restoran, mencakup manajemen meja dan pesanan.', 'tags' => ['System', 'POS'], 'link' => '#'],
                // 6
                ['title' => 'Personal Blog', 'description' => 'Blog pribadi minimalis dengan dukungan markdown dan performa tinggi.', 'tags' => ['Website', 'Gatsby'], 'link' => '#'],
                // 7 (Hidden initially)
                ['title' => 'Real Estate App', 'description' => 'Aplikasi pencarian properti dengan fitur peta interaktif.', 'tags' => ['App', 'React Native'], 'link' => '#'],
                // 8 (Hidden)
                ['title' => 'Inventory System', 'description' => 'Sistem stok barang gudang dengan barcode scanner.', 'tags' => ['System', 'Java'], 'link' => '#'],
                // 9 (Hidden)
                ['title' => 'Medical Dashboard', 'description' => 'Dashboard monitoring pasien untuk rumah sakit.', 'tags' => ['Web App', 'React'], 'link' => '#'],
            ];

            foreach ($projects as $index => $project) {
                $title = $project['title'];
                $description = $project['description'];
                $tags = $project['tags'];
                $link = $project['link'];
                $image = null; 
                
                // Add hidden class for items > 6 (index 0-5 show, 6+ hide)
                $extraClass = ($index >= 6) ? 'hidden-project hidden' : '';
                
                // Capture component output to wrap or modify if needed, or just include
                // Since component doesn't accept extra classes easily without modification, we wrap it.
                echo "<div class='project-wrapper $extraClass'>";
                include 'components/project-card.php';
                echo "</div>";
            }
            ?>
        </div>
        
        <!-- Load More Button -->
        <div class="mt-12 text-center reveal delay-300" id="load-more-container">
             <button id="load-more-btn" class="inline-flex items-center text-white border border-white/20 px-8 py-3 rounded-full hover:bg-white/10 transition-colors">
                Load More
            </button>
        </div>
    </div>
</div>

<style>
    /* Marquee Animation */
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee {
        animation: marquee 30s linear infinite;
    }
    .marquee-content:hover {
        animation-play-state: paused;
    }
    
    /* Using global .reveal class now instead of inline fade-in-up */
    .fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        transform: translateY(20px);
    }
    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<script>
    // Load More Logic
    document.getElementById('load-more-btn').addEventListener('click', function() {
        const hiddenProjects = document.querySelectorAll('.hidden-project');
        
        // Simulate loading delay for "API call" feel
        const btn = this;
        btn.innerHTML = 'Loading...';
        btn.disabled = true;
        
        setTimeout(() => {
            hiddenProjects.forEach(el => {
                el.classList.remove('hidden');
                el.classList.add('fade-in-up'); // Add animation
            });
            
            // Hide button after loading all
            btn.parentElement.style.display = 'none';
        }, 800);
    });
</script>

<?php 
$content = ob_get_clean(); 
include 'layouts/main.php'; 
?>

<!-- Module script for Three.js -->
<script type="module" src="assets/js/hero-animation.js"></script>
