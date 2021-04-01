<template>
  <div class="page-container md-layout-row">
    <md-app>
      <md-app-toolbar class="md-transparent md-layout md-alignment-center-right">
        <div class="md-layout-itemt" id="user">
          <div class="md-layout md-alignment-center-left">
            <md-avatar class="md-avatar-icon md-accent md-layout-itemt ">
              <md-icon>favorite</md-icon>
            </md-avatar>
            <span class="md-layout-itemt md-subheading">{{ user.name }}</span>
          </div>
        </div>
      </md-app-toolbar>

      <md-app-drawer md-permanent="full">
        <md-toolbar class="md-transparent md-layout md-alignment-center" md-elevation="0">
          <span class="md-title md-layout-itemt">MyADMIN</span>
        </md-toolbar>

        <md-list >
          <md-list-item v-for="x in items" :key="x.text" :to='x.route'>
              <md-icon>{{ x.icon }}</md-icon>
              <span class="md-list-item-text">{{ x.text }}</span>
          </md-list-item>

        </md-list>
      </md-app-drawer>

      <md-app-content class="md-scrollbar">
        <div class="">
          <span class="md-title md-display-1">{{ page }}</span>
        </div>
        <br>
        <slot />
      </md-app-content>
    </md-app>
  </div>
</template>

<script>
  export default {
    props: {
      items: Array,
      user: Object,
      page: String
    }
  }
</script>

<style lang="scss" scoped>
  .md-app {
    min-height: 100vh;
  }

  .md-drawer {
    width: 240px;
    max-width: 100%;
    max-width: calc(100vw - 125px);
  }

  #user {
    width: 230px;
  }

  #user span {
    padding-left: 10px;
  }

  .md-avatar {
    margin: 0;
  }

  // .md-list-item a{
  //   height: 70px;
  // }

  .md-app-content {
    background-color: #f4f4f4;
  }
  .md-list .md-theme-default .md-selected .md-list-item-content, 
  .md-list .md-theme-default .router-link-active .md-list-item-content,
  .router-link-exact-active span,
  .router-link-exact-active .md-icon{
    color: #f4f4f4 !important;
  }

  .router-link-exact-active{
    background-color: #4489ff;
  }

  .md-content {
    max-width: 100%;
    max-height:200px;
    overflow: auto;
  }
</style>
