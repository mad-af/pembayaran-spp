<template>
  <md-card md-with-hover class='class'>
    <md-card-header>
      <md-card-media md-medium>
        <img src="https://vuematerial.io/assets/examples/cover.png" alt="People">
      </md-card-media>

      <md-card-header-text>
        <div class="md-title">BRIGINER</div>
        <div class="md-subhead">Rekayasa Perangkat Lunak</div>
      </md-card-header-text>
    </md-card-header>

    <md-card-actions>
      <md-button>Detail</md-button>
    </md-card-actions>
  </md-card>
</template>
<script>
export default {
  name: 'Media'
}
</script>


<style lang="scss" scoped>
  .md-card {
    width: 353px;
    margin: 0 12px 12px 0 !important;
    display: inline-block;
    vertical-align: top;
    background-color: #fff !important;
  }

  .class .md-card-header .md-card-media {
    margin-left: 0;
    margin-right: 16px;
  }

  .md-with-hover {
    cursor: context-menu;
  }

</style>