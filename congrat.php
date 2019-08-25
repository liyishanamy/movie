<!DOCTYPE html>
<!DOCTYPE html>
<?php include_once "./helper.php"; ?>
<html>
<body>

<section>

    <p>
        <?php
        $name = $_POST['firstname'];
        echo 'YOU HAVE SUBMITTED THE APPLICATION!!! ' . $name . '!';
        ?>
    </p>

    <?php foreach($_REQUEST as $formName  => $formValue): ?>
        <p><?php echo $formName;?> : <?php echo prepareFormData($formValue); ?></p>
    <?php endforeach ?>

</section>

</body>
</html>

