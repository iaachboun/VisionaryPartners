<template>
  <Header/>
  <div class="top-background">
    <div class="sm:w-5/6 m-auto">
      <Hero class="min-h-screen sm:-mt-12"/>
      <Waarom class=""/>
      <Pakketten class="min-h-screen"/>
      <Voordelen class="min-h-screen"/>
    </div>
  </div>


  <div class="bottom-background">
    <VolgendeStap/>
    <Contact/>
    <Footer/>
  </div>

  <router-link to="#header">
    <div class="rounded-full fixed right-5 bottom-5 bg-[#D6FF01] text-black shadow-2xl">
      <div class="h-full text-4xl w-16 py-3">
        <i class="fa-solid fa-arrow-up"></i>
      </div>
    </div>
  </router-link>
</template>

<script setup>
import Header from "@/components/Header";
import Hero from "@/components/Hero";
import Waarom from "@/components/Waarom";
import Pakketten from "@/components/Pakketten";
import Voordelen from "@/components/Voordelen";
import VolgendeStap from "@/components/VolgendeStap";
import Contact from "@/components/Contact";
import Footer from "@/components/Footer";
</script>
<script>

export default {
  name: 'App',
  mounted() {
    this.handleScroll(); // Call it on mount to set the initial state based on current scroll
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll() {
      // Check if the scroll position is at the top of the page
      this.isTop = window.scrollY < 20; // Adjust the value as needed
    }
  }
}
</script>

<style>
body {
  scroll-behavior: smooth;
}

#app {
  font-family: 'Poppins', Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin: 0;

}

body {
  color: white;
  background-color: black;
  margin: 0;
}

.top-background {
  margin: 0;
  background: radial-gradient(circle at 100% 45%, rgba(24, 199, 41, 1), black 70%);
}

.bottom-background {
  margin: 0;
  background: radial-gradient(circle at 60% 100%, rgba(24, 199, 41, 1), black 75%);
}
</style>
