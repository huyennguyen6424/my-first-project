<template>
    <div id="login">
        <h1>Login</h1>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" v-model="input.email" placeholder="user@gmail.com"/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" v-model="input.password" placeholder="enter password"/>
        </div>

        <button type="button" @click="login()">Login</button>
        <button type="button">Forgot Password</button>
        <label for="rememberMe">Remember Me</label>

        <p class="forgot-password text-right">
            Already loged in.
            <router-link :to="{name: 'register'}">sign up?</router-link>
        </p>
    </div>
</template>

<script>
    export default {
        name: 'Login',
        data() {
            return {
                input: {
                    email: "",
                    password: ""
                },
                message: ""
            }
        },
        methods: {
            login() {
                if(this.input.email != "" && this.input.password != "") {
                    if(this.input.email == this.$parent.mockAccount.email && this.input.password == this.$parent.mockAccount.password) {
                        this.$emit("authenticated", true);
                        this.message="You register success";
                        this.$router.replace({ name: "secure" });
                    } else {
                        console.log("The username and / or password is incorrect");
                    }
                } else {
                    console.log("A username and password must be present");
                }
            }
        }
    }
</script>
