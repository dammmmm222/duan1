
<style>
  :root {

    --onyx: hsl(0, 0%, 25%);
    --azure: hsl(219, 77%, 60%);
    --white: hsl(0, 0%, 100%);
    --platinum: hsl(0, 0%, 91%);
    --gainsboro: hsl(0, 0%, 90%);
    --red-salsa: hsl(0, 77%, 60%);
    --dim-gray: hsl(0, 0%, 39%);
    --davys-gray: hsl(0, 0%, 30%);
    --spanish-gray: hsl(0, 0%, 62%);
    --quick-silver: hsl(0, 0%, 64%);

    /**
 * Typography
 */

    --fs-28: 28px;
    --fs-24: 24px;
    --fs-18: 18px;
    --fs-15: 15px;
    --fs-14: 14px;

    --fw-5: 500;
    --fw-6: 600;
    --fw-7: 700;

    --px: 60px;
    --radius: 5px;

  }

  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html {
    font-family: 'Source Sans 3', sans-serif;
  }

  a {
    color: inherit;
    text-decoration: none;
  }

  button {
    border: none;
    background: none;
    font: inherit;
    cursor: pointer;
  }

  ion-icon,
  span {
    display: inline-block;
  }

  label,
  img {
    display: block;
  }

  input {
    font: inherit;
    width: 100%;
    border: none;
  }

  input:focus {
    outline: 2px solid var(--azure);
  }

  /**
* Remove number input up & down button
*/
  input::-webkit-inner-spin-button,
  input::-webkit-outer-spin-button {
    appearance: none;
    -webkit-appearance: none;
    margin: 0;
  }

  /**
* Custom scrollbar style
*/
  ::-webkit-scrollbar {
    width: 8px;
  }

  ::-webkit-scrollbar-track {
    background: transparent;
  }

  ::-webkit-scrollbar-thumb {
    background: hsl(0, 0%, 80%);
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: hsl(0, 0%, 70%);
  }

  .container {
    max-width: 1440px;
    min-height: 100vh;
    margin: auto;
    display: flex;
    flex-direction: column;
  }

  .heading {
    font-size: var(--fs-28);
    font-weight: var(--fw-6);
    color: var(--onyx);
    border-bottom: 1px solid var(--gainsboro);
    padding: 20px var(--px);
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .heading ion-icon {
    font-size: 40px;
  }

  .item-flex {
    display: flex;
    flex-grow: 1;
  }

  .checkout {
    width: 70%;
    padding: 40px var(--px);
    background: var(--white);
    border-right: 1px solid var(--gainsboro);
  }

  .section-heading {
    color: var(--onyx);
    margin-bottom: 30px;
    font-size: var(--fs-24);
    font-weight: var(--fw-5);
  }

  .payment-form {
    margin-bottom: 40px;
  }

  .payment-method {
    display: flex;
    align-items: center;
    gap: 30px;
    margin-bottom: 40px;
  }

  .payment-method .method {
    border: 1px solid var(--quick-silver);
    border-radius: var(--radius);
    width: 50%;
    display: flex;
    align-items: center;
    padding: 15px 30px;
    gap: 20px;
    cursor: pointer;
  }

  .payment-method .selected {
    border-color: var(--azure);
  }

  .payment-method .method ion-icon {
    font-size: 20px;
  }

  .payment-method .method .checkmark {
    margin-left: auto;
    color: var(--quick-silver);
  }

  .payment-method .method .fill {
    color: var(--azure);
  }

  .label-default {
    padding-left: 10px;
    margin-bottom: 5px;
    font-size: var(--fs-14);
    color: var(--spanish-gray);
  }

  .input-default {
    background: var(--platinum);
    border-radius: var(--radius);
    color: var(--davys-gray);
  }

  .payment-form input {
    padding: 10px 15px;
    font-size: var(--fs-18);
    font-weight: var(--fw-5);
  }

  .cardholder-name,
  .card-number {
    margin-bottom: 20px;
  }

  .card-number input,
  .cvv input {
    letter-spacing: 3px;
  }

  .input-flex {
    display: flex;
    align-items: center;
    gap: 30px;
  }

  .input-flex .expire-date,
  .input-flex .cvv {
    width: 50%;
  }

  .expire-date .input-flex {
    color: var(--spanish-gray);
    gap: 13px;
  }

  .expire-date .input-flex input {
    text-align: center;
  }

  .btn {
    border-radius: var(--radius);
  }

  .btn:active {
    transform: scale(0.99);
  }

  .btn:focus {
    color: var(--white);
    background: var(--azure);
    outline: 2px solid var(--azure);
    outline-offset: 2px;
  }

  .btn-primary {
    background: var(--azure);
    font-weight: var(--fw-5);
    color: var(--white);
    padding: 13px 45px;
  }

  .btn-primary b {
    margin-right: 10px;
  }

  .cart {
    width: 40%;
    display: flex;
    flex-direction: column;
  }

  .cart-item-box {
    padding: 40px var(--px);
    margin-bottom: auto;
  }

  .product-card:not(:last-child) {
    margin-bottom: 20px;
  }

  .product-card .card {
    position: relative;
    display: flex;
    align-items: flex-start;
    gap: 20px;
  }

  .card .product-img {
    border-radius: var(--radius);
  }

  .card .detail .product-name {
    font-weight: var(--fw-6);
    font-size: var(--fs-15);
    color: var(--dim-gray);
    margin-bottom: 10px;
  }

  .card .detail .wrapper {
    display: flex;
    gap: 20px;
  }

  .product-qty {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .product-qty button {
    background: var(--platinum);
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .product-qty button:active,
  .product-close-btn:active ion-icon {
    transform: scale(0.95);
  }

  .product-qty button ion-icon {
    --ionicon-stroke-width: 60px;
    font-size: 10px;
  }

  .product-close-btn {
    position: absolute;
    top: 0;
    right: 0;
  }

  .product-close-btn ion-icon {
    font-size: 25px;
    color: var(--quick-silver);
  }

  .product-close-btn:hover ion-icon {
    color: var(--red-salsa);
  }

  .discount-token {
    padding: 40px var(--px);
    border-top: 1px solid var(--gainsboro);
    border-bottom: 1px solid var(--gainsboro);
  }

  .wrapper-flex {
    display: flex;
    align-items: center;
    gap: 30px;
  }

  .wrapper-flex input {
    padding: 12px 15px;
    font-weight: var(--fw-6);
    letter-spacing: 2px;
  }

  .btn-outline {
    padding: 10px 25px;
    border: 1px solid var(--azure);
    color: var(--azure);
  }

  .btn-outline:hover {
    background: var(--azure);
    color: var(--white);
  }

  .amount {
    padding: 40px var(--px);
  }

  .amount>div {
    display: flex;
    justify-content: space-between;
  }

  .amount>div:not(:last-child) {
    margin-bottom: 10px;
  }

  .amount .total {
    font-size: var(--fs-18);
    font-weight: var(--fw-7);
    color: var(--onyx);
  }

  @media (max-width: 1200px) {

    .item-flex {
      flex-direction: column-reverse;
    }

    /**
 * checkout section responsive 
 */

    .checkout {
      width: 100%;
      border-right: none;
    }

    .btn-primary {
      width: 100%;
    }

    /**
 * cart section responsive
 */

    .cart {
      display: grid;
      grid-template-columns: 1fr 1fr;
      width: 100%;
      border-bottom: 1px solid var(--gainsboro);
    }

    .cart .wrapper {
      margin-top: auto;
    }

    .cart .cart-item-box {
      border-right: 1px solid var(--gainsboro);
      margin-bottom: 0;
    }

    .discount-token {
      border-top: none;
    }

  }





  @media (max-width: 768px) {

    :root {
      --px: 40px;
    }

    .cart {
      grid-template-columns: 1fr;
    }

    .discount-token {
      border-top: 1px solid var(--gainsboro);
    }

    .wrapper-flex {
      gap: 20px;
    }

  }





  @media (max-width: 567px) {

    :root {
      --px: 20px;
    }

    .payment-method,
    .input-flex {

      flex-direction: column;
      gap: 20px;
    }

    .payment-method .method {
      width: 100%;
    }

    .input-flex .expire-date,
    .input-flex .cvv {
      width: 100%;
    }

    .expire-date .input-flex {
      flex-direction: row;
    }

  }
</style>

<body>


  <!--
    - main container
  -->

  <main class="container">

    <h1 class="heading">
      <ion-icon name="cart-outline"></ion-icon> Shopping Cart
    </h1>

    <div class="item-flex">

      <!--
       - checkout section
      -->
      <section class="checkout">

        <h2 class="section-heading">Payment Details</h2>

        <div class="payment-form">

          <div class="payment-method">

            <button class="method selected">
              <ion-icon name="card"></ion-icon>

              <span>Credit Card</span>

              <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
            </button>
          <form  class="method" method="post" enctype="application/x-www-form-urlencoded" action="thanhtoan/xulythanhtoanmomo.php">
          <input type="hidden" value="<?php echo $money?>" name="money">    
          <button type="submit" style="display:flex; align-items:center; justify-content: space-between ">
             <div style="display:flex; align-items:center; ">
             <img src="../upload/momo.png" alt="" width="16px">
             <span>Momo</span>
             </div>
              <ion-icon class="checkmark" name="checkmark-circle-outline"></ion-icon>
            </button>
          </div>
          </form>
          <form action="#">

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default">Cardholder name</label>
              <input type="text" name="cardholder-name" id="cardholder-name" class="input-default">
            </div>
            <div class="card-number">
              <label for="card-number" class="label-default">Card number</label>
              <input type="number" name="card-number" id="card-number" class="input-default">
            </div>
            <div class="input-flex">

              <div class="expire-date">
                <label for="expire-date" class="label-default">Expiration date</label>

                <div class="input-flex">

                  <input type="number" name="day" id="expire-date" placeholder="31" min="1" max="31" class="input-default">

                  <input type="number" name="month" id="expire-date" placeholder="12" min="1" max="12" class="input-default">

                </div>
              </div>

              <div class="cvv">
                <label for="cvv" class="label-default">CVV</label>
                <input type="number" name="cvv" id="cvv" class="input-default">
              </div>

            </div>

          </form>

        </div>

        <button class="btn btn-primary">
          <b>Pay</b> $ <span id="payAmount">2000</span>
        </button>

      </section>


      <!--
        - cart section
      -->
      <section class="cart">

        <div class="cart-item-box">

          <h2 class="section-heading">Order Summery</h2>

          <div class="product-card">
            <?php
                $tong=0;
                $i=0;
                foreach ($_SESSION['cart'] as $product) {
                    $ttien=$product[3]*$product[4];
                    $tong+=$ttien;
                    echo '
                    <div class="card">

                    <div class="img-box">
                      <img src="' . $product[2] . '" alt="Cabbage" width="100px" class="product-img">
                    </div>
      
                    <div class="detail">
      
                      <h4 class="product-name">' . $product[1] . '</h4>
      
                      <div class="wrapper">
      
                        <div class="product-qty">
                          <button id="decrement">
                            <ion-icon name="remove-outline"></ion-icon>
                          </button>
      
                          <span name="quantity">' . $product[4] . '</span>
      
                          <button id="increment">
                            <ion-icon name="add-outline"></ion-icon>
                          </button>
                        </div>
      
                        <div class="price">
                          $ <span id="price">' . $product[3] . '</span>
                        </div>
                      </div>
      
                    </div>
      
                    <button class="product-close-btn">
                      <ion-icon name="close-outline"></ion-icon>
                    </button>
      
                  </div>
               ';
            }   ?>

          </div>

        </div>

        <div class="wrapper">

          <div class="discount-token">

            <label for="discount-token" class="label-default">Gift card/Discount code</label>

            <div class="wrapper-flex">

              <input type="text" name="discount-token" id="discount-token" class="input-default">

              <button class="btn btn-outline">Apply</button>

            </div>

          </div>

          <div class="amount">

            <div class="subtotal">
              <span>Subtotal</span> <span>$ <span id="subtotal"><?= $tong ?></span></span>
            </div>

            <div class="tax">
              <span>Tax</span> <span>$ <span id="tax">0.00</span></span>
            </div>

            <div class="shipping">
              <span>Shipping</span> <span>$ <span id="shipping">0.00</span></span>
            </div>

            <div class="total">
              <span>Total</span> <span>$ <span id="total"><?= $tong ?></span></span>
            </div>

          </div>

        </div>

      </section>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script>
    'use strict';

    // all initial elements
    const payAmountBtn = document.querySelector('#payAmount');
    const decrementBtn = document.querySelectorAll('#decrement');
    const quantityElem = document.querySelectorAll('#quantity');
    const incrementBtn = document.querySelectorAll('#increment');
    const priceElem = document.querySelectorAll('#price');
    const subtotalElem = document.querySelector('#subtotal');
    const taxElem = document.querySelector('#tax');
    const totalElem = document.querySelector('#total');


    // loop: for add event on multiple `increment` & `decrement` button
    for (let i = 0; i < incrementBtn.length; i++) {

      incrementBtn[i].addEventListener('click', function() {

        // collect the value of `quantity` textContent,
        // based on clicked `increment` button sibling.
        let increment = Number(this.previousElementSibling.textContent);

        // plus `increment` variable value by 1
        increment++;

        // show the `increment` variable value on `quantity` element
        // based on clicked `increment` button sibling.
        this.previousElementSibling.textContent = increment;

        totalCalc();

      });


      decrementBtn[i].addEventListener('click', function() {

        // collect the value of `quantity` textContent,
        // based on clicked `decrement` button sibling.
        let decrement = Number(this.nextElementSibling.textContent);

        // minus `decrement` variable value by 1 based on condition
        decrement <= 1 ? 1 : decrement--;

        // show the `decrement` variable value on `quantity` element
        // based on clicked `decrement` button sibling.
        this.nextElementSibling.textContent = decrement;

        totalCalc();

      });

    }



    // function: for calculating total amount of product price
    const totalCalc = function() {

      // declare all initial variable
      const tax = 0.05;
      let subtotal = 0;
      let totalTax = 0;
      let total = 0;

      // loop: for calculating `subtotal` value from every single product
      for (let i = 0; i < quantityElem.length; i++) {

        subtotal += Number(quantityElem[i].textContent) * Number(priceElem[i].textContent);

      }

      // show the `subtotal` variable value on `subtotalElem` element
      subtotalElem.textContent = subtotal.toFixed(2);

      // calculating the `totalTax`
      totalTax = subtotal * tax;

      // show the `totalTax` on `taxElem` element
      taxElem.textContent = totalTax.toFixed(2);

      // calcualting the `total`
      total = subtotal + totalTax;

      // show the `total` variable value on `totalElem` & `payAmountBtn` element
      totalElem.textContent = total.toFixed(2);
      payAmountBtn.textContent = total.toFixed(2);

    }
  </script>

  <!--
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
