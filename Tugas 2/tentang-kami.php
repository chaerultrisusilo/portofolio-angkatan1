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
        form {
            text-align: left;
            max-width: 400px;
            margin: auto;
            border: 1px solid black;
            padding: 10px;

        }
        form label {
            font-weight: bold;
        }
        form input, form textarea{
            width: calc(100% - 15px);
            display: block;
            padding: 5px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
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
        ol {
            position: relative;
            

        }
        ol ul p {
            max-width: 40%;
            margin: 20px 0;
        
        }
        .img-list{
            position: absolute;
            right: 0 ;
            bottom: 0;
        }
        </style>
<body> 
    <nav>
        <?php require_once "inc/navbar.php"; ?>
    </nav>
    <header>
        
    </header>
    
    
    <div class="Content">
        <h1>VISI& MISI </h1>
        <ol>
            <ul>
                <h4>VISI</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, dolore!</p>
            </ul>
            <ul>
                <h4>MISI</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quod est facilis quidem iste! Officiis repellat nemo molestiae officia aliquam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quod est facilis quidem iste! Officiis repellat nemo molestiae officia aliquam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quod est facilis quidem iste! Officiis repellat nemo molestiae officia aliquam.</p>
            </ul>
            <div class="img-list">
                <img src="./img/pantai kuta.jpg" alt="" srcset="">
            </div>
        </ol>
        <?php require_once "inc/footer.php"; ?>   
    </div>
    
</body>
</html> 