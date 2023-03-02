<template>
  <div
    class="max-h-[2784px] h-[2784px] w-[1996.8px] max-w-[1996.8px] font-sans font-bold relative flex justify-center"
  >
    <!-- <NuxtLink to="/">
      <button
        class="
          absolute
          flex
          items-center
          py-2.5
          px-6
          top-10
          right-10
          bg-gray-900
          hover:bg-black
          text-white
          transition-all
          rounded-full
        "
        :class="{
          'opacity-0': printing,
        }"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6 mr-4"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"
          />
        </svg>
        New Document
      </button></NuxtLink
    >
    <button
      :class="{
        'opacity-0': printing,
      }"
      class="
        absolute
        right-10
        bottom-10
        px-16
        text-xl
        p-4
        rounded-full
        text-gray-200
        hover:bg-gray-800
        transition-all
        flex
        items-center
        bg-black
      "
      @click="start_printing"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        stroke-width="2"
        stroke="currentColor"
        class="mr-4 w-6 h-6 animate-bounce"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z"
        />
      </svg>

      Print Certificate
    </button> -->

    <img
      src="~/assets/ssss.png"
      class="max-h-[2784px] h-[2784px] w-[1996.8px] max-w-[1996.8px]"
      alt=""
      :class="{
        'opacity-0': printing,
      }"
    />

    <main
      v-if="datas.personal"
      class="absolute mt-1 h-[2784px] max-h-[2784px] w-[1996.8px] max-w-[1996.8px] overflow-hidden px-[2em] pt-[12em] text-[2em]"
    >
      <!-- PERSONAL DETAILS -->
      <div class="grid grid-cols-4 mt-2 text-center">
        <p>{{ datas.personal["Rfg com Code No"] }}</p>
        <p>{{ datas.personal["Last Name"] }}</p>
        <p>{{ datas.personal["First Name"] }}</p>
        <p>{{ datas.personal["Serial No"] }}</p>
      </div>
      <div class="grid-cols-full mt-16 ml-64 grid text-start">
        <p>{{ datas.personal["District"] }}</p>
      </div>
      <div class="flex gap-2">
        <p class="ml-52">{{ datas.personal["Sex"][0] }}</p>
        <p class="ml-44">{{ datas.personal["Age"] }}</p>
        <p class="ml-60">{{ datas.personal["Status"] }}</p>
        <p class="ml-80">{{ datas.personal["Nationality"] }}</p>
        <p class="ml-44">{{ datas.personal["Height(cm)"] }}</p>
        <p class="ml-52">{{ datas.personal["Weight(cm)"] }}</p>
      </div>
      <div class="grid grid-cols-3 mt-[0.2em] text-center">
        <p class="ml-36">{{ datas.personal["Passport NO"] }}</p>
        <p>{{ datas.personal["Place of Issue"] }}</p>
        <p class="ml-12">{{ datas.personal["Position Applied for"] }}</p>
      </div>
      <div class="grid grid-cols-3 mt-[0.3em] text-center">
        <p>{{ datas.personal["Date"] }}</p>
        <p>{{ datas.personal["Recruiting Agency"] }}</p>
        <p class="ml-2">{{ datas.personal["Country"] }}</p>
      </div>

      <!-- SIGNATURES -->
      <div class="grid grid-rows-2 pl-72 pt-11 pb-16">
        <div class="ml-96 pl-80 flex">
          <p class="pr-8">{{ datas.medical_history["deppresion"] }}Nil</p>
          <p class="ml-48">{{ datas.medical_history["allergy"] }}</p>
        </div>
        <p>{{ datas.medical_history["others"] }}</p>
      </div>

      <!-- MEDI + LABO -->
      <div
        class="mt-[9.7em] text-[2.2rem] grid grid-cols-2 pr-4 pt-1 text-right leading-3"
      >
        <!-- MEDICAL -->
        <div class="mr-2 mt-2 space-y-9">
          <div class="mt-1">{{ datas.medical["Right_Eye"] }}</div>
          <div class="pt-[0.3em]">{{ datas.medical["Left_Eye"] }}</div>
          <div class="">{{ datas.medical["Right_Ear"] }}</div>
          <div class="">{{ datas.medical["Left_Ear"] }}</div>
          <div class="pt-8">{{ datas.medical["Blood_pressure"] }}</div>
          <div class="">{{ datas.medical["Heart"] }}</div>
          <div class="pt-4">{{ datas.medical["Lungs"] }}</div>
          <div class="pt-3">{{ datas.medical["Abdomen"] }}</div>
          <div class="">{{ datas.medical["Others"] }}</div>
          <div class="pt-2">{{ datas.medical["Hernia"] }}</div>
          <div class="pt-4">{{ datas.medical["Vericose_veins"] }}</div>
          <div class="pt-1">{{ datas.medical["Extremites"] }}</div>
          <div class="pt-3">{{ datas.medical["Skin"] }}</div>
          <div class="pt-2">{{ datas.medical["Venerial_Diseases"] }}</div>
          <div class="">{{ datas.medical["Others"] }}</div>
        </div>
        <!-- LABORATARY -->
        <div class="ml-96 pl-48 space-y-[0.9em] text-left">
          <p class="">{{ datas.labo["Suger"] }}</p>
          <p>{{ datas.labo["Albumin"] }}</p>
          <p>{{ datas.labo["Pregnancy"] }}</p>
          <p class="">{{ datas.labo["Helmenthes"] }}</p>
          <p class="">{{ datas.labo["Salmonella/Shigella"] }}</p>
          <p>{{ datas.labo["VCholera"] }}</p>
          <p>{{ datas.labo["Giardia"] }}</p>
          <p class="pt-2">{{ datas.labo["Hemoglobin"] }}</p>
          <p class="">{{ datas.labo["Malaria Film"] }}</p>
          <p>{{ datas.labo["Micro Filaria"] }}</p>
          <p class="pt-3">{{ datas.labo["FBS/RBS"] }}</p>
          <p>{{ datas.labo["LFTS"] }}</p>
          <p>{{ datas.labo["Creatinine"] }}</p>
          <p class="">{{ datas.labo["Urea"] }}</p>
          <p class="pt-2">{{ datas.labo["TPHA"] }}</p>
          <p>{{ datas.labo["VDRL"] }}</p>
          <p>{{ datas.labo["AntiHCV"] }}</p>
          <p class="">{{ datas.labo["HIVTeST(HIBI-II)"] }}</p>
          <p>{{ datas.labo["HbsAg"] }}</p>
        </div>
      </div>

      <!-- Signature and First and Last Name -->
      <div class="mt-[2.3em] ml-[21em] flex justify-start gap-2 pt-1">
        <div class="  mr-[1.4em] flex">
          <!-- Mr -->
          <p v-if="mrs_miss == 'Mr'" class="pl-40 ">XXXXX</p>
          <!-- Mrs -->
          <p v-if="mrs_miss == 'Mrs'" class="pl-24">XX</p>
          <p v-if="mrs_miss == 'Mrs'" class="ml-[2.3em]">XXX</p>
          <!-- Miss -->
          <p v-if="mrs_miss == 'Miss'" class="ml-24 pr-16">XXXXX</p>
        </div>
        <div class="flex gap-2">
          <p>{{ datas.personal["First Name"] }}</p>
          <p>{{ datas.personal["Last Name"] }}</p>
        </div>
      </div>
      <div class="mt-8 mr-16 flex justify-start gap-2">
        <p v-if="datas.personal.Sex[0] == 'F'" class="ml-[15em] pl-4">XX</p>
        <p v-else class="ml-[15em] pl-4">XXX</p>
        <p v-if="datas.personal.Sex[0] == 'F'" class="ml-48 text-[1.2em] pl-6">
          XXXXXXX
        </p>
        <p v-else class="ml-48 text-[1.4em] pl-2">XXXX</p>
      </div>
    </main>
  </div>
