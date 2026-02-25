<style>
  /* Full Height Slider */
  .banner_section .carousel-item {
    height: 85vh;
    min-height: 500px;
    background-size: cover;
    background-position: center;
    position: relative;
  }

  /* Dark overlay */
  .banner_section .carousel-item::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
  }

  /* Center content */
  .banner_content {
    position: relative;
    z-index: 2;
    color: #fff;
    height: 85vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 5%;
  }

  /* Title */
  .banner_content h2 {
    font-size: 48px;
    font-weight: 700;
  }

  /* Price */
  .banner_content h5 {
    font-size: 20px;
    color: #f8f9fa;
  }

  /* Button */
  .banner_content .btn {
    width: 180px;
    padding: 12px;
    font-weight: 600;
    background: #fff;
    color: #000;
    border: none;
    transition: 0.3s;
  }

  .banner_content .btn:hover {
    background: #000;
    color: #fff;
    border: 1px solid #fff;
  }

  /* Arrow Style */
  .custom-arrow {
    filter: invert(1);
  }
</style>


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
            <h5>${item.price}</h5>
            <h2>${item.title}</h2>
            <a href="#" class="btn">Shop Now</a>
        </div>
    </div>

</div>`;

      $("#carouselSection").append(sliderItem);
    });
  }

  
</script>
