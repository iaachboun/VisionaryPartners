<template>
  <div class="container">
    <Header/>
    <Hero/>
    <Waarom/>
    <Pakketten/>
    <Voordelen/>
    <Specificaties/>
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
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
