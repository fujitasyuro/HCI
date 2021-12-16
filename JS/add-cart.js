let carts = document.getElementById('add-cart');

let nameProduct = document.getElementById('name').innerText;
let priceProduct = document.getElementById('price').innerText;
let saleProduct = document.getElementById('sale').innerText;
let skuProduct = document.getElementById('sku').innerText;
let idProduct = document.getElementById('idProduct').innerText;
let imgProduct = document.getElementById('img').innerText;

let products = [
     {
          name: nameProduct,
          id: idProduct,
          price: priceProduct,
          sale: saleProduct,
          sku: skuProduct,
          inCart: 0,
          img: imgProduct
     }
];

for (let i = 0; i < 1; i++) {
     carts.addEventListener('click', () => {
          cartNumbers( products[i]);
          totalCost(products[i]);
     })
}

function onLoadCartNumbers (){
     let productNumbers = localStorage.getItem('cartNumbers');

     if ( productNumbers ) {
          document.querySelector('#numbersCart span').textContent = productNumbers;
     }
}

function cartNumbers (product) {
     let productNumbers = localStorage.getItem('cartNumbers');

     productNumbers = parseInt(productNumbers);

     if ( productNumbers ) {
     localStorage.setItem('cartNumbers', productNumbers + 1);
     document.querySelector('#numbersCart span').textContent = productNumbers + 1;
     } else {
     localStorage.setItem('cartNumbers',1);
     document.querySelector('#numbersCart span').textContent = 1;
     }

     setItems(product);
}

function setItems (product) {
     let cartItems = localStorage.getItem('productsInCart');
     cartItems = JSON.parse(cartItems);

     if (cartItems != null) {  
          if (cartItems[product.id] == undefined) {
               cartItems = {
                    ...cartItems,
                    [product.id]: product
               }
          }
          cartItems[product.id].inCart += 1;
     } else {
          product.inCart = 1;
          cartItems = {
               [product.id]: product
          }
     }

     localStorage.setItem("productsInCart", JSON.stringify(cartItems))
}

function totalCost(product){
     let cartCost = localStorage.getItem('totalCost');

     if (cartCost != null) {
          cartCost = parseFloat(cartCost);
          product.price = parseFloat(product.price);

          localStorage.setItem("totalCost", cartCost + product.price);
     } else {
          localStorage.setItem("totalCost", product.price)
     }

}

onLoadCartNumbers();