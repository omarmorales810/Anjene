<?php 
  session_start();
?>

<?php 
  require_once "./require/header.php";
  require_once "./require/config.php";
  require_once "./require/display-error.php";
  
  $product_id = mysqli_real_escape_string($conn, $_GET["product_id"]);
  $sql = "SELECT * FROM product WHERE id = '{$product_id}'";
  $result = mysqli_query($conn, $sql);
  $rowCoutn = mysqli_num_rows($result);

  if ($row = mysqli_fetch_assoc($result)) {
    $product_name = $row["name"];
    $product_image = $row["image"];
    $product_price = $row["price"];
    $product_quantity = $row["quantity"];
    $product_description = $row["description"];
    $_SESSION["product_id"] = $product_id;
  }

?>

  <!-- Page product -->
  <div class="page-product">
    <div class="page-product-container">
      <div class="page-product-left">
        <div class="page-product-img">
          <img class="page-product-img-url" src="./img/<?php echo $product_image ?>" alt="">
        </div>
      </div>
      <div class="page-product-right">
        <div class="product-right-content">
          <div class="page-product-description">
            <div class="page-product-name"><?php echo $product_name ?></div>
            <span class="page-product-price"><span style="font-size: 1.2rem;">₱</span><?php echo number_format( $product_price, 2, '.', ', ' ) ?></span>
          </div>
          <div class="shipping-fee-container">
            <div class="shipping-fee-description">Shipping fee</div>
            <div class="shpping-fee"><span style="font-size: 0.9rem;">₱</span>70.00</div>
            <div class="shipping-fee-svg">
            </div>
          </div>
          <form action="#" class="product-form">
            <div class="quantity">
              <div class="quantity-text">Select quantity</div>
              <div class="quantity-btn-container">
                <span class="quantity-btn-decrement quantity-btn">
                  <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon"><polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon></svg>
                </span>
                <input type="number" class="quantity-input" name="add-to-bag-quantity">
                <span class="quantity-btn-increment quantity-btn">
                  <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign"><polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon></svg>
                </span>
                <div class="stocks"><?php echo $product_quantity ?> pieces left</div>
              </div>
            </div>
            <div class="page-product-link">
              <button class="add-to-cart-link">Add to bag <i class="fas fa-chevron-right"></i></button>
              <button class="buy-now-link">Buy now <i class="fas fa-chevron-right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="product-description-section">
    <div class="product-description-section-container">
      <header>Product description</header>
      <div class="product-description-text-container">
        <p class="product-description-section-text">
          <?php echo $product_description ?>
        </p>
      </div>
    </div>
  </div>
  <div class="product-review-section">
    <div class="product-review-section-container">
      <header>Product comments</header>
      <div class="reviews">
        <div class="profile">
          <img src="./img/blank-profile.jpeg" alt="">
        </div>
        <div class="comment-box">
          <div class="profile-name">Cathy Quiza</div>
          <div class="comment-time">2022-02-08 21:59</div>
          <div class="comment">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos doloribus placeat qui error voluptas deserunt cum est accusantium animi officiis, repellat debitis veniam iure adipisci porro odio, alias facere magnam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias molestiae illum optio tempora fuga nostrum vero quia. Blanditiis molestiae atque quaerat! Debitis dolor odio ex labore repellat eligendi amet nulla animi, ratione saepe adipisci fuga ipsam accusantium, distinctio a excepturi expedita fugiat minus architecto exercitationem perspiciatis nemo mollitia! Ducimus sit consequatur reiciendis deserunt, perspiciatis ex voluptates vitae accusantium obcaecati nesciunt, minus rem eaque quisquam dolores saepe placeat, repellendus numquam natus nihil illum exercitationem temporibus alias voluptatem! Distinctio praesentium fugiat nulla, beatae doloribus inventore perferendis natus molestiae libero nostrum rerum! Officia beatae, quasi hic repellat nesciunt autem quis maiores accusamus minus architecto at illo, omnis nostrum doloribus placeat fugit. Quod tempore nobis sequi voluptates, nihil quibusdam ipsa ut, maiores iste quis, fuga eligendi labore illum. Ad ratione expedita quia, iure blanditiis atque est fugit! Autem, corporis molestiae odio laboriosam aliquid quibusdam fugit excepturi, harum, officia delectus labore quis quasi ab facere ex perspiciatis laborum quod nobis nostrum enim. Molestiae optio esse hic harum quod nostrum quis aliquam expedita aliquid ad eligendi provident veniam atque architecto velit distinctio quasi impedit, corrupti laudantium explicabo fuga odio in eum qui. Enim harum ab maiores dolores voluptatibus! Animi tenetur inventore nihil impedit earum rem deserunt!
          </div>
        </div>
      </div>
      <div class="reviews">
        <div class="profile">
          <img src="./img/blank-profile.jpeg" alt="">
        </div>
        <div class="comment-box">
          <div class="profile-name">Marlon Adova</div>
          <div class="comment-time">2022-02-08 21:59</div>
          <div class="comment">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos doloribus placeat qui error voluptas deserunt cum est accusantium animi officiis, repellat debitis veniam iure adipisci porro odio, alias facere magnam.
          </div>
        </div>
      </div>
      <div class="reviews">
        <div class="profile">
          <img src="./img/blank-profile.jpeg" alt="">
        </div>
        <div class="comment-box">
          <div class="profile-name">Mandy Ruazol</div>
          <div class="comment-time">2022-02-08 21:59</div>
          <div class="comment">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos doloribus placeat qui error voluptas deserunt cum est accusantium animi officiis, repellat debitis veniam iure adipisci porro odio, alias facere magnam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor praesentium harum vel ut sint ex, enim facilis eum sapiente expedita magnam voluptatibus veritatis nihil non possimus cum voluptate. Modi magnam, inventore totam voluptatum delectus earum amet hic vero natus blanditiis voluptatem! Magnam quia et adipisci in distinctio debitis molestias mollitia quibusdam similique a iure eos vitae, consectetur, quas aliquid animi ea quod eum dolorum, ad sit. Facere esse voluptatem nulla repellat, nemo perspiciatis placeat voluptate veritatis, officiis id ratione culpa obcaecati illo nam amet vel. Doloremque non voluptates molestias omnis!
          </div>
        </div>
      </div>
      <div class="reviews">
        <div class="profile">
          <img src="./img/blank-profile.jpeg" alt="">
        </div>
        <div class="comment-box">
          <div class="profile-name">Princess Pocon</div>
          <div class="comment-time">2022-02-08 21:59</div>
          <div class="comment">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          </div>
        </div>
      </div>
      <!-- comment reviews -->
      <div class="user-review">
        <div class="profile">
          <img src="./img/blank-profile.jpeg" alt="">
        </div>
        <div class="type-comment-box">
          <div class="send-review-input-container">
            <input placeholder="Add your comments or suggestions" type="text" class="comment-input">
            <div class="comment-input-border-bottom"></div>
          </div>
          <div class="send-review-btn-container">
            <button class="cancel-review">Cancel</button>
            <button class="send-review">Comment</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal">
    <div class="modal-container">
      <div class="modal-bag">
        <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg>
      </div>
      <div class="modal-text">Item has been added to your shopping bag</div>
      <div class="modal-btn-container">
        <button class="modal-btn">Okay</button>
      </div>
    </div>
  </div>
  <div class="modal-banner"></div>

  <!-- Javascript -->
  <script src="./js/nav.js"></script>
  <script src="./js/product.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
  
  <!-- Product quantity counter -->
  <?php 
    echo '<script>
            const incrementBtn = document.querySelector(".quantity-btn-increment");
            const decrementBtn = document.querySelector(".quantity-btn-decrement");
            const decrementBtnSvg = document.querySelector(".quantity-btn-decrement svg");
            const incrementBtnSvg = document.querySelector(".quantity-btn-increment svg");
            const numberInput = document.querySelector(".quantity-input");
            const modalBtnPhp = document.querySelector(".modal-btn");
            const modalPhp = document.querySelector(".modal");
            const modalBannerPhp = document.querySelector(".modal-banner");

            let count = 1;
            numberInput.value = count;

            incrementBtn.onclick = () => {
              if (numberInput.value < '.$product_quantity.') {
                count += 1;
                decrementBtn.classList.add("active");
                decrementBtnSvg.classList.add("active");
              }
              
              if (numberInput.value >= ('.$product_quantity.' - 1)) {
                incrementBtn.classList.add("active");
                incrementBtnSvg.classList.add("active");
              }
              numberInput.value = count;
            }

            decrementBtn.onclick = () => {
              if (count > 0) {
                count -= 1;
              }
              numberInput.value = count;

              if (count <= 1) {
                decrementBtn.classList.remove("active");
                decrementBtnSvg.classList.remove("active");
              }

              if (numberInput.value < '.$product_quantity.') {
                incrementBtn.classList.remove("active");
                incrementBtnSvg.classList.remove("active");
              }
            }

            numberInput.oninput = () => {
              if (numberInput.value > '.$product_quantity.') {
                count = '.$product_quantity.';
                numberInput.value = count;
              }
            }

            modalBtnPhp.onclick = () => {
              count = 0;
              numberInput.value = count;
              modalPhp.style.opacity = 0;
              modalPhp.style.pointerEvents = "none";
              modalBannerPhp.style.opacity = 0;
              modalBannerPhp.style.pointerEvents = "none";
              incrementBtn.classList.remove("active");
              incrementBtnSvg.classList.remove("active");
            }
          </script>';
  ?>

<?php require_once "./require/footer.php" ?>