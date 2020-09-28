<template>
  <div>
    <!-- Username -->
    <div>{{ comment.user.firstname }} {{ comment.user.name }}</div>
    <!-- Comment creation "ago"-->
    <div>{{ comment.created }} ago</div>
    <!-- Comment content -->
    <div>{{ comment.content }}</div>
    <!-- Comment likes -->
    <div>{{ comment.likes }}</div>
    <!-- Comment dislikes -->
    <div>{{ comment.dislikes }}</div>

    <div>View {{ comment.answers }} replies</div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: ["comment"],
  methods: {},
};
</script>

<style lang="scss" scoped>
</style>