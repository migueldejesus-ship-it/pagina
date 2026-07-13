! function(e) { "function" == typeof define && define.amd ? define(e) : e() }(function() {
    var e, t = ["scroll", "wheel", "touchstart", "touchmove", "touchenter", "touchend", "touchleave", "mouseout", "mouseleave", "mouseup", "mousedown", "mousemove", "mouseenter", "mousewheel", "mouseover"];
    if (function() {
            var e = !1;
            try {
                var t = Object.defineProperty({}, "passive", { get: function() { e = !0 } });
                window.addEventListener("test", null, t), window.removeEventListener("test", null, t)
            } catch (e) {}
            return e
        }()) {
        var n = EventTarget.prototype.addEventListener;
        e = n, EventTarget.prototype.addEventListener = function(n, o, r) {
            var i, s = "object" == typeof r && null !== r,
                u = s ? r.capture : r;
            (r = s ? function(e) { var t = Object.getOwnPropertyDescriptor(e, "passive"); return t && !0 !== t.writable && void 0 === t.set ? Object.assign({}, e) : e }(r) : {}).passive = void 0 !== (i = r.passive) ? i : -1 !== t.indexOf(n) && !0, r.capture = void 0 !== u && u, e.call(this, n, o, r)
        }, EventTarget.prototype.addEventListener._original = e
    }
});

document.addEventListener("DOMContentLoaded", function() {
    class LiteYTEmbed extends HTMLElement {
        connectedCallback() {
            this.videoId = this.getAttribute('videoid');
            let playBtnEl = this.querySelector('.lty-playbtn');
            this.playLabel = (playBtnEl && playBtnEl.textContent.trim()) || this.getAttribute('playlabel') || 'Play';
            if (!this.style.backgroundImage) {
                this.style.backgroundImage = `url("https://i.ytimg.com/vi/${this.videoId}/hqdefault.jpg")`;
            }

            if (!playBtnEl) {
                playBtnEl = document.createElement('button');
                playBtnEl.type = 'button';
                playBtnEl.classList.add('lty-playbtn');
                this.append(playBtnEl);
            }
            if (!playBtnEl.textContent) {
                const playBtnLabelEl = document.createElement('span');
                playBtnLabelEl.className = 'lyt-visually-hidden';
                playBtnLabelEl.textContent = this.playLabel;
                playBtnEl.append(playBtnLabelEl);
            }

            this.addEventListener('pointerover', LiteYTEmbed.warmConnections, { once: true });

            this.addEventListener('click', this.addIframe);
        }

        static addPrefetch(kind, url, as) {
            const linkEl = document.createElement('link');
            linkEl.rel = kind;
            linkEl.href = url;
            if (as) {
                linkEl.as = as;
            }
            document.head.append(linkEl);
        }

        static warmConnections() {
            if (LiteYTEmbed.preconnected) return;

            LiteYTEmbed.addPrefetch('preconnect', 'https://www.youtube.com');
            LiteYTEmbed.addPrefetch('preconnect', 'https://www.google.com');

            LiteYTEmbed.addPrefetch('preconnect', 'https://googleads.g.doubleclick.net');
            LiteYTEmbed.addPrefetch('preconnect', 'https://static.doubleclick.net');

            LiteYTEmbed.preconnected = true;
        }

        addIframe(e) {
            if (this.classList.contains('lyt-activated')) return;
            e.preventDefault();
            this.classList.add('lyt-activated');

            const params = new URLSearchParams(this.getAttribute('params') || []);
            params.append('autoplay', '1');
            params.append('enablejsapi', '1');

            const iframeEl = document.createElement('iframe');
            iframeEl.width = 500;
            iframeEl.height = 400;
            iframeEl.title = this.playLabel;
            iframeEl.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
            iframeEl.allowFullscreen = true;
            iframeEl.src = `https://www.youtube.com/embed/${encodeURIComponent(this.videoId)}?${params.toString()}`;
            this.append(iframeEl);

            iframeEl.focus();
        }
    }
    customElements.define('lite-youtube', LiteYTEmbed);
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyloadImages.forEach(function(image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = document.querySelectorAll(".lazy");

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if (img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });
                if (lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    }

    document.querySelectorAll('.dropdown-menu').forEach(function(element) {
        element.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    })
    if (window.innerWidth < 1417) {
        $(function() {
            $('#modalFrame').on('hidden.bs.modal', function(event) {
                var iframes = document.querySelectorAll('iframe');
                Array.prototype.forEach.call(iframes, iframe => {
                    iframe.contentWindow.postMessage(JSON.stringify({
                        event: 'command',
                        func: 'pauseVideo'
                    }), '*');
                });
            })
        });
        document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
            everydropdown.addEventListener('hidden.bs.dropdown', function() {
                this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                    everysubmenu.style.display = 'none';
                });
            })
        });
        document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
            element.addEventListener('click', function(e) {
                let nextEl = this.nextElementSibling;
                if (nextEl && nextEl.classList.contains('submenu')) {
                    e.preventDefault();
                    if (nextEl.style.display == 'block') {
                        nextEl.style.display = 'none';
                    } else {
                        nextEl.style.display = 'block';
                    }
                }
            });
        })
    }


});
if ($.fn.owlCarousel) {
    var carouselNoticias = $(".carouselNoticias");
    carouselNoticias.owlCarousel({
        items: 2,
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        margin: 10,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 1,
                margin: 4,
            },
            992: {
                items: 1,
                margin: 4,
            },
            1200: {
                items: 1,
                margin: 5,
            },
            1400: {
                items: 1,
                margin: 12,
            },
            1450: {
                items: 1,
                margin: 12,
            },
            1500: {
                items: 2,
                margin: 12,
            }
        },
        nav: true,
        navText: [
            '<i class="fas fa-angle-left" aria-hidden="true"></i>',
            '<i class="fas fa-angle-right" aria-hidden="true"></i>'
        ],
        navContainer: '#divCarouselNoticias .custom-nav',
    });
}

