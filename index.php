<?php

//echo "<h1>Criando uma senha criptografada!</h1>";

//echo password_hash("MinhaSenha",PASSWORD_DEFAULT);

session_start();

//Atualizado em 30/06/2026

//Atualizado em 30/06/2026 às 19:06

?>

<!doctype html>
<html>
    <head>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center mt-5">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="text-center">
                            Login Bebidas
                        </h2>
                        <form action="login.php" method="POST">
                            <input class="form-control mt-2" type="email" name="email">
                            <input class="form-control mt-2" type="password" name="senha">
                            <button class="btn btn-primary mt-2">Login</button>
                        </form>
                        <?php
                            if(isset($_SESSION['erro'])){
                                echo "<div class='badge text-bg-danger text-wrap'>" . $_SESSION['erro'] . "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="text-center">
                            Login Medicamentos
                        </h2>
                        <form action="loginMedicamentos.php" method="POST">
                            <input class="form-control mt-2" type="email" name="email">
                            <input class="form-control mt-2" type="password" name="senha">
                            <button class="btn btn-primary mt-2">Login</button>
                        </form>
                        <?php
                            if(isset($_SESSION['erro'])){
                                echo "<div class='badge text-bg-danger text-wrap'>" . $_SESSION['erro'] . "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>