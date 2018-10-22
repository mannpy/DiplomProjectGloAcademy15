    <div class="overlay" id="overlay">
      <div class="popup" id="callOrder">
        <div class="popup__close">&times;</div>
        <div class="popup__title">Заказать звонок</div>
        <div class="popup__form">
          <form class="request-form">
            <input type="text" name="name" class="request-form__inp" placeholder="Как Вас зовут?" required>
            <input type="tel" name="tel" class="request-form__inp request-form__inp_tel" placeholder="Номер телефона" required>
            <button type="submit" class="btn request-form__btn" id="callOrderBtn">Заказать звонок</button>
            <div class="request-form__consent">Нажав кнопку «Заказать звонок», <br> я даю согласие на обработку моих персональных данных.</div>
            <!-- /.request-form__consent -->
          </form>
          <!-- /.request-form -->
        </div>
      </div>
      <!-- /#callOrder.popup -->
      <div class="popup" id="quickOrder">
        <div class="popup__close">&times;</div>
        <div class="popup__title">Быстрая заявка</div>
        <div class="popup__form">
          <form class="request-form">
            <input type="text" name="from" class="request-form__inp form__place" placeholder="Откуда" required>
            <input type="text" name="to" class="request-form__inp form__place" placeholder="Куда" required>
            <input type="text" name="name" class="request-form__inp" placeholder="Как Вас зовут?" required>
            <input type="tel" name="tel" class="request-form__inp request-form__inp_tel" placeholder="Номер телефона" required>
            <button type="submit" class="btn request-form__btn" id="quickOrderBtn">Заказать звонок</button>
            <div class="request-form__consent">Нажав кнопку «Заказать звонок», <br> я даю согласие на обработку моих персональных данных.</div>
            <!-- /.request-form__consent -->
          </form>
          <!-- /.request-form -->
        </div>
      </div>
      <!-- /#quickOrder.popup -->
      <div class="popup" id="thanks">
        <div class="popup__close">&times;</div>
        <div class="popup__title">Спасибо!</div>
        <div class="popup__form">
          <div class="popup__text">
            Благодарим вас за
            <span class="popup__message"> оставленную заявку.</span>
          </div>
          <div class="popup__text post">
            Скоро с вами свяжутся наши сотрудники.
          </div>
          <!-- /.popup__text -->
        </div>
        <!-- /.popup__form -->
      </div>
      <!-- /#thanks.popup -->
    </div>
    <!-- /#overlay.overlay -->