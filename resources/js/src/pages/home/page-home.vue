<template>
  <Drawer v-bind="{ items:routers, user:user, page:'Dashboard' }">
    <SimpleCard v-bind="{ theme:'md-primary', title:'Total Tunggakan', price:'Rp. 1,000,000', icon:'paid' }" />
    <SimpleCard v-bind="{ theme:'md-accent', title:'Total Siswa Tunggakan', price:'3', icon:'person' }" />

    <div class="table">
      <md-card>
        <md-card-header>
          <md-card-header-text class="md-layout md-alignment-center-space-between">
            <div class="md-title md-layout-itemt">Tabel Transaksi</div>
          </md-card-header-text>
        </md-card-header>
      </md-card>

      <TableTransaction v-bind="{ data: students }" />
    </div>
    <br><br>
  </Drawer>
</template>

<script>
  import { components } from '../../components/components'
  import { routers } from '../../route/routers'
  export default {
    components: {
      Drawer: components.drawer,
      SimpleCard: components.simpleCard,
      TableTransaction: components.tableTransaction,
      Modal: components.modal,
      FormStudent: components.formStudent
    },
    data: function () {
      return {
        routers : routers,
        user : {
          name: 'Mochamad Aufa'
        },
        students: [
        {
          id: 1,
          name: "Shawna Dubbin",
          email: "sdubbin0@geocities.com",
          gender: "Male",
          title: "Assistant Media Planner"
        },
        {
          id: 2,
          name: "Odette Demageard",
          email: "odemageard1@spotify.com",
          gender: "Female",
          title: "Account Coordinator"
        },
        {
          id: 3,
          name: "Vera Taleworth",
          email: "vtaleworth2@google.ca",
          gender: "Male",
          title: "Community Outreach Specialist"
        },
        {
          id: 4,
          name: "Lonnie Izkovitz",
          email: "lizkovitz3@youtu.be",
          gender: "Female",
          title: "Operator"
        },
        {
          id: 5,
          name: "Thatcher Stave",
          email: "tstave4@reference.com",
          gender: "Male",
          title: "Software Test Engineer III"
        },
        {
          id: 6,
          name: "Karim Chipping",
          email: "kchipping5@scribd.com",
          gender: "Female",
          title: "Safety Technician II"
        },
        {
          id: 7,
          name: "Helge Holyard",
          email: "hholyard6@howstuffworks.com",
          gender: "Female",
          title: "Internal Auditor"
        },
        {
          id: 8,
          name: "Rod Titterton",
          email: "rtitterton7@nydailynews.com",
          gender: "Male",
          title: "Technical Writer"
        },
        {
          id: 9,
          name: "Gawen Applewhite",
          email: "gapplewhite8@reverbnation.com",
          gender: "Female",
          title: "GIS Technical Architect"
        },
        {
          id: 10,
          name: "Nero Mulgrew",
          email: "nmulgrew9@plala.or.jp",
          gender: "Female",
          title: "Staff Scientist"
        },
        {
          id: 11,
          name: "Cybill Rimington",
          email: "crimingtona@usnews.com",
          gender: "Female",
          title: "Assistant Professor"
        },
        {
          id: 12,
          name: "Maureene Eggleson",
          email: "megglesonb@elpais.com",
          gender: "Male",
          title: "Recruiting Manager"
        },
        {
          id: 13,
          name: "Cortney Caulket",
          email: "ccaulketc@cbsnews.com",
          gender: "Male",
          title: "Safety Technician IV"
        },
        {
          id: 14,
          name: "Selig Swynfen",
          email: "sswynfend@cpanel.net",
          gender: "Female",
          title: "Environmental Specialist"
        },
        {
          id: 15,
          name: "Ingar Raggles",
          email: "iragglese@cbc.ca",
          gender: "Female",
          title: "VP Sales"
        },
        {
          id: 16,
          name: "Karmen Mines",
          email: "kminesf@topsy.com",
          gender: "Male",
          title: "Administrative Officer"
        },
        {
          id: 17,
          name: "Salome Judron",
          email: "sjudrong@jigsy.com",
          gender: "Male",
          title: "Staff Scientist"
        },
        {
          id: 18,
          name: "Clarinda Marieton",
          email: "cmarietonh@theatlantic.com",
          gender: "Male",
          title: "Paralegal"
        },
        {
          id: 19,
          name: "Paxon Lotterington",
          email: "plotteringtoni@netvibes.com",
          gender: "Female",
          title: "Marketing Assistant"
        },
        {
          id: 20,
          name: "Maura Thoms",
          email: "mthomsj@webeden.co.uk",
          gender: "Male",
          title: "Actuary"
        }
      ],
      }
    }
  }
</script>

<style lang="scss" scoped>
  .md-card {
    margin: 0 0 25px 0;
  }

  .table .md-card {
    margin: 0 !important;
    background-color: #fafcff;
  }

  .table .md-title {
    margin: 0 !important;
  }
</style>
