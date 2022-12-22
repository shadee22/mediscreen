<template>
  <main class="text-black bg-white w-full">
    <h1 class="text-3xl p-2 bg-blue-100 antialiased font-bold ml-12  mt-5">
      Personal Details
    </h1>
    <form
      :key="1"
      v-on:submit.prevent="save_personal_details"
      class="text-black py-5 px-10 font-semibold placeholder-red-500"
    >

      <div class="flex flex-wrap">
        <div class="m-2">
          <label class="">Rfg com Code No</label>
          <input
            required="required"
            type="text"
            placeholder="Rfg com Code No"
            v-model="form['Rfg com Code No']"
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
        <div class="m-2">
          <label for="">First Name</label>
          <input
            v-model="form['First Name']"
            class="
            mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
            placeholder="First Name"
            required="required"
            type="text"
          />
        </div>
        <div class="m-2">
          <label for=""> Last Name</label>
          <input
            required="required"
            type="text"
            placeholder="Last Name"
            v-model="form['Last Name']"
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

        <div class="m-2">
          <label for="">Serial No </label>
          <input
            required="required"
            type="number"
            placeholder="Serial No"
            v-model="form['Serial No']"
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
        <div class="m-2">
          <label for="">Disctrict</label>
          <select
            class="
          mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
            placeholder="District"
            v-model="form.District"
          >
            <option value="Colombo" selected>Colombo</option>
            <option value="Kandy">Kandy</option>
            <option value="Galle">Galle</option>
            <option value="Ampara">Ampara</option>
            <option value="Anuradhapura">Anuradhapura</option>
            <option value="Badulla">Badulla</option>
            <option value="Batticaloa">Batticaloa</option>
            <option value="Gampaha">Gampaha</option>
            <option value="Hambantota">Hambantota</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kalutara">Kalutara</option>
            <option value="Kegalle">Kegalle</option>
            <option value="Kilinochchi">Kilinochchi</option>
            <option value="Kurunegala">Kurunegala</option>
            <option value="Mannar">Mannar</option>
            <option value="Matale">Matale</option>
            <option value="Matara">Matara</option>
            <option value="Moneragala">Moneragala</option>
            <option value="Mullativu">Mullativu</option>
            <option value="Nuwara" Eliya>Nuwara Eliya</option>
            <option value="Polonnaruwa">Polonnaruwa</option>
            <option value="Puttalam">Puttalam</option>
            <option value="Ratnapura">Ratnapura</option>
            <option value="Trincomalee">Trincomalee</option>
            <option value="Vavuniya">Vavuniya</option>
          </select>
        </div>
     
        <div class='m-2'>
          <label for=""> Sex </label>
          <input
            required="required"
            type="text"
            placeholder="Sex"
            v-model="form['Sex']"
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

        <div class='m-2'>
          <label for=""> Age </label>
          <input
            required="required"
            type="text"
            placeholder="Age"
            v-model="form.Age"
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
        <div class='m-2'>
          <label for="">Status </label>
          <input
            required="required"
            type="text"
            placeholder="Status"
            v-model="form.Status"
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

        <div class='m-2'>
          <label for="">Nationality </label
          ><input
            required="required"
            type="text"
            placeholder="Nationality"
            v-model="form.Nationality"
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
        <div class='m-2'>
          <label for=""> Height(cm)</label>

          <input
            required="required"
            type="text"
            placeholder="Height(cm)"
            v-model="form['Height(cm)']"
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
        <div class='m-2'>
          <label for="">Weight(kg)</label>
          <input
            required="required"
            type="text"
            placeholder="Weight(kg)"
            v-model="form['Weight(cm)']"
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

        <div class='m-2'>
          <label for="">Passport NO</label>
          <input
            required="required"
            type="text"
            placeholder="Passport NO"
            v-model="form['Passport NO']"
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
        <div class='m-2'>
          <label for="">Place of Issue</label>
          <input
            required="required"
            type="text"
            placeholder="Place of Issue"
            v-model="form['Place of Issue']"
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

        <div class="m-2">
          <label for="">Position Applied for</label>
          <input
            required="required"
            type="text"
            placeholder="Position Applied for"
            v-model="form['Position Applied for']"
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

        <div class="m-2">
          <label for="">Date</label>
          <input
            required="required"
            type="date"
            placeholder="Date"

            v-model="form.Date"
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

        <div class="m-2">
          <label for="">Recruiting Agency</label>
          <input
            required="required"
            type="text"
            placeholder="Recruiting Agency"
            v-model="form['Recruiting Agency']"
            class="
               mt-1
               min-w-full
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>

        <!-- Countries -->

        <div class="m-2 ">
          <label for=""> Country</label>
          <select
          class="
           mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
          "
          placeholder="Country"
          v-model="form.Country"
        >
          <option value="Sri Lanka" selected>Sri Lanka 🇱🇰</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Aland Islands">Aland Islands</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antarctica">Antarctica</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Bouvet Island">Bouvet Island</option>
          <option value="Brazil">Brazil</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Christmas Island">Christmas Island</option>
          <option value="Colombia">Colombia</option>
          <option value="Comoros">Comoros</option>
          <option value="Congo">Congo</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cote D'Ivoire">Cote D'Ivoire</option>
          <option value="Croatia">Croatia</option>
          <option value="Cuba">Cuba</option>
          <option value="Curacao">Curacao</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Equatorial Guinea">Equatorial Guinea</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guernsey">Guernsey</option>
          <option value="Guinea">Guinea</option>
          <option value="Guinea-Bissau">Guinea-Bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Isle of Man">Isle of Man</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jersey">Jersey</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>

          <option value="Korea, Republic of">Korea, Republic of</option>
          <option value="Kosovo">Kosovo</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macao">Macao</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mayotte">Mayotte</option>
          <option value="Moldova, Republic of">Moldova, Republic of</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montenegro">Montenegro</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Myanmar">Myanmar</option>
          <option value="Namibia">Namibia</option>
          <option value="Nauru">Nauru</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="Netherlands Antilles">Netherlands Antilles</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Niue">Niue</option>
          <option value="Norfolk Island">Norfolk Island</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Pitcairn">Pitcairn</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Reunion">Reunion</option>
          <option value="Romania">Romania</option>
          <option value="Russian Federation">Russian Federation</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Saint Barthelemy">Saint Barthelemy</option>
          <option value="Saint Helena">Saint Helena</option>
          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="Saint Lucia">Saint Lucia</option>
          <option value="Saint Martin">Saint Martin</option>
          <option value="Samoa">Samoa</option>
          <option value="San Marino">San Marino</option>
          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Serbia">Serbia</option>
          <option value="Serbia and Montenegro">Serbia and Montenegro</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Sint Maarten">Sint Maarten</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="Somalia">Somalia</option>
          <option value="South Africa">South Africa</option>
          <option value="South Sudan">South Sudan</option>
          <option value="Spain">Spain</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
          <option value="Thailand">Thailand</option>
          <option value="Timor-Leste">Timor-Leste</option>
          <option value="Togo">Togo</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Viet Nam">Viet Nam</option>
          <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
          <option value="Wallis and Futuna">Wallis and Futuna</option>
          <option value="Western Sahara">Western Sahara</option>
          <option value="Yemen">Yemen</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>
        </div>
      </div>

      <button
        type="submit"
        class="
          py-2.5
          px-12
          font-bold
          mt-6
          rounded-lg
          transition-all
          text-white
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
    </form>
  </main>
</template>

<script>
export default {
  props: ["edit_data"],
  data() {
    return {
      date: new Date().toISOString().substr(0, 10),
      done: false,
      form: {
        "Rfg com Code No": "",
        "First Name": "",
        "Last Name": "",
        "Serial No": "",
        District: "Colombo",
        Sex: "Male",
        Age: "",
        Status: "Married",
        Nationality: "SL",
        "Height(cm)": "",
        "Weight(cm)": "",
        "Passport NO": "",
        "Place of Issue": "Colombo",
        "Position Applied for": "",
        Date:  new Date().toISOString().substr(0, 10),
        "Recruiting Agency": "Private",
        Country: "Sri Lanka",
      },
    };
  },
  mounted() {
    this.init();
    if (this.$route.name != "index") {
      setTimeout(() => {
        this.form = this.edit_data;
      }, 2000);
    }
  },
  computed: {
    async logout() {
      await this.$auth.logout();
      await this.$router.push("/login");
    },
  },
  methods: {
    test: function () {},
    save_personal_details: function () {
      this.done = !this.done;

      this.$store.commit("save_personal_details", this.form);
    },
    init: (form, edit_data) => {},
  },
};
</script>