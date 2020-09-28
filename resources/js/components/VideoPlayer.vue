<template>
  <video controls>
    <source :src="filepath" type="video/mp4" />Your web browser does not support embedded videos. (:
  </video>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: ["filepath"],
  methods: {},
};
</script>

<style lang="scss" scoped>
video {
  height: 750px;
}
</style>