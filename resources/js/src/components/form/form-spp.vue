<template>
  <div>
    <form novalidate v-if="!edit && !deleted">
      <md-card>
        <md-card-content class="md-scrollbar">
          <md-field>
            <label for="sppName">Nama SPP</label>
            <md-input name="sppName" id="sppName" v-model="data.sppName" :disabled="sending" />
          </md-field>

          <md-field>
            <label for="price">Nominal</label>
            <md-input type="number" id="price" name="price" v-model="data.price" :disabled="sending" />
          </md-field>
        </md-card-content>

        <md-card-actions>
          <md-button type="submit" class="md-primary" :disabled="sending">Create SPP</md-button>
        </md-card-actions>
        <md-progress-bar md-mode="indeterminate" v-if="sending" />
      </md-card>

      <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>
    </form>

    <form novalidate v-else-if="edit">
      <md-card>
        <md-card-content class="md-scrollbar">
          <md-field>
            <label for="sppName">Nama SPP</label>
            <md-input name="sppName" id="sppName" v-model="data.sppName" :disabled="sending" />
          </md-field>

          <md-field>
            <label for="price">Nominal</label>
            <md-input type="number" id="price" name="price" v-model="data.price" :disabled="sending" />
          </md-field>
        </md-card-content>

        <md-card-actions>
          <md-button type="submit" class="md-primary" :disabled="sending">Edit SPP</md-button>
        </md-card-actions>
        <md-progress-bar md-mode="indeterminate" v-if="sending" />
      </md-card>

      <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>
    </form>

    <form novalidate v-else-if="deleted">
      <md-card>
        <md-card-content class="md-scrollbar">
          Apakah anda yakin menghapus <b>{{ deleted.name }}</b> ?
        </md-card-content>

        <md-card-actions>
          <md-button type="submit" class="md-primary" :disabled="sending">Hapus SPP</md-button>
        </md-card-actions>
        <md-progress-bar md-mode="indeterminate" v-if="sending" />
      </md-card>

      <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>
    </form>

    
  </div>
</template>

<script>

  export default {
    props: {
      edit: Object,
      deleted: Object
    },
    data: () => ({
      data: {
        sppName: null,
        price: null,
      },
      userSaved: false,
      sending: false,
      lastUser: null
    }),
    mounted: function () {
      this.$nextTick(function () {
        if (this.edit) {
          this.data.sppName = this.edit.name
          this.data.price = this.edit.id
        }
      })
    },
    methods: {
      clearForm () {
        this.$v.$reset()
        this.form.studentName = null
        this.form.lastName = null
        this.form.age = null
        this.form.gender = null
        this.form.email = null
      }
    }
  }
</script>

<style lang="scss" scoped>
  .md-progress-bar {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
  }

  form .md-card-content {
    margin-top: 10px;
    width: 400px;
  }
</style>