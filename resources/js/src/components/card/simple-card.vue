<template>
  <md-card :class='theme'>
    <md-card-header class='md-layout'>
      <md-card-media>
        <md-icon class="md-size-3x md-layout-itemt">{{ icon }}</md-icon>
      </md-card-media>

      <div class="md-layout md-alignment-center">
        <md-card-header-text class="md-layout-itemt">
          <div class="md-subhead">{{ title }}</div>
          <div class="md-title card">{{ price }}</div>
        </md-card-header-text>
      </div>
    </md-card-header>
  </md-card>
</template>

<script>
  export default {
    props: {
      theme: String,
      title: String,
      price: String,
      icon: String
    }
  }
</script>

<style lang="scss" scoped>
  .md-card-header {
    margin-bottom: 0 !important;
  }

  .md-card {
    width: 320px;
    margin: 0px;
    display: inline-block;
    vertical-align: top;
  }

  .md-icon .md-layout-itemt {
    margin: 6px 16px 0 0;
  }

  .card {
    margin: 0 !important;
  }  
</style>