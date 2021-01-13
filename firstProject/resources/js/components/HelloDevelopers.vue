<template>
    <div>
        <h1>Hello from vue</h1>
        <welcome></welcome>
         <myteam></myteam>
    </div>
   
</template>



<script>
import Myteam from './Myteam'
import Welcome from './Welcome.vue'


export default {
        components:{
            Welcome,
            Myteam
        }
        
    }
</script>
