<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ! FONTAWESOME -->

        <link rel="icon" href="ico/favicon.ico" type="image/x-icon">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous'/>

        <!-- ! FONTS -->
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
        <!-- ! BOOTSTRAP -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        <!-- ! CSS -->

        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/style.css">

        <!-- ! VUE JS -->

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- ! AXIOS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <title> PHP Dischi JSON </title>
       
    </head>

    <body>
       
        <!-- ! Main Start -->
        <main>

            <div id="app" class="container mt-4" >

                <h1 class="text-center mb-4">
                    My Favourite Jazz Masterpiece Albums
                </h1>

                <div class="row">

                    <div class="col-md-4 mb-4" v-for="disc in discs" :key="disc.id">

                        <div class="card h-100 shadow">

                            <img :src="disc.cover" alt="album_cover" class="card-img-top p-2 mx-auto">

                            <div class="card-body">

                                <h3 class="card-title">
                                    {{ disc.title }}
                                </h3>

                                <h5 class="card-text">
                                    Artista: {{ disc.artist }} 
                                </h5>
                                
                                <p class="card-text">
                                    Anno: {{ disc.year }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                
            </div>
                                    
        </main>

        <!-- ! Java Script -->
        <script type="text/javascript" src="./assets/app.js"></script>

        <!-- ! Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>

</html>