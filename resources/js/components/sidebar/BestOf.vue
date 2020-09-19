<template>
  <section class="sidebar-section">
    <span class="sidebar-title">BEST OF YOUTUBE</span>
    <ul class="sidebar-list">
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 448 448'"
          :iconName="'IconMusic'"
          :height="'20px'"
        >
          <icon-music />
        </icon-base>
        <span class="sidebar-item-label">Music</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 480 480'"
          :iconName="'IconSport'"
          :height="'20px'"
        >
          <icon-sport />
        </icon-base>
        <span class="sidebar-item-label">Sports</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 509.041 509.041'"
          :iconName="'IconVideogames'"
          :height="'20px'"
        >
          <icon-videogames />
        </icon-base>
        <span class="sidebar-item-label">Gaming</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 511.816 511.816'"
          :iconName="'IconFilm'"
          :height="'20px'"
        >
          <icon-film />
        </icon-base>
        <span class="sidebar-item-label">Movies & Shows</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512.005 512.005'"
          :iconName="'IconNews'"
          :height="'20px'"
        >
          <icon-news />
        </icon-base>
        <span class="sidebar-item-label">News</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 47.855 47.855'"
          :iconName="'IconOnline'"
          :height="'20px'"
        >
          <icon-online />
        </icon-base>
        <span class="sidebar-item-label">Live</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512 512'"
          :iconName="'IconFashion'"
          :height="'20px'"
        >
          <icon-fashion />
        </icon-base>
        <span class="sidebar-item-label">Fashion & Beauty</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512 512'"
          :iconName="'IconLearn'"
          :height="'20px'"
        >
          <icon-learn />
        </icon-base>
        <span class="sidebar-item-label">Learning</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 467.968 467.968'"
          :iconName="'Icon360'"
          :height="'20px'"
        >
          <icon360-video />
        </icon-base>
        <span class="sidebar-item-label">360° Video</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512 512'"
          :iconName="'IconCreate'"
          :height="'20px'"
        >
          <icon-create />
        </icon-base>
        <span class="sidebar-item-label">Browse channels</span>
      </li>
      <li class="sidebar-item"></li>
    </ul>
  </section>
</template>
<script>
import Icon360Video from "../icons/Icon360Video.vue";
import IconFashion from "../icons/IconFashion.vue";
import IconFilm from "../icons/IconFilm.vue";
import IconLearn from "../icons/IconLearn.vue";
import IconMusic from "../icons/IconMusic.vue";
import IconNews from "../icons/IconNews.vue";
import IconOnline from "../icons/IconOnline.vue";
import IconSport from "../icons/IconSport.vue";
import IconVideogames from "../icons/IconVideogames.vue";
import IconBase from "../icons/IconBase.vue";
import IconCreate from "../icons/IconCreate.vue";

export default {
  data() {
    return {
      searchIconColor: "#7f8c8d",
    };
  },
  components: {
    IconBase,
    Icon360Video,
    IconFashion,
    IconFilm,
    IconLearn,
    IconMusic,
    IconNews,
    IconOnline,
    IconSport,
    IconVideogames,
    IconCreate,
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
</style>