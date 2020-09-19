<template>
  <section class="sidebar-section">
    <ul class="sidebar-list">
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512 512'"
          :iconName="'IconSettings'"
          :height="'20px'"
        >
          <icon-settings />
        </icon-base>
        <span class="sidebar-item-label">Settings</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512 512'"
          :iconName="'IconFlag'"
          :height="'20px'"
        >
          <icon-flag />
        </icon-base>
        <span class="sidebar-item-label">Report history</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 512 512'"
          :iconName="'IconHelp'"
          :height="'20px'"
        >
          <icon-help />
        </icon-base>
        <span class="sidebar-item-label">Help</span>
      </li>
      <li class="sidebar-item">
        <icon-base
          :icon-color="'#FFFFFF'"
          :viewBox="'0 0 524.235 524.235'"
          :iconName="'IconInfo'"
          :height="'20px'"
        >
          <icon-info />
        </icon-base>
        <span class="sidebar-item-label">Send feedback</span>
      </li>
    </ul>
  </section>
</template>
<script>
import IconBase from "../icons/IconBase.vue";
import IconSettings from "../icons/IconSettings.vue";
import IconFlag from "../icons/IconFlag.vue";
import IconHelp from "../icons/IconHelp.vue";
import IconInfo from "../icons/IconInfo.vue";

export default {
  data() {
    return {};
  },
  components: {
    IconBase,
    IconSettings,
    IconFlag,
    IconHelp,
    IconInfo,
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
</style>