<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Website</title>
  </head>
  <body>
    <!-- Хедер -->
    <?php require "templates/header.php" ?>
    <!-- Форма для отправки данных на эл. почту -->
    <div class="container mt-5">
        <h3>Контактная форма</h3>
        <p>Заполните форму, чтобы отправить нам электронное письмо. Вы можете оставить отзыв о нашей работе, предложить публикацию своей статьи или поделиться любой полезной информацией.</p>
        <form action="check.php" method="post"> <!-- привязка к файлу check.php, чтобы отправлять данные на почту -->
            <input type="name" name="name" placeholder="Введите свое имя" class="form-control" required><br>
            <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Введите Ваше сообщение" required minlength="10" rows = "10"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
        
    <!-- Футер -->
    <?php require "templates/footer.php" ?>
    </div>
  </body>
</html>

