<template>
  <div class="projects-section">
    <div class="sm:w-5/6 m-auto px-8 md:p-0">
      <h1 class="text-4xl text-left my-6"><strong class="text-[#D6FF01]">Onze </strong>projecten</h1>
    </div>
    <div class="middle-background circle3 bg-no-repeat bg-left min-h-[640px] px-8 md:p-0">
      <div class="sm:w-5/6 m-auto">
        <section id="projectenColor" class="pb-20 pt-10">
          <div class=" gap-16 items-center lg:grid lg:grid-cols-12">
            <div class="col-span-6">
              <img class="rounded-lg shadow ml-auto w-[600px]" src="../assets/img/barberImage.png">
            </div>
            <div class="col-span-6 font-light text-white sm:text-lg py-8">
              <div class="pr-6">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white"><strong
                    class="text-[#D6FF01]">Kappers</strong> websites</h2>
                <p>Bij Visionary Partners specialiseren wij ons ook in reserveringssystemen voor kapperszaken,<strong
                    class="text-[#D6FF01]"> zonder extra
                  commissies op elke klantreservering.</strong> Onze aanpak is gericht op het bieden van transparantie
                  en
                  eerlijkheid aan kappers, waarbij ze volledige controle hebben over hun boekingsproces zonder extra
                  kosten. Met onze systemen streven we ernaar om kappers te ondersteunen bij het maximaliseren van hun
                  winstpotentieel en het bieden van een naadloze ervaring aan hun klanten.</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="middle-background circle2 bg-no-repeat bg-right min-h-[640px] px-8 md:p-0">
      <div class="sm:w-5/6 m-auto">
        <section id="projects" class="pb-20 pt-10">
          <div class=" gap-16 items-center lg:grid lg:grid-cols-12">
            <div class="col-span-6 font-light sm:text-lg py-8">
              <div class="pr-6">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white"><strong
                    class="text-[#D6FF01]">Unieke </strong>websites</h2>
                <p>Als VisionaryPartners hebben we een sterke expertise in het bouwen van <strong
                    class="text-[#D6FF01]">op maat gemaakte websites</strong> die
                  perfect passen bij de unieke behoeften en visie van onze klanten. Met onze diepgaande kennis en
                  creatieve vaardigheden kunnen we websites ontwikkelen die niet alleen aantrekkelijk zijn, maar ook
                  functioneel en gebruiksvriendelijk. <strong
                      class="text-[#D6FF01]">We streven ernaar om elk detail af te stemmen op de wensen van onze
                    klanten</strong>, waardoor ze een online aanwezigheid hebben die echt uniek is en opvalt in hun
                  branche.</p>
              </div>
            </div>
            <div class="col-span-6">
              <img class="rounded-lg shadow" src="../assets/img/cleanImage.png">
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="middle-background circle3 bg-no-repeat bg-left min-h-[640px] px-8 md:p-0">
      <div class="sm:w-5/6 m-auto">
        <section id="projects" class="pb-20 pt-10">
          <div class="gap-16 items-center lg:grid lg:grid-cols-12">
            <div class="col-span-6">
              <img class="rounded-lg shadow" src="../assets/img/webshopImage.png">
            </div>
            <div class="col-span-6 font-light sm:text-lg py-8">
              <div class="pr-6">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white">E-commerce<strong
                    class="text-[#D6FF01]"> websites</strong></h2>
                <p>Wij ontwikkelen professionele E-commerce webshops die perfect aansluiten bij de behoeften en
                  doelen van onze klanten. Met onze expertise zorgen we voor een naadloze online winkelervaring, waarbij
                  we streven naar <strong
                      class="text-[#D6FF01]">een gebruiksvriendelijk ontwerp en een professionele uitstraling.</strong>
                  Wij streven ernaar om met onze websites de mogelijkheid te bieden producten met een veel
                  groter bereik te verkopen, inclusief internationale markten. Dit voor zodat jouw bedrijf wereldwijd
                  kan groeien!
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: "Projects",

  data() {
    return {
      isModalOpen: false,
      selectedProject: {},
      projects: {
        "project01": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 1",
          "info": "test information 1"
        },
        "project02": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 2",
          "info": "test information 2"
        },
        "project03": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 3",
          "info": "test information 3"
        },
        "project04": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 4",
          "info": "test information 4"
        },
        "project05": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 5",
          "info": "test information 5"
        },
        "project06": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 6",
          "info": "test information 6"
        },
        "project07": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 7",
          "info": "test information 7"
        },
        "project08": {
          "image": "https://mdbcdn.b-cdn.net/img/new/standard/city/044.jpg",
          "title": "Project 8",
          "info": "test information 8"
        }
      }
    };
  },
}
</script>

<style scoped>
.zoom:hover img {
  transform: scale(1.1);
}


</style>