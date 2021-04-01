<template>
  <md-table md-card md-fixed-header v-model="data" md-sort="id" md-sort-order="asc">

    <md-table-row slot="md-table-row" slot-scope="{ item }">
      <md-table-cell md-label="NISN" md-sort-by="id">{{ item.id }}</md-table-cell>
      <md-table-cell md-label="Nama" md-sort-by="name">{{ item.name }}</md-table-cell>
      <md-table-cell md-label="Kelas" md-sort-by="email">{{ item.email }}</md-table-cell>
      <md-table-cell md-label="No.Telp" md-sort-by="gender">{{ item.gender }}</md-table-cell>
      <md-table-cell md-label="Alamat" md-sort-by="address">{{ item.title }}</md-table-cell>
      <md-table-cell md-label="Status" md-sort-by="status">{{ item.status }}</md-table-cell>
      <md-table-cell md-label="Detail">
        <router-link :to="link(item.id)" >
          <md-icon class="md-primary">chevron_right</md-icon>
        </router-link>
      </md-table-cell>
    </md-table-row>
  </md-table>
</template>

<script>
  export default {
    props: {
      data: Array
    },
    data: () => ({
      link: function (param) { return '/student/' + param }
    })
  }
</script>

<style>
  .md-card {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
</style>