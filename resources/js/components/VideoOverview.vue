<template>
  <div id="video-card" @click="onVideoClicked">
    <img :src="video.thumbnail_filepath" alt="Video thumbnail" id="thumbnail-image" />
    <div id="video-title">{{ video.title }}</div>
    <div id="channel-name" @click.stop="onChannelClicked">{{ video.channel.name }}</div>
    <div id="video-metadata">{{ video.views }} views - {{ video.released }} ago</div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  props: ["video"],
  methods: {
    onVideoClicked() {
      const videoId = this.video.id;
      this.$router.push({ name: "video", params: { id: videoId } });
    },
    onChannelClicked() {
      console.log("chaine cliquée");
    },
  },
};
</script>

<style lang="scss" scoped>
#video-card {
  width: 360px;
  max-height: 330px;
  cursor: pointer;
}
#thumbnail-image {
  width: 360px;
}
#video-title {
  color: white;
  font-size: 1.1rem;
}

#channel-name {
  color: #aaaaaa;
  font-size: 0.9rem;

  &:hover {
    color: white;
  }
}

#video-metadata {
  color: #aaaaaa;
  font-size: 0.9rem;
}
#video-card {
  margin: 0 10px 80px 10px;
}
</style>