<nav id="navbar" class="navbar">
  <a href="/" class="navbar-brand">
    <svg class="navbar-brand-svg" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" area-label="EmptyWork's Logo"><path d="M11.65 8.42634L14.8715 5.20767L18.1667 8.50567V14.2517L14.7667 17.6517V10.1178L11.65 13.2345V15.1017L8.24998 18.5017V16.6345L7.39998 17.4845V12.6763L8.24998 11.8263V7.00117L11.65 3.60117V8.42634Z"></path><path d="M7.23 17.6573L7.4 17.4845V19.3517L4 22.7517V5.18501H7.4V12.6763L4.82733 15.2518L7.23 17.6573Z"></path><path d="M14.472 0L21 6.52801V11.3362L18.1667 8.50284V5.18501H14.8913L14.8715 5.20484L12.0665 2.40267L14.472 0Z"></path></svg>
    <span class="navbar-brand-text">Stevarth</span>
  </a>
  <ul class="navbar-menus sm-hide">
    <?php foreach ($menus as $menu): ?>
    <li class="navbar-menus-item" class="<?= ($menu == strtolower($title)) ? "active" : "" ?>">
      <a class="navbar-menus-link" href="<?= ($menu != "home") ? "/".$menu : "/" ?>">
        <?= $menu ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <a href="#navbar" class="navbar-hamburger lg-hide" data-mobile-button>
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
  </a>
  </ul>
</nav>
<ul class="navbar-mobile lg-hide" data-mobile>
<?php foreach ($menus as $menu): ?>
  <li class="navbar-menus-item" class="<?= ($menu == strtolower($title)) ? "active" : "" ?>">
    <a class="navbar-menus-link" href="<?= ($menu != "home") ? "/".$menu : "/" ?>">
      <?= $menu ?>
    </a>
  </li>
<?php endforeach ?>
</ul>