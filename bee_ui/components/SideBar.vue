<template>
  <main class="col-span-2 h-full antialiased pt-10 text-gray-500 text-sm">
    <ul class="pl-10 py-2 cursor-pointer">
      <li
        v-for="setting in side_options"
        :key="setting.id"
        @click="alerter(setting)"
        class="
          hover:bg-green-900
          hover:text-white
          rounded-xl
          my-2
          px-5
          py-2.5
          drop-shadow-lg
          transition-all
        "
      >
        - {{ setting }}
      </li>
    </ul>
  </main>
</template>


<script>
const Swal = require("sweetalert2");

export default {
  data() {
    return {
      side_options: ["Patients", "Analytics", "Settings"],
    };
  },
  methods: {
    route_settings() {
      this.$router.push("/settings");
    },
    alerter(txt) {
      if (txt === "Patients") {
        this.$router.push("/patients");
      }
      else{
      Swal.fire({
        title: txt + " will Coming Soon!",
        icon: "info",
        confirmButtonText: "Cool!",
        timer : 1500,
      });

      }
    },
  },
};
</script>
