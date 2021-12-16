function onLoadCartNumbers (){
     var productNumbers = localStorage.getItem('cartNumbers');

     if ( productNumbers ) {
          document.querySelector('#numbersCart span').textContent = productNumbers;
          document.querySelector('#cartNumber span').textContent = productNumbers;
     }

     console.log(productNumbers);
}
onLoadCartNumbers();