<template>
  <div class="top-background">
    <Header/>

    <div class="container m-auto">
      <Hero class="h-screen -mt-12"/>
      <Waarom class="h-screen"/>
      <Pakketten class="h-screen"/>
      <Voordelen/>
    </div>
  </div>

  <Specificaties class="specificaties"/>

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
import Specificaties from "@/components/Specificaties";
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
  height: 400vh;
}

.specificaties {
  margin: 0;
  height: 100vh;
}

.bottom-background {
  margin: 0;
  background: radial-gradient(circle at 60% 100%, rgba(24, 199, 41, 1), black 75%);
  height: 200vh;
}
</style>
