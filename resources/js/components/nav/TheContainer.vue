<template>
<div>
<!--header-->


<div  v-if="roles ==='admin'">
<admin-header></admin-header>
</div>

<div  v-else-if="roles ==='user'">
<user-header></user-header>
</div>

<div  v-else>
<Landing></Landing>
</div>
<!--/header-->


 
</div>
<!--/wrapper -->


</template>

<script>
import AdminHeader from './admin-header'


//import ComponentA from './TheSideBar'
//import ComponentC from './TheFooter'
import Landing from './landing-header'
import UserHeader from './user-header'


export default {


    components: {
   // ComponentA,
   // ComponentC,
    Landing,
        UserHeader,
        AdminHeader
  },


  created(){
      if (!User.loggedIn()) {
        this.$router.push({name: '/'})
      }
  },

         data(){
         return{
         roles: '',
         user: localStorage.getItem('user'),
         logohbln:'',
         APPNAME: 'CPRC HBLN',
    

      }
         },

        methods: {
       
    userRoles() {
        let self = this;
        axios.post('/api/auth/me' + '?token='+ localStorage.getItem('token'))
        .then(({data}) => (self.roles = data.roles)).catch(function (error) {
        console.log(error);    
          localStorage.removeItem('token');
           localStorage.removeItem('user');
      });
    }

  
    },
 

  mounted(){
    this.userRoles();

  }
}
         



</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}

.User {
  overflow-wrap: break-word;
}
</style>