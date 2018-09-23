<template>
    <div id="secure">
        <h1>Secure Area</h1>
        <p>
            This is a secure area
        </p>
        <ul>
            <li v-for="emp in employees" :key="emp.name">{{emp.name}} (Age: {{emp.age}})</li>
        </ul>


        <p>{{info}}</p>
    </div>
</template>

<script>
var axios = require("axios");

export default {
  name: "Secure",

  data: function() {
    return {
      employees: []
    };
  },

  created: function() {
    this.getAllMembers();
  },
  mounted: function() {
    // this.getAllMembers();
  },

  methods: {
    getAllMembers: function() {


      return axios.get("http://172.16.238.10/api.php").then(
        response => {
          console.log(response.data);
          this.employees = response.data.employees;
        },
        err => {
          console.error(err);
        }
      );
    }
  }
  // data() {
  //   return {
  //     employees: [
  //       {
  //         name: "Kula",
  //         age: 27
  //       },
  //       {
  //         name: "Supun",
  //         age: 29
  //       }
  //     ]
  //   };
  // }
};
</script>

<style scoped>
#secure {
  background-color: #ffffff;
  border: 1px solid #cccccc;
  padding: 20px;
  margin-top: 10px;
}
</style>