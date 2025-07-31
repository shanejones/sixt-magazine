document.addEventListener('DOMContentLoaded', function() {
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

    // Initialize UI components that don't depend on image loading
    initUKSlider();
    initUSBridgeToggles();
    
    // Wait for images to load before initializing ScrollMagic
    waitForImagesAndInitialize();
});

function waitForImagesAndInitialize() {
    const pinContainer = document.getElementById('us-vfab-content-pin-container');
    const slidesContainer = document.getElementById('us-vfab-content-slides');
    
    console.log('Using simple anchor-based approach - no need to wait for images!');
    
    // Longer delay to ensure layout is stable, especially for production
    setTimeout(() => {
        checkLayoutAndInitialize();
    }, 500);
}

function checkLayoutAndInitialize() {
    const pinContainer = document.getElementById('us-vfab-content-pin-container');
    const slidesContainer = document.getElementById('us-vfab-content-slides');
    const ukScrollAnchor = document.getElementById('uk-scroll-anchor');
    
    if (!pinContainer || !slidesContainer || !ukScrollAnchor) {
        console.error('Required containers not found');
        return;
    }
    
    // Set road width to match US section container width
    const usSection = document.getElementById('vfab-us-items');
    const roadElement = document.querySelector('.us-vfab-content-road');
    if (usSection && roadElement) {
        const usSectionWidth = usSection.offsetWidth;
        roadElement.style.width = usSectionWidth + 'px';
        console.log(`Set road width to match US section: ${usSectionWidth}px`);
    }
    
    console.log('=== CONTAINER-BASED APPROACH ===');
    console.log('Using actual DOM container width instead of calculations');
    
    // Fixed width calculations based on CSS breakpoints
    const viewportWidth = window.innerWidth;
    const isDesktop = viewportWidth >= 480;
    const usItemWidth = isDesktop ? 400 : 360;
    const cliffWidth = 500;
    
    // Layout breakdown:
    // 1. Intro section: 100vw
    // 2. Left cliffs: 500px  
    // 3. US intro item: 400px/360px
    // 4. 20 US slider items: 20 × (400px/360px)
    // 5. Right cliffs: 500px
    // 6. UK section: 100vw
    
    const totalWidth = viewportWidth + cliffWidth + usItemWidth + (20 * usItemWidth) + cliffWidth + viewportWidth;
    
    // Add half the viewport width to account for the consistent shortfall
    const additionalScroll = viewportWidth / 2;
    const maxHorizontalScroll = (totalWidth - viewportWidth) + additionalScroll;
    
    console.log(`DEBUG: Adding half viewport (${additionalScroll}px) to maxHorizontalScroll`);
    
    // UK section starts at this position  
    const ukSectionStart = viewportWidth + cliffWidth + usItemWidth + (20 * usItemWidth) + cliffWidth;
    
    // We want to stop when UK section's RIGHT EDGE just comes into view (at right edge of viewport)
    // UK section right edge = ukSectionStart + viewportWidth
    const ukSectionRightEdge = ukSectionStart + viewportWidth;
    const ukAnchorPosition = ukSectionRightEdge;
    
    console.log(`Viewport: ${viewportWidth}px, US Item Width: ${usItemWidth}px`);
    console.log(`Total width: ${totalWidth}px, Max horizontal scroll: ${maxHorizontalScroll}px`);
    console.log(`UK section right edge at: ${ukAnchorPosition}px`);
    console.log(`Expected: Stop when UK section right edge hits right side of viewport`);
    console.log('=== END CALCULATION ===');
    
    initializeScrollMagic(pinContainer, slidesContainer, ukScrollAnchor, maxHorizontalScroll, ukAnchorPosition);
}

