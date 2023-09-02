const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");

    menuToggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });
    
    particlesJS('particles-js', {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 3,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "grab"
            },
            "onclick": {
              "enable": true,
              "mode": "repulse"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 200,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      });
     
// Haal een lijst op van alle ankerelementen in het navigatiemenu en de "About Me" link
const navLinks = document.querySelectorAll('.menu a');
const aboutMeLink = document.querySelector('.btn');

// Voeg een click-eventlistener toe aan elk ankerelement in de navigatie en de "About Me" link
navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Voorkom standaardgedrag van de link

        // Haal de doelsectie op waar je naartoe wilt scrollen (op basis van de 'href' van het ankerelement)
        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        // Scroll naar de doelsectie met een soepele animatie
        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop - 80, // Aanpassen aan je ontwerp
                behavior: 'smooth'
            });
        }
    });
});

// Voeg een click-eventlistener toe aan de "About Me" link
aboutMeLink.addEventListener('click', function(e) {
    e.preventDefault(); // Voorkom standaardgedrag van de link

    // Haal de doelsectie op waar je naartoe wilt scrollen (op basis van de 'href' van de link)
    const targetId = this.getAttribute('href').substring(1);
    const targetSection = document.getElementById(targetId);

    // Scroll naar de doelsectie met een soepele animatie
    if (targetSection) {
        window.scrollTo({
            top: targetSection.offsetTop - 80, // Aanpassen aan je ontwerp
            behavior: 'smooth'
        });
    }
});

