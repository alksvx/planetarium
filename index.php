<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css"> <!-- наследование css файла -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> <!-- наследование классов bootstrap -->
    <title>Website</title>
  </head>
  <body>
    <!-- Хедер -->
    <?php require "templates/header.php" ?>

    <!-- Статьи -->
    <div class="container mt-5">
        <h3 class="mb-5">Наши статьи</h3>

        <div class="d-flex flex-wrap">
          <?php //цикл для генерации статей
              for ($i = 0; $i < 5; $i++):
          ?>
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <?php
                  if ($i == 0)
                    $title = 'Меркурий';
                  else if ($i == 1)
                    $title = 'Земля';
                  else if ($i == 2)
                    $title = 'Юпитер';
                  else if ($i == 3)
                    $title = 'Сатурн';
                  else if ($i == 4)
                    $title = 'Уран';
                  ?>
                  <h4 class="my-0 fw-normal"><center><?php echo $title?></center></h4>
                </div>
                <div class="card-body">
                  <img src="img/<?php echo ($i + 1) //генератор картинок ?>.jpg" class="img-thumbnail" alt="">
                  
                    <?php if ($i == 0): ?>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><b>Масса:</b> 3.33×10²³ кг</li>
                      <li><b>Средняя температура:</b> 67 °C</li>
                      <li><b>Первая космическая скорость:</b>	3,1 км/с</li>
                      <li><b>Вторая космическая скорость:</b> 4,25 км/с</li>
                      <li><b>Экваториальная скорость вращения:</b> 10,892 км/ч (3,026 м/с) (на экваторе)</li>
                      <li><b>Орбитальная скорость:</b> 47,4 км/c</li>
                      <li><b>Период вращения:</b> 58,646 дня (1407,5 часа)</li>
                      
                    </ul>
                    <a href="https://ru.wikipedia.org/wiki/Меркурий"><button type="button" class="btn w-100 btn-lg btn-outline-primary mb-1" href="#">Подробнее</button></a>

                    <?php elseif ($i == 1): ?>
                      <ul class="list-unstyled mt-3 mb-4">
                      <li><b>Площадь:</b> 510 072 000 км²</li>
                      <li><b>Масса:</b> 5.97×10²⁴ кг</li>
                      <li><b>Средняя температура:</b> 14,8 °C</li>
                      <li><b>Вторая космическая скорость:</b> 11,2 км/с</li>
                      <li><b>Спутники:</b> Луна, Международная космическая станция, Хаббл, Мир и т.д.</li>
                      <li><b>Орбитальная скорость:</b> 29,8 км/c</li>
                      <li><b>Население:</b> 8 028 504 258 чел. (19 апреля 2023 г.)</li>
                    </ul>
                    <a href="https://ru.wikipedia.org/wiki/Земля"><button type="button" class="btn w-100 btn-lg btn-outline-primary mb-1" href="#">Подробнее</button></a>

                    <?php elseif ($i == 2): ?>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><b>Масса:</b> 1.9×10²⁷ кг</li>
                      <li><b>Средняя температура:</b> -108 °C</li>
                      <li><b>Вторая космическая скорость:</b> 59,5 км/с</li>
                      <li><b>Спутники:</b> Ганимед, Ио, Европа, Каллисто, Кольца Юпитера, Амальтея, D/1993 F2, Фива, S/2003 J 2, Фемисто</li>
                      <li><b>Орбитальная скорость:</b> 13,1 км/c</li>
                    </ul>
                    <a href="https://ru.wikipedia.org/wiki/Юпитер"><button type="button" class="btn w-100 btn-lg btn-outline-primary mb-1">Подробнее</button></a>

                    <?php elseif ($i == 3): ?>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><b>Масса:</b> 5.68×10²⁶ кг</li>
                      <li><b>Средняя температура:</b> -139 °C</li>
                      <li><b>Вторая космическая скорость:</b> 35,5 км/с</li>
                      <li><b>Спутники:</b> Титан, Кольца Сатурна, Энцелад, Мимас, S/2004 S 20, Япет, Рея, Тефия, Пандора, Диона</li>
                      <li><b>Орбитальная скорость:</b> 9,68 км/c</li>
                    </ul>
                    <a href="https://ru.wikipedia.org/wiki/Сатурн"><button type="button" class="btn w-100 btn-lg btn-outline-primary mb-1">Подробнее</button></a>

                    <?php elseif ($i == 4): ?>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><b>Масса:</b> 8.68×10²⁵ кг</li>
                      <li><b>Средняя температура:</b> -197 °C</li>
                      <li><b>Вторая космическая скорость:</b> 21,3 км/с</li>
                      <li><b>Спутники:</b> Титания, Оберон, Миранда, Ариэль, Умбриэль, Пердита, Маб, Пак, Крессида, Офелия</li>
                      <li><b>Орбитальная скорость:</b> 6,8 км/c</li>
                      <li><b>Дата открытия:</b> 13 марта 1781 г.</li>
                    </ul>
                    <a href="https://ru.wikipedia.org/wiki/Уран_(планета)"><button type="button" class="btn w-100 btn-lg btn-outline-primary mb-1">Подробнее</button></a>

                    <?php endif; ?>
                </div>
              </div>
          <?php endfor; ?>
        </div>  
    </div>
    <!-- Футер -->
    <?php require "templates/footer.php" ?>
  </body>
</html>

