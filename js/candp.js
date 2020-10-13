window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("site-header").style.transition = "top 0.3s";
		document.getElementById("site-header").style.setProperty("top", "0%", "important")
    } else {
        document.getElementById("site-header").style.transition = "top 1s";
        document.getElementById("site-header").style.setProperty("top", "-100%", "important")
    }
}