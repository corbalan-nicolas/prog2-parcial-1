// UTILITIES
const $ = selector => document.querySelector(selector)
const $$ = selector => document.querySelectorAll(selector)

if(localStorage.getItem('particlesMode') === null) localStorage.setItem('particlesMode', 'on')
const toggleBtn = document.querySelector('#toggleParticles')

const contenedorHumo = document.querySelector('#humo')
let colorParticula = 'rgba(200 200 200 / 1)'

function crearParticula(e) {
  const particula = document.createElement('div')
  particula.className = 'particula'

  particula.style.left = `${e.clientX}px`
  particula.style.top = `${e.clientY}px`
  particula.style.background = `radial-gradient(circle, ${colorParticula} 0%, rgba(0 0 0 / 0) 80%)`
  contenedorHumo.append(particula)

  particula.addEventListener('animationend', () => {
    particula.remove()
  })
}


// Las cards cambian el color del humo generado
const cards = document.querySelectorAll('.card')
cards.forEach(card => {
  card.addEventListener('mouseenter', (e) => {
    colorParticula = `var(--col-${card.dataset.color})`
  })
  
  card.querySelector('.card__body').style.borderColor = `var(--col-${card.dataset.color})`
})

if(localStorage.getItem('particlesMode') !== '') {
  document.addEventListener('mousemove', crearParticula)
}

// TOGGLE
toggleBtn.addEventListener('click', () => {
  if(localStorage.getItem('particlesMode')) {
    // Turn of
    localStorage.setItem('particlesMode', '')
    document.removeEventListener('mousemove', crearParticula)
  }else {
    // Turn on
    localStorage.setItem('particlesMode', 'on')
    document.addEventListener('mousemove', crearParticula)
  }
})