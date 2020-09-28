<template>
  <section id="container">
    <Header />
    <Sidebar />
    <router-view></router-view>
  </section>
</template>

<script>
import Header from "./Header.vue";
import VideoGrid from "./VideoGrid.vue";
import Sidebar from "./Sidebar.vue";
export default {
  components: {
    Header,
    VideoGrid,
    Sidebar,
  },
};
</script>

<style style="scss">
@import "../../sass/base.scss";
@import "../../sass/sidebar.scss";

#container {
  display: grid;
  width: 100%;
  grid-template:
    "head head"
    "nav main";
}
</style>