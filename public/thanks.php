<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page merci</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
       { $errors[] = "Le prénom est obligatoire";}
    if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '') 
    { $errors[] = "Le nom est obligatoire";}
    if(!isset($_POST['mail']) || trim($_POST['mail']) === '') 
    { $errors[] = "L adresse mail est obligatoire";}
    else{
      if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) 
      { $errors[] = "L'email n'est pas valable.";}

    }
    if(!isset($_POST['phone']) || trim($_POST['phone']) === '') 
    { $errors[] = "Le numero de telephone est obligatoire";}
    if(!isset($_POST['subject']) || trim($_POST['subject']) === '') 
    { $errors[] = "Le sujet de la demande est obligatoire";}
    if(!isset($_POST['msg']) || trim($_POST['msg']) === '') 
    { $errors[] = "Le message est obligatoire";}}

  if (count($errors) > 0) : ?>
    <div class="border border-danger rounded p-3 m-5 bg-danger">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>


<?php if(empty($errors)) { ?>
<p id="msg">
    Merci <?php echo $_POST['firstname']; ?> <?php echo $_POST['lastname']; ?> de nous avoir contacté à propos
    de “<?php echo $_POST['subject']; ?>”.<br>
    Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['mail']; ?> ou par téléphone
    au <?php echo $_POST['phone']; ?> dans les plus brefs délais pour traiter votre demande :<br>
    <?php echo $_POST['msg']; ?>
</p>
<?php } ?>
</body>
</html>