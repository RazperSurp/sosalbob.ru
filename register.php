<?php
    $title = 'ты еблан?';
    $optFiles = [
        'css' => ['register.css'],
        'js' => ['register.js']
    ];

    require 'assets/layout/header.php';
?>

<form id="register">
    <div class="form-input">
        <label> фамилия </label>
        <input type="text" name="lastname" placeholder="Фамилия . . .">
    </div>
    <div class="form-input">
        <label> имя </label>
        <input type="text" name="firstname" placeholder="Имя . . .">
    </div>
    <div class="form-input">
        <label> отчество </label>
        <input type="text" name="middlename" placeholder="Отчество . . .">
    </div>
    <div class="form-input">
        <label> Логин </label>
        <input type="text" name="username" placeholder="Логин . . .">
    </div>
    <div class="form-input">
        <label> Пароль </label>
        <input type="password" name="password" placeholder="Пароль . . .">
    </div>
    <div class="form-input">
        <label> Дата рождения </label>
        <input type="date" name="birthdate" placeholder="дд.мм.гггг . . .">
    </div>
    <div class="form-input text-right">
        <button type="submit"> я еблан </button>
    </div>
</form>

<?php require 'assets/layout/footer.php'; ?>