<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center text-white" href="#">
            <i class="bi bi-apple me-2"></i> AppleShop
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        PRODUCTS
                    </a>
                    <ul id="categoriItem" class="dropdown-menu">
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link icon-link" href="#">
                        <i class="bi bi-heart"></i> WISH
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link icon-link" href="#">
                        <i class="bi bi-cart"></i> CART
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link icon-link" href="#">
                        <i class="bi bi-search"></i> SEARCH
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    
    async function Category() {
        let res = await axios.get('/CategoryList');
        $("#categoriItem").empty()
        res.data['data'].forEach((item, i) => {
            let EachItem = `<li><a class="dropdown-item" href="#">${item['categoryName']}</a></li>`
            $("#categoriItem").append(EachItem);
        })
    }
</script>

