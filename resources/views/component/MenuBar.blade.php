<!-- Top Contact Bar -->
<div class="top-bar">
    <div class="container d-flex justify-content-between">
        <div class="text-white">
            <i class="bi bi-telephone text-white"></i> 01615517774
            <span class="ms-3">
                <i class="bi bi-envelope"></i> info@apple.com
            </span>
        </div>
        <div class="text-white">
            <a href="#">About</a>
            <a href="#">Account</a>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg bg-dark">
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
    Category();
    async function Category() {
        let res = await axios.get('/CategoryList');
        $("#categoriItem").empty()
        res.data['data'].forEach((item, i) => {
            let EachItem = `<li><a class="dropdown-item" href="#">${item['categoryName']}</a></li>`
            $("#categoriItem").append(EachItem);
        })
    }
</script>

