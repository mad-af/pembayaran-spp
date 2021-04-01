<template>
  <span>
    <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>{{ title }}</md-dialog-title>
      <md-dialog-content class="md-scrollbar">
        <slot />
      </md-dialog-content>
    </md-dialog>

    <md-button v-if='button' :class='theme' @click="showDialog = true">{{ button }}</md-button>
    <md-button v-if='icon' :class='theme' @click="showDialog = true">
      <md-icon>{{ icon }}</md-icon>
    </md-button>
  </span>
</template>

<script>
  export default {
    props: {
      title: String,
      button: String,
      icon: String,
      theme: String
    },
    data: () => ({
      showDialog: false
    })
  }
</script>

<style lang="scss" scoped>
  .md-dialog {
    width: auto;
    height: auto;
  }
  .md-button {
    min-width: 0;
  }
</style>