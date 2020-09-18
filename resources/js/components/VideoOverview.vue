<template>
  <div id="video-card">
    <img :src="video.thumbnail_filepath" alt="Video thumbnail" id="thumbnail-image" />
    <div id="video-title">{{ video.title }}</div>
    <div id="channel-name">{{ video.channel.name }}</div>
    <div id="video-metadata">{{ video.views }} views - {{ video.released }} ago</div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: ["video"],
  created() {
    console.log(this.video);
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
#video-card {
  width: 380px;
  max-height: 330px;
}
#thumbnail-image {
  width: 380px;
}
#video-title {
  color: white;
  font-size: 1.3rem;
}

#channel-name {
  color: grey;
  font-size: 1rem;
}
#video-metadata {
  color: grey;
  font-size: 1rem;
}
</style>