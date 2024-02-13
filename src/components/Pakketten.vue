<template>
  <section id="pakketten" class="pt-1">
    <div class="row text-left mb-12">
      <h2 class="text-4xl mt-10 mb-10 px-8 sm:px-0"><strong class="text-[#D6FF01]">Onze</strong> pakketten</h2>
      <p class="text-xl px-8 sm:px-0">Ontdek onze diverse pakketten die zijn ontworpen om aan al uw behoeften te voldoen. Of u nu op
        zoek bent naar een basisoptie of een uitgebreidere service, wij hebben het perfecte pakket voor u.</p>
    </div>
    <div class="grid grid-cols-1 flex items-center lg:grid-cols-3 sm:grid-cols-2 xl:grid-cols-4 ml-auto">
      <div class="bg-black rounded-3xl text-left w-70 m-auto mb-10 h-[490px] cursor-default">
        <p class="pl-7 py-5 font-semibold text-2xl">E-Commerce</p>
        <hr class="h-px border-0 bg-[#808080]">
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>CMS systeem</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Admin paneel</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Statistieken</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Bezorgdienst
          integratie</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Conversie gericht
        </p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>24/7 Support</p>
        <hr class="h-px border-0 bg-[#808080]">
        <br>
        <router-link to="#contact" class="p-2 bg-[#D6FF01] text-black font-semibold px-20 mx-6 rounded-xl hover:bg-[#bfe308] transition duration-500 ease-in-out">START NU
        </router-link>
      </div>

      <div class="bg-black rounded-3xl text-left w-70 m-auto mb-10 h-[490px] cursor-default">
        <p class="pl-7 py-5 font-semibold text-2xl">Website</p>
        <hr class="h-px border-0 bg-[#808080]">
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Zakelijke mail</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Mobiel
          geoptimaliseerd</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Social media
          integratie</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Google
          geoptimaliseerd</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>24/7 Support</p>
        <p class="pl-7 py-4 text-[#808080] select-none text-black">---</p>

        <hr class="h-px border-0 bg-[#808080]">
        <br>
        <router-link to="#contact" class="p-2 bg-[#D6FF01] text-black font-semibold px-20 mx-6 rounded-xl hover:bg-[#bfe308] transition duration-500 ease-in-out">START NU
        </router-link>
      </div>
      <div class="bg-black rounded-3xl text-left w-70 m-auto mb-10 h-[490px] cursor-default">
        <p class="pl-7 py-5 font-semibold text-2xl">App</p>
        <hr class="h-px border-0 bg-[#808080]">
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Maatwerk</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Voor elk apparaat
        </p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Optimale snelheid
        </p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Playstore/Appstore
        </p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>24/7 Support</p>
        <p class="pl-7 py-4 text-[#808080] select-none text-black">---</p>
        <hr class="h-px border-0 bg-[#808080]">
        <br>
        <router-link to="#contact" class="p-2 bg-[#D6FF01] text-black font-semibold px-20 mx-6 rounded-xl hover:bg-[#bfe308] transition duration-500 ease-in-out">START NU
        </router-link>
      </div>

      <div id="hosting" class="bg-black rounded-3xl text-left w-70 m-auto mb-10 h-[490px] cursor-default">
        <p class="pl-7 py-5 font-semibold text-2xl">Hosting/Onderhoud</p>
        <hr class="h-px border-0 bg-[#808080]">
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>99.9% Uptime</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Onbeperkt
          dataverkeer</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>SSL certificaat</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Maandelijkse
          back-ups</p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>Google optimalisatie
        </p>
        <p class="pl-7 py-4 text-[#808080]"><i class="fa-solid fa-circle-check mr-4 text-white"></i>24/7 Support</p>
        <hr class="h-px border-0 bg-[#808080]">
        <br>
        <router-link to="#contact" class="p-2 bg-[#D6FF01] text-black font-semibold px-20 mx-6 rounded-xl hover:bg-[#bfe308] transition duration-500 ease-in-out">START NU
        </router-link>
      </div>
    </div>
  </section>
  <div id="hiddenTab01"></div>
</template>

<script>
export default {
  name: "Pakketten"
}
</script>

<style scoped>

</style>