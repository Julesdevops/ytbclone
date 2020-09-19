<template>
  <header>
    <div id="header-left">
      <button type="button" class="header-button">
        <icon-base :iconColor="'#FFFFFF'" :viewBox="'0 -53 384 384'" :iconName="'menu'">
          <icon-menu />
        </icon-base>
      </button>
      <a href="/">
        <img src="/assets/yt_logo_rgb_dark.png" alt="Logo de Youtube" id="ytb-logo" />
      </a>
    </div>

    <div id="search-bar">
      <input type="text" id="search-bar-input" placeholder="Search" />
      <button
        @mouseover="onSearchButtonMouseOver"
        @mouseleave="onSearchButtonMouseLeave"
        type="button"
        id="search-bar-button"
        title="Search"
      >
        <icon-base
          :icon-color="searchIconColor"
          :viewBox="'0 0 56.966 56.966'"
          :iconName="'search'"
          :height="'14px'"
          id="search-icon"
        >
          <icon-search />
        </icon-base>
      </button>
    </div>

    <div id="header-right">
      <button type="button" class="header-button" title="Create">
        <icon-base :iconColor="'#FFFFFF'" :viewBox="'0 0 512 512'" :iconName="'create'">
          <icon-create />
        </icon-base>
      </button>
      <button type="button" class="header-button" title="Youtube applications">
        <icon-base
          :iconColor="'#FFFFFF'"
          :viewBox="'0 0 360.49 360.49'"
          :iconName="'youtube-applications'"
        >
          <icon-yt-apps />
        </icon-base>
      </button>
      <button type="button" class="header-button" title="Notifications">
        <icon-base :iconColor="'#FFFFFF'" :viewBox="'0 0 512 512'" :iconName="'notification'">
          <icon-notification />
        </icon-base>
      </button>
      <button type="button" class="header-button">
        <icon-base :iconColor="'#FFFFFF'" :viewBox="'-42 0 512 512.002'" :iconName="'user'">
          <icon-user />
        </icon-base>
      </button>
    </div>
  </header>
</template>
<script>
import IconBase from "./icons/IconBase.vue";
import IconMenu from "./icons/IconMenu.vue";
import IconYtApps from "./icons/IconYtApps.vue";
import IconCreate from "./icons/IconCreate.vue";
import IconNotification from "./icons/IconNotification.vue";
import IconUser from "./icons/IconUser.vue";
import IconSearch from "./icons/IconSearch.vue";

export default {
  data() {
    return {
      searchIconColor: "#7f8c8d",
    };
  },
  components: {
    IconBase,
    IconMenu,
    IconYtApps,
    IconCreate,
    IconNotification,
    IconUser,
    IconSearch,
  },
  methods: {
    onSearchButtonMouseOver() {
      this.searchIconColor = "#CCCCCC";
    },
    onSearchButtonMouseLeave() {
      this.searchIconColor = "#7f8c8d";
    },
  },
};
</script>

<style lang="scss" scoped>
header {
  grid-area: head;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #202020;
  padding: 16px;
  height: 30px;
  position: fixed;
  width: 100%;
}

.header-button {
  background: none;
  border: none;
  padding: 0;
  font: inherit;
  outline: inherit;
  color: inherit;
  margin: 0 20px 0 0;
}

#ytb-logo {
  width: 80px;
  height: 24;
  margin: 0 0 0 0;
}

#search-bar {
  display: flex;
  height: 32px;
}

#search-bar-input {
  background-color: black;
  border: none;
  border: 1px solid #404040;
  border-radius: 1px;
  padding: 0 0 0 0.5rem;
  width: 500px;
  font-size: 0.9rem;
  color: white;
}

#search-bar-button {
  border: none;
  border-radius: 1px;
  width: 70px;
  background-color: #404040;
}
</style>