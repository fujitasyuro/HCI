const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const tabs = $$('.tab-item')
const panes = $$('.thongtingiohang')

const tabActive = $('.tab-item.active-tab')
const line = $('.line')

line.style.left = tabActive.offsetLeft + 'px'
line.style.width = tabActive.offsetWidth + 'px'

tabs.forEach((tab, index) => {
     const pane = panes[index]

     tab.onclick = function () {
          $('.thongtingiohang.active-content').classList.remove('active-content')
          $('.tab-item.active-tab').classList.remove('active-tab')

          line.style.left = this.offsetLeft + 'px'
          line.style.width = this.offsetWidth + 'px'

          this.classList.add('active-tab')
          pane.classList.add('active-content')
     }
})