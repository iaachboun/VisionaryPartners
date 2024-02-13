<template>
  <section id="header" />
  <nav :class="navClasses" style="margin-top: -40px;" id="header">
    <div class=" flex flex-wrap items-center justify-between mx-auto px-8 py-3 sm:px-0 sm:p-6 sm:w-5/6">
      <a href="https://flowbite.com/" class="flex items-center ">
        <span class="self-center sm:text-2xl  whitespace-nowrap text-[#D6FF01] font-bold">VISIONARY PARTNERS</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-Z rounded-lg md:hidden text-white focus:text-[#D6FF01]"
              aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>

      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 ">
          <li>
            <router-link data-toggle="navbar-default" to="#waarom"
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
/* Your styles here */
</style>