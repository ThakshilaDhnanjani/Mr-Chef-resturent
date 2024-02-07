<?php
  session_start();
  require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturent</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

</head>
<body bgcolor="black">
    

    <div>

    <header>
        <a href="#home" class="logo"><img src="logo2.png" width="75px" height="75px">Mr.Chef</a>

        <nav class="navbar">
            <a href="home_next.php" class="active">home</a>
            <a href="home_next.php#about">about</a>
            <a href="menu.php">menu</a>
            <a href="home_next.php#review">review</a>
            <a href="cat.php">order</a>
            
        </nav>

        <div class="icons">

            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="cat.php" class="fas fa-shopping-cart"></a>
        </div>
            <button class="btn"><a href="login.php" >logout</a>
       
    </header>

    <!--  search form  -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here...." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>


    <!--   home section start    -->
    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">

                    <div class="content" style="color: rgb(218, 131, 60);">
                        <span>our special dish</span>
                        <h3 style="color: aliceblue;">spicy noodles</h3>
                        <p>These spicy noodles are loaded with chili-garlic flavor, quickly stir fried in a vibrant, fiery Asian style sauce</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <br>
                        <br>
                        <img src="https://images5.alphacoders.com/132/1322094.png" alt="">
                    </div>

                </div>

                
                <div class="swiper-slide slide">

                    <div class="content" style="color: rgb(218, 131, 60);">
                        <span>our special dish</span>
                        <h3 style="color: aliceblue;">fried chicken</h3>
                        <p>buttermilk and seasoned flour is the secret to this perfectly moist, crunchy Fried Chicken</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://freepngimg.com/convert-png/110838-chicken-fried-wings-free-clipart-hd" alt="">
                    </div>

                </div>
                

                <div class="swiper-slide slide">

                    <div class="content" style="color: rgb(218, 131, 60);">
                        <span>our special dish</span>
                        <h3 style="color: aliceblue;">Sushi</h3>
                        <p>Eat and taste</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://c4.wallpaperflare.com/wallpaper/70/192/37/greens-fish-figure-black-background-wallpaper-preview.jpg" alt="">
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <div class="content" style="color: rgb(218, 131, 60);">
                        <span>our special dish</span>
                        <h3 style="color: aliceblue;">Cheese pizza</h3>
                        <p>Hot & Spicy Chicken. Spicy chunks of chicken, capsicums & onions with a double layer of cheese.</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://i0.wp.com/pizzacorner.co/wp-content/uploads/2021/12/pizzeria-template-header-pizza-img.png?resize=475%2C457&ssl=1" alt="">
                    </div>

                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>


    <!--  location section -->
<section class="location" id="location">
    <class="main">
        
     <h1 class="heading">view</h1>
    

     <div class="box-container">

         <div class="box">
            
             <img src="https://image.lexica.art/full_jpg/97b57cc4-26cc-4f69-842b-e74e751fe417" alt="">
             
             
         </div>

         <div class="box">
             <img src="https://sitecore-cd-imgr.shangri-la.com/MediaFiles/4/9/2/%7B49253009-15ED-4088-9418-0B771FF20C4A%7D203009_SLM_hmpgbg_Lobby%20Lounge.jpg?width=750&height=752&mode=crop&quality=100&scale=both">
             
            
         </div>

         <div class="box">
             <img src="https://sitecore-cd-imgr.shangri-la.com/MediaFiles/1/8/3/%7B1834FEC9-2CAC-4F6E-93B7-22D8B709F64E%7D3b6988052ae84ccaacfa1e81cf5a017d.jpg?width=750&height=752&mode=crop&quality=100&scale=both" >
            
            
         </div>

         <div class="box">
             <img src="https://bmkltsly13vb.compat.objectstorage.ap-mumbai-1.oraclecloud.com/cdn.ft.lk/assets/uploads/image_d6728b05d2.jpg">
           
          
          </div>
     </div>
    </section>

    



    
    <!--  aboutus section -->

    
    <section class="about" id="about" >
        

        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us?</h1>

        <div class="row">

            <div class="image">
                <img src="img2.png" alt="">
            </div>

            <div class="content">
                <h2  style="color: yellow; size: 10px;" class="heading">best food in the country</h2>
                <p> Indulge in a culinary odyssey at our restaurant, 
                    showcasing the best foods the country has to offer. 
                    Our menu is a vibrant mosaic of flavors, capturing the essence of regional cuisine. 
                    From the heartiness of classic Burgers and the zest of Tacos to the refreshing notes of Avocado Toast and the exotic allure of Sushi Burritos, our diverse offerings cater to every palate. Immerse yourself in a symphony of taste that harmonizes traditional favorites with innovative creations.
                </p>
                <p>
                    We take pride in curating a dining experience that transcends the ordinary, inviting you to savor the culinary treasures that define the rich tapestry of our nation's gastronomy</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>
        

    </section>



