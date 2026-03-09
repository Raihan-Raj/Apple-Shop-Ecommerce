<section class="py-5 bg-light" style="margin-top: 10%">
  <div class="container">
    <!-- Section Heading -->
    <div class="row justify-content-center mb-4">
      <div class="col-md-6 text-center">
        <h2 class="fw-bold">Top Brand</h2>
        <p class="text-muted">
          Discover our most popular categories selected by customers.
        </p>
      </div>
    </div>

    <!-- Category Items -->
    <div id="TopBrand" class="row" style="margin-top: 5%">
    </div>
  </div>
        </section>

        <script>
          
          async function TopBrand() {
            let res = await axios.get('/BrandList');
            $("#TopBrand").empty()
            res.data['data'].forEach((item, i) => {
              let EachItem = `<div class="col-6 col-md-4 col-lg-2">
                              <div class="card category-card border-0 shadow-sm h-100 text-center">
                              <div class="card-body">
                              <a href="/ByBrandPage?id=${item['id']}">
                              <img src="${item['brandImg']}" class="img-fluid mb-3">
                              <h6 class="fw-semibold mb-0">${item['brandName']}</h6>
                              </a>
                              </div>
                              </div>
                              </div>`
              $("#TopBrand").append(EachItem);
            })
          }
        </script>
