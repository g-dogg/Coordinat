<div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m6 l8">
    <form  action="index.php" method="GET">
    	<div class="row">
        <div class="input-field col s12">
					<input placeholder="Ваше имя" name="username" id="username" type="text" class="validate">
          <label for="username">Имя пользователя</label>
				</div>
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate">
          <label for="email">электронная почта</label>
        </div>
	     	<div class="input-field col s12">
          <select name="zipcode">
            <option value="" disabled selected>Выберите Ваш почтовый индекс</option>
            <?php
              while($row = $zipSelect->fetch())
              {
                echo "<option zipcodevalue=\"" . $row['zipid'] . "\">" . $row['zipcode'] . "</option>";
              }
            ?>
          </select>
          <label for="zipcode">Почтовый индекс</label>
	      </div>
				<div class="input-field col s12">
        	<input placeholder="Улица" name="street" id="street" type="text" class="validate">
        	<label for="street">Введите название улицы</label>
				</div>
				<div class="input-field col s12">
					<input placeholder="Дом" name="build" id="build" type="text" maxlength="3" class="validate">
        	<label for="build">Введите номер дома</label>
				</div>
				<div class="input-field col s12">
					<input placeholder="Корпус/строение" name="housing" id="housing" type="text" class="validate">
        	<label for="housing">Корпус или строение (если есть)</label>
				</div>        
			</div>
      <button class="btn waves-effect waves-light btn_clr2" type="submit" name="send">Отправить
        <i class="fa fa-share"></i>
      </button>
    </form>
  </div>
  <div class="col s12 m4 l2">&nbsp;</div>
</div>