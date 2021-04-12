<?php
include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');
$template = [
    'title' => "Eshop: авторизация",
    'page_css' => 'register.css',
    //'page_js' => ['product.js', 'cart.js'],
];
include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>

<div class="wrapper">
    <div class="registration">
        <form action="/handlers/handlerAuth.php?action=auth" method="POST">
            <label for="login">Логин</label>
            <input type="text" class="form-control" name="login" id="login"/>
            <label for="password">Пароль</label>
            <input type="password" class="form-control" name="password" id="password"/>
            <input type="submit" value="Авторизоваться"/>
        </form> 
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', ()=> {
        document.querySelector('.lds-backdrop').classList.add('disabled');
    });
</script>