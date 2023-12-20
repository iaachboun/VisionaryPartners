<template>
  <div
      class="container mx-auto lg:grid grid-cols-1 flex items-center sm:grid-cols-2 bg-gradient-to-r from-[#3ACD22] to-[#D6FF01] mt-28 mb-40 sm:mb-80 sm:rounded-xl">
    <div class="lg:w-3/4 m-10">
      <div class="m-auto">
        <h1 class="text-4xl sm:text-5xl  text-left text-black mt-3 font-bold !leading-relaxed"><strong>Klaar
          Voor De Volgende Stap?</strong></h1>
        <p class="text-xl sm:text-2xl text-left mt-8 mb-4 text-black max-w-[530px]">Kies Visionary Partners
          voor een website die niet alleen functioneel en aantrekkelijk is, maar ook perfect aansluit bij jouw unieke
          visie en doelen.</p>
      </div>
    </div>

    <div class="hidden lg:block relative h-full">
        <router-link to="#contact" class="absolute right-0 bottom-0 p-8 pr-20 pl-20 bg-black m-10 rounded-2xl">
          <i class="fa-solid fa-arrow-right-long" style="font-size: 7pc; transform: rotate(45deg)"></i>
        </router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: "VolgendeStap"
}
</script>

<style scoped>

</style>