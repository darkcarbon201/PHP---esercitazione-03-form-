<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        th{
            background-color: lightblue;
            width: 300px;
            text-align: left;
        }

        td{
            text-align: left;
            vertical-align: top;    
        }

        .accessori{
            width: 400px;
        }


    </style>

<?php 

$marca = $_GET["marca"];
$modello = $_GET["modello"];
$stato = $_GET["stato"];
$anno = $_GET["anno"];
$cilindrata = $_GET["cilindrata"];
$cavalli = $_GET["cavalli"];
$prezzo = $_GET["costo"];
$targa = $_GET["targa"];
$descrizione = $_GET["descrizione"];


#parte accessori

$aria = "No";
$vernice = "No";
$tetto = "No";
$radio = "No";

if (isset($_GET["ariaCondizionata"])){
    $aria = "si";
};

if (isset($_GET["verniceMetalizzata"])){
    $vernice = "si";
};

if (isset($_GET["tettoInCristallo"])){
    $tetto = "si";
};

if (isset($_GET["impiantoRadio"])){
    $radio = "si";
};


#creazione tabella

echo "<h1>Tabella finale</h1>";

echo "<table border='1'>";
echo    "<tr>";
echo        "<th>";
echo            "Marca";
echo        "</th>";
echo        "<th>";
echo            "Modello";
echo        "</th>";
echo        "<th>";
echo            "Stato";
echo        "</th>";
echo        "<th>";
echo            "Anno di costruzione";
echo        "</th>";
echo        "<th>";
echo            "Cilindrata";
echo        "</th>";
echo        "<th>";
echo            "Cavalli";
echo        "</th>";
echo        "<th>";
echo            "Prezzo";
echo        "</th>";
echo        "<th>";
echo            "Targa";
echo        "</th>";
echo        "<th>";
echo            "Accessori";
echo        "</th>";
echo        "<th>";
echo            "Descrizione Aggiuntiva";
echo        "</th>";
echo    "</tr>";

echo    "<tr>";
echo        "<td>";
echo            $marca;
echo        "</td>";
echo        "<td>";
echo            $modello;
echo        "</td>";
echo        "<td>";
echo            $stato;
echo        "</td>";
echo        "<td>";
echo            $anno;
echo        "</td>";
echo        "<td>";
echo            $cilindrata;
echo        "</td>";
echo        "<td>";
echo            $cavalli;
echo        "</td>";
echo        "<td>";
echo            $prezzo;
echo        "</td>";
echo        "<td>";
echo            $targa;
echo        "</td>";
echo        "<td class='accessori'>";
echo            "Aria condizionata: " . $aria . "<br>";
echo            "Vernice metallizzata: " . $vernice . "<br>";
echo            "Tetto in cristallo: " . $tetto . "<br>";
echo            "Impianto radio-CD: " . $radio;
echo        "</td>";
echo        "<td class='descrizione'>";
echo            $descrizione;
echo        "</td>";
echo    "</tr>";


echo "</table>";

echo "<a href='index.html'>torna alla pagina iniziale</a>";


?>
    
</body>
</html>