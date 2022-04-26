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
  }

?>

  <!-- Page product -->
  <div class="page-product">
    <div class="page-product-container">
      <div class="page-product-left">
        <div class="page-product-img">
          <img src="./img/<?php echo $product_image ?>" alt="">
        </div>
        <!-- <div class="product-buy">
          <div class="product-buy-column">
            <div class="free-delivery-svg">
              <svg viewBox="0 0 35 35" class="as-svgicon as-svgicon-shipping as-svgicon-base as-svgicon-shippingbase" role="img" aria-hidden="true" width="35px"    height="35px"> <path fill="none" d="M0 0h35v35H0z"></path><path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path></svg>
            </div>
            <div class="product-buy-text">We deliver your needs fast</div>
          </div>
          <div class="product-buy-column">
            <div class="easy-return-svg">
              <svg viewBox="0 0 35 35" class="as-svgicon as-svgicon-return as-svgicon-base as-svgicon-returnbase" role="img" aria-hidden="true" width="35px" height="35px"><path fill="none" d="M0 0h35v35H0z"></path><path d="M12.249 9.022l-4.461 2.4c-.041.022-.073.055-.111.081l9.823 5.588 4.4-2.5zM27.322 11.507c-.038-.025-.069-.058-.11-.081l-9-4.852a1.5 1.5 0 00-1.424 0l-3.5 1.889 9.628 5.55zM10.8 18.5a.5.5 0 01-.5.5H7v3.219a1.5 1.5 0 00.788 1.32l9 4.852a1.494 1.494 0 00.212.082V17.957l-9.931-5.645a1.494 1.494 0 00-.069.436V18h3.3a.5.5 0 01.5.5zM18 17.957v10.515a1.481 1.481 0 00.212-.082l9-4.851a1.5 1.5 0 00.788-1.32v-9.471a1.5 1.5 0 00-.069-.436z" fill="none"></path><path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748V17h1v-4.252a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082l-9-4.852A1.5 1.5 0 017 22.219V20H6v2.219a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-9.11 4.932c.038-.026.07-.059.111-.081l4.461-2.4 9.651 5.561-4.4 2.5zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path><path d="M2.507 18l1.646-1.646a.5.5 0 00-.707-.707l-2.5 2.5a.5.5 0 000 .707l2.5 2.5a.5.5 0 10.707-.707L2.507 19H6v-1zM10.3 19a.5.5 0 000-1H7v1zM6 18h1v1H6z"></path></svg>
            </div>
            <div class="product-buy-text">Not free shipping but easy returns</div>
          </div>
        </div> -->
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
          <div class="quantity">
            <div class="quantity-text">Select quantity</div>
            <div class="quantity-btn-container">
              <button class="quantity-btn-increment quantity-btn">
                <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign"><polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon></svg>
              </button>
              <input type="number" class="quantity-input" value="0">
              <button class="quantity-btn-decrement quantity-btn">
                <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon"><polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon></svg>
              </button>
              <div class="stocks"><?php echo $product_quantity ?> pieces left</div>
            </div>
          </div>
          <div class="page-product-link">
            <span class="add-to-cart-link">Add to bag <i class="fas fa-chevron-right"></i></span>
            <span class="buy-now-link">Buy now <i class="fas fa-chevron-right"></i></span>
          </div>
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

  <!-- Javascript -->
  <script src="./js/nav.js"></script>
  <script src="./js/product.js"></script>
  <!-- <script src="./js/quantityCounter.js"></script> -->
  <script src="./js/removeTransitionOnResize.js"></script>
  
  <!-- Product quantity counter -->
  <?php 
    echo '<script>
            const incrementBtn = document.querySelector(".quantity-btn-increment");
            const decrementBtn = document.querySelector(".quantity-btn-decrement");
            const numberInput = document.querySelector(".quantity-input");

            let count = 0;

            incrementBtn.onclick = () => {
              if (numberInput.value < '.$product_quantity.') {
                count += 1;
                numberInput.value = count;
              }
            }

            decrementBtn.onclick = () => {
              if (count > 0) {
                count -= 1;
              }
              numberInput.value = count;
            }

            numberInput.oninput = () => {
              if (numberInput.value > '.$product_quantity.') {
                count = '.$product_quantity.';
                numberInput.value = count;
              }
            }
          </script>';
  ?>

<?php require_once "./require/footer.php" ?>