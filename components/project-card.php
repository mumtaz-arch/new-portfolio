<?php
/**
 * Project Card Component
 * 
 * Variables expected:
 * $title - Project Title
 * $description - Short description
 * $tags - Array of strings
 * $link - URL to project subdomain
 * $image - Optional image URL (using placeholder if null for now)
 */
?>

<div class="group relative p-1 rounded-2xl bg-gradient-to-br from-white/10 to-white/5 hover:from-primary/50 hover:to-accent/50 transition-all duration-300 card-hover">
    <div class="h-full bg-surface rounded-xl p-6 relative overflow-hidden flex flex-col justify-between z-10">
        <!-- Optional Image/Preview Area -->
        <div class="mb-4 h-40 bg-black/50 rounded-lg overflow-hidden relative">
            <?php if (isset($image) && $image): ?>
                <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <?php else: ?>
                <div class="w-full h-full flex items-center justify-center text-white/20">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Content -->
        <div>
            <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors"><?php echo $title; ?></h3>
            <p class="text-gray-400 text-sm mb-4 leading-relaxed line-clamp-3">
                <?php echo $description; ?>
            </p>
            
            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mb-6">
                <?php foreach ($tags as $tag): ?>
                    <span class="px-2 py-1 text-xs font-medium bg-white/5 border border-white/10 rounded text-gray-300">
                        <?php echo $tag; ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CTA -->
        <a href="<?php echo $link; ?>" target="_blank" class="inline-flex items-center text-sm font-semibold text-white group-hover:underline decoration-primary decoration-2 underline-offset-4">
            Open Project 
            <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>
</div>
