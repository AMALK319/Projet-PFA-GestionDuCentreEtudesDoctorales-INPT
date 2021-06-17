<template>
<div class="container">
  <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6 ">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form " method="POST" action="{{ route('login') }}">
                            @csrf
                                <h3 class="text-center text-white ">Connexion</h3>
                                <br>
                                <div class="form-group">
                                    <input id="username" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre login">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Entrer votre mot de passe">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" form-group text-right">
                                    <a href="#" class="text-white">Mot de passe oublié?</a>
                                </div>
                                <div class="col-md-12 text-center ">
                                    <Button type="submit" class=" btn btn-block mybtn text-white  "> <strong> {{ __('Se connecter') }}</strong></Button>
                                </div>
                            </form>

                        </div>

                    </div>
                    </div>
</template>

<script>
export default {
  name: "Login",
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style scoped>
#login .container #login-row #login-column #login-box {
  margin-top: 45px;
  margin-left: 62px;
  max-width: 420px;

  height: 320px;
}

#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}

.mybtn {
  margin: auto;
  max-width: 140px;
  border-radius: 50px;
  background-color: #56a6f9;
}
</style>