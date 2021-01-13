<template>
    <div>
        <h1>Hello from vue</h1>
        <welcome></welcome>
         <myteam></myteam>
         <test></test>
    </div>
   
</template>



<script>
import Welcome from './Welcome.vue'
import Myteam from './Myteam'

import Test from './Test'


export default {
        components:{
            Welcome,
            Myteam,
            Test
        }
        
    }
</script>
