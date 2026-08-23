<?php
/**
 * Plugin Name: J1 Mobile Nav Toggle
 * Description: Adds a hamburger menu toggle button to the custom J1 site headers on mobile and tablet widths. Currently running as a "Mobile nav toggle" snippet inside the Code Snippets plugin -- this file is a backup copy, and can also be installed directly as its own plugin if preferred later.
 * Version: 1.0
 */

add_action('wp_footer', function () {
      if (is_admin()) {
                return;
      }
      ?>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[id^="j1-"] > nav').forEach(function (nav) {
              if (nav.querySelector('.j1-menu-toggle')) return;
              var btn = document.createElement('button');
              btn.className = 'j1-menu-toggle';
              btn.type = 'button';
              btn.setAttribute('aria-label', 'Toggle menu');
              btn.innerHTML = '<span></span><span></span><span></span>';
              nav.appendChild(btn);
              btn.addEventListener('click', function () {
                      nav.classList.toggle('j1-nav-open');
                      btn.classList.toggle('is-open');
              });
              nav.querySelectorAll('.nav-links a').forEach(function (a) {
                      a.addEventListener('click', function () {
                                nav.classList.remove('j1-nav-open');
                                btn.classList.remove('is-open');
                      });
              });
        });
        window.addEventListener('resize', function () {
              if (window.innerWidth > 780) {
                      document.querySelectorAll('[id^="j1-"] > nav.j1-nav-open').forEach(function (nav) {
                                nav.classList.remove('j1-nav-open');
                      });
                      document.querySelectorAll('.j1-menu-toggle.is-open').forEach(function (b) {
                                b.classList.remove('is-open');
                      });
              }
        });
    });
  </script>
    <?php
});

  </script>
