        <div class="menu-btn hidden-desktop"><span class="menu-btn__elem"></span></div>
        <nav class="header-menu">
          <ul class="header-menu__items">
            <li class="header-menu__item"><a href="index.php" class="header-menu__link <?php if($page=='home') {echo 'active';} ?>">О компании</a></li>
            <!-- /.menu-items__item -->
            <li class="header-menu__item"><a href="services.php" class="header-menu__link <?php if($page=='services') {echo 'active';} ?>">Услуги</a></li>
            <!-- /.menu-items__item -->
            <li class="header-menu__item"><a href="#news" class="header-menu__link">Новости</a></li>
            <!-- /.menu-items__item -->
            <li class="header-menu__item"><a href="#" class="header-menu__link">Калькулятор</a></li>
            <!-- /.menu-items__item -->
            <li class="header-menu__item"><a href="#" class="header-menu__link">Контакты</a></li>
            <!-- /.menu-items__item -->
            <li class="header-menu__item hidden-mobile">
              <div class="header-menu__search">
                <img src="img/header/seacrh-icon.svg" alt="Поиск" class="header-menu__icon">
              </div>
              <!-- /.header-menu__search -->
              <input type="text" name="search" class="header-menu__inp">
            </li>
            <!-- /.menu-items__item -->
          </ul>
          <!-- /.menu-items header-menu__items -->
        </nav>
        <!-- /.header-menu -->