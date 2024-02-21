<template>
  <Header/>
  <div class="top-background">
    <div class="sm:w-5/6 m-auto">
      <Hero class="min-h-screen sm:-mt-12"/>
      <Waarom class=""/>
      <Pakketten class="min-h-screen"/>
      <Voordelen class="min-h-screen"/>
      <Projects/>
    </div>
  </div>


  <div class="bottom-background">
    <VolgendeStap/>
    <Contact/>
    <Footer/>
  </div>

  <transition>
    <router-link to="#header" v-show="showGoToTopButton">
      <div
          class="rounded-full fixed right-5 bottom-5 bg-[#D6FF01] hover:bg-[#bfe308] transition duration-500 ease-in-out text-black shadow-2xl">
        <div class="h-full text-4xl w-16 py-3 hover-bounce transform transition-transform duration-500 ease-in-out">
          <i class="fa-solid fa-arrow-up"></i>
        </div>
      </div>
    </router-link>
  </transition>


  <div v-if="showBanner" class="fixed inset-x-0 bottom-0 pb-2 sm:pb-5 shadow-lg">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="p-2 rounded-lg bg-white shadow-md sm:p-3">
        <div class="flex items-center justify-between flex-wrap">
          <div class="w-0 flex-1 flex items-center">
          <span class="flex p-2 rounded-lg bg-[#D6FF01]">
            <!-- Heroicon name: outline/information-circle -->
            <svg class="h-6 w-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </span>
            <p class="ml-3 font-medium text-black truncate">
            <span class="hidden md:inline">
              Wij gebruiken cookies om uw ervaring te verbeteren. Door verder te gaan, gaat u akkoord met ons gebruik van cookies.
            </span>
              <span class="md:hidden">
              Wij gebruiken cookies.
            </span>
            </p>
          </div>
          <div class="flex-shrink-0 sm:ml-6">
            <button @click="acceptCookies"
                    class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium bg-[#D6FF01] text-black hover:bg-[#bfe308]-50">
              Accept
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>


</template>

<script setup>
import Header from "@/components/Header";
import Hero from "@/components/Hero";
import Waarom from "@/components/Waarom";
import Pakketten from "@/components/Pakketten";
import Voordelen from "@/components/Voordelen";
import VolgendeStap from "@/components/VolgendeStap";
import Contact from "@/components/Contact";
import Footer from "@/components/Footer";
import Projects from "@/components/Projects";
</script>
<script>

export default {
  name: 'App',
  data() {
    return {
      showBanner: true, // Show banner by default
      showGoToTopButton: false, // Add this line

    };
  },
  methods: {
    acceptCookies() {
      this.showBanner = false; // Hide banner
      localStorage.setItem('cookieConsent', 'true'); // Store consent
    },
    handleScroll() {
      // Check if the scroll position is at the top of the page
      // this.isTop = window.scrollY < 20; // Adjust the value as needed
      this.showGoToTopButton = window.scrollY > 0;

    }
  },
  created() {
    // Check if consent has already been given
    if (localStorage.getItem('cookieConsent') === 'true') {
      this.showBanner = false;
    }
  },
  mounted() {
    this.handleScroll(); // Call it on mount to set the initial state based on current scroll
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },
}
</script>

<style>
body {
  scroll-behavior: smooth;
}

#app {
  font-family: 'Poppins', Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin: 0;

}

body {
  color: white;
  background-color: black;
  margin: 0;
}

.top-background {
  margin: 0;
  background: radial-gradient(circle at 100% 45%, rgba(24, 199, 41, 1), black 70%);
}

.bottom-background {
  margin: 0;
  background: radial-gradient(circle at 60% 100%, rgba(24, 199, 41, 1), black 75%);
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-4px); /* Adjust this value for the bounce height */
  }
}

.hover-bounce:hover {
  animation: bounce 1.0s ease-in-out infinite;
}

/* we will explain what these classes do next! */
.v-enter-active,
.v-leave-active {
  transition: opacity 0.7s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}

</style>
