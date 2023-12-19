<template>
  <div class="grid grid-cols-1 flex items-center px-8 sm:px-0 sm:grid-cols-2 m-auto w-full pt-10 sm:pt-32">
    <div class="flex-col w-11/12">
      <h2 class="text-7xl sm:text-7xl text-left leading-normal font-bold">Super Snel Jouw Website Of App <strong class="text-[#D6FF01]">Online!</strong></h2>
      <p class="text-xl text-left mt-8">Met ons hoog opgeleid team staat uw website of app binnen 2 weken online. Ons
        team bestaat
        uit HBO-programmeurs met minstens 5 jaar aan ervaring en kennis in hun vak gebied!</p>
      <router-link to="#contact" class="w-fit bg-[#D6FF01] text-black py-3 px-5 rounded-full mt-5 font-bold flex items-center">
        <span>NEEM CONTACT OP</span>
        <i class="fa-solid fa-arrow-right text-3xl pl-8"></i>
      </router-link>

    </div>
    <div class="flex">

      <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
        <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
        <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
        <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
          <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-light.png" class="dark:hidden w-[272px] h-[572px]" alt="">
          <img src="@/assets/img/logo.png" class="hidden dark:block w-[272px] h-[572px]" alt="">
        </div>
      </div>
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