<template>
  <div>
    <form novalidate>
      <md-card>
        <md-card-content class="md-scrollbar">
          <md-field>
            <label for="className">Nama Kelas</label>
            <md-input name="className" id="className" v-model="data.className" :disabled="sending" />
          </md-field>

          <md-field>
            <label for="majors">Kompetensi Keahlian</label>
            <md-input name="majors" id="majors" v-model="data.majors" :disabled="sending" />
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
      data: {
        className: null,
        majors: null,
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