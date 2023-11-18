<template>
  <Header/>
  <div class="top-background">

    <div class="container m-auto">
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
