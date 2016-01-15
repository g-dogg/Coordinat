<div class="row">
      <form class="col s12" action="index.php" method="GET">
				<div class="row">
	      	<div class="input-field col s6">
            <select>
              <option value="" disabled selected>Выберите Ваш почтовый индекс</option>
              <?php
                while($row = $zipSelect->fetch())
                {
                  echo "<option value=\"" . $row['zipid'] . "\">" . $row['zipcode'] . "</option>";
                }
              ?>
            </select>
	          <label for="zipcode">Почтовый индекс</label>
	        </div>
					<div class="input-field col s6">
	        	<input placeholder="Улица" name="street" id="street" type="text" class="validate">
	        	<label for="street">Введите название улицы</label>
					</div>
					<div class="input-field col s6">
						<input placeholder="Дом" name="build" id="build" type="text" maxlength="3" class="validate">
	        	<label for="build">Введите номер дома</label>
					</div>
					<div class="input-field col s6">
						<input placeholder="Корпус/строение" name="housing" id="housing" type="text" class="validate">
	        	<label for="housing">Корпус или строение</label>
					</div>
				</div>
        <button class="btn waves-effect waves-light btn_clr2" type="submit" name="send">Отправить
          <i class="fa fa-share"></i>
        </button>
     </form>
	</div>