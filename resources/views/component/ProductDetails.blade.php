<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    line-height: 1.5;
}
.card-wrapper{
    max-width: 1100px;
    margin: 0 auto;
    margin-top: 10%
}
img{
    width: 100%;
    display: block;
}
.img-display{
    overflow: hidden;
}
.img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}
.img-showcase img{
    min-width: 100%;
}
.img-select{
    display: flex;
}
.img-item{
    margin: 0.3rem;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3){
    margin-right: 0;
}
.img-item:hover{
    opacity: 0.8;
}
.product-content{
    padding: 2rem 1rem;
}
.product-title{
    font-size: 3rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
}
.product-title::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 4px;
    width: 80px;
    background: #12263a;
}
.product-link{
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 0.5rem;
    background: #256eff;
    color: #fff;
    padding: 0 0.3rem;
    transition: all 0.5s ease;
}
.product-link:hover{
    opacity: 0.9;
}
.product-rating{
    color: #ffc107;
}
.product-rating span{
    font-weight: 600;
    color: #252525;
}
.product-price{
    margin: 1rem 0;
    font-size: 1rem;
    font-weight: 700;
}
.product-price span{
    font-weight: 400;
}
.last-price span{
    color: #f64749;
    text-decoration: line-through;
}
.new-price span{
    color: #256eff;
}
.product-detail h2{
    text-transform: capitalize;
    color: #12263a;
    padding-bottom: 0.6rem;
}
.product-detail p{
    font-size: 0.9rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.product-detail ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-detail ul li span{
    font-weight: 400;
}
.purchase-info{
    margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.purchase-info input{
    width: 60px;
}
.purchase-info .btn{
    cursor: pointer;
    color: #ddd;
}
.purchase-info .btn:first-of-type{
    background: #256eff;
}
.purchase-info .btn:last-of-type{
    background: #f64749;
}
.purchase-info .btn:hover{
    opacity: 0.9;
}
.social-links{
    display: flex;
    align-items: center;
}
.social-links a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    border: 1px solid #000;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}
.social-links a:hover{
    background: #000;
    border-color: transparent;
    color: #fff;
}

@media screen and (min-width: 992px){
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .card-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-imgs{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .product-content{
        padding-top: 0;
    }
}
</style>


<div class = "card-wrapper">
  <div class = "card">
    <!-- card left -->
    <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
          <img id="product_img1" src = "assets/images/slide1.png" alt = "shoe image">
        </div>
      </div>
      <div class = "img-select">
        <div class = "img-item">
          <a href = "#" data-id = "1">
            <img id="img1" src = "assets/images/slide1.png" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "2">
            <img id="img2" src = "assets/images/slide1.png" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "3">
            <img id="img3" src = "assets/images/slide1.png" alt = "shoe image">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "4">
            <img id="img4" src = "assets/images/slide1.png" alt = "shoe image">
          </a>
        </div>
      </div>
    </div>
    <!-- card right -->
    <div class = "product-content">
      <h6 id="p_title" class = "product-title">nike shoes</h6>
      <a href = "#" class = "product-link">visit nike store</a>
      <div class = "product-rating">
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star"></i>
        <i class = "fas fa-star-half-alt"></i>
        <span>4.7(21)</span>
      </div>

      <div class = "product-price">
        <h1 id="p_price" class = "last-price"> Price: </h1>
      </div>

      <div class = "product-detail">
        <h2>about this item: </h2>
        <p id="p_des"></p>
        
        <ul>    
         <li><label class="form-label">Color</label>
            <select id="p-color" class="form-select">

            </select>
        </li>
           <li><label class="form-label">Size</label>
            <select id="p-size" class="form-select">
                
            </select>
        </li>
          <li>Available: <span>in stock</span></li>
          <li>Shipping Area: <span>All over the world</span></li>
          <li>Shipping Fee: <span>Free</span></li>
        </ul>
      </div>

      <div class = "purchase-info">
        <input id="p_qty" type="number" min="0" value="1">
        <button onclick="AddToCart()" type="button" class="btn">
          Add to Cart <i class = "fas fa-shopping-cart"></i>
        </button>
        <button onclick="AddToWishList()" type="button" class="btn"><i class="fa-solid fa-heart"></i></button>
      </div>

      <div class = "social-links">
        <p>Share At: </p>
        <a href = "#">
          <i class = "fab fa-facebook-f"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-twitter"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-instagram"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-whatsapp"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-pinterest"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
    
    let searchParams=new URLSearchParams(window.location.search);
    let id=searchParams.get('id');
      
    
    async function productDetails(){
        let res=await axios.get('/ProductDetailsById/'+id);
        let Details=await res.data['data'];

        document.getElementById('product_img1').src=Details[0]['img1'];
        document.getElementById('img1').src=Details[0]['img1'];
        document.getElementById('img2').src=Details[0]['img2'];
        document.getElementById('img3').src=Details[0]['img3'];
        document.getElementById('img4').src=Details[0]['img4'];

        document.getElementById('p_title').innerText=Details[0]['product']['title'];
        document.getElementById('p_price').innerText="$"+Details[0]['product']['price'];
        document.getElementById('p_des').innerText=Details[0]['des'];

        //Product Size & Color
        let size=Details[0]['size'].split(',');
        let color=Details[0]['color'].split(',');

        let SizeOption=`<option value=''>Choose Size</option>`;
        $("#p-size").append(SizeOption);
        size.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`
            $("#p-size").append(option);
        })

        let ColorOption=`<option value=''>Choose Color</option>`
        $("#p-color").append(ColorOption);
        color.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`
            $("#p-color").append(option);
        })

        $('#img1').on('click',function(){
            $('#product_img1').attr('src', Details[0]['img1']);
        });
        $('#img2').on('click',function(){
            $('#product_img1').attr('src', Details[0]['img2']);
        });
        $('#img3').on('click',function(){
            $('#product_img1').attr('src', Details[0]['img3']);
        });
        $('#img4').on('click',function(){
            $('#product_img1').attr('src', Details[0]['img4']);
        });
    }

    async function AddToCart() {
        try {
            let p_color = document.getElementById('p-color').value;
            let p_size = document.getElementById('p-size').value;
            let p_qty = document.getElementById('p_qty').value;

            if (p_color.length === 0) {
                alert("Product color Required !");
            }
         else if (p_size.length === 0) {
             alert("Product size Required !");
         }
            else if (p_qty === 0) {
                alert("Product qty Required !");
            } else {
                $(".preloader").fadeIn(200).removeClass('loaded');
                let res = await axios.post('/CreateCartList/', {
                    "product_id": id,
                    "color": p_color,
                    "size": p_size,
                    "qty": p_qty
                });
                $(".preloader").fadeOut(200).addClass('loaded');
                if(res.status===200){
                   alert("Request Complete !");
                   } 
            }     
        } catch (e) {
            if (e.response.status === 404) {
      sessionStorage.setItem("last_location",window.location.href);          
      window.location.href = "/login-page";
            } else {
             console.log(e);
                }
            }
        }
          
    async function AddToWishList(){
     try{
         $(".preloader").fadeIn(200).removeClass('loaded');
    let res = await axios.post('/CreateWishList/'+id);
         $(".preloader").fadeOut(200).addClass('loaded');
         if (res.status === 200) {
             alert("Request Successfull");
         }
    }catch(e){
         if (e.response.status === 404) { 
    sessionStorage.setItem("last_location",window.location.href);                                                                                                                    
        window.location.href="/login-page";
    }else {
    console.log(e);
   }
}
}
    

</script>