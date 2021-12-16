function onLoadCartNumbers (){
     var productNumbers = localStorage.getItem('cartNumbers');

     if ( productNumbers ) {
          document.querySelector('#numbersCart span').textContent = productNumbers;
          document.querySelector('#giohangTitle').textContent = productNumbers;
     }
}

function displayCart() {
     let cartItems = localStorage.getItem("productsInCart");
     cartItems = JSON.parse(cartItems)
     let cartContainer = document.querySelector(".cart-container");
     let cartCost = localStorage.getItem('totalCost');
     cartCost = parseFloat(cartCost);

     if (cartItems && cartContainer){
          cartContainer.innerHTML = '';
          Object.values(cartItems).map(item => {
               item.price = parseFloat(item.price);
               cartContainer.innerHTML += `
               <div>
                    <div class="left-content">
                         <div class="cart-img">
                              <img class="cart-img" src="../../uploads/${item.img}">
                         </div>
                         <div class="cart-desc">
                              <h2 class="product-name">${item.name}</h2>

                              <div class="sku">
                                   <span class="desc-title">
                                        SKU:
                                   </span>

                                   <span class="desc-text">
                                        ${item.sku}
                                   </span>
                              </div>

                              <div class="quantity">
                                   <span class="quantity-number">
                                        Số lượng:
                                        <input type="number" min="1" max="5" value="${item.inCart}">
                                   </span>
                                   <span class="quantity-delete" id="deleteItem">
                                        Xóa
                                   </span>
                              </div>

                              <div class="gift-cart">
                                   <div>
                                        <i class="fas fa-gift desc-icon"></i>
                                        <span class="desc-title">
                                             Ưu đãi khi mua kèm
                                        </span>
                                   </div>

                                   <div class="sku">
                                        <span class="desc-title gia">
                                             Giá:
                                        </span>

                                        <span class="desc-text cart-price">
                                             ${item.price * item.inCart} Triệu
                                        </span>
                                   </div>

                                   <div class="gift-cart-info">
                                        <i class="fas fa-info-circle desc-icon"></i>
                                        <span>
                                             Giảm
                                        </span>
                                        <Span class="price-desc">
                                             20%
                                        </Span>
                                        <span>
                                             , áp dụng tối đa 1 sản phẩm thuộc Phụ kiện giảm giá 20% mua kèm Laptop
                                        </span>
                                   </div>
                                   
                              </div>
                         </div>

                    </div>
               </div>
               `
          });

          cartContainer.innerHTML += `
               <div class="right-content">
                    <div class="tam-tinh">
                         <span>
                              Tạm tính:
                         </span>
                         <span>
                              ${cartCost} Triệu
                         </span>
                    </div>

                    <div class="thanh-tien">
                         <span>
                              Thành tiền:
                         </span>
                         <span class="red-text">
                              ${cartCost} Triệu
                         </span>
                    </div>

                    <div class="dat-hang">
                         <div class="dat-hang-buttom">
                              <a href="./info.php">
                                   Tiến hành đặt hàng
                              </a>
                         </div>

                         <div class="tra-gop-buttom">
                              <p>
                                   Tính trả góp
                              </p>
                         </div>
                    </div>
               </div>
               `
     };
};

// var deleteItems = document.getElementById('deleteItem');


// deleteItems.addEventListener('click', () => {
//      console.log("clicked");
// })


onLoadCartNumbers();
displayCart();