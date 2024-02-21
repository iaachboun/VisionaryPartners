<template>

  <div class="container my-24 mx-auto md:px-6">
    <section class="mb-32">

      <h1 class="mb-8 text-4xl text-left"><strong class="text-[#D6FF01]">Ons </strong>werk</h1>


        <div class="grid gap-6 lg:grid-cols-3">
        <div v-for="(project, i) in projects" :key="i">
          <div
              class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20 bg-[50%]"
              data-te-ripple-init data-te-ripple-color="dark" @click="openModal(project)">
            <img :src="project.image"
                 class="w-full align-middle transition duration-300 ease-linear"/>
            <a href="#!">
              <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.3)]">
                <div class="flex h-full items-end justify-start">
                  <h5 class="m-6 text-lg font-bold text-white">
                    {{ project.title }}
                  </h5>
                </div>
              </div>
              <div>
                <div
                    class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,99.2%,0.15)]">
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section>
  </div>

  <FlowbiteModal :project="selectedProject" v-if="isModalOpen" @close="closeModal"/>

</template>

<script>
import FlowbiteModal from '@/components/ProjectModal.vue'; // Adjust the path as per your project structure

export default {
  name: "Projects",
  components: {
    FlowbiteModal
  },

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
  methods: {
    openModal(project) {
      this.selectedProject = project;
      this.isModalOpen = true;
    },
    closeModal() {
      this.isModalOpen = false;
    }
  }
}
</script>

<style scoped>
.zoom:hover img {
  transform: scale(1.1);
}
</style>