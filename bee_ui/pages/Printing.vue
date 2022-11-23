<template>
  <div class="gbg">
      <NuxtLink to="/">
        <button
          class="
            absolute
            flex
            items-center
            py-2.5
            px-6
            top-10
            right-10
            font-bold
            bg-gray-900
            hover:bg-black
            transition-all
            text-white
            rounded-lg
          "
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
        class="
          absolute
          right-10
          bottom-10
          px-16
          text-3xl
          py-6
          rounded-full
          text-gray-200
          hover:bg-gray-800
          transition-all
          flex
          items-center
          bg-black
        "
        @click="PrintElem(e)"
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
      </button>
    <main
      v-if="datas.personal"
      id="main"
      class="
        ml-12
        main
        px-16
        pt-40
        overflow-hidden
        text-sm
        font-bold
        bg-gray-200
        min-h-screen
      "
    >
    

      <!-- PERSONAL DETAILS -->
      <div class="grid grid-cols-4 text-center">
        <p>{{ datas.personal["Rfg com Code No"] }}</p>
        <p>{{ datas.personal["First Name"] }}</p>
        <p>{{ datas.personal["Last Name"] }}</p>
        <p>{{ datas.personal["Serial No"] }}</p>
      </div>
      <div class="grid grid-cols-full ml-12 text-start">
        <p>{{ datas.personal["District"] }}</p>
      </div>
      <div class="grid grid-cols-12 text-xs text-center">
        <p class="col-span-1">{{ datas.personal["Sex"] }}</p>
        <p class="col-span-2">{{ datas.personal["Age"] }}</p>
        <p class="col-span-2">{{ datas.personal["Status"] }}</p>
        <p class="col-span-2">{{ datas.personal["Height(cm)"] }}</p>
        <p class="col-span-2">{{ datas.personal["Weight(cm)"] }}</p>
        <p class="col-span-3">{{ datas.personal["Nationality"] }}</p>
      </div>
      <div class="grid grid-cols-3 -m-1 text-xs text-center">
        <p>{{ datas.personal["Passport NO"] }}</p>
        <p>{{ datas.personal["Place of Issue"] }}</p>
        <p>{{ datas.personal["Position Applied for"] }}</p>
      </div>
      <div class="grid grid-cols-3 text-xs -mt-1 pt-1 pl-4 text-center">
        <p>{{ datas.personal["Date"] }}</p>
        <p>{{ datas.personal["Recruiting Agency"] }}</p>
        <p>{{ datas.personal["Country"] }}</p>
      </div>

      <!-- SIGNATURES -->
      <div>
        <p>{{ datas.medical["Right_Eye"] }}</p>
        <p>{{ datas.medical["Right_Eye"] }}</p>
        <p>{{ datas.medical["Right_Eye"] }}</p>
        <p>{{ datas.medical["Right_Eye"] }}</p>
        <p>{{ datas.medical["Right_Eye"] }}</p>
      </div>

      <!-- MEDI + LABO -->
      <div class="grid grid-cols-2 mt-8 text-xs text-right">
        <!-- MEDICAL -->
        <div class="mr-4">
          <div class="">{{ datas.medical["Right_Eye"] }}</div>
          <div class="">{{ datas.medical["Left_Eye"] }}</div>
          <div class="">{{ datas.medical["Right_Ear"] }}</div>
          <div class="">{{ datas.medical["Left_Ear"] }}</div>
          <div class="mt-3">{{ datas.medical["Blood_pressure"] }}</div>
          <div class="">{{ datas.medical["Heart"] }}</div>
          <div class="">{{ datas.medical["Lungs"] }}</div>
          <div class="">{{ datas.medical["Abdomen"] }}</div>
          <div class="-mt-1">{{ datas.medical["Others"] }}</div>
          <div class="">{{ datas.medical["Hernia"] }}</div>
          <div class="">{{ datas.medical["Vericose_veins"] }}</div>
          <div class="-mt-1">{{ datas.medical["Extremites"] }}</div>
          <div class="">{{ datas.medical["Skin"] }}</div>
          <div class="my-2">{{ datas.medical["Venerial_Diseases"] }}</div>
          <div class="my-3">Xray</div>
        </div>
        <!-- LABORATARY -->
        <div class="">
          <p>{{ datas.labo["Suger"] }}</p>
          <p>{{ datas.labo["Albumin"] }}</p>
          <p>{{ datas.labo["Pregnancy"] }}</p>
          <p>{{ datas.labo["Helmenthes"] }}</p>
          <p>{{ datas.labo["Salmonella/Shigella"] }}</p>
          <p class="-mt-1">{{ datas.labo["VCholera"] }}</p>
          <p>{{ datas.labo["Giardia"] }}</p>
          <p>{{ datas.labo["Hemoglobin"] }}</p>
          <p class="-mt-1">{{ datas.labo["Malaria Film"] }}</p>
          <p>{{ datas.labo["Micro Filaria"] }}</p>
          <p>{{ datas.labo["FBS/RBS"] }}</p>
          <p>{{ datas.labo["LFTS"] }}</p>
          <p>{{ datas.labo["Creatinine"] }}</p>
          <p class="-mt-1">{{ datas.labo["Urea"] }}</p>
          <p>{{ datas.labo["TPHA"] }}</p>
          <p>{{ datas.labo["VDRL"] }}</p>
          <p>{{ datas.labo["AntiHCV"] }}</p>
          <p class="-mt-1">{{ datas.labo["HIVTEST(HIBI-II)"] }}</p>
          <p>{{ datas.labo["HbsAg"] }}</p>
        </div>
      </div>
    </main>
  </div>
