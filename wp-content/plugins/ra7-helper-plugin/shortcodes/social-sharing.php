<?php
function social_share_shortcode()
{
    ob_start();

    $share_title = get_the_title();
    $share_text = $share_title . " - " . get_permalink();
    $encoded_share_text = urlencode($share_text);

    ?>
    <div class="ra7-social-share">
        <button type="button" id="share-button" class="ra7-share-btn">SHARE <span class="ra7-share-icon"><svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="9.971" height="11.396" viewBox="0 0 9.971 11.396">
                    <path d="M1079.261,516.822a.712.712,0,0,1,.712.712v1.425a2.137,2.137,0,0,1-2.137,2.137h-5.7a2.137,2.137,0,0,1-2.137-2.137v-1.425a.712.712,0,1,1,1.424,0v1.425a.712.712,0,0,0,.712.712h5.7a.712.712,0,0,0,.712-.712v-1.425A.712.712,0,0,1,1079.261,516.822Zm-3.77-6.912,2.849,2.849a.712.712,0,1,1-1.007,1.007l-1.633-1.633v4.689a.712.712,0,1,1-1.424,0v-4.689l-1.633,1.632a.712.712,0,0,1-1.007-1.007l2.849-2.849A.71.71,0,0,1,1075.491,509.91Z" transform="translate(-1070.002 -509.7)" fill="#fff" />
                </svg></span></button>
        <div class="ra7-share-icons">
          <p id="share-text">SHARE</p>
            <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $encoded_share_text ?>" target="_blank" rel="nofollow noopener noreferer"><svg xmlns="http://www.w3.org/2000/svg" width="21.698" height="17.623" viewBox="0 0 21.698 17.623">
                    <path d="M503.416,671.952c.014.193.014.385.014.578a12.658,12.658,0,0,1-19.482,10.656,9.181,9.181,0,0,0,1.074.055,8.906,8.906,0,0,0,5.521-1.9,4.454,4.454,0,0,1-4.158-3.084,5.59,5.59,0,0,0,.84.069,4.7,4.7,0,0,0,1.171-.151,4.448,4.448,0,0,1-3.566-4.365v-.055a4.485,4.485,0,0,0,2.01.564,4.453,4.453,0,0,1-1.377-5.948,12.639,12.639,0,0,0,9.169,4.653,5,5,0,0,1-.11-1.018,4.452,4.452,0,0,1,7.7-3.043,8.751,8.751,0,0,0,2.823-1.074,4.438,4.438,0,0,1-1.955,2.451,8.92,8.92,0,0,0,2.561-.689A9.56,9.56,0,0,1,503.416,671.952Z" transform="translate(-483.948 -667.56)" fill="#fff" />
                </svg></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow noopener noreferer"><svg xmlns="http://www.w3.org/2000/svg" width="10.609" height="19.623" viewBox="0 0 10.609 19.623">
                    <path d="M32.287,0,29.742,0a4.469,4.469,0,0,0-4.706,4.829V7.056H22.477a.4.4,0,0,0-.4.4v3.226a.4.4,0,0,0,.4.4h2.559v8.14a.4.4,0,0,0,.4.4h3.338a.4.4,0,0,0,.4-.4v-8.14h2.992a.4.4,0,0,0,.4-.4V7.456a.4.4,0,0,0-.4-.4H29.174V5.168c0-.907.216-1.368,1.4-1.368h1.714a.4.4,0,0,0,.4-.4V.4A.4.4,0,0,0,32.287,0Z" transform="translate(-22.077)" fill="#fff" />
                </svg></a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>" target="_blank" rel="nofollow noopener noreferer"><svg xmlns="http://www.w3.org/2000/svg" width="18.986" height="18.989" viewBox="0 0 18.986 18.989">
                    <path d="M680.78,701.382a2.293,2.293,0,1,1,2.28-2.3A2.3,2.3,0,0,1,680.78,701.382Zm1.97,14.4h-3.936V703.111h3.936Zm14.732,0h-3.928v-6.17c0-1.471-.03-3.356-2.046-3.356-2.046,0-2.36,1.6-2.36,3.25v6.276h-3.932V703.111h3.775v1.729h.055a4.136,4.136,0,0,1,3.724-2.047c3.983,0,4.716,2.623,4.716,6.031v6.963Z" transform="translate(-678.5 -696.798)" fill="#fff" />
                </svg></a>
            <a href="mailto:?subject=<?php echo rawurlencode($share_title); ?>&body=<?php echo rawurlencode($share_text); ?>" target="_blank" rel="nofollow noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="19.698" height="14.773" viewBox="0 0 19.698 14.773">
                    <path d="M1011.5,623.472a1.847,1.847,0,0,1,1.847-1.847h16a1.847,1.847,0,0,1,1.847,1.847,1.737,1.737,0,0,1-.625,1.281l-8.164,6.352a1.724,1.724,0,0,1-2.118,0l-8.164-6.352A1.623,1.623,0,0,1,1011.5,623.472Zm11.665,8.606,8.033-6.252v8.726a1.847,1.847,0,0,1-1.847,1.847h-16a1.847,1.847,0,0,1-1.847-1.847v-8.726l8.035,6.248a2.933,2.933,0,0,0,3.63,0Z" transform="translate(-1011.502 -621.625)" fill="#fff" />
                </svg></a>
            <button type="button" id="copy-link" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24.623" height="19.698" viewBox="0 0 24.623 19.698">
                    <path d="M815.984,671.585a6.646,6.646,0,0,0,1.612,1.155l-1.668,1.668a5.439,5.439,0,1,1-7.693-7.69l5.128-5.128A5.414,5.414,0,0,1,817.206,660a5.483,5.483,0,0,1,3.848,1.594,5.423,5.423,0,0,1,.861,6.525,1.675,1.675,0,0,1-2.74-.44l.135-.135a2.977,2.977,0,0,0,0-4.21,2.973,2.973,0,0,0-4.206,0l-5.128,5.128a2.977,2.977,0,0,0,2.1,5.082,3.1,3.1,0,0,0,2.1-.873l1.458-1.458C815.756,671.334,815.86,671.465,815.984,671.585Zm15.28-9.972a5.425,5.425,0,0,1-1.591,3.974l-5.126,5.128a5.427,5.427,0,0,1-8.555-6.526,1.739,1.739,0,0,1,2.451.013,1.773,1.773,0,0,1,.289.427l-.171.134a3,3,0,0,0,2.141,5.083,3.094,3.094,0,0,0,2.1-.87l5.128-5.128a2.977,2.977,0,0,0-2.1-5.081,2.9,2.9,0,0,0-2.1.872l-1.461,1.46c-.109-.128-.215-.257-.336-.378a6.641,6.641,0,0,0-1.613-1.155l1.668-1.668a5.419,5.419,0,0,1,3.846-1.593,5.482,5.482,0,0,1,3.847,1.593A5.358,5.358,0,0,1,831.263,661.612Z" transform="translate(-806.642 -656.303)" fill="#fff" />
                </svg></button>
        </div>
    </div>
    <style>
        .ra7-social-share {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            position: relative;
            z-index: 1000;
        }

        .ra7-share-btn, .ra7-share-icons a, .ra7-share-icons button {
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 2px;
        }

        .ra7-share-icons {
            display: flex;
            gap: 8px;
        }

        .ra7-share-icons p {
            margin-bottom: 0;
            font-family: 'Helvetica Now Condensed';
        }

        .ra7-share-icons svg {
            width: 20px;
            height: 20px;
        }

        .ra7-share-btn {
            display: none;
        }

        @media (max-width: 768px) {
            .ra7-share-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 4px;
            }

            .ra7-share-btn svg {
                width: 16px;
                height: 16px;
            }

            .ra7-share-icons {
                display: none;
            }
        }
    </style>
    <script>
  document.getElementById('share-button').addEventListener('click', function() {
    if (navigator.share) {
      navigator.share({
        title: document.title,
        url: window.location.href
      });
    } else {
      document.querySelector('.ra7-share-icons').style.display = 'flex';
      document.getElementById('share-text').style.display = 'none';
      document.getElementById('share-button').style.display = 'none';
    }
  });

  document.getElementById('copy-link').addEventListener('click', function() {
    navigator.clipboard.writeText(window.location.href).then(() => {
      const message = document.createElement('span');
      message.textContent = 'Link copied!';
      message.style.cssText = 'position:absolute;background:rgb(51,51,51);color:#fff;padding:5px;border-radius:6px;right:0;width:120px;border:white 4px solid;transition:0.2s ease-out;opacity:0;bottom:85px;';
      this.appendChild(message);
      
      setTimeout(() => {
        message.style.opacity = '1';
        message.style.bottom = '43px';
      }, 10);
      
      setTimeout(() => {
        message.style.opacity = '0';
        setTimeout(() => message.remove(), 300);
      }, 2000);
    });
  });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('ra7_social_share', 'social_share_shortcode');