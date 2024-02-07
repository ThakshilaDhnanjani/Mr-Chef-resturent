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
  <title>Document</title>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        

*{
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background-image:url("https://images.alphacoders.com/102/1020201.jpg");
  background-size: cover;
  background-attachment: fixed;
}

header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
  background-color: #50fb06a2;
}

.nav{
  max-width: 1200px;
  margin: auto;
  width: 100%;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo{
  font-size: 1.1rem;
  font-weight: 500;
  text-decoration: none;
  text-transform: uppercase;
  color:#ffffff;
}

.box{
  color:white;
  width: 30px;
  height: 30px;
  text-align: center;
  position: relative;
}

.cart-count{
  position: absolute;
  background-color: #2f3542;
  top: -5px;
  right: 0;
  padding: 3px;
  height: 20px;
  width: 20px;
  line-height:20px ;
  border-radius: 50%;
  z-index: 99;
}

#cart-icon{
  font-size: 1.5rem;
  cursor: pointer;
  padding-top: 10px;
}

img{
  width: 100%;
}

.container{
  max-width: 1200px;
  padding: 4rem;
  margin: auto;
  width: 100%;
}

h2.title{
  font-size: 1.1rem;
  font-weight: 500;
  margin-bottom: 1.5rem;
  color:#ffffff;
}

.shop-content{
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(220px,auto));
  gap:1.5rem;
  justify-content: center;
  align-content: center;
}

.food-box{
  position: relative;
  background-color: #fff;
  padding: 10px;
  box-shadow: 0 1px 4px rgba(40, 37, 37, 0.1);
  border-radius: 3px;
}

.pic{
  overflow: hidden;
}

.pic:hover img{
transform: scale(1.5);
}

.food-img{
  transition: 0.4s;
  aspect-ratio: 1/1;
  object-fit: cover;
}

.food-title{
  font-size: 1rem;
  font-weight: 600;
  color:#ff6348;
}

.food-price{
  font-weight:500 ;
}

.add-cart{
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #2ed573;
  color:white;
  padding: 10px;
  font-size: 1.1rem;
  cursor: pointer;
  transition: 0.5s;
}

.add-cart:hover{
  background-color:rgba(255, 0, 0, 0.786);
}
  

.cart{
  position: fixed;
  top: 0;
  right: -100%;
  width: 400px;
  height: 100vh;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 20px;
  background-color: white;
  box-shadow: 0 1px 4px rgba(40, 37, 37, 0.1);
  z-index: 100;
}

.cart-active{
  right:0;
  transition: 0.5s;
}

.cart-title{
  text-align: center;
  font-size: 1.5rem;
  font-weight: 500;
  margin-bottom: 1rem;
  padding-bottom:20px ;
  border-bottom: 1px solid rgba(0,0,0,0.1);
}

.cart-box{
  display: grid;
  grid-template-columns: 32% 50% 18%;
  align-items: center;
  gap: 1rem;
  margin-top: 1rem;
  border-bottom: 1px solid rgba(0,0,0,0.1);
  padding-bottom: 10px;
}

.cart-img{
  width: 75px;
  height: 75px;
  object-fit: cover;
  border:2px solid  rgba(0,0,0,0.1);
  padding: 5px;
}
.detail-box{
  display: grid;
  row-gap: 0.5rem;  
}

.price-box{
  display: flex;
    justify-content: space-between; 
}

.cart-food-title{
   font-size: 1rem;
   text-transform: uppercase;
   color:#161515;
   font-weight: 500;
}

.cart-price{
  font-weight: 500;
}

.cart-quantity{
  border:1px solid rgba(178, 22, 22, 0.1);
  outline:none ;
  width: 2.4rem;
  text-align: center;
  font-size: 1rem;
}

.cart-remove{
  font-size: 24px;
  color:red;
  cursor: pointer;
}

.total{
  display: flex;
  justify-content: flex-end;
  margin-top: 1.5rem;
}

.total-title{
  font-size: 1rem;
  font-weight: 600;
}

.total-price{
  margin-left: 0.5rem;
}

.btn-buy{
  padding: 12px 20px;
  text-decoration: none;
  background-color:#10ba70;
  color:#fff;
  border: none;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
}

