<template>
  <md-table md-card md-fixed-header v-model="data" md-sort="id" md-sort-order="asc">

    <md-table-row slot="md-table-row" slot-scope="{ item }">
      <md-table-cell md-label="Tanggal" md-sort-by="id">{{ item.id }}</md-table-cell>
      <md-table-cell md-label="Nama Siswa" md-sort-by="name">{{ item.name }}</md-table-cell>
      <md-table-cell md-label="Petugas" md-sort-by="email">{{ item.email }}</md-table-cell>
      <md-table-cell md-label="Jenis SPP" md-sort-by="gender">{{ item.gender }}</md-table-cell>
      <md-table-cell md-label="Nominal" md-sort-by="address">{{ item.title }}</md-table-cell>
    </md-table-row>
  </md-table>
</template>

<script>
  export default {
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