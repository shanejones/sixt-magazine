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

    // Handle button clicks for smooth scrolling to sections
    document.addEventListener('click', function(e) {
        e.preventDefault();
        
        const pinContainerTop = pinContainer.offsetTop;
        const sceneDuration = horizontalScrollDistance * 2;
        
        if (e.target.id === 'scroll-us') {
            // Scroll to US section (roughly 1/3 through the horizontal scroll)
            const targetScroll = pinContainerTop + (sceneDuration * 0.33);
            window.scrollTo({
                top: targetScroll,
                behavior: 'smooth'
            });
            console.log('Scrolling to US section');
            
        } else if (e.target.id === 'scroll-uk') {
            // Scroll to UK section (roughly 2/3 through the horizontal scroll)
            const targetScroll = pinContainerTop + (sceneDuration * 0.66);
            window.scrollTo({
                top: targetScroll,
                behavior: 'smooth'
            });
            console.log('Scrolling to UK section');
            
        } else if (e.target.id === 'scroll-global') {
            // Scroll to global section (separate block further down the page)
            const globalSection = document.getElementById('vfab-global-items');
            if (globalSection) {
                const targetScroll = globalSection.offsetTop - 100; // Offset for better positioning
                window.scrollTo({
                    top: targetScroll,
                    behavior: 'smooth'
                });
                console.log('Scrolling to Global section');
            } else {
                console.log('Global section not found');
            }
        }
    });

    // Initialize UK Slider
    initUKSlider();
    
    // Initialize US Bridge Toggle functionality
    initUSBridgeToggles();
});

// UK Slider functionality (replaces previous implementation)
function initUKSlider() {
    const sliderTrack = document.getElementById('uk-bridges-slider');
    const prevButton = document.querySelector('.uk-slider-prev');
    const nextButton = document.querySelector('.uk-slider-next');
    const contentTitle = document.querySelector('.uk-slider-title');
    const contentLocation = document.querySelector('.uk-slider-location');
    const contentDescription = document.querySelector('.uk-slider-description');

    // Gather data from DOM (PHP already outputs all items as <li> with data- attributes)
    const allSlides = Array.from(sliderTrack.querySelectorAll('li')).map(slide => ({
        title: slide.dataset.title,
        location: slide.dataset.location,
        description: slide.dataset.description,
        image: slide.querySelector('img').src
    }));
    
    let currentIndex = 0;
    const totalSlides = allSlides.length;

    // Helper to get indices for prev, active, next
    function getIndices(idx, isDesktop) {
        if (isDesktop) {
            // 5 items: prev2, prev1, active, next1, next2
            const prev2 = (idx - 2 + totalSlides) % totalSlides;
            const prev1 = (idx - 1 + totalSlides) % totalSlides;
            const active = idx;
            const next1 = (idx + 1) % totalSlides;
            const next2 = (idx + 2) % totalSlides;
            return [prev2, prev1, active, next1, next2];
        } else {
            // 3 items: prev, active, next
            const prev = (idx - 1 + totalSlides) % totalSlides;
            const active = idx;
            const next = (idx + 1) % totalSlides;
            return [prev, active, next];
        }
    }

    // Render the 3 visible items
    function renderSlider(fade = false) {
        const isDesktop = window.innerWidth >= 1024;
        const indices = getIndices(currentIndex, isDesktop);
        const items = indices.map(i => allSlides[i]);
        let classes;
        if (isDesktop) {
            classes = [
                'uk-slider-item uk-slider-inactive',
                'uk-slider-item uk-slider-inactive',
                'uk-slider-item uk-slider-active',
                'uk-slider-item uk-slider-inactive',
                'uk-slider-item uk-slider-inactive'
            ];
        } else {
            classes = [
                'uk-slider-item uk-slider-inactive',
                'uk-slider-item uk-slider-active',
                'uk-slider-item uk-slider-inactive'
            ];
        }
        if (fade) {
            sliderTrack.classList.add('uk-slider-fade-out');
            setTimeout(() => {
                updateDOM(items, classes, indices);
                sliderTrack.classList.remove('uk-slider-fade-out');
                sliderTrack.classList.add('uk-slider-fade-in');
                setTimeout(() => sliderTrack.classList.remove('uk-slider-fade-in'), 250);
            }, 250);
        } else {
            updateDOM(items, classes, indices);
        }
        // Update content below
        const activeIdx = indices[isDesktop ? 2 : 1];
        if (contentTitle) contentTitle.textContent = allSlides[activeIdx].title;
        if (contentLocation) contentLocation.textContent = allSlides[activeIdx].location;
        if (contentDescription) contentDescription.innerHTML = allSlides[activeIdx].description;
    }

    function updateDOM(items, classes, indices) {
        sliderTrack.innerHTML = '';
        items.forEach((item, i) => {
            const li = document.createElement('li');
            li.className = classes[i];
            li.innerHTML = `<div class=\"uk-slider-item-inner\">
                <img src=\"${item.image}\" alt=\"${item.title}\">
                <span class=\"uk-slider-index\">${indices[i] + 1}</span>
            </div>`;
            li.setAttribute('data-title', item.title);
            li.setAttribute('data-location', item.location);
            li.setAttribute('data-description', item.description);
            // Click: if not center, go to that item
            const isDesktop = window.innerWidth >= 1024;
            const centerIdx = isDesktop ? 2 : 1;
            if (i !== centerIdx) {
                li.style.cursor = 'pointer';
                li.addEventListener('click', () => {
                    if (i < centerIdx) prevSlide();
                    if (i > centerIdx) nextSlide();
                });
            }
            sliderTrack.appendChild(li);
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        renderSlider();
    }
    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        renderSlider();
    }

    nextButton.addEventListener('click', function(e) {
        e.preventDefault();
        nextSlide();
    });
    prevButton.addEventListener('click', function(e) {
        e.preventDefault();
        prevSlide();
    });

    // Re-render on resize
    window.addEventListener('resize', () => renderSlider());

    // Initial render
    renderSlider();
}

// US Bridge Toggle functionality
function initUSBridgeToggles() {
    const toggleButtons = document.querySelectorAll('.us-vfab-content-us-item-toggle');
    
    if (!toggleButtons.length) {
        console.log('No US bridge toggle buttons found');
        return;
    }
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Find the parent item
            const parentItem = this.closest('.us-vfab-content-us-item');
            if (!parentItem) return;
            
            // Check if this item is currently expanded
            const isExpanded = parentItem.classList.contains('expanded');
            
            // Close all other expanded items
            document.querySelectorAll('.us-vfab-content-us-item.expanded').forEach(item => {
                if (item !== parentItem) {
                    item.classList.remove('expanded');
                }
            });
            
            // Toggle the current item
            if (isExpanded) {
                parentItem.classList.remove('expanded');
                console.log('Collapsed US bridge item');
            } else {
                parentItem.classList.add('expanded');
                console.log('Expanded US bridge item');
            }
        });
    });
    
    console.log(`Initialized ${toggleButtons.length} US bridge toggle buttons`);
}

