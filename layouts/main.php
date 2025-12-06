<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumtaz — Fullstack Developer</title>
    
    <!-- Fonts: Inter & Satoshi (using Google Fonts for Inter, Setup for Satoshi) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,400,500,700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- Tailwind CSS (CDN for simplicity as requested) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#0F0F0F',
                        surface: '#1A1A1A',
                        primary: '#5E6AD2', // Linear-like Blurple
                        accent: '#00F0FF',  // Cyan/Neon
                        text: '#FFFFFF',
                        muted: '#8A8F98',
                    },
                    fontFamily: {
                        sans: ['Satoshi', 'Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'glow': '0 0 20px rgba(94, 106, 210, 0.3)',
                    }
                }
            }
        }
    </script>

    <!-- Bootstrap CSS (for specific utilities if needed, strictly minimal usage) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Devicon -->
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        body {
            background-color: #0F0F0F;
            color: #FFFFFF;
            font-family: 'Satoshi', 'Inter', sans-serif;
            overflow-x: hidden;
        }
        /* Definitif Linear Gradient Text */
        .text-gradient {
            background: linear-gradient(135deg, #FFFFFF 0%, #8A8F98 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 start-0 border-b border-white/5 bg-[#0F0F0F]/95 backdrop-blur-md transition-all duration-300">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 h-16"> <!-- Slightly larger 64px -->
            <a href="./index.php" class="flex items-center">
                <span class="text-base font-semibold tracking-tight text-white">MUMTAZ</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-1.5 w-8 h-8 justify-center text-gray-400 rounded md:hidden hover:bg-white/10" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 17 14">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden md:block" id="navbar-default">
                <ul class="flex items-center space-x-6 text-sm font-medium">
                    <?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                    $pages = [
                        'index.php' => 'Home',
                        'about.php' => 'About',
                        'contact.php' => 'Contact'
                    ];
                    
                    foreach ($pages as $page => $label) {
                        $is_active = ($current_page === $page);
                        $active_class = $is_active ? 'text-white font-semibold' : 'text-muted hover:text-white';
                        echo "<li><a href=\"./$page\" class=\"$active_class transition-colors\">$label</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-18"> <!-- Adjusted for h-16 navbar -->
        <?php if (isset($content)) echo $content; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-[#0F0F0F] border-t border-white/10 mt-auto">
        <div class="w-full max-w-7xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="./index.php" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-lg font-semibold whitespace-nowrap text-white">MUMTAZ</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-400 sm:mb-0">
                    <li>
                        <a href="./about.php" class="hover:text-white me-4 md:me-6 transition-colors">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white me-4 md:me-6 transition-colors">Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white me-4 md:me-6 transition-colors">GitHub</a>
                    </li>
                    <li>
                        <a href="./contact.php" class="hover:text-white transition-colors">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-white/10 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center">© 2024 <a href="/" class="hover:underline">Mumtaz™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!-- Mobile Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile Menu
            const toggleBtn = document.querySelector('[data-collapse-toggle="navbar-default"]');
            const menu = document.getElementById('navbar-default');
            
            if (toggleBtn && menu) {
                toggleBtn.addEventListener('click', () => {
                   menu.classList.toggle('hidden');
                });
            }

            // Scroll Reveal Animation
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal');
            revealElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