</template>
<style scoped>

main {
  background-image: url("~@/assets/ss.png");
  background-size: 'fit';

  height: 700px;
  width: 544px;
  /* to centre page on screen*/
  /* width: 21cm;
  height: 29.7cm; */
  margin-left: auto;
  margin-right: auto; 
} 
</style>
<script>
import Swal from "sweetalert2";
export default {
  data() {
    return {
      // datas : this.$store.state.all_inputs ,
      datas: {
        personal: {
          "Rfg com Code No": "0",
          "First Name": "098",
          "Last Name": "09",
          "Serial No": "8",
          District: "87]",
          Sex: "98",
          Age: "798",
          Status: "798",
          Nationality: "79",
          "Height(cm)": "87",
          "Weight(cm)": "987",
          "Passport NO": "987",
          "Place of Issue": "97",
          "Position Applied for": "987",
          Date: "97",
          "Recruiting Agency": "98",
          Country: "Sri Lanka",
        },
        medical: {
          Left_Eye: "08",
          Right_Eye: "99",
          Left_Ear: "08",
          Right_Ear: "0",
          Systemetic_Examination: "908",
          Blood_pressure: "098",
          Heart: "09",
          Lungs: "90",
          Abdomen: "80",
          Hernia: "98",
          Vericose_veins: "098",
          Extremites: "098",
          Skin: "098",
          Venerial_Diseases: "908",
          Others: "09",
        },
        labo: {
          Suger: "90",
          Albumin: "80",
          Pregnancy: "90",
          Helmenthes: "98",
          "Salmonella/Shigella": "80",
          VCholera: "8",
          Giardia: "08",
          Hemoglobin: "098",
          "Malaria Film": "098",
          "Micro Filaria": "098",
          "FBS/RBS": "098",
          VDRL: "098",
          LFTS: "098",
          Creatinine: "098",
          Urea: "098",
          TPHA: "0980",
          AntiHCV: "980",
          "HIVTEST(HIBI-II)": "98",
          HbsAg: "098",
        },
      },
      personals: null,
    };
  },
  computed: {},
  mounted() {
    // if(this.$store.state.all_inputs.personal == undefined){
    //   this.$router.push('/');
    // }
  },
  methods: {
     PrintElem()
{
   document.getElementById('main');
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
