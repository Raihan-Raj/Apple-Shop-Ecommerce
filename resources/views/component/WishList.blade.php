<div class="breadceumb_section bg_gray page-title-mini" style="margin-top: 5%">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1><span></span> Wish List</h1>
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
<div class="mt-5">
    <div class="container my-5">
      <div id="bylist" class="row">
        
        </div>
        
    </div>
</div>

<script>
    async function WishList(){
        let res = await axios.get('ProductWishList');
        $("#bylist").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = 
            `<div class="col-6 col-md-4 col-lg-2 mb-4">
    <div class="card product-card border-0 shadow-sm h-100">

        <!-- Product Image -->
        <div class="product-img position-relative overflow-hidden">
            <img src="${item['product']['image']}" class="img-fluid w-100 product-img-main">

            <!-- Hover Icons -->
            <div class="product-overlay">
                <a href="/product-details?id=${item['product']['id']}" class="btn btn-light btn-sm">
                    <i class="bi bi-eye"></i>
                </a>
            </div>
        </div>

        <!-- Card Body -->
        <div class="card-body p-2">

            <a href="/product-details?id=${item['product']['id']}" class="text-decoration-none text-dark">
                <h6 class="product-title text-truncate">
                    ${item['product']['title']}
                </h6>
            </a>

            <!-- Price -->
            <div class="product-price text-primary fw-bold">
                $ ${item['product']['price']}
            </div>

            <!-- Rating -->
            <div class="rating mt-1">
                <div class="stars-outer">
                    <div class="stars-inner" style="width:${item}%"></div>
                </div>
            </div>
            <!-- Remove Button -->
            <button class="btn btn-sm btn-danger w-100 mt-2 remove" 
                data-id="${item['product']['id']}">
                <i class="bi bi-trash"></i> Remove
            </button>
        </div>
    </div>
</div>`;
            $("#bylist").append(EachItem);
        })

        $(".remove").on('click',function(){
            let id=$(this).data('id');
            RemoveWishList(id);
        })

    }

    async function RemoveWishList(id){
        $(".preloader").fadeIn(200).removeClass('loaded');
        let res = await axios.get("/RemoveWishList/"+id);
        $(".preloader").fadeOut(200).addClass('loaded');
        if(res.status===200){
            await WishList();
        }else{
            alert("Request Fail");
        }
    }

</script>