<!--  chef section -->
<section class="location" id="location">
    <class="main">
        
     <h1 class="heading">our chefs</h1>
    

     <div class="box-container">

         <div class="box">
            
             <img src="https://indonesiaexpat.id/wp-content/uploads/2023/06/001-Chef-Ashok-Bandaru.jpg" alt="">
             <h3>Ashok bandaru</h3>
             
         </div>

         <div class="box">
             <img src="https://www.hotelierindia.com/cloud/2023/04/19/Chef-Nishesh-Seth-Executive-Chef-at-Shang-Palace-Shangri-La-Bengaluru-edited.jpg">
             <h3>Nishesh seth</h3>
            
         </div>

         <div class="box">
             <img src="https://media.licdn.com/dms/image/C4E03AQFEm7sV_FKsVA/profile-displayphoto-shrink_800_800/0/1632318394098?e=2147483647&v=beta&t=NXIBMHkBdIaASdUmIFsRhOfujPlCL6HuVtKJC5wFzys">
             <h3>Gihan Ekanayake</h3>
            
         </div>

         <div class="box">
             <img src="https://media.licdn.com/dms/image/C5103AQF6XAw7RpgPcA/profile-displayphoto-shrink_800_800/0/1553241652153?e=2147483647&v=beta&t=a8vL1lLR7kKv7kb9C9b2STrbthnUgvwN0KxU_uzd9e0" alt="special">
             <h3>Thiran saranga</h3>
          
          </div>
     </div>
    </section>

    

       <!--  review section -->
    <section class="review" id="review">

        <h3 class="sub-heading">customer's review</h3>
        <h1 class="heading">what they say</h1>

        <div class="swiper review-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?size=626&ext=jpg&ga=GA1.1.1337584067.1684815511&semt=sph" alt="">
                        <div class="user-info">
                            <h3>jecob shen</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>The ambience and the environment was really calming and the staff ( especially Charindu and Shashika) were extremely helpful and nice. The customer service is excellent and so is the food.
                        The dumplings were yummy and the rice was mouthwatering and delicious. I had a wonderful experience.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://img.freepik.com/free-photo/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer_273609-16320.jpg?size=626&ext=jpg&ga=GA1.1.1337584067.1684815511&semt=sph" alt="">
                        <div class="user-info">
                            <h3>Anthonio mathiw</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Sumptuous food, and mostly, really excellent service. Thank you to Ruwan and the team for a relaxing evening</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://img.freepik.com/free-photo/indoor-picture-cheerful-handsome-young-man-having-folded-hands-looking-directly-smiling-sincerely-wearing-casual-clothes_176532-10257.jpg?size=626&ext=jpg&ga=GA1.1.1337584067.1684815511&semt=sph" alt="">
                        <div class="user-info">
                            <h3>Edrian mecaw</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>The food and service at resto Palace were excellent. Hansaka served us our meal and was extremely accommodating given that I wanted something small arranged for a birthday. The staff were friendly, courteous, and very respectful. Highly recommended to anyone who wants great service ambience and a meal!
                        </p>
                </div>

                
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://img.freepik.com/free-photo/portrait-handsome-young-man-with-crossed-arms_176420-15567.jpg?size=626&ext=jpg&ga=GA1.1.1337584067.1684815511&semt=sph" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Me and my family had an amazing dinner at the resto Palace. Our host, Hansaka was super attentive and recommended their signature dishes to us.</p>
                </div>

                
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="https://img.freepik.com/free-photo/pretty-self-confident-female-model-with-afro-hair-keeps-hand-raised-smiles-gently-looks-directly-listens-attentively-interlocutor-wears-stylish-velvet-jacket_273609-46286.jpg?size=626&ext=jpg&ga=GA1.1.1337584067.1684815511&semt=sph" alt="">
                        <div class="user-info">
                            <h3>Anna sherroff</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Amazing service from charindu and amila. Very kind and friendly staff. Was treated very well when I was with my family. Thank you.</p>
                </div>


            </div>
        </div>

    </section>
    <div class="bottom_up">


     <!--  feedback section -->
    <section class="rate" id="rate" >order
     

        <h2  style="color: yellow; size: 10px;" class="heading">Feedback</h2>
        <h1 class="heading" style="color: rgb(174, 248, 95);">Rate us</h1>

        <form class="form" action="post">
            

            <div class="inputBox">
                <div class="input">
                    <span style="color:white">your name</span>
                    <input type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span style="color:white">your number</span>
                    <input type="number" placeholder="enter your number">
                </div>
          
          </div>
            <div class="inputBox">
                <div class="input">
                    <span style="color:white">your address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span style="color:white">your message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <button type="submit" value="submit" class="btn"><span style="color: rgb(76, 41, 204);" >submit</span></button>
              
        </form>
    </div>
    </section>


    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="https://maps.app.goo.gl/9meafYEJSz3wDTLq7">srilanaka</a>
                <a href="https://maps.app.goo.gl/ZVYJmJM9gURqAzGL8">japan</a>
                <a href="https://maps.app.goo.gl/tMW6zRc8MYnxb9nE8">russia</a>
                <a href="https://maps.app.goo.gl/deJKgE31bRMZcaUH8">USA</a>
                <a href="https://maps.app.goo.gl/VVRCJ363WRpQyzhm7">france</a>
            </div>

            <div class="box">
                    <h3>quick links</h3>
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="menu.php">menu</a>
                    <a href="#review">review</a>
                    <a href="order.php">order</a>
            </div>

            <div class="box">
                    <h3>contact info</h3>
                    <a href="#">+123-456-7890</a>
                    <a href="#">+111-222-3333</a>
                    <a href="#">resto@gmail.com</a>
                    <a href="#">restofood@gmail.com</a>
                    <a href="#">colombo, srilanka - 400104</a>
            </div>

            <div class="box">
                    <h3>follow us</h3>
                    <a href="https://www.facebook.com/arcadiacolombo/">facebook</a>
                    <a href="https://twitter.com/arcadia?lang=en">twitter</a>
                    <a href="https://www.instagram.com/arcadiacolombo/reels/">instagram</a>
                    <a href="https://www.linkedin.com/company/arcadiahq">linkedin</a>
            </div>

        </div>


    </section>



    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="home.js"></script>


</body>
</html>