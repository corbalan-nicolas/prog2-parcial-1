// UTILITIES
const $ = selector => document.querySelector(selector)
const $$ = selector => document.querySelectorAll(selector)

// ELEMENTS
const $smokeEffectArea = $('#smokeEffectArea')
const $toggleSmokeEffectBtn = $('#toggleParticles')
const $cards = $$('.card')

let particleColor = localStorage.getItem('particleColor') ?? 'rgba(200 200 200 / 1)'
let smokeEffectIsOn = JSON.parse(localStorage.getItem('smokeEffectIsOn')) ?? true

// EVENTS
document.addEventListener('mousemove', createParticle)
$toggleSmokeEffectBtn.addEventListener('click', toggleSmokeEffect)

$cards.forEach($card => {
  $card.addEventListener('mouseenter', () => {
    particleColor = `var(--col-${$card.dataset.color})`
    localStorage.setItem('particleColor', particleColor)
  })
  
  $card.querySelector('.card__body').style.borderColor = `var(--col-${$card.dataset.color})`
})

// FUNCTIONS
function toggleSmokeEffect() {
  smokeEffectIsOn = !smokeEffectIsOn
  localStorage.setItem('smokeEffectIsOn', smokeEffectIsOn)
}

function createParticle(event) {
  if(smokeEffectIsOn === false) return

  const $particle = document.createElement('div')
  const {clientX, clientY} = event

  $particle.className = 'particle'
  $particle.style.left = `${clientX}px`
  $particle.style.top = `${clientY}px`
  $particle.style.background = `radial-gradient(circle, ${particleColor} 0%, rgba(0 0 0 / 0) 80%)`

  $smokeEffectArea.append($particle)

  $particle.addEventListener('animationend', () => $particle.remove())
}