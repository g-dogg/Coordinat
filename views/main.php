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

        </div><!--end of container-->
      </header>
      <section class="about" id="about">
        <div class="titleWrapper">
          <h3>О сервисе</h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col s3">
                <p class="abImg1"><i class="fa fa-user-plus fa-5x" aria-hidden="true"></i></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col s3">
                <p class="abImg2"><i class="fa fa-map-o fa-5x" aria-hidden="true"></i></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col s3">
                <p class="abImg3"><i class="fa fa-map-marker fa-5x" aria-hidden="true"></i></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col s3">
                <p class="abImg4"><i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </section>
      <section id="sendrequest" class="sendrequest">
      <div class="titleWrapper">
          <h3>Регистрируйся</h3>
        </div>
        <div class="container">
          <div class="row">
            <h5>Остальную информацию нужно указать в личном кабинете</h5>
            <form action="" class="col s12" id="registerUser" novalidate method="post">
            <div class="input-field col s6">
              <input name="username" id="username" type="text" class="validate">
              <label for="username">Введите логин</label>
            </div>
            <div class="input-field col s6">
              <input name="email" id="email" type="email"  class="validate" data-validation-matches-match="email" data-validation-matches-message="Вы не ввели адрес электронной почты" required>
              <label for="email" data-error="wrong" data-success="right">Электронная почта</label>
            </div>
            <div class="input-field col s12">
              <input name="password" id="password" type="password" class="validate">
              <label for="password">Пароль. Минимум 8 символовю</label>
            </div>
            <div class="col s6 buttonLogon">
                      <button class="btn waves-effect waves-light btn_clr2" type="submit" name="registeruser" value="true" onclick="registerUser();">Зарегистрироваться
                    <i class="fa fa-share"></i>
          </div>
        </div>
      </section>