// SIMPLE MODAL
function initModal(options = {
    modalSelector: "",
    openClass: [],
    closeClass: [],
    modalOpenedClass: ""
}) {
    if (options.modalSelector && options.openClass.length && options.closeClass.length && options.modalOpenedClass) {


        const modalWindow = document.querySelector(options.modalSelector)
        const openModal = () => modalWindow.classList.add(options.modalOpenedClass)
        const closeModal = () => modalWindow.classList.remove(options.modalOpenedClass)

        document.querySelectorAll(options.openClass).forEach(item => {
            item.onclick = openModal
        })
        document.querySelectorAll(options.closeClass).forEach(item => {
            item.onclick = closeModal
        })

        try {
            const modalContent = modalWindow.querySelector('.modal-content')
            modalContent.onclick = e => e.stopPropagation()
        } catch (e) {
            console.log("Error: Tik modal: не найден класс modal-content ")
        }
    }
}

