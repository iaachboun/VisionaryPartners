<template>
  <div class="grid grid-cols-1 flex items-center px-8 sm:px-0 sm:grid-cols-2 m-auto w-full pt-32">
    <div class="flex-col w-11/12">
      <h2 class="text-5xl sm:text-7xl text-left leading-normal font-bold">Super Snel Jouw Website Of App <strong class="text-[#D6FF01]">Online!</strong></h2>
      <p class="text-xl text-left mt-8">Met ons hoog opgeleid team staat uw website of app binnen 2 weken online. Ons
        team bestaat
        uit HBO-programmeurs met minstens 5 jaar aan ervaring en kennis in hun vak gebied!</p>
      <router-link to="#contact" class="w-fit bg-[#D6FF01] text-black py-3 px-5 rounded-full mt-5 font-bold flex items-center">
        <span>NEEM CONTACT OP</span>
        <i class="fa-solid fa-arrow-right text-3xl pl-8"></i>
      </router-link>

    </div>
    <div class="flex">
      <img class="hidden sm:block ml-auto" src="https://placehold.co/400x600">
    </div>
  </div>
</template>

<script>
export default {
  name: "Hero"
}
</script>

<style scoped>

</style>