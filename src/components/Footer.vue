<template>
  <div class="pb-8 text-center">
    <p>COPYRIGHT ©{{ currentYear }} VISIONARYPARTNERS </p>
  </div>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      currentYear: new Date().getFullYear()
    };
  }

}
</script>

<style scoped>

</style>