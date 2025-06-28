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

    // Calculate the total width of all slides
    const slides = slidesContainer.children;
    let totalWidth = 0;
    
    for (let i = 0; i < slides.length; i++) {
        totalWidth += slides[i].offsetWidth;
    }

    // Calculate the distance we need to scroll horizontally
    let horizontalScrollDistance = totalWidth - window.innerWidth;
    
    // Debug: Log width calculations
    console.log(`Total slides width: ${totalWidth}, Window width: ${window.innerWidth}, Horizontal scroll distance: ${horizontalScrollDistance}`);
    console.log(`Slides: intro(${slides[0].offsetWidth}px), us(${slides[1].offsetWidth}px), uk(${slides[2].offsetWidth}px)`);

    // Set initial position - make sure we start at the intro
    gsap.set(slidesContainer, { x: 0 });

    // Create simple horizontal scrolling animation
    const horizontalScrollTween = gsap.to(slidesContainer, {
        x: -horizontalScrollDistance,
        ease: "none"
    });

    // Create ScrollMagic scene - simple horizontal scroll
    const pinScene = new ScrollMagic.Scene({
        triggerElement: pinContainer,
        triggerHook: 0,
        duration: horizontalScrollDistance * 2, // Simple duration based on scroll distance
    })
    .setPin(pinContainer)
    .setTween(horizontalScrollTween)
    .addTo(controller);

    // Add some basic event logging
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
            
            // Update the tween and scene
            horizontalScrollTween.vars.x = -horizontalScrollDistance;
            pinScene.duration(horizontalScrollDistance * 2);
            pinScene.refresh();
            
            console.log('ScrollMagic: Resized and refreshed');
        }, 250);
    });
}); 