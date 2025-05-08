<?php
if (!function_exists('ra7_hp_hh_get_image')) {
  function ra7_hp_hh_get_image($image_name)
  {
    return plugins_url("../images/hoagie-hunter/{$image_name}", dirname(__FILE__));
  }
}


$judging_factors = [
  [
    'name' => 'Preparation speed',
    'icon' => ra7_hp_hh_get_image('preparation-speed-icon.svg'),
    'dot-class' => 'ras-hp-hh-judging-factor-dot-1',
  ],
  [
    'name' => 'Filling quality',
    'icon' => ra7_hp_hh_get_image('filling-quality-icon.svg'),
    'dot-class' => 'ras-hp-hh-judging-factor-dot-2',
  ],
  [
    'name' => 'Bread quality',
    'icon' => ra7_hp_hh_get_image('bread-quality-icon.svg'),
    'dot-class' => 'ras-hp-hh-judging-factor-dot-3',
  ],
  [
    'name' => 'Overall deliciousness',
    'icon' => ra7_hp_hh_get_image('overall-deliciousness-icon.svg'),
    'dot-class' => 'ras-hp-hh-judging-factor-dot-4',
  ],
  [
    'name' => 'Customer service',
    'icon' => ra7_hp_hh_get_image('overall-deliciousness-icon.svg'),
    'dot-class' => 'ras-hp-hh-judging-factor-dot-5',
  ],
];


$additional_factors = [
  [
    'name' => 'Atmosphere',
    'icon' => ra7_hp_hh_get_image('atmosphere-icon.svg'),
  ],
  [
    'name' => 'Menu size',
    'icon' => ra7_hp_hh_get_image('menu-size-icon.svg'),
  ],
  [
    'name' => 'Value for money',
    'icon' => ra7_hp_hh_get_image('value-for-money-icon.svg'),
  ],
  [
    'name' => 'Average wait time',
    'icon' => ra7_hp_hh_get_image('average-wait-time-icon.svg'),
  ],
  [
    'name' => 'Overall amenities',
    'icon' => ra7_hp_hh_get_image('overall-amenities-icon.svg'),
  ],
];

?>

<section class="ras-hp-hh-judging">
  <div class="ras-hp-hh-judging-image-container">

    <picture class="ras-hp-hh-judging-image">
      <source media="(max-width: 550px)" srcset="<?php echo ra7_hp_hh_get_image('split-sandwich-image-mobile.jpg'); ?>">
      <source media="(min-width: 551px) and (max-width: 1023px)" srcset="<?php echo ra7_hp_hh_get_image('split-sandwich-image-tablet.jpg'); ?>">
      <source media="(min-width: 1024px)" srcset="<?php echo ra7_hp_hh_get_image('split-sandwich-image-desktop.jpg'); ?>">
      <img src="<?php echo ra7_hp_hh_get_image('split-sandwich-image-desktop.jpg'); ?>" alt="Split sandwich image">
    </picture>
  </div>

  <div class="ras-hp-hh-judging-content">
    <div class="ras-hp-hh-judging-content-inner">

    <div class="ras-hp-hh-judging-content-text">

      <h2>The judging factors</h2>
      <p>In this role, we'll ask the Gas Station Hoagie Hunter to judge the following...</p>
    </div>
    </div>
    <div class="ras-hp-hh-judging-factors">
      <ul>
        <?php foreach ($judging_factors as $factor): ?>
          <li>
            <div class="ras-hp-hh-judging-factor-dots <?php echo $factor['dot-class']; ?>">
              <hr />
            </div>
            <img src="<?php echo $factor['icon']; ?>" alt="<?php echo $factor['name']; ?>" />
            <p><?php echo $factor['name']; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
<section class="ras-hp-hh-additional-judging">
  <div class="ras-hp-hh-additional-judging-inner">
  <div class="ras-hp-hh-additional-judging-content">
    <h2>Additional factors</h2>
    <p>We will also be asking them to gather the following at each gas station..</p>
  </div>
  <div class="ras-hp-hh-additional-judging-factors">
    <ul>
      <?php foreach ($additional_factors as $factor): ?>
        <li>
          <div class="ras-hp-hh-additional-judging-factors-image">
            <img src="<?php echo $factor['icon']; ?>" alt="<?php echo $factor['name']; ?>" />
          </div>
          <p><?php echo $factor['name']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
</section>
<section class="ras-hp-hh-offer">
  <div class="ras-hp-hh-offer-content">
    <h2>For this role of a lifetime, we're offering...</h2>
  </div>
  <div class="ras-hp-hh-offer-blocks">
    <div class="ras-hp-hh-offset-border-orange">
      <p>$2500</p>
    </div>
    <div>
      <p><strong>+</strong></p>
    </div>
    <div class="ras-hp-hh-offset-border-orange">
      <p>$500<br /><span>gas station gift card</span></p>
    </div>
  </div>
</section>