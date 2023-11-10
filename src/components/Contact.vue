<template>
  <div class="container m-auto">
    <div class="grid grid-cols-1 flex items-center lg:grid-cols-2 my-72 px-8 sm:px-0">
      <div class="mb-16">
        <h1 class="max-w-[300px] text-7xl sm:text-9xl font-bold text-left">Let's Get Started.</h1>
      </div>
      <div>

        <form class="sm:w-5/6 mx-auto">
          <div class="relative z-0 w-full mb-6 group text-left">
            <input type="text" name="floating_name" id="floating_name"
                   class="block py-2.5 px-0 w-full text-2xl text-white bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:border-white dark:focus:border-white focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " required/>
            <label for="floating_name"
                   class="peer-focus:font-medium absolute text-xl text-white duration-300 transform -translate-y-8 scale-90 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-8">Full
              name</label>
          </div>
          <div class="relative z-0 w-full mb-6 group text-left">
            <input type="email" name="floating_email" id="floating_email"
                   class="block py-2.5 px-0 w-full text-2xl text-white bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:border-white dark:focus:border-white focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " required/>
            <label for="floating_email"
                   class="peer-focus:font-medium absolute text-xl text-white duration-300 transform -translate-y-8 scale-90 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-8">Email
              address</label>
          </div>
          <div class="relative z-0 w-full mb-6 group text-left">
            <label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Your
              message</label>
            <textarea id="message" rows="4"
                      class="block p-2.5 w-full text-xl text-white bg-transparent rounded-lg border border-white focus:ring-white focus:border-white dark:bg-transparant dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-white dark:focus:border-white"
                      placeholder="Leave a comment..." required></textarea>
          </div>
          <button class="bg-[#D6FF01] text-black py-3 px-5 rounded-full mt-5 font-bold flex items-center">
            <span>NEEM CONTACT OP</span>
            <i class="fa-solid fa-arrow-right text-3xl pl-8"></i>
          </button>
        </form>


      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: "Contact"
}
</script>

<style scoped>

</style>