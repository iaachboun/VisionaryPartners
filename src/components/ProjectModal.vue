<template>
  <div class="fixed inset-0 overflow-y-auto z-50 flex items-center justify-center">
    <div class="relative mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
      <div class="flex justify-between items-center px-6 py-4 bg-black text-white">
        <h3 class="text-lg font-semibold">{{ project.title}}</h3>
        <button @click="closeModal" class="text-[#D6FF01] hover:text-white focus:outline-none focus:text-white">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div class="text-black">

        <a href="#" class="flex flex-col items-center bg-white shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <img class="object-cover md:h-auto md:w-48" :src="project.image" alt="">
          <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          </div>
        </a>

      </div>
    </div>
    <div class="fixed inset-0 bg-black opacity-25" @click="closeModal"></div>
  </div>
</template>

<script>
export default {
  props: {
    project: {
      type: Object, // Define project prop
      required: true
    }
  },

  methods: {
    closeModal() {
      this.$emit('close');
    }
  }
}
</script>

<style scoped>
/* Add your styles here */
</style>
