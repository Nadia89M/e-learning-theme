@if (is_front_page())
  <header class="banner">
    <div class="container">
      <nav class="nav-primary">
          @if (!is_user_logged_in())
            <li><a href="<?php echo site_url('/login') ?>">Log In</a></li>
          @else
            <li><a href="<?php echo site_url('/wp-login.php?action=logout') ?>">Log Out</a></li>
          @endif
      </nav>
    </div>
  </header>
@endif
