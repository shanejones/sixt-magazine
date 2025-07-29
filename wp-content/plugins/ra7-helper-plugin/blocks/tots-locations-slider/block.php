<div class="ras-tots-slider-container">
    <button class="ras-tots-slider-nav ras-tots-slider-prev" aria-label="Previous slide">
        <svg class="ras-tots-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.5 9L4.5 6L7.5 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    
    <div class="ras-tots-slider-wrapper">
        <ul id="ras-tots-slider" class="ras-tots-slider-track">
            <?php echo block_value('items'); ?>
        </ul>
    </div>
    
    <button class="ras-tots-slider-nav ras-tots-slider-next" aria-label="Next slide">
        <svg class="ras-tots-slider-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.5 3L7.5 6L4.5 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</div>

<div class="ras-tots-slider-content">
    <div class="ras-tots-slider-content-inner">
        <p class="ras-tots-slide-number">#1</p>
        <h4 class="ras-tots-slider-location"></h4>
        <div class="ras-tots-slider-measured-at"></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sliderTrack = document.getElementById('ras-tots-slider');
    const prevButton = document.querySelector('.ras-tots-slider-prev');
    const nextButton = document.querySelector('.ras-tots-slider-next');
    const contentLocation = document.querySelector('.ras-tots-slider-location');
    const contentMeasuredAt = document.querySelector('.ras-tots-slider-measured-at');
    const slideNumber = document.querySelector('.ras-tots-slide-number');

    if (!sliderTrack) return;

    const allSlides = Array.from(sliderTrack.querySelectorAll('li')).map(slide => ({
        location: slide.dataset.location,
        measuredAt: slide.dataset.measuredAt,
        image: slide.dataset.image,
        waterImage: slide.dataset.waterImage,
        index: slide.dataset.index
    }));
    
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

    function getClasses(isDesktop) {
        return isDesktop 
            ? ['ras-tots-slider-item', 'ras-tots-slider-item', 'ras-tots-slider-item ras-tots-slider-active', 'ras-tots-slider-item', 'ras-tots-slider-item']
            : ['ras-tots-slider-item', 'ras-tots-slider-item ras-tots-slider-active', 'ras-tots-slider-item'];
    }

    function renderSlider() {
        const isDesktop = window.innerWidth >= 1024;
        const indices = getIndices(currentIndex, isDesktop);
        const classes = getClasses(isDesktop);
        const items = indices.map(idx => allSlides[idx]);
        
        updateContent();
        updateDOM(items, classes, indices);
    }

    function updateContent() {
        const activeSlide = allSlides[currentIndex];
        if (activeSlide && contentLocation && contentMeasuredAt && slideNumber) {
            contentLocation.textContent = activeSlide.location || '';
            contentMeasuredAt.textContent = activeSlide.measuredAt || '';
            slideNumber.textContent = `#${currentIndex + 1}`;
        }
    }

    function updateDOM(items, classes, indices) {
        sliderTrack.innerHTML = '';
        items.forEach((item, i) => {
            const li = document.createElement('li');
            li.className = classes[i];
            li.innerHTML = `<div class="ras-tots-slider-item-inner">
                <img src="${item.image}" alt="${item.location}">
                <div class="ras-tots-water-image">
                    <img src="${item.waterImage}" alt="${item.location} water">
                </div>
                <span class="ras-tots-slider-index">${indices[i] + 1}</span>
            </div>`;
            li.setAttribute('data-location', item.location);
            li.setAttribute('data-measured-at', item.measuredAt);
            li.setAttribute('data-image', item.image);
            li.setAttribute('data-water-image', item.waterImage);
            
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

    if (prevButton) {
        prevButton.addEventListener('click', function(e) {
            e.preventDefault();
            prevSlide();
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', function(e) {
            e.preventDefault();
            nextSlide();
        });
    }

    window.addEventListener('resize', () => renderSlider());

    if (allSlides.length > 0) {
        renderSlider();
    }
});
</script>
