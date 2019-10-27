<?php require 'inc/header.php' ?>

  <?php if((isset($data)&&$data[1]=='success')): ?>
      <p>Thanks shit sorted out</p>
  <?php elseif((isset($data)&&$data[1]=='error')): ?>
      <p>Shits fuckd up</p>
  <?php endif ?>

  <div class="container">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col"  >
            <a href="?sortBy=#">test</a>
          </th>
          <th scope="col">
            <a href="?sortBy=firstName">Имя</a>
          </th>
          <th scope="col">
              <a class='' href="?sortBy=lastName">Фамилия</a>
          </th>
          <th scope="col">
           <a href="?sortBy=groupNumber">Номер группы</a>
          </th>
          <th scope="col">
            <a href="?sortBy=examPoints">Баллы ЕГЭ</a>
          </th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($data[0] as $index=>$user): ?>
        
          <tr>
            <th scope="row"><?=$index+1?></th>
            <td><?=$user['firstName']?></td>
            <td><?=$user['lastName']?></td>
            <td><?=$user['groupNumber']?></td>
            <td><?=$user['examPoints']?></td>
          </tr>
        
      <?php endforeach ?>
      </tbody>
    </table>
  </div>

  <script>
    var data =JSON.stringify(<?php echo json_encode($data[0])?>)

    function sort(column){
      window.location.href='/sort/'+column;
    }
  </script>

<?php require 'inc/footer.php' ?>