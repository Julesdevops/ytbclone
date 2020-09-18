<template>
  <div>
    <Header />
    <VideoGrid />
  </div>
</template>

<script>
import Header from "./Header.vue";
import VideoGrid from "./VideoGrid.vue";
export default {
  components: {
    Header,
    VideoGrid,
  },
};
</script>

<style style="scss">
@import "../../sass/base.scss";
</style>