// $('#divCarouselBanner .carouselBanner').owlCarousel({
//     loop: true,
//     autoplay: true,
//     autoplayTimeout: 7000,
//     autoplayHoverPause: true,
//     responsive: {
//         0: {
//             items: 1,
//         },
//         576: {
//             items: 2,
//         },
//         768: {
//             items: 2,
//             margin: 30,
//         },
//         992: {
//             items: 3,
//             margin: 30,
//         },
//         1200: {
//             items: 4
//         },
//         1400: {
//             items: 4
//         }
//     },
//     nav: true,
//     navText: [
//         '<i class="fas fa-angle-left" aria-hidden="true"></i>',
//         '<i class="fas fa-angle-right" aria-hidden="true"></i>'
//     ],
//     navContainer: '#divCarouselBanner .custom-nav',
// })

$('#divCarouselImagen').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 7000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 2,
        },
        768: {
            items: 2,
            margin: 30,
        },
        992: {
            items: 3,
            margin: 30,
        },
        1200: {
            items: 4
        },
        1400: {
            items: 4
        }
    },
    nav: true,
    navText: [
        '<i class="fas fa-angle-left" aria-hidden="true"></i>',
        '<i class="fas fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '#divCarouselImagen .custom-nav',
})

$(document).ready(function() {
    var dotNoticiaActiva = $('#divCarouselNoticias .owl-dot.active');
    dotNoticiaActiva.attr('aria-label', 'Dot Noticia Activa');

    var dotNoticia = $('#divCarouselNoticias .owl-dot');
    dotNoticia.attr('aria-label', 'Dot de noticia');

    var noticiaAnterior = $('#divCarouselNoticias .owl-prev');
    noticiaAnterior.attr('aria-label', 'Noticia anterior');

    var noticiaSiguiente = $('#divCarouselNoticias .owl-next');
    noticiaSiguiente.attr('aria-label', 'Noticia siguiente');


    // var dotNoticiaActiva = $('#divCarouselBanner .owl-dot.active');
    // dotNoticiaActiva.attr('aria-label', 'Dot Banner Activa');

    // var dotNoticia = $('#divCarouselBanner .owl-dot');
    // dotNoticia.attr('aria-label', 'Dot de Banners');

    // var noticiaAnterior = $('#divCarouselBanner .owl-prev');
    // noticiaAnterior.attr('aria-label', 'Banner anterior');

    // var noticiaSiguiente = $('#divCarouselBanner .owl-next');
    // noticiaSiguiente.attr('aria-label', 'Banner siguiente');


    var dotNoticiaActiva = $('#divCarouselImagen .owl-dot.active');
    dotNoticiaActiva.attr('aria-label', 'Dot Banner Activa');

    var dotNoticia = $('#divCarouselImagen .owl-dot');
    dotNoticia.attr('aria-label', 'Dot de Banners');

    var noticiaAnterior = $('#divCarouselImagen .owl-prev');
    noticiaAnterior.attr('aria-label', 'Banner anterior');

    var noticiaSiguiente = $('#divCarouselImagen .owl-next');
    noticiaSiguiente.attr('aria-label', 'Banner siguiente');


    $("#redes a").each(function() {
        var tipt = $(this).attr('title');
        $(this).attr('title', '');
        $(this).append('<span>');
        $(this).children('span').text(tipt);
        var spanWidth = $(this).children('span').width() + 20;
        var spanMarg = 0 - spanWidth / 2;
        $(this).children('span').css('width', spanWidth);
        $(this).children('span').css('margin-left', spanMarg);
        $(this).hover(
            function() {
                $(this).children('span').fadeIn();
                $('#redes a').css('opacity', '.1');
                $(this).css('opacity', '1');
            },
            function() {
                $(this).children('span').fadeOut();
                $('#redes a').css('opacity', '1');
            }
        );
    });
});

