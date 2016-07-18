<?php $title ="Inscription"; ?>
<?php include('partials/_header.php'); ?>

<div id="main-content">
    <div class="container">
    <h1>Deviens membre dès à présent ;)</h1>

        <?php
            if (isset($errors) && count($errors) != 0){
                echo '<div class="bg-danger">';
                    foreach($errors as $error){
                        echo $error.'<br/>';
                    }
                echo '</div>';
            }
        ?>

        <form method="post" class="well col-md-6" autocomplete="off">

            <!-- Name Field -->
            <div class="form-group">
                <label class="control-label" for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" required="required"/>
            </div>

            <!-- Pseudo Field -->
            <div class="form-group">
                <label class="control-label" for="pseudo">Pseudo:</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" required="required"/>
            </div>

            <!-- Email Field -->
            <div class="form-group">
                <label class="control-label" for="email">Adresse Email:</label>
                <input type="text" class="form-control" id="email" name="email" required="required"/>
            </div>

            <!-- Password Field -->
            <div class="form-group">
                <label class="control-label" for="password">Mot de passe:</label>
                <input type="text" class="form-control" id="password" name="password" required="required"/>
            </div>

            <!-- Password Confirmation Field -->
            <div class="form-group">
                <label class="control-label" for="password_confirm">Confirmer votre mot de passe:</label>
                <input type="text" class="form-control" id="password_confirm" name="password_confirm" required="required"/>
            </div>

            <input type="submit" class="btn btn-primary" value="Inscription" name="register"/>
        </form>
    </div><!-- /.container -->
</div>



<?php include ('partials/_footer.php'); ?>

