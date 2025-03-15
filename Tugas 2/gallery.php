<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: #28a745;
            color: white;
            padding: 10px;
            display: flex;
            gap: 30px;
        }
        nav a {
            text-decoration: none;
            color: white;
        }
        nav a :hover {
            color: bisque;
        }
        .Content {
            background-color: whitesmoke;
            box-shadow: 0 0 3px black;
            padding: 15px;
            min-height: 100px;
        }
        
        button{
            width: 100%;
            background-color: #ccc;
            padding: 10px;
            border-radius: 10px; 
        }
        
        footer{
            text-align: center;
            padding: 20px;
            background-color: black;
            color: #fff;
            margin-top: 10px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
    
        }
        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(255, 0, 0); 
        }
        </style>
<body> 
    <nav>
        <?php require_once "inc/navbar.php"; ?>
    </nav>
    <header>
        <h1>Gallery Kami</h1>
    <p>
        <small>Foto Bersama Kami</small>
    </p>
    </header>
    
    <hr />
    <div class="Content">
        <div class="gallery">
            <img src="./img/pantai nusa dua.jpg" alt="gambar1" style="width: 200px; height: 150px;"> 
            <img src="./img/pantai kuta.jpg" alt="gambar2">
            <img src="./img/pantai lombok.jpg" alt="gambar3">
            <img src="./img/pantai pasir putih.jpg" alt="gambar4">
    </div>
    <?php require_once "inc/footer.php"; ?>
</body>
</html> 