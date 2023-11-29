
new Vue({
  el:'#app',
  data(){
    return{
      name:'',
      place:'',
      mail:'',
      password:''
    };
  },
  computed:{
    inValidName(){
      return this.name.length===0;
    },
    inValidPlace(){
      return this.place.length===0;
    },
    inValidEmailSpace(){
      return this.mail.length===0;
    },
    inValidEmail(){
      const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return !pattern.test(this.mail);
    },
    inValidPasswordSpace(){
      return this.password.length===0;
    },
    inValidPassword(){
      const regex = /^[a-zA-Z0-9_]{8,16}$/;
      return !regex.test(this.password);
    },
  }
});

