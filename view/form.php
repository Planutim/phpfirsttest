<?php require 'inc/header.php' ?>

<?php var_dump($data) ?>

    

    <div class="container d-flex justify-content-center">
    <div class="row">
    <div class='md-col-6'>
    <form action="" method="post" id="form">
      <div class='form-group'>
        <label for="firstName">Имя</label>
        <input type="text" name="firstName" id="firstName" required
        class="form-control <?=(isset($result) && $result['firstName']==null)?'dataerror':''?>" 
        value="<?=isset($result['firstName'])?$result['firstName']:''?>" />
      </div>

      <div class='form-group'>
        <label for="lastName">Фамилия</label>
        <input type="text" name="lastName" id="lastName" required
        class="form-control <?=(isset($result) && $result['lastName']==null)?'dataerror':''?>" 
        value="<?=isset($result['lastName'])?$result['lastName']:''?>" />
      </div>
      
      <div class='form-group'>
        <label for="sex">Пол</label>
        <select id="sex" name="sex" class='form-control' required>
          <option value="male" 
            <?=(isset($result['sex'])&&$result['sex']=='male')?'selected':'';?>
            >Мужской</option>
          <option value="female" 
              <?=(isset($result['sex'])&&$result['sex']=='female')?'selected':'';?>
              >Женский</option>
        </select>
      </div>
      
      <div class='form-group'>
        <label for="groupNumber">Номер группы</label>
        <input type="text" name="groupNumber" id="groupNumber" required
        
        class="<?=(isset($result) && $result['groupNumber']==null)?'dataerror form-control':'form-control'?>" 
        value="<?=isset($result['groupNumber'])?$result['groupNumber']:''?>"/>
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required
        class="<?=(isset($result) && $result['email']==null)?'dataerror form-control':'form-control'?>" 
        value="<?=isset($result['email'])?$result['email']:''?>" /> 
      </div>

      <div class='form-group'>
        <label for="examPoints">ЕГЭ баллы</label>
        <input type="number" name="examPoints" id="examPoints" required
        class="<?=(isset($result) && $result['examPoints']==null)?'dataerror form-control':'form-control'?>" 
        value="<?=isset($result['examPoints'])?$result['examPoints']:''?>" />
      </div>

      <div class='form-group'>
        <label for="birthYear">Год рождения</label>
        <input type="number" name="birthYear" id="birthYear" required
        class="<?=(isset($result) && $result['birthYear']==null)?'dataerror form-control':'form-control'?>" 
        value="<?=isset($result['birthYear'])?$result['birthYear']:''?>" /> 
      </div>

      <div class='form-group'>
        <label for='registration'>Прописка</label>
        <select id="registration" name="registration" class='form-control' required>
          <option value="resident" 
            <?=(isset($result['registration'])&&$result['registration']=='resident')?'selected':'';?>
            >Местный</option>
          <option value="nonresident" 
            <?=(isset($result['registration'])&&$result['registration']=='nonresident')?'selected':'';?>
            >Иногородний</option>
        </select>
      </div>

      <button type="submit" class='btn btn-primary btn-block mt-5'>Регистрация</button>
    
    </form>
    </div>
</div>
</div>

<?php require 'inc/footer.php' ?>