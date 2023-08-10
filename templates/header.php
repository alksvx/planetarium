<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a href="/index.php"><img src="img/logo.png" alt="logo" class="logo" width="50"></a>
    <a class="link-ease-in-out text-dark" href="/index.php"><h5 class="my-0 mr-md-auto font-weight-normal">Планетарий</h5></a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark link-body-emphasis text-decoration-none" href="/index.php">Главная</a>
        <a class="me-3 py-2 text-dark link-body-emphasis text-decoration-none" href="/about.php">Контакты</a>
    </nav>
    <?php
        if($_COOKIE['user'] == 'true'):       
    ?>
    <a class="btn btn-outline-primary" href="/auth.php">Выйти</a>
    <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
    <?php endif; ?>
    </div>