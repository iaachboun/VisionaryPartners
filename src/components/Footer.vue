<template>
  <div class="pb-8 text-center">
    <p>COPYRIGHT ©{{ currentYear }} VISIONARYPARTNERS |  <a href="/Algemene-voorwaarden-2024.pdf" download="visionarypartners-algemene-voorwaarden">ALGEMENE VOORWAARDEN</a></p>
  </div>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      pdfLink: "/src/assets/Algemene-voorwaarden-2024.pdf",
      currentYear: new Date().getFullYear()
    };
  }
}
</script>

<style scoped>

</style>