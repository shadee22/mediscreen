<template>
  <main class="w-full antialiased mt-20" id="2">
    <h1 class="text-3xl p-2 bg-blue-100 antialiased font-bold ml-12  mt-5">
      Medical Examination
    </h1>
    <form v-on:submit.prevent="save_Medical_details" class="text-black">
      <div class="flex flex-wrap py-5 px-10 font-semibold">
        <div class="m-2 ">
          <label for="">Left Eye</label>
          <input
            required
            type="text"
            v-model="medical_form.Left_Eye"
            placeholder="Left Eye"
            class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
          />
        </div>
        <div class="m-2 ">
          <label for="">Right Eye</label>
          <input
            required
            type="text"
            v-model="medical_form.Right_Eye"
            placeholder="Right Eye"
            class="
             mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Left Ear</label>
          <input
            required
            type="text"
            v-model="medical_form.Left_Ear"
            placeholder="Left Ear"
            class="
           mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Right Ear</label>
          <input
            required
            type="text"
            v-model="medical_form.Right_Ear"
            placeholder="Right Ear"
            class="
               mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Other</label>
          <input
            required
            type="text"
            v-model="medical_form.Systemetic_Examination"
            placeholder="Other"
            class="
               mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Blood pressure</label>
          <input
            required
            type="text"
            v-model="medical_form.Blood_pressure"
            placeholder="Blood pressure"
            class="
               mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Heart</label>
          <input
            required
            type="text"
            v-model="medical_form.Heart"
            placeholder="Heart"
            class="
                mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Lungs</label>
          <input
            required
            type="text"
            v-model="medical_form.Lungs"
            placeholder="Lungs"
            class="
               mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Abdomen</label>
          <input
            required
            type="text"
            v-model="medical_form.Abdomen"
            placeholder="Abdomen"
            class="
               mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Hernia</label>
          <input
            required
            type="text"
            v-model="medical_form.Hernia"
            placeholder="Hernia"
            class="
              mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Vericose veins</label>
          <input
            required
            type="text"
            v-model="medical_form.Vericose_veins"
            placeholder="Vericose veins"
            class="
                mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Extremites</label>
          <input
            required
            type="text"
            v-model="medical_form.Extremites"
            placeholder="Extremites"
            class="
               mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Skin</label>
          <input
            required
            type="text"
            v-model="medical_form.Skin"
            placeholder="Skin"
            class="
             mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">Venerial Diseases</label>
          <input
            required
            type="text"
            v-model="medical_form.Venerial_Diseases"
            placeholder="Venerial Diseases"
            class="
              mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2 ">
          <label for="">X-Ray</label>
          <input
            required
            type="text"
            v-model="medical_form.Others"
            placeholder="X-ray"
            class="
              mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
      </div>

      <button
        type="submit"
        class="
          py-2.5
          px-12
          font-bold
          ml-12
          rounded-lg
          text-white
          transition-all
          backdrop-blur-lg
          drop-shadow-lg
        "
        :class="{
          'bg-blue-600': done,
          'bg-blue-300 px-36': !done,
        }"
      >
        {{ done ? "Updated ✅ " : "Not Submited" }}
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
      done: false,
      medical_form: {
        Left_Eye: "",
        Right_Eye: "",
        Left_Ear: "good",
        Right_Ear: "good",
        Systemetic_Examination: "None",
        Blood_pressure: "",
        Heart: "Normal",
        Lungs: "Clear",
        Abdomen: "Soft",
        Hernia: "No",
        Vericose_veins: "No",
        Extremites: "Nil",
        Skin: "Normal",
        Venerial_Diseases: "Nil",
        Others: "Normal",
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
      this.$store.commit("save_medical_details", this.medical_form);
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