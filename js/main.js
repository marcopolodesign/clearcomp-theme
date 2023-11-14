let pageName = document.querySelector('[data-barba=container]');
let preLoad = document.querySelectorAll('.pre-load > div:not(:last-child)');
let header = document.querySelector('header')
let preloaderCaption = document.querySelector('.pre-load div > span');
let loadingCaption = document.querySelector('.pre-load div p');

const runScripts = () => {
  pageName = document.querySelector('[data-barba=container]');
  setTimeout(() => {
    moreAnchors();
  }, 3000);

  const moreAnchors = () => {
    let anchors = Array.prototype.slice.call(document.querySelectorAll('.anchors, a'));
    let cursor = document.querySelector('.cursor');
    cursor.classList.remove('dn');
    let xLocation;
    let yLocation;
    
    const hoverCursor = () => {
      cursor.classList.add('is-hover');
    };
    
    const removeHoverCursor = () => {
      cursor.classList.remove('is-hover');
      cursor.classList.remove('is-shop');
      cursor.classList.remove('add-cart');
    };
    
    anchors.forEach((anchor) => {
      anchor.addEventListener('mouseover', () => {
        hoverCursor();
      });
    
      anchor.addEventListener('mouseleave', () => {
        removeHoverCursor();
      });
    });
  
    let distanceFromTop = 0;
    
    const moveCursor = (x, y) => {
      cursor.style.top = y + 20 +'px';
      cursor.style.left = x + 20 +  'px';
    
      // Calculate the distance between cursor and top of the screen
      distanceFromTop = y - window.pageYOffset;
      
    };
    
    document.addEventListener('mousemove', (event) => {
      moveCursor(event.pageX, event.pageY);
      xLocation = event.pageX;
      yLocation = event.pageY;
    });
    
    document.addEventListener('scroll', (event) => {
      moveCursor(xLocation, distanceFromTop + window.pageYOffset);
    });
  
  };


  const animatePosts = () => {

    let posts = document.querySelectorAll('.reusable-content > div');

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.intersectionRatio >= 0.13) {
            entry.target.classList.add('in-view');
          } else {
            entry.target.classList.remove('in-view');
          }
        });
      },
      {
        threshold: [0, 0.2, 1],
      }
    );

    posts.forEach((post) => {
      observer.observe(post);
    });
  }

  const animateNumber = (targetElements, duration = 1000) => {
    const frameDuration = 1000 / 60; // Assuming 60 frames per second
  
    targetElements.forEach((targetElement) => {
      const startNumber = 0;
      const targetNumber = parseFloat(targetElement.innerHTML);
      const difference = Math.abs(targetNumber - startNumber);
      const animationDuration = Math.min(duration, Math.max(500, difference * (duration / 100))); // Adjust the min and max duration as needed
  
      const totalFrames = Math.round(animationDuration / frameDuration);
      const increment = (targetNumber - startNumber) / totalFrames;
  
      let currentNumber = startNumber;
      let frame = 0;
  
      const animate = () => {
        currentNumber += increment;
        targetElement.innerHTML = Math.round(currentNumber);
  
        frame++;
        if (frame < totalFrames) {
          requestAnimationFrame(animate);
        }
      };
  
      // Intersection Observer configuration
      const observerConfig = {
        root: null, // Use the viewport as the root
        threshold: 0.2, // Trigger animation when at least 20% of the element is visible
      };
  
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            observer.unobserve(entry.target);
            animate();
          }
        });
      }, observerConfig);
  
      // Start observing the target element
      observer.observe(targetElement);
    });
  };
  
  
  const targetElements = Array.from(document.querySelectorAll('.animate-number'));
  const duration = 3000;

//   animateNumber(targetElements, duration);

  if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    // animatePosts();
  }


  const langSwitcher = ()=> {
    let switchers = document.querySelectorAll('.lang-switcher > *');
    switchers.forEach(s => {
      s.classList.add('barba-prevent');
    })
  }
  langSwitcher();
}

