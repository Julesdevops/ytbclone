<template>
  <main>
    <div v-if="video" id="video-view">
      <VideoPlayer :filepath="video.video_filepath" />
      <MetadataSection :video="video" />
      <DescriptionSection :video="video" />
      <CommentSection :video="video" />
    </div>
  </main>
</template>
<script>
import VideoPlayer from "./VideoPlayer.vue";
import MetadataSection from "./MetadataSection.vue";
import DescriptionSection from "./DescriptionSection.vue";
import CommentSection from "./CommentSection.vue";

export default {
  data() {
    return {
      video: null,
    };
  },
  created() {
    this.fetchVideo();
  },
  components: {
    VideoPlayer,
    MetadataSection,
    DescriptionSection,
    CommentSection,
  },
  methods: {
    fetchVideo() {
      const videoId = this.$route.params.id;

      axios.get("/api/video/" + videoId).then((response) => {
        this.video = response.data.video;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
main {
  background-color: #181818;
  padding: 0;
  grid-area: main;
  margin: 62px 0 0 242px;
  color: white;
}

#video-view {
  display: flex;
  flex-direction: column;
}
</style>