function initializeScrollMagic(pinContainer, slidesContainer, ukScrollAnchor, maxHorizontalScroll, ukAnchorPosition) {
    console.log('Initializing ScrollMagic with container-based approach');
    
    const controller = new ScrollMagic.Controller();
    
    // Get the actual total width of the slides container
    const actualTotalWidth = slidesContainer.scrollWidth;
    const viewportWidth = window.innerWidth;
    const actualMaxHorizontalScroll = actualTotalWidth - viewportWidth;
    
    console.log(`PROD: Width=${actualTotalWidth}, Scroll=${actualMaxHorizontalScroll}, Duration=${actualMaxHorizontalScroll}`);
    
    gsap.set(slidesContainer, { x: 0 });

    const horizontalScrollTween = gsap.to(slidesContainer, {
        x: -actualMaxHorizontalScroll,
        ease: "none"
    });

    const pinScene = new ScrollMagic.Scene({
        triggerElement: pinContainer,
        triggerHook: 0,
        duration: actualMaxHorizontalScroll
    })
    .setPin(pinContainer)
    .setTween(horizontalScrollTween)
    .addTo(controller);

    pinScene.on("enter", function () {
        console.log("ScrollMagic: Started horizontal scrolling");
    });

    pinScene.on("leave", function () {
        const ukSection = document.getElementById('vfab-uk-items');
        const ukSectionRect = ukSection.getBoundingClientRect();
        console.log(`PROD: UK at ${ukSectionRect.left}px (should be 0)`);
    });

    // Progress tracking with detailed logging every 100px
    let lastLoggedDistance = 0;
    pinScene.on("progress", function (event) {
        const currentDistance = Math.round(event.progress * actualMaxHorizontalScroll);
        
        // Log every 100px of progress
        if (currentDistance >= lastLoggedDistance + 100) {
            const slidesContainer = document.getElementById('us-vfab-content-slides');
            const currentX = gsap.getProperty(slidesContainer, "x");
            console.log(`Progress: ${Math.round(event.progress * 100)}% | Distance: ${currentDistance}px | Slides X: ${Math.round(currentX)}px`);
            lastLoggedDistance = Math.floor(currentDistance / 100) * 100;
        }
        
        // Final progress tracking
        if (event.progress > 0.95) {
            console.log(`Almost done: ${Math.round(event.progress * 100)}% - UK section about to appear`);
        }
    });

    // Handle resize by refreshing the scene
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            console.log('Refreshing scene after resize');
            pinScene.refresh();
        }, 250);
    });

    // Setup click handlers for navigation buttons
    setupNavigationButtons(pinContainer, actualMaxHorizontalScroll, actualMaxHorizontalScroll);
}

function setupNavigationButtons(pinContainer, horizontalScrollDistance, sceneDuration) {
    document.addEventListener('click', function(e) {
        if (e.target.id === 'scroll-us' || e.target.id === 'scroll-uk' || e.target.id === 'scroll-global') {
            e.preventDefault();
        }
        
        const pinContainerTop = pinContainer.offsetTop;
        const pinContainerRect = pinContainer.getBoundingClientRect();
        const pinContainerActualTop = pinContainerRect.top + window.pageYOffset;
        
        console.log(`=== PIN CONTAINER DEBUG ===`);
        console.log(`pinContainer.offsetTop: ${pinContainerTop}px`);
        console.log(`pinContainer getBoundingClientRect().top: ${pinContainerRect.top}px`);
        console.log(`Actual pin container top position: ${pinContainerActualTop}px`);
        console.log(`=== END PIN CONTAINER DEBUG ===`);
        
        if (e.target.id === 'scroll-us') {
            // Simple: scroll exactly 100vw in the ScrollMagic scene
            const viewportWidth = window.innerWidth;
            const currentScrollY = window.pageYOffset || window.scrollY;
            
            // Calculate how far into the scene we need to scroll for 100vw horizontal movement
            const sceneProgress = (viewportWidth / horizontalScrollDistance) * sceneDuration;
            const targetScroll = pinContainerActualTop + sceneProgress;
            
            console.log(`=== US BUTTON DEBUG ===`);
            console.log(`Current scroll position: ${currentScrollY}px`);
            console.log(`Pin container top: ${pinContainerTop}px`);
            console.log(`Viewport width (100vw): ${viewportWidth}px`);
            console.log(`Horizontal scroll distance: ${horizontalScrollDistance}px`);
            console.log(`Scene duration: ${sceneDuration}px`);
            console.log(`Scene progress needed: ${sceneProgress}px`);
            console.log(`Final target scroll: ${targetScroll}px`);
            console.log(`=== END DEBUG ===`);
            
            window.scrollTo({
                top: targetScroll,
                behavior: 'smooth'
            });
            
        } else if (e.target.id === 'scroll-uk') {
            // Use ScrollMagic to scroll to 100% of scene
            const targetScroll = pinContainerActualTop + sceneDuration;
            
            console.log(`=== UK BUTTON DEBUG ===`);
            console.log(`Pin container actual top: ${pinContainerActualTop}px`);
            console.log(`Scene duration: ${sceneDuration}px`);
            console.log(`Final target scroll (100%): ${targetScroll}px`);
            console.log(`=== END UK DEBUG ===`);
            
            window.scrollTo({
                top: targetScroll,
                behavior: 'smooth'
            });
            
        } else if (e.target.id === 'scroll-global') {
            // Scroll to global section (separate block, below the horizontal scroll)
            const globalSection = document.getElementById('vfab-global-items');
            if (globalSection) {
                const targetScroll = globalSection.offsetTop - 100;
                window.scrollTo({
                    top: targetScroll,
                    behavior: 'smooth'
                });
                console.log('Scrolling to Global section');
            } else {
                console.log('Global section not found - it may be in another block');
            }
        }
    });
}

