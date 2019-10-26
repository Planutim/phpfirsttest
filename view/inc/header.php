<html>
  <head>
    <link rel='stylesheet' type='text/css' href='/styles/style.css' />
    <link rel='stylesheet' type='text/css' href='/bootstrap-4.3.1-dist/css/bootstrap.min.css'>
  </head>
  
  <body>
    <header class="">
      <nav class="navbar navbar-light navbar-expand-lg bg-light">
        
        <div class=''>
          <a class="navbar-brand" href="#">
            Сайт студента
          </a>
        </div>

        <div class=''>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOptions" aria-controls="navbarOptions">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarOptions">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
              <?php if(!isset($_SESSION['logged'])): ?>
                <a class="nav-link" href="/register">Регистрация</a>
              <?php else: ?>
                <a class="nav-link" href="/edit">Редактировать</a>
                <a class="nav-link" href="/logout">Выйти</a>
              <?php endif ?>
            </li>
          </ul>
          <form class="form-inline mt-5">
            <input class="form-control mr-2" type="search"  placeholder="">
            <button class="btn btn-outline-primary ml-2" type="submit">Поиск</button>
          </form>
      </div>  
      </nav>
    </header>
    <main class='container-fluid'>
    
    <?php //require_once './Engine/Router.php'; ?>

