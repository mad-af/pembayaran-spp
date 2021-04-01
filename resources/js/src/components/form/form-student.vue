<template>
  <div>
    <form novalidate>
      <md-card>

        <md-card-content class="md-scrollbar">
          <md-field>
            <label for="studentName">Nama</label>
            <md-input name="studentName" id="studentName" v-model="data.studentName" :disabled="sending" />
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
            <label for="class">Kelas</label>
            <md-select name="class" id="class" v-model="data.class" md-dense :disabled="sending">
              <md-option></md-option>
              <md-option value="L">L</md-option>
            </md-select>
          </md-field>            

          <md-field>
            <label for="phone">No.Tepl</label>
            <md-input type="number" id="phone" name="phone" v-model="data.phone" :disabled="sending" />
          </md-field>

          <md-field>
            <label for="address">Alamat</label>
            <md-input name="address" id="address" v-model="data.address" :disabled="sending" />
          </md-field>      
        </md-card-content>

        <md-card-actions>
          <md-button type="submit" class="md-primary" :disabled="sending">Create user</md-button>
        </md-card-actions>
        <md-progress-bar md-mode="indeterminate" v-if="sending" />

      </md-card>

      <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>
    </form>
  </div>
</template>

<script>

  export default {
    data: () => ({
      users: {
        email: null,
        password: null,
        role: 2
      },
      data: {
        studentName: null,
        class: null,
        phone: null,
        address: null
      },
      userSaved: false,
      sending: false,
      lastUser: null
    }),
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