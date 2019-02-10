<form action="../lib/phpMailer/sendEmail.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_name">Имя</label>
      <input type="text" class="form-control" id="user_name" placeholder="Имя" name="user_name">
    </div>
    <div class="form-group col-md-6">
      <label for="user_surname">Фамилия</label>
      <input type="text" class="form-control" id="user_surname" placeholder="Фамилия" name="user_surname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_email">Email</label>
      <input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email">
    </div>
    <div class="form-group col-md-6">
      <label for="user_tel">Телефон</label>
      <input type="tel" class="form-control" id="user_tel" placeholder="Телефон" name="user_tel">
    </div>
  </div>
  <div class="form-group">
      <label for="user_message">Текст обращения</label>
      <textarea class="form-control" name="user_message" id="user_message" rows="10" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary person-info__button">Отправить</button>
</form>