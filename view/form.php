<?php require 'inc/header.php' ?>


    

    <div class="container d-flex justify-content-center">
    <div class="row">
    <div class='md-col-6'>
    <form action="" method="post" id="form">
      <div class='form-group'>
        <label for="firstName">Имя</label>
        <input type="text" name="firstName" id="firstName" required
        class="form-control <?=(isset($data) && $data['firstName']==null)?'dataerror':''?>" 
        value="<?=isset($data['firstName'])?$data['firstName']:''?>" />
      </div>

      <div class='form-group'>
        <label for="lastName">Фамилия</label>
        <input type="text" name="lastName" id="lastName" required
        class="form-control <?=(isset($data) && $data['lastName']==null)?'dataerror':''?>" 
        value="<?=isset($data['lastName'])?$data['lastName']:''?>" />
      </div>
      
      <div class='form-group'>
        <label for="sex">Пол</label>
        <select id="sex" name="sex" class='form-control' required>
          <option value="male" 
            <?=(isset($data['sex'])&&$data['sex']=='male')?'selected':'';?>
            >Мужской</option>
          <option value="female" 
              <?=(isset($data['sex'])&&$data['sex']=='female')?'selected':'';?>
              >Женский</option>
        </select>
      </div>
      
      <div class='form-group'>
        <label for="groupNumber">Номер группы</label>
        <input type="text" name="groupNumber" id="groupNumber" required
        
        class="form-control <?=(isset($data) && $data['groupNumber']==NULL)?'dataerror':''?>" 
        value="<?=isset($data['groupNumber'])?$data['groupNumber']:''?>"/>
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required
        class="form-control <?=(isset($data) && $data['email']==null)?'dataerror':''?>" 
        value="<?=isset($data['email'])?$data['email']:''?>" /> 
      </div>

      <div class='form-group'>
        <label for="examPoints">ЕГЭ баллы</label>
        <input type="number" name="examPoints" id="examPoints" required
        class="form-control <?=(isset($data) && $data['examPoints']==null)?'dataerror':''?>" 
        value="<?=isset($data['examPoints'])?$data['examPoints']:''?>" />
      </div>

      <div class='form-group'>
        <label for="birthYear">Год рождения</label>
        <input type="number" name="birthYear" id="birthYear" required
        class="form-control <?=(isset($data) && $data['birthYear']==NULL)?'dataerror':''?>" 
        value="<?=isset($data['birthYear'])?$data['birthYear']:''?>" /> 
      </div>

      <div class='form-group'>
        <label for='registration'>Прописка</label>
        <select id="registration" name="registration" class='form-control' required>
          <option value="resident" 
            <?=(isset($data['registration'])&&$data['registration']=='resident')?'selected':'';?>
            >Местный</option>
          <option value="nonresident" 
            <?=(isset($data['registration'])&&$data['registration']=='nonresident')?'selected':'';?>
            >Иногородний</option>
        </select>
      </div>

      <button type="submit" class='btn btn-primary btn-block mt-5'>Регистрация</button>
    
    </form>
    </div>
</div>
</div>

<?php require 'inc/footer.php' ?>