const faqQuestions = () => {

  const faq = document.querySelectorAll('.faq-item');  
  faq.forEach(q => {
    let isExpanded = q.getAttribute('area-expanded');
    q.addEventListener('click', (e)=> {
      let answer = q.querySelector('.faq-answer');
      let answerContent = answer.querySelector('p');
      let arrow = q.querySelector('svg');

      let height = answer.querySelector('p').clientHeight ;   

      let faq = gsap.timeline({
        defaults: {
          easing: Expo.EaseOut,
          duration: 0.2,
        },
      })

      if (!isExpanded) {
        faq
        .to(arrow, {transform: 'rotate(-0deg)'})
        .to (answer, { opacity: 0}, 0)  
        .to (answerContent, {marginTop: '0px', marginBottom: "0px"}, 0)
        .to (answer, {maxHeight: "0", opacity: 0}, 0.05)
      

          isExpanded = true;  
      } else {
        faq
        .to(arrow, {transform: 'rotate(90deg)'})
        .to (answer, {maxHeight: height}, 0)
        .to (answer, { opacity: 1}, 0)
        .to (answerContent, {marginTop: '10px', marginBottom: "10px"}, 0)
        isExpanded = false;  
      }          
      q.setAttribute('area-expanded', !isExpanded);

    })
  })
}



const showAboutInfo = (index, target) => {

  // Get the div at the specified index
  const targetDiv = target[index];

  // Remove the classes from the target div
  targetDiv.classList.remove('opacity-0', 'translate-y-10');

  // Loop through all div elements with class "about-cc"
  target.forEach((div, i) => {
    // Skip the target div (already handled above)
    if (i !== index) {
      // Add classes to other divs
      div.classList.add('opacity-0', 'translate-y-10');
    }
  });
}


const showInfoOnHover = (target, trigger, targetContainer) => {
 
  trigger.forEach((i, index) => {
    i.addEventListener('mouseover', (e)=> {
      let spanIndex = index;
      console.log (index, target, target[index])

      if (trigger === icebergParts) {
      document.querySelector('.iceberg-container').classList.add('hovered')
      }
      showAboutInfo(spanIndex, target);    
    })
  })

  targetContainer.addEventListener('mouseout', (e)=> {

      if (trigger === icebergParts) {
        document.querySelector('.iceberg-container').classList.remove('hovered')
      }
    target.forEach(div => {
      div.classList.add('opacity-0', 'translate-y-10');
    })
  })
}


const steps = () => {
  const steps = document.querySelectorAll('.step-inner');
  steps.forEach((step, index) => {
    if (index > 0) {
      step.classList.add('not-active');
    }


    step.addEventListener('click', (e) => {
      steps.forEach((s, i) => {
        if (s === step) {
          s.classList.remove('not-active');
        } else {
          s.classList.add('not-active');
        }
      });
    });
  })
}

runScripts();

let icebergParts;

