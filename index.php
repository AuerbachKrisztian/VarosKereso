<!DOCTYPE html>
<style>
    main{
   width: 900px;
    margin: auto;
  width: 50%;

  padding: 10px;
   
}
    body{
    margin: auto;
 display: grid;
 background-color:  cadetblue;
}
    form {
        text-align: center;
        border: black 1px solid;
        
    
    }
    footer{
        text-align: center;
    }
    
    

</style>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="script.js" type="text/javascript"></script>
        <title>Auerbach Krisztián</title>
    </head>
    <body>
        <header>
        <h1>Város kereső</h1>
        </header>
        <article>
        <form>
            <label for="beviteli">A város neve</label>
            <input type="text" id="beviteli" name="beviteliMezo">   

        </form>
            <div id="terulet"></div>
        <?php
        require_once 'kapcsolat.php';
        include 'tablazatba.php';
        $varos = $_GET['beviteli'];   // Nem értem itt a problémát.

        $sql = "nev LIKE '$varos%' OR nev LIKE '%$varos' OR nev LIKE '%$varos%'";

        $eredmeny = mysqli_query($kapcsolat, $sql); 

        $varosok = array();

        if ($eredmeny > 0) {
            while ($sor = mysqli_fetch_assoc($eredmeny)) {
                array_push($varosok, $sor);
            }
            echo json_encode($varosok);
        }
        ?>
            </article>
        <footer>Auerbach Krisztián</footer>
    </body>
</html>
