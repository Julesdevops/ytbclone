<template>
  <div>
    <!-- Channel name -->
    <div>{{ video.channel.name }}</div>
    <!-- Subscriptions number-->
    <div>{{ video.channel.subscribers }}</div>

    <!-- Video Description -->
    <div>{{ video.description }}</div>
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