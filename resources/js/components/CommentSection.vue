<template>
  <div>
    <!-- Comment number -->
    <div>{{ video.comment_number }}</div>

    <!-- Comment list -->
    <Comment v-for="comment in video.comments" :comment="comment" :key="comment.id" />
  </div>
</template>
<script>
import Comment from "./Comment.vue";

export default {
  data() {
    return {};
  },
  components: {
    Comment,
  },
  props: ["video"],
  methods: {},
};
</script>

<style lang="scss" scoped>
</style>