<template>
  <section class="sidebar-section">
    <ul class="sidebar-list">
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512 512'"
          :iconName="'IconHome'"
          :height="'20px'"
        >
          <icon-home />
        </icon-base>
        <span class="sidebar-item-label">Home</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'-80 0 512 512.00071'"
          :iconName="'IconTrend'"
          :height="'20px'"
        >
          <icon-trend />
        </icon-base>
        <span class="sidebar-item-label">Trending</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 426.667 426.667'"
          :iconName="'IconSubscriptions'"
          :height="'20px'"
        >
          <icon-subscriptions />
        </icon-base>
        <span class="sidebar-item-label">Subscriptions</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 426.667 426.667'"
          :iconName="'IconLibrary'"
          :height="'20px'"
        >
          <icon-library />
        </icon-base>
        <span class="sidebar-item-label">Library</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 515.556 515.556'"
          :iconName="'IconHistory'"
          :height="'20px'"
        >
          <icon-history />
        </icon-base>
        <span class="sidebar-item-label">History</span>
      </li>
    </ul>
  </section>
</template>
<script>
import IconBase from "../icons/IconBase.vue";
import IconHistory from "../icons/IconHistory.vue";
import IconHome from "../icons/IconHome.vue";
import IconLibrary from "../icons/IconLibrary.vue";
import IconSubscriptions from "../icons/IconSubscriptions.vue";
import IconTrend from "../icons/IconTrend.vue";

export default {
  data() {
    return {};
  },
  components: {
    IconHistory,
    IconHome,
    IconLibrary,
    IconSubscriptions,
    IconTrend,
    IconBase,
  },
  methods: {},
};
</script>
<style lang="scss" scoped>
</style>