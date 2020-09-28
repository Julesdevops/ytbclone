<template>
  <div>
    <!-- Video title -->
    <h1>{{ video.title }}</h1>
    <div>
      <!-- View numbers -->
      <span>{{ video.views }} views -</span>
      <!-- Release date -->
      <span>{{ video.release_date }}</span>
    </div>
    <div>
      <!-- Likes -->
      <div>{{ video.likes }}</div>
      <!-- Dislikes -->
      <div>{{ video.dislikes }}</div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: ["video"],
  methods: {},
};
</script>

<style lang="scss" scoped>
</style>