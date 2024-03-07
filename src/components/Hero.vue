<template>
  <section class="pb-20">
    <div class="grid grid-cols-1 flex items-center px-8 sm:px-0 sm:grid-cols-2 m-auto w-full pt-10 sm:pt-32">
      <div class="flex-col">
        <!--      <h2 class="text-5xl sm:text-7xl text-left leading-tight sm:leading-normal font-bold">-->
        <!--        Super Snel Jouw Website Of App <strong class="text-[#D6FF01]">Online!</strong>-->
        <!--      </h2>-->
        <h2 class=" lg:-mt-40 text-6xl sm:text-7xl text-left leading-tight sm:leading-normal font-bold min-h-[350px] typed-header">
          <VueTyped
              :strings="['test', 'Supersnel jouw website of app online!']"
              :typeSpeed="25"
              :backSpeed="120"
              :loop="true"
              :loop-count="4"
              :backDelay="3000"
          >
            <!-- The element where the typed text will appear -->
            <span v-typed-js></span>
          </VueTyped>
        </h2>
        <p class="text-lg sm:text-xl text-left mt-8">Met ons hoog opgeleid team staat jouw website of app binnen 2 weken
          online. Ons
          team bestaat
          uit programmeurs met minstens 8 jaar aan ervaring en kennis in hun vak gebied!</p>
        <router-link to="#contact"
                     class="custom-button w-fit bg-[#D6FF01] text-black py-3 px-5 rounded-full mt-5 font-bold flex items-center hover:bg-[#bfe308] transition duration-500 ease-in-out">
          <span>NEEM CONTACT OP</span>
          <i class="fa-solid fa-arrow-right text-3xl pl-8 arrow"></i>
        </router-link>

      </div>
      <div class=" mt-5">
          <img src="@/assets/img/visionarypartnersphone3.0.png" class="m-auto w-[400px] max-w-[60%]">
      </div>
    </div>
    <section id="waarom"/>

  </section>
</template>

<script>
export default {
  name: "Hero",
  data() {
    return {
      // Assuming visionarypartnersphone3.0.png is in your src/assets/img/ directory
      imageUrl: require('@/assets/img/visionarypartnersphone3.0.png'),
    };
  },
  computed: {
    backgroundStyle() {
      return {
        backgroundImage: `url(${this.imageUrl})`,
        backgroundSize: 'cover', // Cover the entire div
        backgroundPosition: 'center', // Center the background image
        height: '100vh', // Example: Set the height to be full viewport height
        width: '100%', // Full width of the container
      };
    },
  },
}
</script>

<style lang="scss" scoped>

/* Style for the typing cursor */
.vue-typed-js .typed-cursor {
  opacity: 1;
  animation: blink 0.7s infinite;
  color: blue; /* Cursor color */
}

@keyframes blink {
  50% {
    opacity: 0;
  }
}

 .custom-button:hover .arrow {
   transform: translateX(5px); /* Move right */
   transition: transform 0.3s ease-in-out;
 }

.arrow {
  transition: transform 0.3s ease-in-out;
}
</style>