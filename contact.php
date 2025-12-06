<?php
// Simple logic to handle form submission if a backend was present,
// but relying on JS/Mailto for guaranteed "working" state without server config.
$messageSent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $messageSent = true;
}
?>
<?php ob_start(); ?>

<section class="min-h-screen flex items-center justify-center py-20 px-6">
    <div class="w-full max-w-2xl">
        <div class="text-center mb-12 reveal">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Let's work together</h1>
            <p class="text-gray-400">Punya ide menarik atau butuh bantuan teknis? Kirim pesan di bawah.</p>
        </div>

        <div class="bg-surface border border-white/5 p-8 rounded-2xl shadow-glow reveal delay-200">
            
            <?php if ($messageSent): ?>
                <div class="bg-green-500/10 border border-green-500 text-green-400 px-4 py-3 rounded-lg mb-6 text-center">
                    <p class="font-medium">Opening your email client...</p>
                    <p class="text-sm opacity-80 mt-1">If it doesn't open, please email me manually at <a href="mailto:mumtaz.ntt@gmail.com" class="underline">mumtaz.ntt@gmail.com</a></p>
                </div>
            <?php endif; ?>

            <form id="contactForm" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Name</label>
                        <input type="text" id="name" name="name" required class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors placeholder-gray-600" placeholder="John Doe">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Email</label>
                        <input type="email" id="email" name="email" required class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors placeholder-gray-600" placeholder="john@example.com">
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-400 mb-2">Subject</label>
                    <select id="subject" name="subject" class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors">
                        <option value="New Project">New Project</option>
                        <option value="Collaboration">Collaboration</option>
                        <option value="Available Position">Available Position</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-400 mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" required class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors placeholder-gray-600" placeholder="Tell me about your project..."></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-8 py-3 bg-white text-black font-bold rounded-full hover:bg-gray-200 transition-transform active:scale-95 flex items-center">
                        Send Message
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </button>
                </div>
            </form>
            
            <div class="mt-8 text-center border-t border-white/5 pt-6">
                <p class="text-sm text-gray-500">Or email me directly at</p>
                <a href="mailto:mumtaz.ntt@gmail.com" class="text-white hover:text-primary transition-colors font-medium">mumtaz.ntt@gmail.com</a>
            </div>
        </div>
    </div>
</section>

<!-- Removed inline styles as we use global CSS now -->

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        // Prevent default submission to handle it via JS for the Mailto trick
        // We still allow the form to 'submit' technically if we wanted backend, but here we intercept.
        e.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        const mailtoLink = `mailto:mumtaz.ntt@gmail.com?subject=[${encodeURIComponent(subject)}] from ${encodeURIComponent(name)}&body=${encodeURIComponent("Name: " + name + "\nEmail: " + email + "\n\nMessage:\n" + message)}`;

        // Open mail client
        window.location.href = mailtoLink;

        // Visual feedback
        const btn = this.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        btn.innerHTML = 'Client Opened!';
        btn.classList.add('bg-green-500', 'text-white');
        
        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.classList.remove('bg-green-500', 'text-white');
            this.reset();
        }, 3000);
    });
</script>

<?php 
$content = ob_get_clean(); 
include 'layouts/main.php'; 
?>
