<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scraping Pokemon Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/poke.png">
    
</head>
<body>
    <?php
        include('simple_html_dom.php');        
        $wiki = "https://pokemondb.net/pokedex/all";
        $html = file_get_html($wiki);
    ?>

    <div class="row">
        <div class="col ndas text-center">
            <img src="img/poke.png" width="50px" class="img-head">
            <h2 class="text-center head mx-auto">Complete Pokémon <br>Pokédex</h2>
        </div>
    </div>
    <div class="container mx-auto">
        <table class="table table-hover ">
        <thead>
            <tr class="text-center">
                <th scope="col" style="width : 15%" >National №</th>
                <th scope="col" style="width : 15%">Gambar</th>
                <th scope="col" style="width : 70%">Nama</th>
            </tr>
        </thead>
        <tbody class="text-center" >
            <?php
                foreach ($html->find('table[id=pokedex] tbody tr') as $tr) {
                    $name=$tr->children(1)->children(0)->innertext;
                    $link='detail.php?name=' . $name;
                    $small=$tr->children(1)->children(2);
                    $natnum=$tr->children(0)->children(1)->innertext;
                    $imgtemp=$tr->children(0)->children(0)->children(0);
                    $imglink=$imgtemp->getAttribute('data-src');

                    if(isset($small)){
                        echo "
                        <tr>
                            <td>$natnum</td>
                            <td> <img class='myImg' src=".$imglink."> </td>
                            <td> <a target='_blank' href='$link'> $name <a> <br> $small </td>
                        </tr> 
                        ";
                    }
                    else{
                        echo "
                        <tr>
                            <td>$natnum</td>
                            <td> <img class='myImg' src=".$imglink." > </td>
                            <td> <a target='_blank' href='$link'> $name <a> </td>
                        </tr>
                        ";
                    }
                }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>