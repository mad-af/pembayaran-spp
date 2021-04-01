<template>
  <div>
    <form novalidate v-if="!edit && !deleted">
      <md-card>
        <md-card-content class="md-scrollbar">
          <md-field>
            <label for="officerName">Nama</label>
            <md-input name="officerName" id="officerName" v-model="data.officerName" :disabled="sending" />
          </md-field>
          
          <md-field>
            <label for="username">Username</label>
            <md-input name="username" id="username" v-model="users.username" :disabled="sending" />
          </md-field>

          <md-field>
            <label for="password">Password</label>
            <md-input type="password" name="password" id="password" autocomplete="password" v-model="users.password" :disabled="sending" />
          </md-field>
        
          <md-field>
            <label for="role">Tingkatan</label>
            <md-select name="role" id="role" v-model="users.role" md-dense :disabled="sending">
              <md-option></md-option>
              <md-option value=0>Admin</md-option>
              <md-option value=1>Petugas</md-option>
            </md-select>
          </md-field>            
        </md-card-content>

        <md-card-actions>
          <md-button type="submit" class="md-primary" :disabled="sending">Create Petugas</md-button>
        </md-card-actions>
        <md-progress-bar md-mode="indeterminate" v-if="sending" />
      </md-card>

      <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>
    </form>

    <form novalidate v-else-if="edit">
      <md-card>
        <md-card-content class="md-scrollbar">
          <md-field>
            <label for="officerName">Nama</label>
            <md-input name="officerName" id="officerName" v-model="data.officerName" :disabled="sending" />
          </md-field>
        
          <md-field>
            <label for="role">Tingkatan</label>
            <md-select name="role" id="role" v-model="users.role" md-dense :disabled="sending">
              <md-option></md-option>
              <md-option value=0>Admin</md-option>
              <md-option value=1>Petugas</md-option>
            </md-select>
          </md-field>                 
        </md-card-content>

        <md-card-actions>
          <md-button type="submit" class="md-primary" :disabled="sending">Update Petugas</md-button>
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
          <md-button type="submit" class="md-primary" :disabled="sending">Delete Petugas</md-button>
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
      users: {
        username: null,
        password: null,
        role: null
      },
      data: {
        officerName: null,
      },
      userSaved: false,
      sending: false,
      lastUser: null
    }),
    mounted: function () {
      this.$nextTick(function () {
        if (this.edit) {
          this.users.role = this.edit.id
          this.data.officerName = this.edit.name
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