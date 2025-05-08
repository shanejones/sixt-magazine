<?php
$title = esc_html(block_value('title'));
$content = block_value('content');
$background_image = wp_get_attachment_image_url(block_value('background-image'), 'full');
?>


<div class="ras-hp-hh-header">
  <div class="ras-hp-hh-header-logo-wrap">
    <img class="ras-hp-hh-header-logo" src="<?php echo plugins_url("../images/sixt-logo.png", dirname(__FILE__)); ?>" alt="Sixt logo" width="64" height="27" />
    <div class="ras-hp-hh-header-share">
      <?php echo do_shortcode('[ra7_social_share]'); ?>
    </div>
  </div>
  <div class="ras-hp-hh-header-content">
    <div class="ras-hp-hh-header-content-inner">

      <span class="ras-hp-hh-offset-border">We're Hiring</span>
      <h1><?php echo $title; ?></h1>
      <?php echo $content; ?>
    </div>
  </div>
  <div class="ras-hp-hh-header-background" <?php if ($background_image): ?> style="background-image: url(<?php echo $background_image; ?>);" <?php endif; ?>>
  </div>
</div>
<div class="ras-hp-hh-marquee">
  <div class="marquee-content" id="ras-hp-hh-marquee-content">
    <span>Uncover the Ultimate Hoagie</span>
  </div>
</div>

<script>
  const startMarquee = (element, repeatCount = 7, step = 1) => {

    const animateMarquee = () => {
      position = position < width ? position + step : 1;
      element.style.marginLeft = `${-position}px`;
      element.style.overflow = 'hidden';
      element.style.whiteSpace = 'nowrap';
      requestAnimationFrame(animateMarquee);
    };

    let position = 0;
    const space = '';
    const content = element.innerHTML;
    element.innerHTML = Array(repeatCount).fill(content + space).join('');
    element.style.position = 'absolute';
    const width = element.clientWidth + 1;
    element.style.position = '';

    animateMarquee();
  };

  startMarquee(document.getElementById('ras-hp-hh-marquee-content'), 16, 0.75);

</script>