function initUKSlider() {
    const sliderTrack = document.getElementById('uk-bridges-slider');
    const prevButton = document.querySelector('.uk-slider-prev');
    const nextButton = document.querySelector('.uk-slider-next');
    const contentTitle = document.querySelector('.uk-slider-title');
    const contentLocation = document.querySelector('.uk-slider-location');
    const contentDescription = document.querySelector('.uk-slider-description');

    if (!sliderTrack || !prevButton || !nextButton) {
        console.log('UK slider elements not found');
        return;
    }

    // Read data from existing HTML slides
    const allSlides = Array.from(sliderTrack.querySelectorAll('li')).map(slide => {
        const img = slide.querySelector('img');
        let imageSrc = '';
        
        if (img) {
            // Try different ways to get the real image source
            imageSrc = img.getAttribute('data-src') || // Common lazy loading attribute
                      img.getAttribute('data-lazy-src') || // Another common lazy loading attribute  
                      img.getAttribute('src') || // Original src attribute
                      img.src; // Fallback to computed src
        }
        
        return {
            title: slide.dataset.title,
            location: slide.dataset.location,
            description: slide.dataset.description,
            image: imageSrc
        };
    });
    
    if (allSlides.length === 0) {
        console.warn('UK slider has no slides.');
        return;
    }
    
    let currentIndex = 0;
    const totalSlides = allSlides.length;

    function getIndices(idx, isDesktop) {
        if (isDesktop) {
            const prev2 = (idx - 2 + totalSlides) % totalSlides;
            const prev1 = (idx - 1 + totalSlides) % totalSlides;
            const active = idx;
            const next1 = (idx + 1) % totalSlides;
            const next2 = (idx + 2) % totalSlides;
            return [prev2, prev1, active, next1, next2];
        } else {
            const prev = (idx - 1 + totalSlides) % totalSlides;
            const active = idx;
            const next = (idx + 1) % totalSlides;
            return [prev, active, next];
        }
    }

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
            li.innerHTML = `<div class="uk-slider-item-inner">
                <img src="${item.image}" alt="${item.title}" loading="lazy">
                <span class="uk-slider-index">${indices[i] + 1}</span>
            </div>`;
            li.setAttribute('data-title', item.title);
            li.setAttribute('data-location', item.location);
            li.setAttribute('data-description', item.description);
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

    window.addEventListener('resize', () => renderSlider());

    renderSlider();
    
    console.log(`UK slider initialized with ${totalSlides} slides from existing HTML.`);
}

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
            
            const parentItem = this.closest('.us-vfab-content-us-item');
            if (!parentItem) return;
            
            const isExpanded = parentItem.classList.contains('expanded');
            
            document.querySelectorAll('.us-vfab-content-us-item.expanded').forEach(item => {
                if (item !== parentItem) {
                    item.classList.remove('expanded');
                }
            });
            
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

