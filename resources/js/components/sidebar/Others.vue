<template>
  <section class="sidebar-section">
    <span class="sidebar-title">MORE FROM YOUTUBE</span>
    <ul class="sidebar-list">
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'-21 -117 682.66672 682'"
          :iconName="'IconYtPremium'"
          :height="'20px'"
        >
          <icon-yt-premium />
        </icon-base>
        <span class="sidebar-item-label">YouTube Premium</span>
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
    </ul>
  </section>
</template>
<script>
import IconBase from "../icons/IconBase.vue";
import IconYtPremium from "../icons/IconYtPremium.vue";
import IconOnline from "../icons/IconOnline.vue";

export default {
  data() {
    return {};
  },
  components: {
    IconBase,
    IconYtPremium,
    IconOnline,
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
</style>