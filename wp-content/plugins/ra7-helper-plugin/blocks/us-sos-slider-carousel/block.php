<div class="ras-sos-slider-wrapper">
    <div class="ras-sos-main-content">
        <div class="ras-sos-slides">
            <?php echo block_value('items'); ?>
        </div>
    </div>
    <div class="ras-sos-thumbnails"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.ras-sos-slider-wrapper');
    const slides = wrapper.querySelectorAll('.ras-sos-slide');
    const thumbnails = wrapper.querySelector('.ras-sos-thumbnails');
    let currentSlide = 0;

    // Create thumbnails from slides
    slides.forEach((slide, index) => {
        const thumb = document.createElement('div');
        thumb.className = `ras-sos-thumb ${index === 0 ? 'active' : index === 1 ? 'next' : ''}`;
        const thumbnailImg = slide.querySelector('.thumbnail').cloneNode(true);
        thumb.appendChild(thumbnailImg);
        thumbnails.appendChild(thumb);

        // Set initial slide numbers
        slide.querySelector('.ras-sos-slide-number').textContent = `#${index + 1}`;
    });

    function updateThumbnails() {
        thumbnails.querySelectorAll('.ras-sos-thumb').forEach(thumb => {
            thumb.classList.remove('active', 'next');
        });
        
        const nextIndex = (currentSlide + 1) % slides.length;
        thumbnails.children[nextIndex].classList.add('next');
    }

    function goToSlide(index) {
        slides[currentSlide].classList.remove('active');
        currentSlide = index;
        slides[currentSlide].classList.add('active');
        updateThumbnails();
    }

    // Add click handlers for all prev/next buttons
    document.querySelectorAll('.ras-sos-prev').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            goToSlide((currentSlide - 1 + slides.length) % slides.length);
        });
    });

    document.querySelectorAll('.ras-sos-next').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            goToSlide((currentSlide + 1) % slides.length);
        });
    });

    // Add click handler for next thumbnail
    function handleNextThumbClick(e) {
        if (e.target.closest('.ras-sos-thumb.next')) {
            e.preventDefault();
            goToSlide((currentSlide + 1) % slides.length);
        }
    }

    thumbnails.addEventListener('click', handleNextThumbClick);

    // Initialize first slide
    goToSlide(0);
});
</script>
