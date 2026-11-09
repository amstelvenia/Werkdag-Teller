<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boekenbeoordeling</title>
    <link href="css/style.css?v=1.0" rel="stylesheet">
</head>
<body>
<div class="alles">
    <div class="titlediv">
    <header>
        <h1 class="titel">boekenbeoordeling</h1>
        <form action="index.php" method="post"><input type="submit" name="prank" value="blauw gekleurde tekst kun je op klikken om te sorteren" class="order tip"></form>
    </header>
    </div>
        <a href="create.php" style="text-decoration: none;" class="hover create"><b>Boek Toevoegen</b></a>
        <br></br>
                <table>
                    <tr class="lijst">
                        <th class="rijen left">Rank</th>
                        <th class="rijen">naam</th>
                        <th class="rijen"><form action="index.php" method="post"><input type="submit" name="Score" value="Score" class="order"></form></th>
                        <th class="rijen">type</th>
                        <th class="rijen"><form action="index.php" method="post"><input type="submit" name="Interresantheid" value="Interresantheid" class="order"></form></th>
                        <th class="rijen"><form action="index.php" method="post"><input type="submit" name="Duidelijkheid" value="Duidelijkheid" class="order"></form></th>
                        <th class="rijen"><form action="index.php" method="post"><input type="submit" name="Pagina" value="Pagina's" class="order"></form></th>
                        <th class="rijen">Gelezen Voor</th>
                        <th class="rijen">Waar Vandaan</th>
                        <th class="rijen">taal</th>
                        <th class="rijen">literatuur</th>
                        <th class="rijen"><form action="index.php" method="post"><input type="submit" name="Jaar" value="Jaar" class="order"></form></th>
                        <th class="rijen">hoeveel ervan gelezen</th>
                        <th class="rijen">bijzonderheden</th>
                        <th class="rijen">afkrakingen</th>
                        <th class="rijen">sector</th>
                        <th class="rijen">voldoende of onvoldoende</th>
                        <th class="rijen"></th>
                        <th class="rijen right"></th>

                        <?php include 'database-connectie-Billy.php'; 
                        $selectBoek = "SELECT * FROM boeken ORDER BY score DESC";
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST['Score'])){
                                $selectBoek = "SELECT * FROM boeken ORDER BY score DESC";
                            }elseif(isset($_POST['Interresantheid'])){
                                $selectBoek = "SELECT * FROM boeken ORDER BY interresantheid DESC";
                            }elseif(isset($_POST['Duidelijkheid'])){
                                $selectBoek = "SELECT * FROM boeken ORDER BY duidelijkheid DESC";
                            }
                            elseif(isset($_POST['Pagina'])){
                                $selectBoek = "SELECT * FROM boeken ORDER BY pagina DESC";
                            }
                            elseif(isset($_POST['Jaar'])){
                                $selectBoek = "SELECT * FROM boeken ORDER BY jaar DESC";
                            }elseif(isset($_POST['prank'])){
                                echo "<script type='text/javascript'>alert('Nee, niet deze natuurlijk KEKW');</script>";
                            }
                            else{
                                $selectBoek = "SELECT * FROM boeken ORDER BY score DESC";
                            }}

                        $geselecteerdeBoek = $conn->query($selectBoek);
                        $rang = 1;

                        foreach ($geselecteerdeBoek as $Boek) {
                            echo "<tr class='data'>";
                            echo "<td class='Select'>" . $rang . "</td>";
                            echo "<td class='Select'>" . $Boek['naam'] . "</td>";
                            echo "<td class='Select'>" . $Boek['score'] . "</td>";
                            echo "<td class='Select'>" . $Boek['type'] . "</td>";
                            echo "<td class='Select'>" . $Boek['interresantheid'] . "</td>";
                            echo "<td class='Select'>" . $Boek['duidelijkheid'] . "</td>";
                            echo "<td class='Select'>" . $Boek['pagina'] . "</td>";
                            echo "<td class='Select'>" . $Boek['voor_wat_gelezen'] . "</td>";
                            echo "<td class='Select'>" . $Boek['waar_vandaan'] . "</td>";
                            echo "<td class='Select'>" . $Boek['taal'] . "</td>";
                            echo "<td class='Select'>" . $Boek['literatuur'] . "</td>";
                            echo "<td class='Select'>" . $Boek['jaar'] . "</td>";
                            echo "<td class='Select'>" . $Boek['hoeveel_gelezen'] . "</td>";
                            echo "<td class='Select'>" . $Boek['bijzonderheden'] . "</td>";
                            echo "<td class='Select'>" . $Boek['afkrakingen'] . "</td>";
                            echo "<td class='Select'>" . $Boek['sector'] . "</td>";
                            echo "<td class='Select'>" . $Boek['voldoende_onvoldoende'] . "</td>";
                            
                            $verwijder = "waarschuwing.php?id=" . $Boek['id'];
                            $update = "edit.php?id=" . $Boek['id'] . "&naam=" . $Boek['naam'] . "&interresantheid=" . $Boek['interresantheid'] . "&type=" . 
                            $Boek['type'] . "&duidelijkheid=" . $Boek['duidelijkheid'] . "&pagina=" . $Boek['pagina'] . 
                            "&voor_wat_gelezen=" . $Boek['voor_wat_gelezen'] . "&waar_vandaan=" . $Boek['waar_vandaan'] . "&taal=" . 
                            $Boek['taal'] . "&literatuur=" . $Boek['literatuur'] . "&jaar=" . $Boek['jaar'] . "&hoeveel_gelezen=" . $Boek['hoeveel_gelezen'] . "&bijzonderheden=" . 
                            $Boek['bijzonderheden'] . "&afkrakingen=" . $Boek['afkrakingen'] . "&sector=" . $Boek['sector'] . "&voldoende_onvoldoende=" . $Boek['voldoende_onvoldoende'];

                            echo '<td class="Select"><a class="hover verwijder" style="text-decoration: none;" href="' . $verwijder . '">verwijderen</a></td>';
                            echo '<td class="Select"><a class="hover update" style="text-decoration: none;" href="' . $update . '">update</a></td>';
                            $rang++;
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>