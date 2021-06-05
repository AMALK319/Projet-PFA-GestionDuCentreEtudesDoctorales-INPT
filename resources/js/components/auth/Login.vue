<template>
  <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6 ">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form " action="" method="post" @submit.prevent="login" @keydown="form.onKeydown($event)">
                            <AlertError :form="form" />
                            <h3 class="text-center text-white ">Connexion</h3>
                            <br>
                            <div class="form-group">
                                <input id="username" v-model="form.username" type="text" name="username" class="form-control" placeholder="Entrer votre login">
                                <HasError :form="form" field="username" />
                            </div>
                            <div class="form-group">
                                <input id="password" v-model="form.password" type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe" >
                                 <HasError :form="form" field="password" />
                            </div>
                            <div  class=" form-group text-right">
                                <a href="#" class="text-white">Mot de passe oublié?</a>
                            </div>
                             <div class="col-md-12 text-center ">
                              <Button :form="form" type="submit" class=" btn btn-block mybtn text-white  "> <strong>Se connecter</strong></Button>
                           </div>
                        </form>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Form from 'vform'
import { Button, HasError, AlertError } from 'vform/src/components/bootstrap5'

export default {
  name: 'Connexion',
  components: {
    Button, HasError, AlertError
  },

  data: () => ({
    form: new Form({
      username: '',
      password: ''
    })
  }),

  methods: {
    async login () {
      const response = await this.form.post('/api/login')
      // ...
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
body {
  margin: 0;
  padding: 0;
  background-color: #04649C;
  height: 70vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 45px;
  margin-left: 62px;
  max-width: 420px;
 
  height: 320px;
  
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}

.mybtn{
  margin: auto;
  max-width: 140px;
  border-radius:50px;
  background-color: #56A6F9;
}
#barre{
  height: 25vh;
  background-color: white;
}
h3{
  color: #04649C;
}
</style>
