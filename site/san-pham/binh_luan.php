<!-- Detail product review -->
<div class="detail-pro-review">
  <h1 class="detail-pro-review-title">Nhận xét đánh giá</h1>
  <?php
  foreach ($danh_sach_bl as $dsbl) {
    extract($dsbl);
  ?>
    <div class="detail-pro-user-review">
      <div class="detail-pro-user-rate">
        <span class="detail-pro-date"><?= $ngay_bl ?></span>
        <div class="detail-pro-user-stars">
          <?php
          for ($i = 1; $i <= $stars; $i++) {
            echo "<span class='fa fa-star detail-pro-user-icon'></span>";
          }
          ?>
        </div>
        <span class="detail-pro-user-info">by <?= $id_user ?></span>
      </div>
      <p class="detail-pro-user-commet">
        <?= $comment ?>
      </p>
    </div>
    <!-- <div class="detail-pro-user-review">
      <div class="detail-pro-user-rate">
        <span class="detail-pro-date">2021 - 10 - 29</span>
        <div class="detail-pro-user-stars">
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
        </div>
        <span class="detail-pro-user-info">by Công Lê</span>
        <img src="./public/image/282789587_386863963368570_3912744419953022524_n.jpg" alt="" class="detail-pro-user-image" />
      </div>
      <p class="detail-pro-user-commet">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Tempore dolorum magni ex adipisci, labore laudantium, aliquid
        non aut facilis eveniet minima laborum natus vitae cupiditate
        explicabo repellendus corrupti commodi voluptas!
      </p>
    </div>
    <div class="detail-pro-user-review">
      <div class="detail-pro-user-rate">
        <span class="detail-pro-date">2021 - 10 - 29</span>
        <div class="detail-pro-user-stars">
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
          <span class="fa fa-star detail-pro-user-icon"></span>
        </div>
        <span class="detail-pro-user-info">by Công Lê</span>
        <img src="./public/image/282789587_386863963368570_3912744419953022524_n.jpg" alt="" class="detail-pro-user-image" />
      </div>
      <p class="detail-pro-user-commet">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Tempore dolorum magni ex adipisci, labore laudantium, aliquid
        non aut facilis eveniet minima laborum natus vitae cupiditate
        explicabo repellendus corrupti commodi voluptas!
      </p>
    </div> -->
  <?php
  }
  ?>

  <form action="" method="post" enctype="multipart/form-data" class="detail-pro-form">
    <div class="detail-pro-rate">
      <h3 class="detail-pro-rate-title">Đánh giá sản phẩm:</h3>
      <div class="detail-pro-star">
        <input type="radio" id="star5" name="stars" value="5" />
        <label class="full" for="star5" title="Awesome - 5 stars"></label>

        <input type="radio" id="star4" name="stars" value="4" />
        <label class="full" for="star4" title="Pretty good - 4 stars"></label>

        <input type="radio" id="star3" name="stars" value="3" />
        <label class="full" for="star3" title="Meh - 3 stars"></label>

        <input type="radio" id="star2" name="stars" value="2" />
        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

        <input type="radio" id="star1" name="stars" value="1" />
        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
      </div>
    </div>

    <div class="detail-pro-comment">
      <label for="comment">Viết bình luận của bạn</label>
      <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Viết bình luận của bạn tại đây ..."></textarea>
    </div>
    <?php
    if (isset($_SESSION['dangky'])) {
      echo "<button class='detail-pro-review-btn' name='btn_insert'>Đăng tải bình luận</button>";
    } else {
      echo "<button class='detail-pro-review-btn'><a href='index.php?act=signup'>Đăng nhập để đánh giá</a></button>";
    }
    ?>

  </form>

</div>
<!-- End detail product review -->