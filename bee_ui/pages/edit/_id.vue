

<template>
  <main class="gbg min-h-screen antialiased pb-32">
    <Navbar />
    <div class="grid grid-cols-12">
      <SideBar />
      <div class="col-span-10 text-sm">

        <PersonalDetail :edit_data="p" />
        <MedicalExamination :edit_data="m"/>
        <LaboInvestigation  :edit_data="l"/>
      </div>
    </div>
  </main>
</template>
<script >
import Swal from "sweetalert2";
export default {
  data() {
    return {
      current_id: this.$route.params.id,
      e_data: [],
      p : null,
      m : null,
      l : null
    };
  },
  methods: {

  },
 
  mounted() {

    this.$axios
      .post("/api/get_edit_selected_patient_data", { data: this.current_id })
      .then((res) => {
        this.e_data = res.data;
        this.p = res.data;
        this.m = this.p['medi']
        this.l = this.p['labo']
        delete this.p['medi'];
        delete this.p['labo'];
      })
      .catch((er) => {
        Swal.fire({
          title: "Error",
          text: er,
          icon: "error",
          timer: 3000,
          position :"bottom-end"
        }).then((ress) => {
          if (ress.isDismissed) {
            this.$router.push("/patients");
          }
        });
      });
  },
};
</script>
