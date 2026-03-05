
<body>
<div class="banner_section">
  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div id="carouselSection" class="carousel-inner">
      <!-- Dynamic items will come here -->
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon custom-arrow"></span>
    </button>
    
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon custom-arrow"></span>
    </button>

    </div>
    </div>
<script>
  async function Hero() {
    let res = await axios.get('/ListProductSlider');
    $("#carouselSection").empty();

    res.data['data'].forEach((item, i) => {
      let activeClass = i === 0 ? 'active' : '';

      let sliderItem = `
<div class="carousel-item ${activeClass}"
     style="background-image:url('${item.image}')">

    <div class="container">
        <div class="banner_content">
            <h5>$${item.price}</h5>
            <h2>${item.title}</h2>
            <a href="#" class="btn">Shop Now</a>
        </div>
    </div>

</div>`;

      $("#carouselSection").append(sliderItem);
    });
  }

  
</script>

</body>