<?php $render('header'); ?>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh">

    <form method="POST" action="<?=$base.'/cadastroAction'?>" class="form-group" style="width: 100%;max-width: 400px">
        <h2 class="text-center">Cadastro com MVC</h2>
        <hr>

        <fieldset class="mt-2">
            <input type="text" name="usuario" class="form-control" placeholder="Usuário">
        </fieldset>

        <fieldset class="mt-2">
            <input type="email" name="email" class="form-control" placeholder="E-mail">
        </fieldset>

        <fieldset class="mt-2">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
        </fieldset>

        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>

    </form>
</div>

<?php $render('footer'); ?>
