<template>
  <main class="gbg min-h-screen">
    <Navbar />
    <main class="grid grid-cols-12">
      <SideBar />
      <div class=" col-span-10 mx-12">
        <h1 class="text-3xl text-gray-800 font-bold my-6">Settings</h1>
        <div class="flex flex-wrap gap-4">
          <AddPersonalDetail />
          <AddMedicalDetail />
        </div>
      </div>
    </main>
  </main>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {},
};
</script>