<?php
$search = filter_input(INPUT_GET, "search");

function getPosts($s = null){
    $ch = null;
    
    if($s){
        $ch = curl_init("https://jsonplaceholder.typicode.com/posts/$s");
    }else{
        $ch = curl_init("https://jsonplaceholder.typicode.com/posts");
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if(curl_errno($ch)){
        echo 'Erro'. curl_error($ch);
        return;
    }

    return json_decode($response, true);

}

$data = getPosts($search);

if (!isset($data[0]) && is_array($data)) {
    $data = [$data];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
    
    <style>
        body{
            margin-bottom: 40px;
        }
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .search {
            width: 300px;
            padding: 5px;
        }
        .button{
            background-color: blue;
            color: white;
            padding: 5px;
            font-size: .750rem;
            cursor: pointer;
        }
        .card{
            width: 400px;
            height: 200px;
            border: solid 2px  blueviolet;
            display: grid;
            padding: 20px;
            
    
        }
        .card-container{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 20px;
            justify-items: center;
            margin-top: 40px;
        }

        ul{
            list-style: none;
        }
    </style>
</head>
<body>
    <form class="container" action="index.php" method="GET">
        <input class="search" type="text" placeholder="Search post by ID" name="search"></input>
        <input class="button" type="submit" value="Pesquisar">
    </form>
    <div>
        <div class="card-container">

            <?php if(!empty($data) && isset($data[0]['title'])):?>
                <?php foreach($data as $d):?>
                <ul class="card">
                    <li><strong>ID:</strong> <?= htmlspecialchars($d["id"]) ?></li>
                    <li><strong>TITLE:</strong> <?= htmlspecialchars($d["title"]) ?></li>
                    <li><strong>BODY:</strong> <?= htmlspecialchars($d["body"]) ?></li>
                </ul>
            <?php endforeach; ?>
                <?php else: ?>
                <p>Lista vazia</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>