#cart-close{
  position: absolute;
  top: 1rem;
  right: 0.8rem;
  font-size: 2rem;
  cursor: pointer;
}



    </style>
</head>
<body>
  <header>
    <div class="nav">
      
      <a href="#" class="logo">
        <i class="fas fa-utensils"></i>
        Mr.Chef
      </a>

        <nav class="navbar">
            <a href="home_next.php" class="btn-buy">Home</a>
            
        </nav>

      <div class="box">
        <div class="cart-count">0</div>
        <ion-icon name="cart"  id="cart-icon" ></ion-icon>
      </div>

      <div class="cart">
        <div class="cart-title">Cart Items</div>
        <div class="cart-content">

        </div>
        
      <div class="total">
        <div class="total-title">Total</div>
        <div class="total-price">Rs.0</div>
      </div>

      <a href="delivery.php"><button class="btn-buy">CHECK OUT</button></a>

      <ion-icon name="close" id="cart-close"></ion-icon>

      </div>
    </div>
  </header>
  <div class="container">
    <h2 class="title"> MENUE</h2>
    <div class="shop-content">


      <div class="food-box">
        <div class="pic">
          <img src="https://static.vecteezy.com/system/resources/previews/022/536/469/original/hot-pizza-isolated-png.png" class="food-img">
        </div>
        <h2 class="food-title">Cheese pizza</h2>
        <span class="food-price">Rs.1200</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://img.freepik.com/free-photo/tagliatelle-pasta-with-tomatoes-chicken_2829-18003.jpg?w=900&t=st=1686900245~exp=1686900845~hmac=d3ee98cfe2bf8bf59d7b859006616ec8b57748f285cbad443102a299959f3e7a" class="food-img"></div>
        <h2 class="food-title">Pasta</h2>
        <span class="food-price">Rs.500</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="https://static.vecteezy.com/system/resources/previews/027/735/605/original/avocado-toast-with-egg-and-avocado-on-toast-free-png.png" class="food-img"></div>
        <h2 class="food-title">Avocado Toast</h2>
        <span class="food-price">Rs.150</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="https://png.pngtree.com/png-clipart/20230928/original/pngtree-sushi-on-a-plate-png-image_13163383.png" class="food-img"></div>
        <h2 class="food-title">Sushi Burritos</h2>
        <span class="food-price">Rs.150</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="https://img.freepik.com/premium-photo/concept-healthy-food-with-acai-smoothie-isolated-white-background_185193-100694.jpg" class="food-img"></div>
        <h2 class="food-title">Acai Bowls</h2>
        <span class="food-price">Rs.250</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="https://img.freepik.com/premium-photo/mexican-salad-with-quinoa-bowl-isolated-white_123827-15651.jpg" class="food-img"></div>
        <h2 class="food-title">Quinoa Bowls</h2>
        <span class="food-price">Rs.250</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
  
      <div class="food-box">
        <div class="pic"><img src="https://img.freepik.com/premium-psd/psd-curry-laksa-transparent-background-png_991097-460.jpg" class="food-img"></div>
        <h2 class="food-title">Laksa</h2>
        <span class="food-price">Rs.500</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
  
      <div class="food-box">
        <div class="pic"><img src="https://www.pngall.com/wp-content/uploads/4/Taco-PNG-Image.png" class="food-img"></div>
        <h2 class="food-title">Tacos</h2>
        <span class="food-price">Rs.250</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://www.freepnglogos.com/uploads/burger-png/image-mother-nature-burger-simpsons-restaurants-39.png" class="food-img"></div>
        <h2 class="food-title">Burgers</h2>
        <span class="food-price">Rs.300</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://www.freepnglogos.com/uploads/fries-png/premium-french-fries-photos-7.png" class="food-img"></div>
        <h2 class="food-title">Fries</h2>
        <span class="food-price">Rs.250</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://clipart-library.com/img/1695902.png" class="food-img"></div>
        <h2 class="food-title">Coffee</h2>
        <span class="food-price">Rs.100</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://gtslivingfoods.com/cdn/shop/collections/SYNERGY_Raw_Kombucha_Collection_Image_1.png?v=1679952891" class="food-img"></div>
        <h2 class="food-title">Kombucha</h2>
        <span class="food-price">Rs.150</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://sevenleavestea.com/wp-content/uploads/2022/05/matcha_soft_serve_latte_with_chocolate_crunch-1-1.png" class="food-img"></div>
        <h2 class="food-title">Matcha Lattes</h2>
        <span class="food-price">Rs.250</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://img.freepik.com/premium-photo/mixed-berry-frappe-white-background-isolated_536380-78.jpg" class="food-img"></div>
        <h2 class="food-title">Smoothies</h2>
        <span class="food-price">Rs.300</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://media.istockphoto.com/id/1204021540/photo/healthy-fruits-infused-water-in-a-mason-jar-isolated-on-white-background-copy-space.jpg?s=612x612&w=0&k=20&c=l4jkBUnMLHKy95GEfWSkedmhV4RNpaWrlWHzNS_OnzE=" class="food-img"></div>
        <h2 class="food-title">Fruit Infused Water</h2>
        <span class="food-price">Rs.250</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://www.shutterstock.com/image-photo/coconut-juice-half-sliced-fresh-260nw-2142372291.jpg" class="food-img"></div>
        <h2 class="food-title">Coconut Water</h2>
        <span class="food-price">Rs.150</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://img.freepik.com/premium-photo/glass-cup-hot-ginger-tea-with-ginger-rhizome-sliced-isolated-white-background_252965-22.jpg" class="food-img"></div>
        <h2 class="food-title">Tea</h2>
        <span class="food-price">Rs.100</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://img.freepik.com/premium-photo/carrot-juice-tall-glass-carrots-isolated-white-background_423299-205.jpg?w=360" class="food-img"></div>
        <h2 class="food-title">vegitable Juice</h2>
        <span class="food-price">Rs.250</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://as2.ftcdn.net/v2/jpg/01/75/94/21/1000_F_175942100_oPMN2OoQ57h2XBMdeDRldFLE8npIFJZt.jpg" class="food-img"></div>
        <h2 class="food-title">Sparkling Water</h2>
        <span class="food-price">Rs.150</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="https://pngimg.com/d/milk_PNG12717.png" class="food-img"></div>
        <h2 class="food-title">Milk</h2>
        <span class="food-price">Rs.200</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


        <div class="food-box">
          <div class="pic"><img src="https://www.pngmart.com/files/17/Bubble-Tea-PNG-Clipart.png" class="food-img"></div>
          <h2 class="food-title">Bubble Tea</h2>
          <span class="food-price">Rs.400</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
        </div>


        <div class="food-box">
          <div class="pic"><img src="https://clipart-library.com/new_gallery/108-1080121_cappuccino-png.png" class="food-img"></div>
          <h2 class="food-title">Cappuccino</h2>
          <span class="food-price">Rs.450</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
        </div>


        <div class="food-box">
          <div class="pic"><img src="https://www.shutterstock.com/image-photo/porcelain-cup-tea-milk-isolated-260nw-387209395.jpg" class="food-img"></div>
          <h2 class="food-title">Milk Tea</h2>
          <span class="food-price">Rs.250</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
        </div>


        <div class="food-box">
          <div class="pic"><img src="https://clipart-library.com/new_gallery/153-1538613_iced-coffee-png-transparent-background-iced-coffee-free.png" class="food-img"></div>
          <h2 class="food-title">ice Coffee</h2>
          <span class="food-price">Rs.250</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
        </div>


        <div class="food-box">
          <div class="pic"><img src="https://static.vecteezy.com/system/resources/previews/033/157/065/original/hot-matcha-green-tea-latte-art-foam-isolated-on-transparent-background-ai-generated-png.png" class="food-img"></div>
          <h2 class="food-title">hot Matcha Lattes</h2>
          <span class="food-price">Rs.300</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
        </div>


        <div class="food-box">
          <div class="pic"><img src="https://img.freepik.com/free-vector/glass-banana-smoothie-with-slice-straw-realistic-composition-with-bunch-unpeeled-fruit-green-leaf-vector-illustration_1284-77033.jpg" class="food-img"></div>
          <h2 class="food-title">Banana Smoothies</h2>
          <span class="food-price">Rs.250</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
        </div>


        <div class="food-box">
          <div class="pic"><img src="https://img.freepik.com/premium-photo/smoothie-beetroot-lassi-milkshake-with-beetroot-fruit-isolated-white-background-studio-shot_741910-10103.jpg" class="food-img"></div>
          <h2 class="food-title">Beet Juice</h2>
          <span class="food-price">Rs.350</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
        </div>


        <div class="food-box">
          <div class="pic"><img src="https://static.vecteezy.com/system/resources/previews/027/145/792/original/summer-cucumber-juice-with-ice-perfect-for-drink-catalog-ai-generated-png.png" class="food-img"></div>
          <h2 class="food-title">Cucumber Juice</h2>
          <span class="food-price">Rs.300</span>
          <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>



    </div>
  </div>
 
  <script>
    

