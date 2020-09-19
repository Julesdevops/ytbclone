<template>
  <nav>
    <top />
    <login />
    <best-of />
    <others />
    <bottom />
    <Footer />
  </nav>
</template>
<script>
import Top from "./sidebar/Top.vue";
import Login from "./sidebar/Login.vue";
import BestOf from "./sidebar/BestOf.vue";
import Others from "./sidebar/Others.vue";
import Bottom from "./sidebar/Bottom.vue";
import Footer from "./sidebar/Footer.vue";

export default {
  data() {
    return {
      searchIconColor: "#7f8c8d",
    };
  },
  components: {
    Top,
    Login,
    BestOf,
    Others,
    Bottom,
    Footer,
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
nav {
  background-color: #212121;
  grid-area: nav;
  display: flex;
  flex-direction: column;
  padding: 10px 0 10px 0;
  height: 100%;
  overflow: scroll;
  position: fixed;
  margin-top: 62px;
}
</style>