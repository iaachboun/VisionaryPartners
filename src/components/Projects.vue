<template>
  <div class="sm:w-5/6 m-auto">
    <h1 class="text-4xl text-left my-6"><strong class="text-[#D6FF01]">Onze </strong>projecten</h1>
  </div>

  <div class="middle-background circle2 bg-no-repeat bg-right min-h-[640px]">
    <div class="sm:w-5/6 m-auto">
      <section id="projectenColor" class="pb-20 pt-10">
        <div class=" gap-16 items-center lg:grid lg:grid-cols-12">
          <div class="col-span-6 font-light text-white sm:text-lg py-8 bg-[#1da1f2]">
            <div class="pr-6">
              <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white">Google<strong class="text-[#D6FF01]">.nl</strong></h2>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and
                quick,
                but big enough to deliver the scope you want at the pace you need.</p>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick.</p>
            </div>
          </div>
          <div class="col-span-6">
            <img class="rounded-lg shadow" src="../assets/img/google.png">
          </div>
        </div>
      </section>
    </div>
  </div>

  <div class="middle-background circle3 bg-no-repeat bg-left min-h-[640px]">
    <div class="sm:w-5/6 m-auto">
      <section id="projects" class="pb-20 pt-10">
        <div class=" gap-16 items-center lg:grid lg:grid-cols-12">
          <div class="col-span-6">
            <img class="rounded-lg shadow" src="../assets/img/webflow.png">
          </div>
          <div class="col-span-6 font-light text-gray-500 sm:text-lg dark:text-gray-400 py-8">
            <div class="pr-6">
              <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Webflow<strong class="text-[#D6FF01]">.nl</strong></h2>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and
                quick,
                but big enough to deliver the scope you want at the pace you need.</p>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div class="middle-background circle2 bg-no-repeat bg-right min-h-[640px]">
    <div class="sm:w-5/6 m-auto">
      <section id="projects" class="pb-20 pt-10">
        <div class="gap-16 items-center lg:grid lg:grid-cols-12">
          <div class="col-span-6 font-light text-gray-500 sm:text-lg dark:text-gray-400 py-8">
            <div class="pr-6">
              <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Website<strong class="text-[#D6FF01]">.nl</strong></h2>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and
                quick,
                but big enough to deliver the scope you want at the pace you need.</p>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick.</p>
            </div>
          </div>
          <div class="col-span-6">
            <img class="rounded-lg shadow" src="https://via.placeholder.com/600x350">
          </div>
        </div>
      </section>
    </div>
  </div>

  <div class="middle-background circle3 bg-no-repeat bg-left min-h-[640px]">
    <div class="sm:w-5/6 m-auto">
      <section id="projects" class="pb-20 pt-10">
        <div class=" gap-16 items-center lg:grid lg:grid-cols-12">
          <div class="col-span-6">
            <img class="rounded-lg shadow" src="https://via.placeholder.com/600x350">
          </div>
          <div class="col-span-6 font-light text-gray-500 sm:text-lg dark:text-gray-400 py-8">
            <div class="pr-6">
              <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Website.nl</h2>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and
                quick,
                but big enough to deliver the scope you want at the pace you need.</p>
              <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                and
                quick.</p>
            </div>
          </div>
        </div>
      </section>
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