barba.init({
    timeout: 3000,
    prevent: ({ el }) => el.classList.contains('barba-prevent'),
    transitions: [
      {
        leave({ current, next, trigger }) {
         
          header.classList.remove('scrolled');
          header.classList.add('loading');
          document.querySelector("header").classList.remove('menu-open')
          closeMenuDropdown()
  
          if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
          // menuTL.reverse();
          
          setTimeout(() => {
            // menu.classList.add('o-0');
            // menu.classList.add('pointers-none');
          }, 1200);
  
        }
          return new Promise((resolve) => {
  
            // Set Pre Loader Defaults
  
            // randomPhrases();
          
            const loadEnter = gsap.timeline({
              defaults: {
                ease: "power4.inOut",
                duration: 0.8
              },
              onComplete() {
                current.container.remove();
                resolve();
              },
            }) 
            // Animate Pre Load
            loadEnter
           
            .set(loadingCaption, {opacity: 0})
            .set(preloaderCaption, {y: "120%"})
            .set(preLoad,{ y: "110%"})
            .to(preLoad,{ y: "0%", stagger: 0.05})
            .to(preloaderCaption, {y: "0%"},0.2)
            .to(loadingCaption, {opacity: 1}, 0.2)
            
          });
        },
        afterEnter({ current, next, trigger }) {
          return new Promise((resolve) => {
            window.scrollTo({
              top: 0,
            });
            runScripts();
            const loadLeave = gsap.timeline({
              onComplete() {
                resolve();
                header.classList.remove('loading');
                // header.classList.add('scrolled');
  
              },
              defaults: {
                duration: .8,
                ease: Expo.easeOut,
                delay: 2
              },
            });
  
            loadLeave
            .to(loadingCaption, {opacity: 0})
            .to(preloaderCaption, {y: "-130%"},0.4)    
            .to(preLoad,{ y: "-110%", stagger: 0.05}, 0.4)
            .call (()=> {
            if (
              pageName.getAttribute('data-barba-namespace') == 'home' ||
              pageName.getAttribute('data-barba-namespace') == 'home - español'
            ) {
                console.log('animating from regular')
                animateLanding();
              }
            })
          });
        },
      },
  
    ],
    views: [ {
      namespace: 'home',
        afterEnter() {
          console.log('home')
          const divHolder = document.querySelector('.about-cc-text')
          const divs = document.querySelectorAll('.about-content');
          const spans = document.querySelectorAll('.about-cc-text span.underline');

          // Iceberg hover effect
          const iceberg = document.querySelector('.iceberg-svg');
          const icebergOverlay = document.querySelectorAll('.iceberg-overlay');
          icebergParts = document.querySelectorAll('.iceberg-svg path');

          showInfoOnHover(divs, spans, divHolder);
          showInfoOnHover(icebergOverlay, icebergParts, iceberg); 
          animateIntegrations();
          faqQuestions();
          // animateLanding();
          // console.log('animating from view')
        }
    }, 
    
    {
      namespace: 'Home',
    afterEnter() {
      console.log('Home')
      const divHolder = document.querySelector('.about-cc-text')
      const divs = document.querySelectorAll('.about-content');
      const spans = document.querySelectorAll('.about-cc-text span.underline');

      // Iceberg hover effect
      const iceberg = document.querySelector('.iceberg-svg');
      const icebergOverlay = document.querySelectorAll('.iceberg-overlay');
      icebergParts = document.querySelectorAll('.iceberg-svg path');

      showInfoOnHover(divs, spans, divHolder);
      showInfoOnHover(icebergOverlay, icebergParts, iceberg); 
      animateIntegrations();
      faqQuestions();
      // animateLanding();
      // console.log('animating from view')
    }
},{
    namespace: 'faq', 
    afterEnter() {  
      faqQuestions();
    }
  }, 
  {
    namespace: 'about',
    afterEnter() {
      faqQuestions();
      changeBgColorOnEnterViewport();
    }
  }, 

  {
    namespace: 'Sobre Nosotros',
    afterEnter() {
      faqQuestions();
      changeBgColorOnEnterViewport();
    }
  }, 
   {
    namespace: 'IT Solutions',
    afterEnter() {
      steps();
      animateIntegrations();
    }
   },
    {
      namespace: 'Soluciones de IT/BI',
      afterEnter() {
        steps();
        animateIntegrations();
      }
    },
    {
      namespace: 'Soluciones de Recursos Humanos',
      afterEnter() {
        steps();
      }
     },

   {
    namespace: 'HR Solutions',
    afterEnter() {
      steps();
    }
   },
   {
    namespace: 'Sales Solutions',
    afterEnter() {
      steps();
    }
   },
   {
    namespace: 'Soluciones de Ventas',
    afterEnter() {
      steps();
    }
   },
    ],
    debug: true,
});
  

const contact = () => {
  let hrefs = document.querySelectorAll('a');
  hrefs.forEach((a) => {
    if (a.href.indexOf('#contact') > -1) {
      a.classList.add('barba-prevent');
      // console.log(a)
      a.addEventListener('click', (e) => {
        e.preventDefault();

        let timeline = gsap.timeline({
          defaults: {
            ease: Expo.easeOut,
            duration: 0.7,
          },
        });

        timeline
          .set(container, { pointerEvents: 'all', opacity: 1 })
          .set(contact, { x: '100%' })
          .set(bg, { opacity: 0 })
          .to(contact, { x: '0' }, 0)
          .to(bg, { opacity: 1 }, 0.4);
      });
    }
  });
  let close = document.querySelector('#close-contact');
  let bg = document.querySelector('.contact-bg');
  let contact = document.querySelector('.contact-content');
  let container = document.querySelector('.contact-form-container');

  close.addEventListener('click', () => {
    console.log('close')
    let timeline = gsap.timeline({
      defaults: {
        ease: Expo.easeOut,
        duration: 0.5,
      },
    });

    timeline
      .set(container, { pointerEvents: 'none' })
      .to(contact, { x: '100%' })
      .to(bg, { opacity: 0 }, 0);
  });
};

contact();


