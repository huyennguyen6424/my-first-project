<template>
    <div id="register">
        <div class="vue-template">
            <form>
                <h3>Sign Up</h3>

                <div class="form-group">
                    <label> Name</label>
                    <input type="text" v-model="input.name"/>
                </div>

                <div class="form-group">
                    <label>Email </label>
                    <input type="email" v-model="input.email" placeholder="user@gmail.com"/>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" v-model="input.password" placeholder="enter password"/>
                </div>

                <button type="submit" @click="register()">Sign Up</button>

                <p class="forgot-password text-right">
                    Already registered
                    <router-link :to="{name: 'login'}">sign in?</router-link>
                </p>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'Register',
        data() {
            return {
                input: {},
                message: "",
                success: 0
            }
        },
        methods: {
            register(){
                // this.axios.post("http://localhost/#/register",this.input).then((response)=>{
	            //     this.check=true;

                this.axios.post("http://localhost/#/register",this.input).then((response) => {
                     console.log(response);
                      if(response.data.success>0){
                         this.message="You register success";
                         this.success=response.data.success;
                      }
                      else{
                          this.message="Register to failed";
                           this.success=response.data.success;
                       }
                  });
            }
        }
    }
</script>
