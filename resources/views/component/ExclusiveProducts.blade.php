<!DOCTYPE html>
<html lang="en">

<body>

  <div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-4">
      <h2 class="fw-bold">Exclusive Products</h2>
      <p class="text-muted">Check out our handpicked popular, new, and trending products</p>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-pills justify-content-center mb-4" id="productTab">
      <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab"
          data-bs-target="#popular">Popular</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#new">New</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#top">Top</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#special">Special</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#trending">Trending</button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content">
      <div class="tab-pane fade show active" id="popular">
        <div id="popularItem" class="row g-4"></div>
      </div>
      <div class="tab-pane fade" id="new">
        <div id="newItem" class="row g-4"></div>
      </div>
      <div class="tab-pane fade" id="top">
        <div id="topItem" class="row g-4"></div>
      </div>
      <div class="tab-pane fade" id="special">
        <div id="specialItem" class="row g-4"></div>
      </div>
      <div class="tab-pane fade" id="trending">
        <div id="trendingItem" class="row g-4"></div>
      </div>
    </div>

</div>

<script>

  $(document).ready(function () {

    // Load default tab
    loadProducts('popular', '#popularItem');

    // Load when tab changes
    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
      let target = $(e.target).attr("data-bs-target");  // #popular
      let remark = target.replace('#', '');              // popular
      let container = target + "Item";                  // #popularItem

      loadProducts(remark, container);
    });

  });


  async function loadProducts(remark, containerId) {

    try {

      let res = await axios.get(`/ListProductByRemark/${remark}`);
      let products = res.data.data ?? res.data;

      $(containerId).empty();

      if (!products || products.length === 0) {
        $(containerId).html(`<p class="text-center">No products found</p>`);
        return;
      }

      products.forEach(item => {

        let starPercent = (item.star ?? 0) * 20;

        let card = `
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card product-card h-100 shadow-sm border-0">

                    <div class="product-img-wrapper">
                      <a href="/product-details?id=${item['id']}">
                        <img src="${item.image}" class="img-fluid w-100">
                        <div class="hover-icons">
                            <button class="btn btn-sm btn-light"><i class="bi bi-cart"></i></button>
                        </div>
                        </a>
                    </div>
                    <div class="card-body text-start">
                      <h6 class="mb-1 text-truncate">${item.title}</h6>
                        <div class="fw-bold text-primary">$${item.price}</div>

                        <div class="mt-2">
                            <div class="stars-outer">
                                <div class="stars-inner" style="width:${starPercent}%"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            `;

        $(containerId).append(card);
      });

                } catch (error) {
                  console.error(error);
                  $(containerId).html(`<p class="text-danger text-center">Failed to load products</p>`);
                }
              }

            </script>
            
            </body>

</html>