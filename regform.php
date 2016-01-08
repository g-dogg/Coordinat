	<div class="row">
      <form class="col s12" action="index.php" method="GET">
				<div class="row">
	      	<div class="input-field col s6">
                    <input placeholder="Почтовый индекс. Например: 644000" name="zipcode" id="zipcode" type="text" maxlength="6" pattern="[0-9]{6}" class="validate">
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