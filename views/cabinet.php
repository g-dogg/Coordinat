<section class="cabinet" id="cabinet">
      <div class="titleWrapper">
          <h3>Личный кабинет</h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col s12 m4 l3 leftButton">
              <button class="btn waves-effect waves-light yellow darken-1" id ="changePwd" type="submit" name="changePwd">Изменить пароль
                <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
              </button>
              <button class="btn waves-effect waves-light yellow darken-1" id="editAddress" type="submit" name="editAddress">Редактировать адрес
                <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
              </button>
            </div>
            <div class="col s12 m4 l6 avatar center-align">
              <!--<img src="<?= Config::getRootPath();?>img/usrImg/avatar.jpg">-->
              <button class="btn waves-effect waves-ligh vt" type="submit" name="action">Загрузить
                <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
              </button>
              <button class="btn waves-effect waves-light yellow darken-1" type="submit" name="action">Удалить
                <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
              </button>
            </div>
            <div class="col s12 m4 l3 rightButton">
		<button class="btn waves-effect waves-light yellow darken-1" type="submit" name="action">Загрузить
                <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
              </button>
              <button class="btn waves-effect waves-light yellow darken-1" type="button"  name="action">Сообщение
                <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="row">
          	<div class="col s12 setReq">
          		<button class="btn-large waves-effect waves-light red" type="submit" name="setRequest">Сообщить о проблеме
                		<i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
              	</button>
          	</div>
          </div>
        </div>
      </section>