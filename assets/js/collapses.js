document.addEventListener("DOMContentLoaded", () => {
    const allCollapses = document.querySelectorAll(".collapse__block > button")
    allCollapses.forEach(item => {
        item.addEventListener('click',(e) => {
            setTimeout(() => {
                const plus = item.querySelector(".service__item_btn img")
                const collapseOpened = item.parentNode.children[1].classList.contains("show")
                if(collapseOpened) {
                    plus.classList.add("service__item_opened")
                    return
                }
                plus.classList.remove("service__item_opened")
            }, 400)

        })
    })
})