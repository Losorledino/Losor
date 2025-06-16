const allRonds = document.querySelectorAll('.rond');
const allBoxes = document.querySelectorAll('.box');

const controller = new ScrollMagic.Controller()

allBoxes.forEach(box => {

    for(i = 0; i < allRonds.length; i++){

        if(allRonds[i].getAttribute('data-anim') === box.getAttribute('data-anim')){

            let tween = gsap.from(box, {y: -50, opacity: 0, duration: 0.5})

            let scene = new ScrollMagic.Scene({
                triggerElement: allRonds[i],
                reverse: true
            })
            .setTween(tween)
            // .addIndicators()
            .addTo(controller)

        }

    }

})


const txtAnim = document.querySelector('h1');
new Typewriter(txtAnim, {
  deleteSpeed: 40
})
.changeDelay(40)
.typeString('Moi c\'est Louis')
.pauseFor(300)
.typeString('<strong>, 18 ans</strong>')
.pause(1000)
.deleteChars(7)
.typeString('<span style="color: midnightblue"> technicien systèmes </span>!')
.pauseFor(100)
.deleteChars(1)
.typeString('<span style="color: violet"> et réseaux</span> !')
.pauseFor(100)
.deleteChars(32)
.typeString('<span style="color: lightblue"> étudiant BTS SIO</span> !')
.start()


// 'darkMode'
let darkMode = localStorage.getItem('darkMode'); 

const darkModeToggle = document.querySelector('#checkbox');

const enableDarkMode = () => {
  document.body.classList.add('darkmode');
  localStorage.setItem('darkMode', 'enabled');
}

const disableDarkMode = () => {
  document.body.classList.remove('darkmode');
  localStorage.setItem('darkMode', null);
}
 
if (darkMode === 'enabled') {
  enableDarkMode();
}

darkModeToggle.addEventListener('click', () => {
  darkMode = localStorage.getItem('darkMode'); 
  
  if (darkMode !== 'enabled') {
    enableDarkMode();
  } else {  
    disableDarkMode(); 
  }
});
