<header class="header" id="header">
    <nav class="nav">
    
        <div class="favicon nav__logo">
            <a href="<?php echo BASE_URL . 'index.php'; ?>">
                <img src="<?php echo BASE_URL . 'assets/media/icons/favicon.jpg' ?>" alt="FOL Logo">
            </a>
        </div>

        <div class="nav__menu" id="nav-menu">

            <ul class="nav__list">
                <li><a href="<?php echo BASE_URL . 'index.php'; ?>" class="nav__link">Home</a></li>
                <li><a href="<?php echo BASE_URL . 'sections/shop.php'; ?>" class="nav__link">Shop</a></li>
                <li><a href="<?php echo BASE_URL . 'sections/blog.php'; ?>" class="nav__link">Blog</a></li>
                <li><a href="#about" class="nav__link">About</a></li>
                <li><a href="#contact" class="nav__link">Contact</a></li>
            </ul>

            <!-- close button -->
            <div class="nav__close" id="nav-close">
                <i class="ri-close-circle-line"></i>
            </div>

        </div>

        <!-- toggle button -->
        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-5-line"></i>
        </div>

    </nav>      
</header>