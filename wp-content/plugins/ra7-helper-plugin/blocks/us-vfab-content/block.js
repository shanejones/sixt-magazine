document.addEventListener('DOMContentLoaded', function() {
    // Wait for ScrollMagic and GSAP to load
    if (typeof ScrollMagic === 'undefined' || typeof gsap === 'undefined') {
        console.error('ScrollMagic or GSAP not loaded');
        return;
    }

    const pinContainer = document.getElementById('us-vfab-content-pin-container');
    const slidesContainer = document.getElementById('us-vfab-content-slides');
    const introSection = document.querySelector('.us-vfab-content-intro');
    const introInner = document.querySelector('.us-vfab-content-intro-inner');
    
    if (!pinContainer || !slidesContainer || !introSection || !introInner) {
        console.log('ScrollMagic containers not found');
        return;
    }

    // Initialize ScrollMagic controller
    const controller = new ScrollMagic.Controller();

    // Function to check if we're on mobile
    function isMobile() {
        return window.innerWidth < 768;
    }

    // Function to calculate intro content overflow on mobile
    function getIntroScrollHeight() {
        if (!isMobile()) return 0;
        
        const introHeight = introSection.offsetHeight;
        const introContentHeight = introInner.scrollHeight;
        const overflow = introContentHeight - introHeight;
        
        return Math.max(0, overflow);
    }

    // Calculate the total width of all slides
    const slides = slidesContainer.children;
    let totalWidth = 0;
    
    for (let i = 0; i < slides.length; i++) {
        totalWidth += slides[i].offsetWidth;
    }

    // Calculate the distance we need to scroll horizontally
    let horizontalScrollDistance = totalWidth - window.innerWidth;

    // Create the horizontal scrolling animation using GSAP
    const horizontalScrollTween = gsap.to(slidesContainer, {
        x: -horizontalScrollDistance,
        ease: "none",
        duration: 1
    });

    // Calculate the total scroll distance needed
    function getTotalScrollDistance() {
        const introScrollHeight = getIntroScrollHeight();
        return introScrollHeight + (horizontalScrollDistance * 2);
    }

    // Create ScrollMagic scene with adjusted duration for mobile intro scrolling
    const pinScene = new ScrollMagic.Scene({
        triggerElement: pinContainer,
        triggerHook: 0,
        duration: getTotalScrollDistance(),
    })
    .setPin(pinContainer)
    .addTo(controller);

    // Add progress-based animation that handles both intro scrolling and horizontal scrolling
    pinScene.on("progress", function(event) {
        const progress = event.progress;
        const introScrollHeight = getIntroScrollHeight();
        const totalDistance = getTotalScrollDistance();
        
        if (isMobile() && introScrollHeight > 0) {
            // On mobile with intro overflow
            const introScrollThreshold = introScrollHeight / totalDistance;
            
            if (progress <= introScrollThreshold) {
                // We're in the intro scrolling phase
                const introProgress = progress / introScrollThreshold;
                const scrollTop = introProgress * introScrollHeight;
                introSection.scrollTop = scrollTop;
                
                // Keep horizontal position at 0
                gsap.set(slidesContainer, { x: 0 });
            } else {
                // We're in the horizontal scrolling phase
                introSection.scrollTop = introScrollHeight; // Keep intro at bottom
                const horizontalProgress = (progress - introScrollThreshold) / (1 - introScrollThreshold);
                const xPosition = -horizontalScrollDistance * horizontalProgress;
                gsap.set(slidesContainer, { x: xPosition });
            }
        } else {
            // Desktop or mobile without intro overflow - just horizontal scroll
            const xPosition = -horizontalScrollDistance * progress;
            gsap.set(slidesContainer, { x: xPosition });
        }
    });

    // Optional: Add some debugging
    pinScene.on("enter", function () {
        console.log("ScrollMagic: Entered horizontal scroll section");
    });

    pinScene.on("leave", function () {
        console.log("ScrollMagic: Left horizontal scroll section");
    });

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            // Recalculate on resize
            totalWidth = 0;
            for (let i = 0; i < slides.length; i++) {
                totalWidth += slides[i].offsetWidth;
            }
            
            horizontalScrollDistance = totalWidth - window.innerWidth;
            
            // Update the scene duration with new calculations
            pinScene.duration(getTotalScrollDistance());
            pinScene.refresh();
            
            console.log('ScrollMagic: Resized and refreshed');
        }, 250);
    });

    // Handle button clicks for smooth scrolling to sections
    document.addEventListener('click', function(e) {
        if (e.target.id === 'scroll-us') {
            e.preventDefault();
            // Scroll to US section (second slide)
            const targetPosition = pinContainer.offsetTop;
            window.scrollTo({
                top: targetPosition + (horizontalScrollDistance * 0.3), // Adjust multiplier to reach US section
                behavior: 'smooth'
            });
        }
    });
}); 