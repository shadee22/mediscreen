<template>
  <main class="text-white w-full antialiased mt-20 " id='2'>
    <h1 class="text-3xl text-green-500 font-bold ml-12 drop-shadow-lg mt-5">
      Medical Examination
    </h1>
    <form
      v-on:submit.prevent="save_Medical_details"
      class="text-black text-white"
    >
      <div class="flex flex-wrap py-5 px-10">
        <input required type="text" v-model="medical_form.Left_Eye" placeholder="Left Eye" class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2 ">
        <input required type="text" v-model="medical_form.Right_Eye" placeholder="Right Eye" class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2 ">
        <input required type="text" v-model="medical_form.Left_Ear" placeholder="Left Ear" class="px-5 py-2.5 rounded-lg shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Right_Ear" placeholder="Right Ear" class="px-5 py-2.5 rounded-lg shadow-2xl flex-auto text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Systemetic_Examination" placeholder="Systemetic_Examination" class="px-5 py-2.5 rounded-lg flex-auto shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Blood_pressure" placeholder="Blood_pressure" class="px-5 py-2.5 rounded-lg shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Heart" placeholder="Heart" class="px-5 py-2.5 flex-auto rounded-lg shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Lungs" placeholder="Lungs" class="px-5 py-2.5 rounded-lg flex-auto shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Abdomen" placeholder="Abdomen" class="px-5 py-2.5 rounded-lg flex-auto shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Hernia" placeholder="Hernia" class="px-5 py-2.5 rounded-lg flex-auto shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Vericose_veins" placeholder="Vericose_veins" class="px-5 py-2.5 flex-auto rounded-lg shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Extremites" placeholder="Extremites" class="px-5 py-2.5 rounded-lg flex-auto shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Skin" placeholder="Skin" class="px-5 py-2.5 rounded-lg shadow-2xl flex-auto text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Venerial_Diseases" placeholder="Venerial_Diseases" class="px-5 py-2.5 flex-auto rounded-lg shadow-2xl text-black  mx-2 my-2">
        <input required type="text" v-model="medical_form.Others" placeholder="Others" class="px-5 py-2.5 rounded-lg shadow-2xl flex-auto text-black  mx-2 my-2">
      </div>

      <button
        type="submit"
        class="
          py-2.5
          px-12
          font-bold
          ml-12
          rounded-lg
          bg-opacity-70
          transition-all
          backdrop-blur-lg
          drop-shadow-lg
        "
        :class="{
          'bg-green-500': done,
          'bg-red-600 px-36': !done,
        }"
      >
      {{ done ? 'Updated ✅ ' : 'Not Submited' }}
        
      </button>
      <!-- </div> -->
    </form>
  </main>
</template>



<script>
export default {

  props: ["edit_data"],
  data() {
    return {
      done : false,
      medical_form: {
        Left_Eye: "",
        Right_Eye: "",
        Left_Ear: "",
        Right_Ear: "",
        Systemetic_Examination: "",
        Blood_pressure: "",
        Heart: "",
        Lungs: "",
        Abdomen: "",
        Hernia: "",
        Vericose_veins: "",
        Extremites: "",
        Skin: "",
        Venerial_Diseases: "",
        Others: "",
      },
      // inputsrequired : this.$store.state.inputsrequired ,
    };
  },

  mounted() {
    this.init();
     if (this.$route.name != "index") {
      setTimeout(() => {
        this.medical_form = this.edit_data;
      }, 1000);
    }
  },

  methods: {
    test: function () {},
    save_Medical_details: function () { 
      this.done = !this.done;
      this.$store.commit('save_medical_details' , this.medical_form);
    },
    init: function () {
      // this.$axios
      //   .get("http://127.0.0.1:8000/api/medi/all_medical_inputsrequired ")
      //   .then((res) => {
      //     this.$store.commit("get_all_medical_inputsrequired ", res.data);
          // this.all_medical_inputsrequired  = this.$store.state.medical_inputsrequired ;
          // this.all_personal_inputsrequired  = this.$store.state.inputsrequired ;
      //   });
    },
  },
};
</script>