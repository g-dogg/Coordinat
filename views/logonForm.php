<section class="hidden logonForm">
          <div class="container">
            <div class="row">
              <div class="col s4">&nbsp;</div>
              <div class="col s4 form">
                <form action="" method="POST"><!-- form-->
                  <div class="titleWrapper">
                    <h5>Вход</h5>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="username" id="username" type="text" class="validate" value="">
                    <label for="username">Введите логин</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input name="password" id="password" type="password" class="validate" value="">
                      <label for="password">Пароль.</label>
                  </div>
                  <div class="col s6">
                  <p>
                    <input type="checkbox" id="rememberMe" name="rememberMe" value="true">
                    <label for="rememberMe">Запомнить</label>
                   </p>
                  </div>
                  <div class="col s6 buttonLogon">
                      <button class="btn waves-effect waves-light btn_clr2" type="submit" name="sendUserData" value="true" onclick="logonUser();">Отправить
                    <i class="fa fa-share"></i>
                  </button>
                  </div>
                </form><!--end form-->
              </div>
              <div class="col s4">&nbsp;</div>
            </div>
          </div>
        </section>
