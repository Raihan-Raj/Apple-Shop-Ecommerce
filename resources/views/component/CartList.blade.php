<div class="breadceumb_section bg_gray page-title-mini" style="margin-top: 5%">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1><span></span> Cart List</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">This Page</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="wrap">
  <header class="cart-header cf">
    <strong>Items in Your Cart</strong>
    <span class="btn">Checkout</span>
  </header>
  
  <div id="cartItem" class="">
  
  </div>

  <div class="sub-table cf">
    <div class="summary-block">
      <div class="sb-promo">
        <input type="text" placeholder="Enter Promo Code" />
        <span class="btn">Apply</span>
      </div>        
      <ul>
        <li><span class="sb-label text-dark">Total:  $</span><span id="total"></span></li>
      </ul>
    </div>   
  </div>
  
  <div class="cart-footer cf">
      <span class="btn btn-success">Checkout</span>
     <a href="#"><span class="cont-shopping"><i class="i-angle-left"></i>Continue Shopping</span></a>   
  </div>
</div>

<script>
    CartItem();
    async function CartItem(){
        let res = await axios.get('/CartList');
        $("#cartItem").empty();
        res.data['data'].forEach((item,i) => {
            let EachItem = `<ul>
      <li class="item">
        <div class="item-main cf">
          <div class="item-block ib-info cf">
            <img class="product-img" src="${item['product']['image']}"/>
            <div class="ib-info-meta">
              <span class="title">${item['product']['title']}</span>
              <span class="styles">
                <span><strong>Color</strong>: ${item['color']}</span>
                <span><strong>Size</strong>: ${item['size']}</span>
              </span>
            </div>
          </div>
          <div class="item-block ib-qty">
            <input type="text" value="${item['qty']}" class="qty" />
            <span class="price"><span>x</span> $ ${item['product']['price']}</span>
          </div>
          <div class="item-block ib-total-price">
            <span class="tp-price">$ ${item['price']}</span>
            <button type="button" class="btn-close remove" data-id="${item['product_id']}" aria-label="Close"></button>
          </div>         
        </div>
      </li>
    </ul>`;
  $("#cartItem").append(EachItem);
  })


  await CartTotal(res.data['data']);



   $(".remove").on('click',function(){
    let id= $(this).data('id');
    RemoveCartList(id);
   })

  }
 

     async function CartTotal(data){
            let Total=0;
            data.forEach((item,i)=>{
            Total=Total+parseFloat(item['price']);
        })
        $("#total").text(Total);
    }

    async function RemoveCartList(id){
        let res = await axios.get("/DeleteCartList/"+id);
        if(res.status===200){
            await CartItem();
        }else{
            alert("Request Fail")
        }
    } 

    
</script>