const btnCart=document.querySelector('#cart-icon');
const cart=document.querySelector('.cart');
const btnClose=document.querySelector('#cart-close');

btnCart.addEventListener('click',()=>{
  cart.classList.add('cart-active');
});

btnClose.addEventListener('click',()=>{
  cart.classList.remove('cart-active');
});

document.addEventListener('DOMContentLoaded',loadFood);

function loadFood(){
  loadContent();

}

function loadContent(){
  //Remove Food Items  From Cart
  let btnRemove=document.querySelectorAll('.cart-remove');
  btnRemove.forEach((btn)=>{
    btn.addEventListener('click',removeItem);
  });

  //Product Item Change Event
  let qtyElements=document.querySelectorAll('.cart-quantity');
  qtyElements.forEach((input)=>{
    input.addEventListener('change',changeQty);
  });

  //Product Cart
  
  let cartBtns=document.querySelectorAll('.add-cart');
  cartBtns.forEach((btn)=>{
    btn.addEventListener('click',addCart);
  });

  updateTotal();
}


//Remove Item
function removeItem(){
  if(confirm('Are Your Sure to Remove')){
    let title=this.parentElement.querySelector('.cart-food-title').innerHTML;
    itemList=itemList.filter(el=>el.title!=title);
    this.parentElement.remove();
    loadContent();
  }
}

