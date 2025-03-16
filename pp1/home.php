<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .navbar{
        display: flex;
       
        align-items: center;
        background-color: #333;
        text-decoration: none;
        gap: 10px;
        text-decoration: none;
        ;

    }
    .navbar h1{
        color: red;
        margin-right: 20%;
    }
    p{
        color: white;
        font-size: 30px;
    }
    .navbar ul{
        list-style-type: none;
        margin-right: 10px;
        font-size: 25px;
        margin-left: 50px;
   
    }
    .navbar ul a{
        text-decoration: none;
        color: white;
    }
  .navbar ul a:hover{
    color: red;
  }
.car img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: gray;
}
  header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em;
    height: 35px;
}

.car-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 1em;
}

.car{
    max-width: 30%;
    margin: 1em;
    padding: 1em;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    cursor: pointer;
    

 
}


.car:hover {
    transform: scale(1.05);
    box-shadow: red;
}

.car img {
    max-width: 50%;
    height: auto;
    border-radius: 5px;
}

.car-info {
    margin-top: 1em;
}

.car h2 {
    color: #333;
    margin-top: 0.5em;
}

.car p {
    color: #666;
    font-size: 0.9em;
    margin-top: 0.5em;
    text-align: right;
    display: flex;
   
}


iframe {
    width: 100%;
    height: 200px;
    border: none;
    border-radius: 8px;
    margin-top: 1em;
}

@media (max-width: 600px) {
    .car {
        max-width: 100%;
    }
}
  

   
    </style>
</head>
<body>
    
    <div class="navbar">
       <p> AUTOSALLONI </p>
        <h1>TAFA</h1>
          
            <ul><a href="#">home</a></ul>
            <ul><a href="#">about</a></ul>
            <ul><a href="#">contact</a></ul>
            <ul><a href="login.php">logout</a></ul>
          
    </div>
  
    <section class="car-list">
        <article class="car">
            <img src="bmwX6.jpg" alt="Car 1">
            <div class="car-info">
                <h2>bmw x6</h2>
                <p>viti : 2022</p>
                   <p> ngjyra : e hint</p>
                    <p>km : 150,000</p>
                   <p> cmimi : 65,000 $</p>
                   <p> importuar nga gjermania
                </p>
                
            </div>
            
                <button>buy it</button>
            </a>
        </article>
    
        <article class="car">
            <img src="mercedesGLC.jpg" alt="Car 2">
            <div class="car-info">
                <h2>mercedes GLC</h2>
                <p>viti :2021 </p>
                    <p> ngjyra : e zeze </p>
                        <p> km :100,000 </p>
                            <p> cmimi : 60,000 $ </p>
                                <p> importuar nga franca </p>
                </p>
                
            </div>
          
                <button>buy it</button>
            </a>
        </article>
    
        <article class="car">
            <img src="audiR8.jpg" alt="Car 3">
            <div class="car-info">
                <h2>audi r8</h2>
                <p>
                    viti 2022</p>
                    <p>ngjyra : e bardhe</p>
                    <p>km :50,000</p>
                    <p> cmimi : 70,000 $</p>
                    <p> importuar nga zvicra
                </p>
               
            </div>
            
                <button>buy it</button>
            </a>
        </article>
    
        <article class="car">
            <img src="Porsche911.jpg" alt="Car 4">
            <div class="car-info">
                <h2>porsche 911</h2>
                <p>viti : 2020</p>
                <p>ngjyra : e zeze</p>
               <p> km : 113,000</p>
               <p> cmimi : 40,000 $</p>
                  <p> importuar nga italia
                </p>
               
            </div>
           
                <button>buy it</button>
            </a>
        </article>
    </section>
   
</body>
</html>
