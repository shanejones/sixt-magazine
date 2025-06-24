document.addEventListener('DOMContentLoaded', function() {
    const scrollWrapper = document.querySelector('.us-vfab-content-side-scroll-wrapper');
    const introSection = document.querySelector('.us-vfab-content-intro');
    const ukSection = document.querySelector('.us-vfab-content-uk');
    
    if (!scrollWrapper || !introSection || !ukSection) return;

    // Configuration variables
    const SCROLL_SPEED_MULTIPLIER = 8; // Reduced for smoother scrolling
    const KEYBOARD_SCROLL_AMOUNT = 100; // Arrow key scroll distance in pixels
    const MOMENTUM_DECAY = 0.95; // How quickly momentum fades (0.9 = fast fade, 0.99 = slow fade)
    const MIN_MOMENTUM = 0.1; // Minimum momentum before stopping

    let isScrollJacking = false;
    let ticking = false;
    let isFixed = false;
    let hasCompletedHorizontalScroll = false;
    let currentScrollPosition = 0;
    let targetScrollPosition = 0;
    let scrollMomentum = 0;
    let isAnimating = false;

    // Check if the horizontal scroll section is in viewport
    function isHorizontalSectionActive() {
        const rect = scrollWrapper.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        
        // Section is active when it's in viewport
        return rect.top <= 0 && rect.bottom >= 0;
    }

    // Get total scrollable width
    function getTotalScrollWidth() {
        return scrollWrapper.scrollWidth - scrollWrapper.clientWidth;
    }

    // Smooth animation function for Mac-like scrolling
    function animateScroll() {
        if (!isAnimating) return;

        // Apply momentum decay
        scrollMomentum *= MOMENTUM_DECAY;
        
        // Update target position with momentum
        targetScrollPosition += scrollMomentum;
        
        // Clamp to bounds
        const maxScroll = getTotalScrollWidth();
        targetScrollPosition = Math.max(0, Math.min(maxScroll, targetScrollPosition));
        
        // Smooth interpolation towards target
        const diff = targetScrollPosition - currentScrollPosition;
        currentScrollPosition += diff * 0.1; // Smooth interpolation factor
        
        // Apply the scroll using transform for better performance
        const sections = scrollWrapper.children;
        for (let i = 0; i < sections.length; i++) {
            sections[i].style.transform = `translateX(${-currentScrollPosition}px)`;
        }
        
        // Stop animation if momentum is too small
        if (Math.abs(scrollMomentum) < MIN_MOMENTUM && Math.abs(diff) < 0.5) {
            isAnimating = false;
            scrollMomentum = 0;
        }
        
        if (isAnimating) {
            requestAnimationFrame(animateScroll);
        }
    }

    // Start smooth scrolling with momentum
    function addScrollMomentum(delta) {
        scrollMomentum = delta;
        targetScrollPosition = currentScrollPosition;
        
        if (!isAnimating) {
            isAnimating = true;
            requestAnimationFrame(animateScroll);
        }
    }

    // Check if we've reached the end of horizontal scrolling
    function isAtEndOfHorizontalScroll() {
        const maxScroll = getTotalScrollWidth();
        return currentScrollPosition >= maxScroll - 10; // 10px tolerance
    }

    // Check if we're at the start of horizontal scrolling
    function isAtStartOfHorizontalScroll() {
        return currentScrollPosition <= 10; // 10px tolerance
    }

    // Toggle fixed positioning
    function toggleFixedPosition(shouldBeFixed) {
        if (shouldBeFixed && !isFixed) {
            scrollWrapper.classList.add('fixed');
            isFixed = true;
            console.log('Fixed positioning enabled');
        } else if (!shouldBeFixed && isFixed) {
            scrollWrapper.classList.remove('fixed');
            isFixed = false;
            console.log('Fixed positioning disabled');
        }
    }

    // Handle wheel events for scroll jacking
    function handleScroll(e) {
        const isActive = isHorizontalSectionActive();
        
        // Check if we've completed horizontal scrolling and should continue vertical
        if (hasCompletedHorizontalScroll && e.deltaY > 0) {
            // Allow normal vertical scrolling to continue
            isScrollJacking = false;
            toggleFixedPosition(false);
            return;
        }
        
        // Check if the horizontal section is in viewport
        if (!isActive) {
            isScrollJacking = false;
            hasCompletedHorizontalScroll = false;
            return;
        }

        // If scrolling up and we're at the start, allow normal vertical scrolling
        if (isAtStartOfHorizontalScroll() && e.deltaY < 0) {
            isScrollJacking = false;
            hasCompletedHorizontalScroll = false;
            toggleFixedPosition(false);
            return;
        }
        
        // If scrolling down and we've reached the end, complete horizontal scroll
        if (isAtEndOfHorizontalScroll() && e.deltaY > 0) {
            isScrollJacking = false;
            hasCompletedHorizontalScroll = true;
            toggleFixedPosition(false);
            console.log('Horizontal scrolling completed, resuming vertical scroll');
            return;
        }
        
        // Activate fixed positioning and start scroll jacking
        toggleFixedPosition(true);
        
        // Prevent vertical scrolling and convert to horizontal with smooth momentum
        e.preventDefault();
        isScrollJacking = true;
        
        // Calculate momentum for smooth Mac-like scrolling
        const momentum = e.deltaY * SCROLL_SPEED_MULTIPLIER;
        addScrollMomentum(momentum);
        
        console.log('Smooth scroll jacking active. Position:', currentScrollPosition.toFixed(2));
    }

    // Add event listeners
    window.addEventListener('wheel', handleScroll, { passive: false });
    
    // Keyboard navigation (only when horizontal section is active)
    document.addEventListener('keydown', function(e) {
        if (!isHorizontalSectionActive()) return;
        
        switch(e.key) {
            case 'ArrowLeft':
                e.preventDefault();
                addScrollMomentum(-KEYBOARD_SCROLL_AMOUNT);
                break;
            case 'ArrowRight':
                e.preventDefault();
                addScrollMomentum(KEYBOARD_SCROLL_AMOUNT);
                break;
        }
    });

    // Touch support for mobile
    let touchStartX = 0;
    let touchStartY = 0;
    
    scrollWrapper.addEventListener('touchstart', function(e) {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
    }, { passive: true });
    
    scrollWrapper.addEventListener('touchmove', function(e) {
        if (!isHorizontalSectionActive()) return;
        
        if (!touchStartX || !touchStartY) return;
        
        const touchEndX = e.touches[0].clientX;
        const touchEndY = e.touches[0].clientY;
        
        const diffX = touchStartX - touchEndX;
        const diffY = touchStartY - touchEndY;
        
        // If horizontal swipe is more prominent than vertical
        if (Math.abs(diffX) > Math.abs(diffY)) {
            e.preventDefault();
            const swipeMomentum = diffX * 0.5;
            addScrollMomentum(swipeMomentum);
        }
    }, { passive: false });
    
    scrollWrapper.addEventListener('touchend', function() {
        touchStartX = 0;
        touchStartY = 0;
    }, { passive: true });

    // Debug: Log when horizontal section becomes active and handle fixed positioning
    let wasActive = false;
    window.addEventListener('scroll', function() {
        const isActive = isHorizontalSectionActive();
        if (isActive !== wasActive) {
            console.log('Horizontal section active:', isActive);
            wasActive = isActive;
            
            // Handle fixed positioning on regular scroll events too
            if (!isScrollJacking) {
                toggleFixedPosition(isActive);
            }
        }
    }, { passive: true });
}); 