<section class="cabinet" id="cabinet">
      <div class="titleWrapper">
          <h3>Смена пароля</h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col s12 message hidden">

            </div>
            <form class="col s12" action="" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <i class="fa fa-unlock-alt fa-2x prefix" aria-hidden="true"></i>
                  <input name="oldPassword" id="oldPassword" type="password" class="validate" data-validation-required-message="Вы не ввели старый пароль">
                  <label for="password" >Старый пароль</label>
                  <p class="help-block"></p>
                </div>
                <div class="input-field col s12">
                  <i class="fa fa-lock prefix" aria-hidden="true"></i>
                  <input name="newPassword" id="inputPassword'" type="password" class="validate" required>
                  <i class="fa fa-check-square prefix hidden" aria-hidden="true"></i>
                  <label for="password">Новый пароль</label>
                  <p class="help-block"></p>
                </div>
                <div class="input-field col s12">
                  <i class="fa fa-lock prefix" aria-hidden="true"></i>
                  <input name="confirmNewPassword" id="inputConfirmPassword" type="password" class="validate" data-validation-match-match="newPassword"  required>
                  <i class="fa fa-check-square prefix hidden" aria-hidden="true"></i>
                  <label for="password">Еще раз новый пароль</label>
                  <p class="help-block"></p>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Сохранить
                <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
              </button>
              </div>
            </form>
          </div>
        </div>
      </section>