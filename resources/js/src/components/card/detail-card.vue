<template>
  <md-card class='detail'>
    <md-card-header>
      <md-card-media md-medium>
        <img src="https://vuematerial.io/assets/examples/villains.png" alt="People">
      </md-card-media>

      <md-card-header-text>
        <div class="md-title">Mochamad Aufa</div>
        <div class="md-subhead">XII RPL 1</div>
        <div class="md-subhead">082879123214</div>
        <div class="md-subhead">Jawa Timur, Kota Kediri, Desa Jawa</div>
      </md-card-header-text>
    </md-card-header>

    <md-card-actions>
      <Modal v-bind="{ title:'Edit Petugas', button:'Update', theme:'md-primary' }" >
        <FormOfficer v-bind="{ edit: item }" />
      </Modal>
      <Modal v-bind="{ title:'Delete Petugas', button:'delete', theme:'md-accent' }" >
        <FormOfficer v-bind="{ deleted: item }" />
      </Modal>
    </md-card-actions>
  </md-card>
</template>
<script>
  import modal from '../modal/modal'
  import formOfficer from '../form/form-officer'
  export default {
    components: {
      Modal: modal,
      FormOfficer: formOfficer
    }
  }
</script>


<style lang="scss" scoped>
  .md-card {
    width: 600px;
    margin: 0 12px 12px 0 !important;
    display: inline-block;
    vertical-align: top;
    background-color: #fff !important;
  }

  .detail .md-card-header .md-card-media {
    margin-left: 0;
    margin-right: 16px;
  }

  .md-with-hover {
    cursor: context-menu;
  }

</style>