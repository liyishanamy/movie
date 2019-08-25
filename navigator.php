

<!DOCTYPE html>
<html>
<body>
<div class="body"></div>
<nav class="columnInnerContainer">
    <a href="BlackPanther.php">blackpanther</a>|
    <a href="EarlyMan.php">early man</a>|
    <a href="./Annihilation.php">Annihilation</a>|
    <p><?php  if(isset($_SESSION['message'])){
        print_r($_SESSION['message']); }
        ?>

        </p>
</nav>

</body>
</html>
