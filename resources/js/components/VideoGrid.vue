<template>
  <main>
    <div v-if="videos" id="video-overview-grid">
      <VideoOverview v-for="video in videos" :video="video" :key="video.id" />
    </div>
  </main>
</template>
<script>
import VideoOverview from "./VideoOverview.vue";
export default {
  data() {
    return {
      videos: null,
    };
  },
  components: {
    VideoOverview,
  },
  created() {
    this.fetchVideoOverviews();
  },
  methods: {
    fetchVideoOverviews() {
      axios.get("/api/video/overview").then((response) => {
        const videos = response.data.video_overview.videos;
        this.videos = videos;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
main {
  background-color: #101010;
  padding: 30px 90px 0 90px;
}
#video-overview-grid {
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
}
</style>