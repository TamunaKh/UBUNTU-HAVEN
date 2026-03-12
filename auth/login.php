<?php 
$page_title = 'Login | Ubuntu Haven Resort';
$hero_image = '/UBUNTU-HAVEN/img/image.webp';
include '../includes/header.php'; 
?>
        <div class="hero__content">
          <h1 class="hero__title">Welcome Back</h1>
        </div>
      </header>

      <main id="main-content" class="section">
        <div class="container" style="max-width: 500px; margin: 0 auto; text-align: center;">
            <h2 class="text-heading-large primary-color">Sign In</h2>
            <p class="text-body-large" style="margin-bottom: 24px;">Please enter your credentials to access your portal.</p>
            
            <form action="process_login.php" method="POST" style="display: flex; flex-direction: column; gap: 16px;">
                <input type="email" name="email" placeholder="Email Address" required style="padding: 12px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body);">
                <input type="password" name="password" placeholder="Password" required style="padding: 12px; border: 1px solid #ccc; border-radius: 4px; font-family: var(--font-family-body);">
                <button type="submit" class="button-outline" style="background-color: var(--primary-01); color: white; justify-content: center;">Login</button>
            </form>
            <p style="margin-top: 16px;">Don't have an account? <a href="register.php" style="color: var(--primary-02);">Register here</a></p>
        </div>
      </main>

<?php include '../includes/footer.php'; ?>
<script src="/UBUNTU-HAVEN/script.js"></script>