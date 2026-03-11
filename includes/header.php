<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
</html>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <meta name="description" content="Ubuntu Haven Resort - Student Project. Luxury villas, spa, and dining in South Africa." />
    <meta name="robots" content="index, follow" />
    
    <title><?php echo isset($page_title) ? $page_title : 'Ubuntu Haven Resort | Student Project'; ?></title>
  
    <link rel="stylesheet" href="/UBUNTU-HAVEN/style.css" />
    
    <link rel="preload" as="image" href="<?php echo isset($hero_image) ? $hero_image : 'img/image.webp'; ?>" fetchpriority="high" />
  </head>
  <body>
    <div class="student-banner" role="alert">
        EDUCATIONAL PURPOSES ONLY. NOT A REAL RESORT.
    </div>

    <div class="layout-frame">
      <a href="#main-content" class="skip-link">Skip to main content</a>
      
      <header class="hero">
        <div class="hero__bg-wrapper">
            <img class="hero__bg-image" src="<?php echo isset($hero_image) ? $hero_image : 'img/image.webp'; ?>" alt="Resort Background" fetchpriority="high" />
        </div>
        
        <nav class="navbar" aria-label="Main navigation">
          <div class="container navbar__container">
            <a href="/UBUNTU-HAVEN/index.php" class="navbar__logo-link" aria-label="Ubuntu Haven Home">
              <img class="navbar__logo" src="/UBUNTU-HAVEN/img/company-logo.svg" alt="Ubuntu Haven Logo" />
            </a>
            
            <button class="mobile-menu-toggle" aria-expanded="false" aria-label="Open menu">
                <span></span><span></span><span></span>
            </button>

            <?php 
              $current_page = basename($_SERVER['PHP_SELF']); 
            ?>
            <ul class="navbar__menu" role="list">
              <li><a href="/UBUNTU-HAVEN/index.php" class="navbar__link <?php if($current_page == 'index.php') echo 'active'; ?>">Overview</a></li>
              <li><a href="/UBUNTU-HAVEN/accommodation.php" class="navbar__link <?php if($current_page == 'accommodation.php') echo 'active'; ?>">Accommodation</a></li>
              <li><a href="/UBUNTU-HAVEN/spa.php" class="navbar__link <?php if($current_page == 'spa.php') echo 'active'; ?>">Spa &amp; Wellness</a></li>
              <li><a href="/UBUNTU-HAVEN/recreation.php" class="navbar__link <?php if($current_page == 'recreation.php') echo 'active'; ?>">Recreation</a></li>
              <li><a href="/UBUNTU-HAVEN/dining.php" class="navbar__link <?php if($current_page == 'dining.php') echo 'active'; ?>">Dining</a></li>
              <li><a href="/UBUNTU-HAVEN/culture.php" class="navbar__link <?php if($current_page == 'culture.php') echo 'active'; ?>">Culture &amp; Local Life</a></li>
              <li><a href="/UBUNTU-HAVEN/contact.php" class="navbar__link <?php if($current_page == 'contact.php') echo 'active'; ?>">Contact</a></li>
              
              <?php if(isset($_SESSION['user_id'])): ?>
                  <li><a href="/UBUNTU-HAVEN/user_portal.php" class="navbar__link <?php if($current_page == 'user_portal.php') echo 'active'; ?>" style="color: var(--primary-02); font-weight: bold;">My Portal</a></li>
                  <li><a href="/UBUNTU-HAVEN/auth/logout.php" class="navbar__link">Logout</a></li>
              <?php else: ?>
                  <li><a href="/UBUNTU-HAVEN/auth/login.php" class="navbar__link <?php if($current_page == 'login.php') echo 'active'; ?>">Login</a></li>
                  <li><a href="/UBUNTU-HAVEN/auth/register.php" class="navbar__link <?php if($current_page == 'register.php') echo 'active'; ?>" style="border: 1px solid currentColor; padding: 4px 12px; border-radius: 4px;">Register</a></li>
              <?php endif; ?>
            </ul>
          </div>
        </nav>