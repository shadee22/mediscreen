<template>
  <main class="  h-screen text-xs grid grid-cols-5">
    <div class="bg-gray-100 center col-span-2">
      <div class="grid">
        <p class="text-4xl  mx-auto text-black  font-bold">
          Welcome to <span class="text-blue-400">MediScreen !</span>
        </p>
        <form method="post" @submit.prevent="login" class="grid mt-12 px-12">
          <!-- <input
            v-model="form.name"
            type="text"
            required
            placeholder="Username"
            class="
              bg-gray-900
              border border-gray-700
              rounded-lg
              text-white
              px-5
              py-3
              focus:bg-gray-800
              transition-all
            "
          /> -->
          <label for="Name" class="font-semibold mt-4 mb-1">Email</label>
          <input
            type="text"
            placeholder="Email"
            required
            v-model="form.email"
            class="
             
              border border-gray-700
              rounded-lg
              px-5
              py-3 
              transition-all
              focus:ring-0 focus:ring-offset-0
            "
          />
          <label for="Name" class="font-semibold mt-4 mb-1">Password</label>
          <input
            type="text"
            placeholder="Password"
            required
            v-model="form.password"
            class="
              
              border border-gray-700
              rounded-lg
              px-5
              py-3
              my-6ocus:bg-gray-800
              transition-all
              focus:ring-0 focus:ring-offset-0
            "
          />
          <button
            class="
              bg-blue-500
              hover:bg-blue-600
              transition-all
              px-5
              text-white
              py-2.5
              rounded-lg
              font-bold
              mt-12
              mx-12
            "
          >
            Submit
          </button>
        </form>
        
          <NuxtLink to="/support" class="text-center mt-32 text-gray-500 hover:underline transition-all">Support</NuxtLink>

      </div>
    </div>
    <div class="center text-3xl h-screen col-span-3 p-32">
      <img class="content-cover" src="~/assets/doctor.svg" />
    </div>
  </main>
</template>
<script>
export default {
  auth : 'guest',
  data() {
    return {
      form: {
        // name: "",
        email: "",
        password: "",
      },
      user : this.$auth.user
    };
  },
  computed: {},
  methods: {
    async login() {
        await this.$auth.loginWith("laravelSanctum", {
          data: {
            email: this.form.email,
            password: this.form.password,
          },
        }).then(res=>{
          console.log(res)    ;
        });
     
      //  this.$router.push('/')
    },
    // async submit() {
    //   await this.$auth.loginWith('laravelSanctum', {
    //     data: {
    //       email: this.form.email,
    //       password: this.form.password,
    //     },
    //   }).then(res=>{
    //     console.log(res);
    //   });
    //   // this.$axios
    //   //   .post("api/medi/login", {
    //   //     name: "John Doe",
    //   //     email: "johndoe@example.com",
    //   //     password: "password",
    //   //   })
    //   //   .then((res) => {
    //   //     console.log(res);
    //   //   });
    // },
  },
};
</script>