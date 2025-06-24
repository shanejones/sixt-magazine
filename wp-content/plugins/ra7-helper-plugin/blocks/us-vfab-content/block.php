<?php
// Enqueue the JavaScript for scroll jacking
wp_enqueue_script('us-vfab-content-js', plugins_url('block.js', __FILE__), array('jquery'), '1.0.0', true);
?>

<div class="us-vfab-content-side-scroll-wrapper">
  <div class="us-vfab-content-intro"></div>
  <div class="us-vfab-content-us">
    <div class="us-vfab-content-us-item"></div>
    <div class="us-vfab-content-us-item"></div>
    <div class="us-vfab-content-us-item"></div>
    <div class="us-vfab-content-us-item"></div>
    <div class="us-vfab-content-us-item"></div>
  </div>
  <div class="us-vfab-content-uk"></div>
</div>