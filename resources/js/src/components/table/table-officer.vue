<template>
  <md-table md-card md-fixed-header v-model="data" md-sort="id" md-sort-order="asc">
    
    <md-table-row slot="md-table-row" slot-scope="{ item }">
      <md-table-cell md-label="ID" md-sort-by="id">{{ item.id }}</md-table-cell>
      <md-table-cell md-label="Nama" md-sort-by="name">{{ item.name }}</md-table-cell>
      <md-table-cell md-label="Username" md-sort-by="email">{{ item.email }}</md-table-cell>
      <md-table-cell md-label="Tingkat" md-sort-by="address">{{ item.title }}</md-table-cell>
      <md-table-cell md-label="Aksi">
        <Modal v-bind="{ title:'Edit Petugas', icon:'create', theme:'md-primary' }" >
          <FormOfficer v-bind="{ edit: item }" />
        </Modal>
        <Modal v-bind="{ title:'Delete Petugas', icon:'delete', theme:'md-accent' }" >
          <FormOfficer v-bind="{ deleted: item }" />
        </Modal>
      </md-table-cell>
    </md-table-row>
  </md-table>
</template>

<script>
  import modal from '../modal/modal'
  import formOfficer from '../form/form-officer'
  export default {
    components: {
      Modal: modal,
      FormOfficer: formOfficer
    },
    props: {
      data: Array
    },
    data: () => ({
      link: function (param) { return this.$route.name + '/' + param }
    })
  }
</script>

<style>
  .md-card {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
</style>