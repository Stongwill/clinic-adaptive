<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>CHECK-UP</title>
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <button
            class="navbar-toggler"
            href="#offcanvasExample"
            role="button"
            data-bs-toggle="offcanvas"
            aria-controls="offcanvasExample"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="/">
            <img src="img/logo.svg" alt="logo" class="logo" />
          </a>
          <div class="header__update">
            <a class="header__phone" href="tel:+78630000000"
              >+7(863) 000 00 00</a
            >
            <a href="#" class="locate__addres">Ростов-на-Дону</a>
          </div>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center"
            >
              <li class="nav-item">
                <a href="#" class="locate__addres">
                  <img src="img/locate.svg" alt="loc" class="locate__img" />
                  Ростов-на-Дону</a
                >
                <p class="addres">ул. Ленина, 2Б</p>
              </li>
            </ul>
            <div class=" d-flex align-items-center">
              <a class="header__phone phone" href="tel:+78630000000">
                <img
                  src="img/whatsapp-header.svg"
                  alt="whatsapp"
                  class="whatsapp"
                />+7(863) 000 00 00</a
              >

              <button class="btn enroll__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Записаться на прием</button>
            </div>
          </div>
        </div>
      </nav>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labellebdy="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
      <h2 class="modal-title" id="exampleModalLabel">Записаться на прием</h2>
        <button
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="close"
          >
            <img src="img/close.svg" alt="close" class="close" />
          </button>
      </div>

      <div class="modal-body">
  <form action="../doubleplus.php" method="POST">
    <div class="row mb-3" name="data">
      <label for="inputData" class="col-sm-2 col-form-label">ФИО</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputData" name="data" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Почта</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail" name="email" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassport" class="col-sm-4 col-form-label">Номер паспорта</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" id="inputPassport" name="number">
      </div>
    </div>
    <fieldset>
    <div class="row mb-3">
      <legend class="col-form-label">Направление</legend>
      <div class="col-sm-8">
        <div class="form-check">
          <input type="radio" class="form-check-input" name="radios" value="set1" id="set1" checked>
          <label for="set1" class="form-check-label">Кардиология</label>
        </div>
        <div class="form-check" name="redirect">
          <input type="radio" class="form-check-input" name="radios" value="set2" id="set2" >
          <label for="set2" class="form-check-label">Стамотология</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="radios" value="set3" id="set3" >
          <label for="set3" class="form-check-label">Физиотерапия</label>
        </div>
      </div>
    </div>
    </fieldset>
    <div class="row mb-3">
    <div class="col-sm-12">
    <label for="messageUser" class="form-label">Сообщение</label>
  <textarea class="form-control" id="messageUser" rows="3" placeholder="Введите сообщение" maxlength="300" name="message"></textarea>
    </div>
    </div>

    <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Отправить</button>
      </div>
  </form>
      </div>
    </div>
  </div>
    </div>

      <div
        class="header__nav header__none navbar-collapse"
        id="navbarSupportedContent">
        <div class="container">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">О клинике</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Специалисты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Цены</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
      <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel"
      >
        <div class="offcanvas-header">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          >
            <img src="img/close.svg" alt="close" class="close" />
          </button>
          <a href="/">
            <img src="img/logo.svg" alt="logo" class="logo" />
          </a>
          <div class="header__contact d-flex flex-column align-items-end">
            <a class="header__phone" href="tel:+78630000000"
              >+7(863) 000 00 00</a
            >
            <a href="#" class="locate__addres">Ростов-на-Дону</a>
          </div>
        </div>

        <div class="offcanvas-body header__nav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">О клинике</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Специалисты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Цены</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
          </ul>
          <button class="btn enroll__btn navbar__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Записаться на прием</button>
        </div>
      </div>
    </header>