const cambiarModoDiv = document.querySelector('.itemAcceso .cambiarModo');
const imgLogo = document.querySelector('.tamaniologo');
const cambiarInterlineadoDiv = document.querySelector('.itemAcceso .cambiarInterlineado');
const cambiarRealceDiv = document.querySelector('.itemAcceso .cambiarRealce');
const cambiarCursorDiv = document.querySelector('.itemAcceso .cambiarCursor');
const cambiarTamañoTextoDiv = document.querySelector('.itemAcceso .cambiarTamañoTexto');
let imagenblanco = 0;

const divsAcces = document.querySelectorAll('.divAccesibilidad');
const btnFlotante = document.querySelector('.btn-flotante');

let auxVisibilidad = 0;

function visibilidad() {
    if (auxVisibilidad == 0) {
        document.querySelector('.check2').classList.add('invisible');
    } else {
        document.querySelector('.check2').classList.remove('invisible');
    }
}


cambiarModoDiv.addEventListener('click', (event) => {

    const elemento = event.target.parentElement.parentElement;
    const check = elemento.querySelector('.fa-check');
    divsAcces.forEach(function(userItem) {
        userItem.classList.toggle("oscuro");
        console.log("oscuro 1")
    });
    btnFlotante.classList.toggle("oscuro");
    check.classList.toggle("invisible");
    imgLogo.classList.toggle("toggleImg");
    document.querySelectorAll('.linea').forEach(function(userItem) {
        userItem.classList.toggle("toggleLinea");
        console.log("oscuro 2")
    });
    document.querySelectorAll('.fa-bars').forEach(function(userItem) {
        userItem.classList.toggle("text-white");
        console.log("oscuro 3")
    });
    document.querySelectorAll('.seccion1, .seccionOpiniones').forEach(function(userItem) {
        userItem.classList.toggle("sinImagen");
        console.log("oscuro 4")
    });
    if (imagenblanco == 0) {
        imagenblanco = 1;
        document.getElementById('1').src = "vistas/img/sitios-interes/logo-ine_blanco.png";
        document.getElementById('2').src = "vistas/img/sitios-interes/tepjfblanco.png";
        document.getElementById('3').src = "vistas/img/sitios-interes/logomini_blanco.png";
        document.getElementById('4').src = "vistas/img/sitios-interes/logoheader_blanco.png";
        document.getElementById('5').src = "vistas/img/sitios-interes/plataformanue_blanco.png";
        document.getElementById('6').src = "vistas/img/sitios-interes/ITAIP_blanco.png";
    } else if (imagenblanco == 1) {
        imagenblanco = 0;
        document.getElementById('1').src = "vistas/img/sitios-interes/logo-ine.png";
        document.getElementById('2').src = "vistas/img/sitios-interes/tepjf_logo.svg";
        document.getElementById('3').src = "vistas/img/sitios-interes/logomini.png";
        document.getElementById('4').src = "vistas/img/sitios-interes/logoheader.png";
        document.getElementById('5').src = "vistas/img/sitios-interes/plataformanue.png";
        document.getElementById('6').src = "vistas/img/sitios-interes/ITAIP.png";
    }
});

cambiarInterlineadoDiv.addEventListener('click', (event) => {
    const elemento = event.target.parentElement.parentElement;
    const check = elemento.querySelector('.fa-check');
    divsAcces.forEach(function(userItem) {
        userItem.classList.toggle("interlineado");
    });
    check.classList.toggle("invisible");
});

cambiarRealceDiv.addEventListener('click', (event) => {
    const elemento = event.target.parentElement.parentElement;
    const check = elemento.querySelector('.fa-check');
    divsAcces.forEach(function(userItem) {
        userItem.classList.toggle("realce");
    });
    check.classList.toggle("invisible");
});

cambiarCursorDiv.addEventListener('click', (event) => {
    const elemento = event.target.parentElement.parentElement;
    const check = elemento.querySelector('.fa-check');
    document.querySelector('body, *').classList.toggle("cursorGrande");
    document.querySelectorAll('a, .card-img-overlay, .card__image, .cardSitios, .cardSitios img, .owl-prev i, .owl-next i, .carousel-dark carousel-control-next-icon, .carousel-dark carousel-control-prev-icon, .btnIEE, .item .cardBanner, .owl-theme .owl-dots .owl-dot span, .form-check-input, .form-check-label, .carousel-dark .carousel-control-prev-icon, .carousel-dark .carousel-control-next-icon, .carousel-dark .carousel-indicators [data-bs-target], .owl-dot, .btn-flotante, .itemAcceso, .cardAcces, .card-body, .owl-next, .owl-prev, .carousel-control-prev, .carousel-control-next').forEach(function(userItem) {
        userItem.classList.toggle("manoGrande");
    });
    document.querySelectorAll('.form-control').forEach(function(userItem) {
        userItem.classList.toggle("cursorTexto");
    });
    check.classList.toggle("invisible");
});

