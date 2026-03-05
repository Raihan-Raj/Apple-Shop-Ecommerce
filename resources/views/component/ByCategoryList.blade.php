<div class="breadceumb_section bg_gray page-title-mini" style="margin-top: 5%">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Products</h1>
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
        <div id="byCategoryList" class="row">
        
        </div>
    </div>
</div>
 
<script>
    async function ByCategory(){
        let searchParams=new URLSearchParams(window.location.search);
        let id=searchParams.get('id');

        let res = await axios.get(`/ListProductByCategory/${id}`);
        $("#byCategoryList").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = 
            `<div class="col-6 col-md-4 col-lg-2 mt-5">
                <div class="card product-card h-100 shadow-sm border-0">
                    <div class="product-img-wrapper">
                        <img src="${item['image']}" class="img-fluid w-100">
                        <div class="hover-icons">
                            <button class="btn btn-sm btn-light"><i class="bi bi-cart"></i></button>
                            <button class="btn btn-sm btn-light"><i class="bi bi-search"></i></button>
                            <button class="btn btn-sm btn-light"><i class="bi bi-heart"></i></button>
                        </div>
                    </div>
                    <div class="card-body text-start">
                        <h6 class="mb-1 text-truncate">${item['title']}</h6>
                        <div class="fw-bold text-primary">$ ${item['price']}</div>
                        <div class="mt-2">
                            <div class="stars-outer">
                                <div class="stars-inner" style="width:${item}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`
            ;
            $("#byCategoryList").append(EachItem);
        })
    }
</script>