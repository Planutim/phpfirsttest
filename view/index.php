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
          <th scope="col" onclick="sort()" >#</th>
          <th scope="col" onclick="sort()">Имя</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Номер группы</th>
          <th scope="col">Баллы ЕГЭ</th>
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
    var data = <?php echo json_encode($data[0]) ?>;
    function sort(data,column){
      // switch(column){
      //   case "firstName":
      //   case "lastName":
      //   case "groupNumber":
      //     data.sort((a,b)=>{
      //       a[]
      //     })
      // }
      alert(JSON.stringify(data));
    }
  </script>

<?php require 'inc/footer.php' ?>