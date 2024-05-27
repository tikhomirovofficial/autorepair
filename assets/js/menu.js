document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menu-btn")
    const menuClose = document.getElementById("menu-close")
    const menuBlock = document.getElementById("menu-block")
    const allLinksMenu = menuBlock.querySelectorAll("a")

    const openMenu = () => menuBlock.classList.add("menu__opened")
    const closeMenu = () => menuBlock.classList.remove("menu__opened")

    allLinksMenu.forEach(item => {
        item.addEventListener("click", closeMenu)
    })
    menuBtn.onclick = openMenu
    menuClose.onclick = closeMenu
})