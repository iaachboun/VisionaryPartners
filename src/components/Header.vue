<template>
  <section id="header"/>
  <nav :class="navClasses" style="margin-top: -40px;" id="header">
    <div class=" flex flex-wrap items-center justify-between mx-auto px-8 py-3 sm:px-0 sm:p-6 sm:w-5/6">
      <a href="https://visionarypartners.nl" class="flex items-center ">
        <span class="self-center sm:text-2xl  whitespace-nowrap text-[#D6FF01] font-bold">VISIONARY PARTNERS</span>
      </a>

      <div class="inline-flex items-center px-1 w-10 h-10 justify-center text-sm text-Z rounded-lg md:hidden text-white focus:text-[#D6FF01]"
           aria-controls="navbar-default" aria-expanded="false" id="app">
        <div aria-controls="navbar-default" aria-expanded="false" id="app" data-collapse-toggle="navbar-default" class="menu-wrapper" @click="openMenu = !openMenu" :class="{ active: openMenu }">
<!--        <div class="menu-wrapper">-->
          <div class="menu-bar one"></div>
          <div class="menu-bar two"></div>
          <div class="menu-bar three"></div>
        </div>
      </div>

      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 ">
          <li>
            <router-link to="#waarom"
                         class="nav-link mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer" :class="{ active: currentActiveSection === 'waaromColor' }">
              Wie zijn wij
            </router-link>
          </li>
          <li>
            <router-link to="#pakketten"
                         class="nav-link mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer" :class="{ active: currentActiveSection === 'pakkettenColor' }">
              Onze pakketten
            </router-link>
          </li>
          <li>
            <router-link to="#diensten"
                         class="nav-link mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer" :class="{ active: currentActiveSection === 'voordelenColor' }">
              Diensten
            </router-link>
          </li>
          <li>
            <router-link to="#projecten"
                         class="nav-link mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer" :class="{ active: currentActiveSection === 'projectenColor' }">
              Projecten
            </router-link>
          </li>
          <li>
            <router-link to="#contact"
                         class="nav-link mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer" :class="{ active: currentActiveSection === 'contactColor' }">
              Contact
            </router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      isTop: true, // Initial state, assuming the page is loaded at the top
      openMenu: false,
      currentActiveSection: '', // Add this line to track the current active section
    };
  },
  computed: {
    navClasses() {
      return {
        'sticky top-0 z-50 transition-colors duration-300 ease-in-out': true,
        'bg-transparent': this.isTop,
        'bg-black bg-opacity-95': !this.isTop,
      };
    }
  },
  mounted() {
    this.handleScroll(); // Call it on mount to set the initial state based on current scroll
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll() {
      // Existing functionality to check the scroll position at the top
      this.isTop = window.scrollY < 20; // Adjust the value as needed

      // New functionality to update the current active section based on scroll position
      const sections = document.querySelectorAll('section');
      const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

      for (const section of sections) {
        const sectionTop = section.offsetTop - 128; // Added a buffer for better transition timing
        const sectionHeight = section.offsetHeight;
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          this.currentActiveSection = section.id;
          return; // Exit the loop once the active section is found
        }
      }
    }
  }
}
</script>


<style scoped>

.menu-wrapper {
  width: 40px;
  height: auto;
  cursor: pointer;
  position: relative;
}

.menu-bar {
  position: absolute;
  width: 80%;
  height: 2.5px;
  background: #fff;
  left: 0%;
}

.menu-wrapper:hover .menu-bar {
  /*animation-duration: 1s;
  animation-name: slideOut;
  animation-direction: alternate;
  animation-timing-function: ease-out;*/
}


.one {
  top: -8px;
  animation-delay: 0.1s;
  transition: all 0.3s;
}

.two {
  top: 0;
  transition: all 0.3s;
}

.three {
  top: 8px;
  transition: all 0.3s;
}


@keyframes slideOut {
  0% {
    width: 100%;
    left: 0%;
    right: auto;
  }

  50% {
    width: 0%;
    left: 0%;
    right: auto;
  }
  51% {
    width: 0%;
    right: 0%;
    left: auto;
  }

  100% {
    width: 100%;
    right: 0%;
    left: auto;
  }
}


/**/

.menu-wrapper:hover .menu-bar.active {
  animation: none;
}

.active .one {
  top: 50%;
  left: 0%;
  transform: rotate(45deg);
  background: #D6FF01;
}

.active .two {
  top: 50%;
  left: 0%;
  transform: rotate(-45deg);
  background: #D6FF01;
}

.active .three {
  top: 50%;
  left: 0%;
  transform: rotate(-45deg);
  background: #D6FF01;
}

.nav-link.active {
  color: #D6FF01;
  font-weight: bold;
}
</style>

