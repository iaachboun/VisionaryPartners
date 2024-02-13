<template>
  <section id="header"/>
  <nav :class="navClasses" style="margin-top: -40px;" id="header">
    <div class=" flex flex-wrap items-center justify-between mx-auto px-8 py-3 sm:px-0 sm:p-6 sm:w-5/6">
      <a href="https://flowbite.com/" class="flex items-center ">
        <span class="self-center sm:text-2xl  whitespace-nowrap text-[#D6FF01] font-bold">VISIONARY PARTNERS</span>
      </a>

      <div data-collapse-toggle="navbar-default"
           class="inline-flex items-center px-1 w-10 h-10 justify-center text-sm text-Z rounded-lg md:hidden text-white focus:text-[#D6FF01]"
           aria-controls="navbar-default" aria-expanded="false" id="app">
        <div class="menu-wrapper" @click="openMenu = !openMenu" :class="{ active: openMenu }">
          <div class="menu-bar one"></div>
          <div class="menu-bar two"></div>
          <div class="menu-bar three"></div>
        </div>
      </div>

      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 ">
          <li>
            <router-link to="#waarom"
                         class="mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer">
              Wie zijn wij
            </router-link>
          </li>
          <li>

            <router-link to="#pakketten"
                         class="mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer">
              Onze pakketten
            </router-link>
          </li>
          <li>
            <router-link to="#hiddenTab01"
                         class="mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer">
              Diensten
            </router-link>
          </li>
          <li>
            <router-link to="#contact"
                         class="mt-3 md:mt-0 block py-2 pl-3 pr-4 text-white hover:text-[#D6FF01] md:p-0 cursor-pointer">
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
    };
  },
  computed: {
    navClasses() {
      return {
        'sticky top-0 z-50 shadow transition-colors duration-300 ease-in-out': true,
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
      // Check if the scroll position is at the top of the page
      this.isTop = window.scrollY < 20; // Adjust the value as needed
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
</style>