//Change Quantity
function changeQty(){
  if(isNaN(this.value) || this.value<1){
    this.value=1;
  }
  loadContent();
}

let itemList=[];

//Add Cart
function addCart(){
 let food=this.parentElement;
 let title=food.querySelector('.food-title').innerHTML;
 let price=food.querySelector('.food-price').innerHTML;
 let imgSrc=food.querySelector('.food-img').src;
 //console.log(title,price,imgSrc);
 
 let newProduct={title,price,imgSrc}

 //Check Product already Exist in Cart
 if(itemList.find((el)=>el.title==newProduct.title)){
  alert("Product Already added in Cart");
  return;
 }else{
  itemList.push(newProduct);
 }


let newProductElement= createCartProduct(title,price,imgSrc);
let element=document.createElement('div');
element.innerHTML=newProductElement;
let cartBasket=document.querySelector('.cart-content');
cartBasket.append(element);
loadContent();
}


function createCartProduct(title,price,imgSrc){

  return `
  <div class="cart-box">
  <img src="${imgSrc}" class="cart-img">
  <div class="detail-box">
    <div class="cart-food-title">${title}</div>
    <div class="price-box">
      <div class="cart-price">${price}</div>
       <div class="cart-amt">${price}</div>
   </div>
    <input type="number" value="1" class="cart-quantity">
  </div>
  <ion-icon name="trash" class="cart-remove"></ion-icon>
</div>
  `;
}

function updateTotal()
{
  const cartItems=document.querySelectorAll('.cart-box');
  const totalValue=document.querySelector('.total-price');

  let total=0;

  cartItems.forEach(product=>{
    let priceElement=product.querySelector('.cart-price');
    let price=parseFloat(priceElement.innerHTML.replace("Rs.",""));
    let qty=product.querySelector('.cart-quantity').value;
    total+=(price*qty);
    product.querySelector('.cart-amt').innerText="Rs."+(price*qty);

  });

  totalValue.innerHTML='Rs.'+total;


  // Add Product Count in Cart Icon

  const cartCount=document.querySelector('.cart-count');
  let count=itemList.length;
  cartCount.innerHTML=count;

  if(count==0){
    cartCount.style.display='none';
  }else{
    cartCount.style.display='block';
  }


}
  </script>
</body>
</html>