</template>
<style scoped>
/* main {
  background-image: url("~@/assets/sss.png");
  /* background-size: 'fit'; */
/* max-height: 700px;
  height: 700px;
  background-repeat: no-repeat;
  /* width: 500px; */
/* to centre page on screen*/
/* width: 21cm;
  height: 29.7cm;
  margin-left: auto;
  margin-right: auto;
} */
</style>
<script>
export default {
  data() {
    return {
      // datas : this.$store.state.all_inputs ,
      datas: {
        personal: {
          "Rfg com Code No": "122",
          "First Name": "Riyaz",
          "Last Name": "Mubarak",
          "Serial No": "111",
          District: "Colombo",
          Sex: "Male",
          Age: "8-",
          Status: "Married",
          Nationality: "SL",
          "Height(cm)": "170",
          "Weight(cm)": "80",
          "Passport NO": "N88809",
          "Place of Issue": "Colombo",
          "Position Applied for": "Software Engineer",
          Date: "2022-12-22",
          "Recruiting Agency": "Private",
          Country: "Sri Lanka",
        },
        medical_history: {
          deppression: "Nil",
          allergy: "Nil",
          others: "None",
        },
        medical: {
          Left_Eye: "6/6",
          Right_Eye: "6/6",
          Left_Ear: "good",
          Right_Ear: "good",
          Systemetic_Examination: "None",
          Blood_pressure: "110/70",
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
        labo: {
          Suger: "Nil",
          Albumin: "Nil",
          Pregnancy: "Nil",
          Helmenthes: "Nil",
          "Salmonella/Shigella": "Nil",
          VCholera: "Nil",
          Giardia: "Nil",
          Hemoglobin: "Not Done",
          "Malaria Film": "Not Done",
          "Micro Filaria": "Not Done",
          "FBS/RBS": "Nil",
          VDRL: "Non Reactive",
          LFTS: "Nil",
          Creatinine: "Nil",
          Urea: "Nil",
          TPHA: "Non Reactive",
          AntiHCV: "Not Done",
          "HIVTeST(HIBI-II)": "Not Done",
          HbsAg: "Not Done",
        },
      },
      // datas: {
      //   personal: {
      //     "Rfg com Code No": "0",
      //     "First Name": "shadeer",
      //     "Last Name": "Sadikeen",
      //     "Serial No": "8",
      //     District: "87",
      //     Sex: "Male",
      //     Age: "99",
      //     Status: "Married",
      //     Nationality: "SL",
      //     "Height(cm)": "170",
      //     "Weight(cm)": "110",
      //     "Passport NO": "n188181818",
      //     "Place of Issue": "CMB",
      //     "Position Applied for": "Labour",
      //     Date: "09/02/2022",
      //     "Recruiting Agency": "PRIVATE",
      //     Country: "Sri Lanka",
      //   },
      //   medical: {
      //     Left_Eye: "6/6",
      //     Right_Eye: "6/6",
      //     Left_Ear: "Good",
      //     Right_Ear: "Good",
      //     Systemetic_Examination: "908",
      //     Blood_pressure: "110/170",
      //     Heart: "Normal",
      //     Lungs: "Clear",
      //     Abdomen: "Soft",
      //     Hernia: "No",
      //     Vericose_veins: "No",
      //     Extremites: "Nil",
      //     Skin: "Normal",
      //     Venerial_Diseases: "Nil",
      //     Others: "Normal",
      //   },
      //   labo: {
      //     Suger: "Nil",
      //     Albumin: "Nil",
      //     Pregnancy: "Nil",
      //     Helmenthes: "Nil",
      //     "Salmonella/Shigella": "Nil",
      //     VCholera: "Nil",
      //     Giardia: "Nil",
      //     Hemoglobin: "Not Done",
      //     "Malaria Film": "Not Done",
      //     "Micro Filaria": "Not Done",
      //     "FBS/RBS": "Normal",
      //     VDRL: "Not Done",
      //     LFTS: "Not Done",
      //     Creatinine: "Not Done",
      //     Urea: "Not Done",
      //     TPHA: "Non Reactive",
      //     AntiHCV: "Non Reactive",
      //     "HIVTEST(HIBI-II)": "Not Done",
      //     HbsAg: "Not Done",
      //   },
      //   medical_history: {
      //     deppresion: "Nil",
      //     allergy: "Nil",
      //     others: "None",
      //   },
      // },
      printing: false,
      personals: null,
    };
  },
  computed: {
    mrs_miss() {
      // <p class="col-span-1">{{ datas.personal["Sex"][0] }}</p>
      //         <p class="col-span-3">{{ datas.personal["Status"] }}</p>
      let sex = this.datas.personal["Sex"][0];
      let status = this.datas.personal["Status"];

      if ((sex == "F") & (status == "Married")) {
        return "Mrs";
      } else if (sex == "F") {
        return "Miss";
      }

      return "Mr";
    },
  },
  mounted() {
    // if(this.$store.state.all_inputs.personal == undefined){
    //   this.$router.push('/');
    // }
    console.log(this.$store.state.all_inputs);
  },
  methods: {
    PrintElem() {
      document.getElementById("main");
    },
    start_printing() {
      this.printing = true;
      if (this.printing) {
        setTimeout(() => {
          window.print();
        }, 500);
      }
      setTimeout(() => {
        this.printing = false;
      }, 500);

      // this.$router.push('/');
    },
    // print: () => {
    //   window.print();
    //   // printPreview.close();
    // },
  },
  //   function print() {

  //

  // }
};
</script>
