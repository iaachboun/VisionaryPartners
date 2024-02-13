<template>
  <div class="grid grid-cols-1 flex items-center px-8 sm:px-0 sm:grid-cols-2 m-auto w-full pt-10 sm:pt-32">
    <div class="flex-col">
<!--      <h2 class="text-5xl sm:text-7xl text-left leading-tight sm:leading-normal font-bold">-->
<!--        Super Snel Jouw Website Of App <strong class="text-[#D6FF01]">Online!</strong>-->
<!--      </h2>-->
      <h2 class="text-6xl sm:text-7xl text-left leading-tight sm:leading-normal font-bold min-h-[350px] typed-header">
        <VueTyped
            :strings="['test', 'Super snel jouw website of app <div class=`text-[#D6FF01]`>online!</div>']"
            :typeSpeed="25"
            :backSpeed="120"
            :loop="true"
            :loop-count="4"
            :backDelay="3000"
        >
          <!-- The element where the typed text will appear -->
            <span v-typed-js></span>
        </VueTyped>
      </h2>
      <h1>
        Hi, I'm a
        <span class="typed-text">{{ typeValue }}</span>
        <span class="blinking-cursor">|</span>
        <span class="cursor" :class="{ typing: typeStatus }">&nbsp;</span>
      </h1>
      <p class="text-lg sm:text-xl text-left mt-8">Met ons hoog opgeleid team staat uw website of app binnen 2 weken online. Ons
        team bestaat
        uit HBO-programmeurs met minstens 8 jaar aan ervaring en kennis in hun vak gebied!</p>
      <router-link to="#contact" class="w-fit bg-[#D6FF01] text-black py-3 px-5 rounded-full mt-5 font-bold flex items-center hover:bg-[#bfe308] transition duration-500 ease-in-out">
        <span>NEEM CONTACT OP</span>
        <i class="fa-solid fa-arrow-right text-3xl pl-8"></i>
      </router-link>

    </div>
    <div class="flex mt-5">
      <img src="@/assets/img/visionarypartnersphone3.0.png" class="m-auto w-[400px] max-w-[60%]">
    </div>
  </div>
</template>

<script>
export default {
  name: "Hero",
  data: () => {
    return {
      typeValue: "",
      typeStatus: false,
      displayTextArray: ["YouTuber", "Developer", "Blogger", "Designer", "Freelancer"],
      typingSpeed: 100,
      erasingSpeed: 100,
      newTextDelay: 2000,
      displayTextArrayIndex: 0,
      charIndex: 0,
    };
  },
  props: {},
  created() {
    setTimeout(this.typeText, this.newTextDelay + 200);
  },
  methods: {
    typeText() {
      if (this.charIndex < this.displayTextArray[this.displayTextArrayIndex].length) {
        if (!this.typeStatus) this.typeStatus = true;
        this.typeValue += this.displayTextArray[this.displayTextArrayIndex].charAt(
            this.charIndex
        );
        this.charIndex += 1;
        setTimeout(this.typeText, this.typingSpeed);
      } else {
        this.typeStatus = false;
        setTimeout(this.eraseText, this.newTextDelay);
      }
    },
    eraseText() {
      if (this.charIndex > 0) {
        if (!this.typeStatus) this.typeStatus = true;
        this.typeValue = this.displayTextArray[this.displayTextArrayIndex].substring(
            0,
            this.charIndex - 1
        );
        this.charIndex -= 1;
        setTimeout(this.eraseText, this.erasingSpeed);
      } else {
        this.typeStatus = false;
        this.displayTextArrayIndex += 1;
        if (this.displayTextArrayIndex >= this.displayTextArray.length)
          this.displayTextArrayIndex = 0;
        setTimeout(this.typeText, this.typingSpeed + 1000);
      }
    },
  },
}
</script>

<style lang="scss" scoped>

/*!* Style for the typing cursor *!
.vue-typed-js .typed-cursor {
  opacity: 1;
  animation: blink 0.7s infinite;
  color: blue; !* Cursor color *!
}

@keyframes blink {
  50% { opacity: 0; }
}*/

h1 {
  font-size: 6rem;
  font-weight: normal;
  span.typed-text {
    color: #d2b94b;
  }
}

// Cursor blinking CSS Starts...
.blinking-cursor {
  font-size: 6rem;
  color: #2c3e50;
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
  -ms-animation: 1s blink step-end infinite;
  -o-animation: 1s blink step-end infinite;
  animation: 1s blink step-end infinite;
}
@keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-moz-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-webkit-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-ms-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
@-o-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: #2c3e50;
  }
}
</style>