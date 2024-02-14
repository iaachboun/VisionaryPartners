<template>
  <section id="contactColor">
    <div class="container mx-auto lg:grid grid-cols-1 flex flex-col items-center sm:grid-cols-2 mt-2 mb-16 sm:mb-60">
      <div class="sm:w-5/6 m-10">
        <h1 class="sm:max-w-[300px] text-8xl sm:text-9xl font-bold text-left">Let's Get Started</h1>
      </div>
      <div class="w-full p-8">
        <form @submit.prevent="sendEmail" class="sm:w-5/6 mx-auto">
          <div class="relative z-0 w-full mb-6 group text-left">
            <input type="text" name="floating_name" id="floating_name" v-model="from_name"
                   class="block py-2.5 px-0 w-full text-2xl text-white bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:border-white dark:focus:border-white focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " required/>
            <label for="floating_name"
                   class="peer-focus:font-medium absolute text-xl text-white duration-300 transform -translate-y-8 scale-90 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-8">Naam
              </label>
          </div>
          <div class="relative z-0 w-full mb-6 group text-left">
            <input type="email" name="floating_email" id="floating_email" v-model="from_email"
                   class="block py-2.5 px-0 w-full text-2xl text-white bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:border-white dark:focus:border-white focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " required/>
            <label for="floating_email"
                   class="peer-focus:font-medium absolute text-xl text-white duration-300 transform -translate-y-8 scale-90 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-8">Email</label>
          </div>
          <div class="relative z-0 w-full mb-6 group text-left">
            <label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Je bericht</label>
            <textarea id="message" rows="4" v-model="message"
                      class="block p-2.5 w-full text-xl text-white bg-transparent rounded-lg border border-white focus:ring-white focus:border-white dark:bg-transparant dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-white dark:focus:border-white"
                      placeholder="Laat een bericht achter" required></textarea>
          </div>
          <button type="submit" class="custom-button bg-[#D6FF01] text-black py-3 px-5 rounded-full mt-5 font-bold flex items-center hover:bg-[#bfe308] transition duration-500 ease-in-out">
            <span>NEEM CONTACT OP</span>
            <i class="arrow fa-solid fa-arrow-right text-3xl pl-8"></i>
          </button>
        </form>
      </div>

      <!-- Custom Popup Modal -->
      <div v-if="showModal"
           class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center z-50">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              {{ modalTitle }}
            </h3>
<!--            <button type="button"-->
<!--                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"-->
<!--                    @click="showModal = false">-->
<!--              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">-->
<!--                <path fill-rule="evenodd"-->
<!--                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM7.707 7.707a1 1 0 011.414-1.414L10 8.586l1.293-1.293a1 1 0 111.414 1.414L11.414 10l1.293 1.293a1 1 0 01-1.414 1.414L10 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L8.586 10 7.293 8.707a1 1 0 010-1.414z"-->
<!--                      clip-rule="evenodd"></path>-->
<!--              </svg>-->
<!--            </button>-->
          </div>
          <!-- Modal body -->
          <div class="p-6 space-y-6">
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
              {{ modalContent }}
            </p>
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
            <button @click="showModal = false" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Ik snap het
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import emailjs from 'emailjs-com';

export default {
  name: "Contact",
  data() {
    return {
      // Define the form fields as data properties
      from_name: '',
      from_email: '',
      message: '',
      showModal: false,
      modalTitle: '',
      modalContent: '',
    };
  },
  mounted() {
    // Initialize EmailJS when the component is mounted
    emailjs.init("lPe5fhuJ_5xIRTlfq"); // Replace with your actual User ID from EmailJS
  },
  methods: {
    sendEmail() {
      // Prepare the template parameters
      let templateParams = {
        from_name: this.from_name,
        from_email: this.from_email,
        message: this.message,
      };

      // Send the email using EmailJS
      emailjs.send("service_i59zk1u", "template_3un7cuk", templateParams) // Replace with your actual Service ID and Template ID from EmailJS
          .then(() => {
            this.modalTitle = 'Geslaagd';
            this.modalContent = 'Je bericht is succesvol verzonden!!';
            this.showModal = true;
            this.resetForm();
            // Set a timer to hide the modal after 3 seconds
            setTimeout(() => {
              this.showModal = false;
            }, 3000);
          }, () => {
            this.modalTitle = 'Error';
              this.modalContent = 'Oeps! Hier ging iets mis probeer het nog een keertje!';
            this.showModal = true;
            // Set a timer to hide the modal after 3 seconds
            setTimeout(() => {
              this.showModal = false;
            }, 3000);
          });
    },
    resetForm() {
      this.from_name = '';
      this.from_email = '';
      this.message = '';
    }
  }
}
</script>

<style scoped>
.custom-button:hover .arrow {
  transform: translateX(5px); /* Move right */
  transition: transform 0.3s ease-in-out;
}

.arrow {
  transition: transform 0.3s ease-in-out;
}
</style>
