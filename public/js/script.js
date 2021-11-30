const mobileButton = document.querySelector('[data-mobile-button]')
const mobileMenu = document.querySelector('[data-mobile]')

mobileButton.addEventListener("click", e => {
  mobileMenu.classList.toggle('open')
  setTimeout(() => {
    document.body.classList.toggle('noscroll')
  }, 200)
})