const animatePreLoader = () => {

  // randomPhrases();
  const preloadTl = gsap.timeline({
    defaults: {
      ease: "power4.inOut",
      duration: 0.8
    }
  }) 

    let t;
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) { 
      t = '-130%';
    } else {
      t = "-190%";
    }

  preloadTl
  .to(loadingCaption, {opacity: 0})
  .to(preloaderCaption, {y: t},0.4)
  .to(preLoad,{ y: "-110%", stagger: 0.05}, 0.4)
  .call (()=> {
    animateLanding();
    console.log('animating from animatePreLoader fn')
  })


  preloadTl.paused(true);


    window.addEventListener('load', (event) => {
     preloadTl.play();
    })
}

animatePreLoader();


const animateIntegrations = () => {

let aimX = 0
let currentSpeed = 0.1
let aimSpeed = 0.3

// pick the section and div from the HTML
const section = document.querySelector(".integrations-container")

const holder = section.querySelector(".logo-list div")

const holders = section.querySelectorAll(".logo-list div");

// and calculate a single width and total width of them
const holderWidth = holder.clientWidth
console.log(holderWidth)
const totalWidth = holderWidth * holders.length;
console.log(holders.length)
console.log(totalWidth)

// we need to animate each frame
const animate = function () {
  // add tweening speed with a damping of 0.05
  currentSpeed += (aimSpeed - currentSpeed) * 0.01
  
  // change the x position based on current speed
  aimX = aimX + currentSpeed
   
  // for each of the content divs 
  holders.forEach((holder, index) => {
    // make a general left position based on...
    // the general x position
    // then add in a spacing for each one,
    // e.g. 0, 1000 and 2000 if we have 0 aimX and 1000px divs
    let leftPosition = (-1 * aimX + index * holderWidth)

    // they need to loop though, otherwise they'll just go off screen forever    
    // so lets add an offset to push them back over
    let offset = Math.floor((leftPosition + holderWidth) / totalWidth) * totalWidth
    // then add that offset based on the total width
    // negative as we're reducing the position
    leftPosition += (-1 * offset)
    // set a position
    holder.style.left = leftPosition + "px"
  })  
  // do each frame
  requestAnimationFrame(animate)
}

animate()
    
}



const animateNumbers = () => {
  const animateNumberEls = document.querySelectorAll('.animate-number');
  const duration = 5; // in seconds

  const animateNumber = (el) => {
    const endValue = parseInt(el.innerHTML);
    const startValue = 0;
    const increment = endValue / (duration * 60); // 60 frames per second

    let currentValue = startValue;
    const interval = setInterval(() => {
      currentValue += increment;
      el.innerHTML = Math.floor(currentValue);

      if (currentValue >= endValue) {
        clearInterval(interval);
        el.innerHTML = endValue;
      }
    }, 1000 / 60);
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateNumber(entry.target);
        observer.unobserve(entry.target);
      }
    });
  });

  animateNumberEls.forEach((el) => {
    observer.observe(el);
  });
};

animateNumbers();


const dropHolder = document.querySelector('.menu-dropdown-container');
const dropTrigger = document.querySelector('a[href="#solutions-dropdown"]');
let isDropOpen = !dropHolder.classList.contains('-translate-y-full');

const closeMenuDropdown = () => {

  if (isDropOpen) {
      dropHolder.classList.add('-translate-y-full', 'opacity-0');
      isDropOpen = false;
  }
}


const showMenuDropwdown = () => {
    dropTrigger.addEventListener('click', (e)=> {
      console.log('clik')
    if (!isDropOpen) {
      dropHolder.classList.remove('opacity-0', '-translate-y-full');
      isDropOpen = true;
    } else  {
      dropHolder.classList.add('opacity-0', '-translate-y-full');
      isDropOpen = false;
    }
  })
}
showMenuDropwdown();


const startYear = 2023;
const endYear = 1985;
const duration = 5000; // 5 seconds
const numberElement = document.getElementById('yearCounter'); // Replace with your HTML element ID

let animationStarted = false;

function updateCounter(timestamp) {
  const progress = Math.min(1, (timestamp - startTime) / duration);
  const currentYear = Math.round(startYear - (startYear - endYear) * cubicEaseOut(progress));

  numberElement.textContent = currentYear;

  if (progress < 1) {
    requestAnimationFrame(updateCounter);
  }
}

// Cubic ease-out function
function cubicEaseOut(t) {
  return 1 - Math.pow(1 - t, 3);
}

let startTime;

