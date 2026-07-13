function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' })
}

window.onscroll = function () {
    const btnBackIoTop = document.getElementById("backToTop")

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        btnBackIoTop.style.display = "block"
    } else {
        btnBackIoTop.style.display = "none"
    }
}