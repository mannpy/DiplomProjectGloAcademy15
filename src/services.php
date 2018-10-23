<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Выпускной проект">
    <meta name="author" content="Azat Mannanov">
    <title>Large Transport Ships - Наши услуги</title>
    <link rel="icon" href="img/favicon.ico">

<?php include '_base/head-styles.php'; ?>

  </head>
  <body>

<?php include '_base/metrika.php'; ?>

 
    <div class="main main_dark-head">
      <div class="container">

<?php include '_base/header.php'; ?>
<?php $page='services'; include '_base/header-menu.php'; ?>

      </div>
      <!-- /.container -->
    </div>
    <!-- /.main -->
    
    <div class="our-services">
      <div class="container">
        <div class="row">
          <div class="sidebar">
            <div class="sidebar__title">Наши услуги</div>
            <!-- /.sidebar__title -->

<?php $s_menu_item = "world-delivery"; include '_base/sidebar-menu.php'; ?>

          </div>
          <!-- /.sidebar -->
          <div class="content">
            <div class="content__title">международные грузоперевозки</div>
            <!-- /.content__title -->
            <div class="content__text">Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи! постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации существенных финансовых и административных условий.</div>
            <!-- /.content__text -->
            <div class="content-gallery content__gallery">
              <div class="content__title">Галерея изображений</div>
              <!-- /.content__title -->
              <div class="content-gallery__img">
                <img src="img/services/gallery-img-1.jpg" alt="Корабль">
              </div>
              <!-- /.content-gallery__img -->
              <div class="content-gallery__img">
                <img src="img/services/gallery-img-2.jpg" alt="Самолет">
              </div>
              <!-- /.content-gallery__img -->
            </div>
            <!-- /.content-gallery content__gallery -->
            <div class="content-feedback content__feedback">
              <div class="content__title">Отзывы</div>
              <!-- /.content__title -->
              <div class="feedback-block content-feedback__block">
                <div class="feedback-block__username">Ольга Петрова</div>
                <!-- /.feedback-block__username -->
                <div class="feedback-block__text">Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно работать, хорошая скорость и все товары всегда в сохранности. Всем советую.</div>
                <!-- /.feedback-block__text -->
              </div>
              <!-- /.feedback-block content-feedback__block -->
              <div class="feedback-block content-feedback__block">
                <div class="feedback-block__username">Ольга Петрова</div>
                <!-- /.feedback-block__username -->
                <div class="feedback-block__text">Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно работать, хорошая скорость и все товары всегда в сохранности. Всем советую.</div>
                <!-- /.feedback-block__text -->
              </div>
              <!-- /.feedback-block content-feedback__block -->
            </div>
            <!-- /.content-feedback content__feedback -->
            <div class="leave-feedback content__leave-feedback">
              <div class="content__title">Оставить отзыв</div>
              <!-- /.content__title -->
              <form class="leave-feedback__form">
                <input type="text" name="name" class="leave-feedback__inp" placeholder="Как вас зовут?" required>
                <input type="email" name="email" class="leave-feedback__inp" placeholder="Ваш e-mail" required>
                <textarea name="feedback" class="leave-feedback__textarea" placeholder="Ваш отзыв" required></textarea>
                <button class="btn leave-feedback__btn" type="submit">Отправить</button>
              </form>
              <!-- /.leave-feedback__form -->
            </div>
            <!-- /.leave-feedback content__leave-feedback -->
            <div class="content__title">Таблица</div>
            <div class="content__table">
              <table class="content-table">
                <thead class="content-table__head">
                  <tr class="content-table__row">
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Телефон</th>
                    <th>Адрес</th>
                    <th>Семейное положение</th>
                    <th>Код подразделения</th>
                  </tr>
                </thead>
                <tbody class="content-table__body">
                  <tr class="content-table__row">
                    <td>Фамилия</td>
                    <td>Имя</td>
                    <td>Отчество</td>
                    <td>Телефон</td>
                    <td>Адрес</td>
                    <td>Семейное положение</td>
                    <td>Код подразделения</td>
                  </tr>
                  <tr class="content-table__row">
                    <td>Фамилия</td>
                    <td>Имя</td>
                    <td>Отчество</td>
                    <td>Телефон</td>
                    <td>Адрес</td>
                    <td>Семейное положение</td>
                    <td>Код подразделения</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.content -->
        </div>
        <!-- /.our-services -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    
<?php include '_base/request-section.php'; ?>
<?php include '_base/footer.php'; ?>
<?php include '_base/modals.php'; ?>
<?php include '_base/scripts.php'; ?> 

  </body>
</html>