function startAnimation() {
  if (!animationStarted) {
    animationStarted = true;
    startTime = performance.now();
    requestAnimationFrame(updateCounter);
  }
}

function checkScrollPosition() {
  const scrollThreshold = document.documentElement.scrollHeight - window.innerHeight - 200;
  if (window.scrollY >= scrollThreshold) {
    startAnimation();
    // Remove the scroll event listener to prevent multiple animations
    window.removeEventListener('scroll', checkScrollPosition);
  }
}

// Add a scroll event listener to trigger the animation
window.addEventListener('scroll', checkScrollPosition);


const animateLanding = () => {
let holder = document.querySelectorAll('.childs-animate');

  holder.forEach(h => {
    let children = Array.prototype.slice.call(h.children)
       console.log(children);
      let animateTL = gsap.timeline({
        defaults: {
          ease: "power4.inOut",
          duration: 0.7,
          // delay: 0.5
        }
      }) 
      animateTL
      .set(children, {opacity: 0, y: 100})
      .to(children, {opacity: 1, y: 0,  stagger: 0.05 })

  })
}

const menuScroll = ()=> {
  let header = document.querySelector('header');
  let prevScroll = 0;
  document.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll < 100) {
      header.classList.remove('scrolled');
    } else if (currentScroll > 100 && prevScroll < currentScroll) {
      header.classList.add('scrolled');
    } else if (prevScroll - 15 > currentScroll) {
      header.classList.remove('scrolled');
    }

    prevScroll = currentScroll;
  });
}

menuScroll();


let menuTl;
let menu;

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {

  menu = document.querySelector('.menu-container')
  let menuContent = document.querySelector('#side-menu');
  let menuHeader = document.querySelectorAll('.menu-header > *');
  let linkContainer = document.querySelectorAll('ul.menu-nav > li')
  let menuLinks = document.querySelectorAll('ul.menu-nav > li > a')
  let menuBg = menu.querySelector('.absolute-cover.bg-main-color')

  let delay = 8;
  let duration = .4
  let transition =  "power4.inOut"


  menuTL = gsap.timeline({
    paused: true, 
    defaults: {
      ease: "power4.inOut",
      duration: 0.4, 
      delay: .4
    },
  });
  menuTL
  .to (menuBg, {scale: 1, force3D: false, })
  .to(menuHeader, {y: 0, stagger: 0.05}, .2)
  .to(menuLinks, {y: 0, stagger: 0.05}, .2)
  .to(linkContainer, {y: 0, stagger: 0.05}, .2);


  const openMenu = () => {
    let trigger = document.querySelector('.menu-trigger');
    trigger.addEventListener('click', ()=> {
      console.log('trigger')
      document.querySelector("header").classList.add('menu-open')

      menu.classList.remove('opacity-0');
      menu.classList.remove('pointer-events-none');

      menuTL.play();

    })
  
  }


  const closeMenu = () => {
    let trigger = document.querySelector('.close-menu');

    trigger.addEventListener('click', ()=> {
      document.querySelector("header").classList.remove('menu-open')

      menuTL.reverse();
      setTimeout(() => {
        menu.classList.add('opacity-0');
        menu.classList.add('pointer-events-none');
      }, 1200);
    
    })
  }

  closeMenu();
  openMenu();

}


function changeBgColorOnEnterViewport() {
  const grid = document.querySelector('.about-icon-grid'); // Parent container
  const childDivs = grid.querySelectorAll('div'); // Child divs

  // Create an Intersection Observer
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // The element is entering or leaving the viewport
        const childDiv = entry.target;

        // Check if the child div has any of the specified classes
        if (childDiv.classList.contains('bg-main-colorr')) {
          grid.style.backgroundColor = 'var(--mainColor)';
        } else if (childDiv.classList.contains('bg-secondary-colorr')) {
          grid.style.backgroundColor = 'var(--secondaryColor)';
        } else if (childDiv.classList.contains('bg-main-darkk')) {
          grid.style.backgroundColor = 'var(--mainDarkColor)';
        }
      }
    });
  }, {
    root: null, // Use the viewport as the root
    rootMargin: '0px',
    threshold: [0, 0.5, 1] // Observe when element enters, exits, and fully intersects
  });

  // Start observing each child div
  childDivs.forEach(childDiv => {
    observer.observe(childDiv);
  });
}

// Call the function to initiate the observation


