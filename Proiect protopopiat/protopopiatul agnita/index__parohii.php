
<?php
include 'header.php';
?>

<div id="Content ">
    <?php
        switch($_GET['parohii'])
    {
        case 'Parohia Agnita I':
            include 'agnita__.php';//file path of your home page
            break;
        case 'Parohia Agnita II':
            include 'agnita__II.php';
            break;


    }
    ?>
</div>

<?php
include 'footer.php'
?>
