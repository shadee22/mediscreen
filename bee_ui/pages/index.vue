

<template>
  <main class="gbg min-h-screen  antialiased pb-32">
    <Navbar />
    <div class="grid grid-cols-12">
      <SideBar />
      <div class="col-span-10 text-sm">
        <PersonalDetail />
        <MedicalExamination />
        <LaboInvestigation />
      </div>
    </div>
  </main>
</template>

<script > export default {
  data() {
    return {};
  },
  name: "IndexPage",
  methods: {
    hello(){


    }

  },
  mounted() {
    this.$store.commit('reset_details');
  },

};
</script>