const indicadores = document.querySelector('.indicadoresTexto');
indicadores.classList.add('invisible');

var conteo = 0;
cambiarTamañoTextoDiv.addEventListener('click', (event) => {
    const elemento = event.target.parentElement.parentElement;
    const check = elemento.querySelector('.fa-check');

    const btn2 = elemento.querySelector('.btn2');
    const btn3 = elemento.querySelector('.btn3');

    switch (conteo) {
        case 0:
            divsAcces.forEach(function(userItem) {
                userItem.classList.toggle("tamaño-letra1");
                check.classList.remove("invisible");
                indicadores.classList.remove('invisible');
                indicadores.classList.add('visible');
                conteo = 1;
            });
            break;
        case 1:
            divsAcces.forEach(function(userItem) {
                userItem.classList.toggle("tamaño-letra2");
                check.classList.remove("invisible");
                btn2.classList.add("active");
                conteo = 2;
            });
            break;
        case 2:
            divsAcces.forEach(function(userItem) {
                userItem.classList.toggle("tamaño-letra3");
                check.classList.remove("invisible");
                btn3.classList.add("active");
                conteo = 10;
            });
            break;
        default:
            divsAcces.forEach(function(userItem) {
                userItem.classList.remove("tamaño-letra1");
                userItem.classList.remove("tamaño-letra2");
                userItem.classList.remove("tamaño-letra3");
                check.classList.add("invisible");
                indicadores.classList.remove('visible');
                indicadores.classList.add('invisible');
                btn2.classList.remove("active");
                btn3.classList.remove("active");
                conteo = 0;
            });
            break;
    }
});

const secciones = document.querySelectorAll("section"),
    voiceList = document.querySelector("select"),
    speechBtn = document.querySelector(".cambiarTextoVoz");

let synth = speechSynthesis,
    isSpeaking = true;

voices();

function voices() {
    for (let voice of synth.getVoices()) {
        let selected = voice.name === "Microsoft Raul - Spanish (Mexico)" ? "selected" : "";
        let option = `<option value="${voice.name}" ${selected}>${voice.name} (${voice.lang})</option>`;
        voiceList.insertAdjacentHTML("beforeend", option);
    }
}

synth.addEventListener("voiceschanged", voices);

function textToSpeech(text) {
    let utterance = new SpeechSynthesisUtterance(text);
    for (let voice of synth.getVoices()) {
        if (voice.name === voiceList.value) {
            utterance.voice = voice;
        }
    }
    synth.speak(utterance);
}

speechBtn.addEventListener("click", e => {
    console.time()
    setTimeout(() => {
        console.timeEnd()
    }, 5000)
    e.preventDefault();
    secciones.forEach(function(element, index) {
        setTimeout(function() {
            secciones[index].classList.add("foco");
            textToSpeech(secciones[index].ariaLabel);
            secciones[index].scrollIntoView({ block: "center", behavior: "smooth", inline: "start" });
        }, index * 5000);
    });
});

document.addEventListener('keyup', (event) => {
    $('#modalFrame').on('hidden.bs.modal', function(event) {
        var iframes = document.querySelectorAll('iframe');
        Array.prototype.forEach.call(iframes, iframe => {
            iframe.contentWindow.postMessage(JSON.stringify({
                event: 'command',
                func: 'pauseVideo'
            }), '*');
        });
    })
    var name = event.key;
    var code = event.code;

    switch (event.code) {
        case 'Digit1':
            alert(`Key pressed ${name} \r\n Key code value: ${code}`);
            break;
        case 'Number1':
            alert(`Key pressed ${name} \r\n Key code value: ${code}`);
            break;
        case 'ArrowLeft':
            break;
        default:
            break;
    }
}, false);



document.querySelector('#divCarouselNoticias .owl-stage-outer').classList.add('padding-12');


$(function() {
    $('#modalFrame').on('hidden.bs.modal', function(event) {
        var iframes = document.querySelectorAll('iframe');
        Array.prototype.forEach.call(iframes, iframe => {
            iframe.contentWindow.postMessage(JSON.stringify({
                event: 'command',
                func: 'pauseVideo'
            }), '*');
        });
    })
});