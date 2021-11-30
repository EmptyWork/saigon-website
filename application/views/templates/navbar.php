<nav class="navbar">
  <?php foreach ($menus as $menu): ?>
    <ul>
      <li class="<?= ($menu == strtolower($title)) ? "active" : "" ?>">
        <a href="/<?= $menu ?>">
          <?= $menu ?>
        </a>
      </li>
    </ul>
    <?php endforeach ?>
</nav>