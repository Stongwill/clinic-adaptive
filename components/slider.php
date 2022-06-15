<section class="sliders">
  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
<?php 
    $result=$conn->query("SELECT * FROM slider_info;");
    $i=0;

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        if($i==0){
   
    ?>

    <div class="carousel-item active">
  <div class="sliders__inner d-flex align-items-center">
      <div class="sliders__info  d-md-block">
            <h1 class="title__check"><?php echo $row["slider_title"]; ?></h1>
            <h3 class="subtitle">для мужчин</h3>
            <ul>
              <li class="info__list"><span>Гормональный скрининг</span></li>
              <li class="info__list"><span>Тестостерон</span></li>
              <li class="info__list"><span>Свободный тестостерон</span></li>
              <li class="info__list">
                <span>Глобулин, связывающий половые гормоны</span>
              </li>
            </ul>
            <div class="subtitle__price d-flex align-items-center">
              <h4 class="price__all">Всего <?php echo $row["slider_price"]; ?></h4>
              <h5 class="price__disc">3500₽</h5>
            </div>
            <div class="sliders__btn">
              <a href="#" class="sliders__chek">Записаться</a>
              <a href="#" class="sliders__chek sliders__chek-btn">Подробнее</a>
            </div>
            
      </div>
      <div class="sliders__img">
              <img
                src="<?php echo $row["slider_img"]; ?>"
                alt="photo__sliders"
                class="sliders__img-item"
              />
            </div>
</div>
<div class="slider__arrow d-flex justify-content-center align-items-center">
        <button class="left " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <img src="/img/arrow-left.svg" alt="left" />
          </button>
          <span class="slider__num-active"><?php echo $row["id"]; ?>
          <span class="slider__num-gray">
            <?php echo " / $result->num_rows"; ?>
          </span>
       
          <button class="right " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"" >
            <img src="/img/arrow-right.svg" alt="right" />
          </button>
        </div>
</div>
<?php
$i++;
} 

else{
  ?>

  <div class="carousel-item">
  <div class="sliders__inner d-flex align-items-center">
  <div class="sliders__info d-md-block">
        <h1 class="title__check"><?php echo $row["slider_title"]; ?></h1>
        <h3 class="subtitle">для насекомых</h3>
        <ul>
          <li class="info__list"><span>Интересная задача</span></li>
          <li class="info__list"><span>Тестостерон</span></li>
          <li class="info__list"><span>Свободный тестостерон</span></li>
          <li class="info__list">
            <span>Глобулин, связывающий половые гормоны</span>
          </li>
        </ul>
        <div class="subtitle__price d-flex align-items-center">
          <h4 class="price__all">Всего <?php echo $row["slider_price"]; ?></h4>
          <h5 class="price__disc">3500₽</h5>
        </div>
        <div class="sliders__btn">
          <a href="#" class="sliders__chek">Записаться</a>
          <a href="#" class="sliders__chek sliders__chek-btn">Подробнее</a>
        </div>
        
  </div>
  <div class="sliders__img">
          <img
            src="<?php echo $row["slider_img"]; ?>"
            alt="photo__sliders"
            class="sliders__img-item"
          />
        </div>
</div>
<div class="slider__arrow d-flex justify-content-center align-items-center">
        <button class="left " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <img src="/img/arrow-left.svg" alt="left" />
          </button>
          <span class="slider__num-active"><?php echo $row["id"]; ?>
          <span class="slider__num-gray">
            <?php echo " / $result->num_rows"; ?>
          </span>
          </span>
       
          <button class="right " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"" >
            <img src="/img/arrow-right.svg" alt="right" />
          </button>
        </div>
</div>

<?php
}
}
}
?>
</div>
</div>
</div>
</div>
</div>
          </div>
        </div>
    </section>