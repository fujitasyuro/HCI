var icon = document.querySelectorAll(".righttcont i")
var view_wraps = document.querySelectorAll(".view_wrap")

icon.forEach(function(link) {
     link.addEventListener("click", function() {

          icon.forEach(function(item) {
               item.classList.remove("icon-view-active")
          })
          
          link.classList.add("icon-view-active")

          var icon_click= link.getAttribute("view-data")

          view_wraps.forEach(function(view) {
               view.style.display = "none";
          })

          if (icon_click == "grid-view") {
               document.querySelector("." + icon_click).style.display = "grid";
          }
          else {
               document.querySelector("." + icon_click).style.display = "block";
          }
     })
})