<template>

 
        <Header></Header>
               <router-view></router-view>
         <Footer></Footer>


    
    
        
 

  


</template>



<script>
    import Header from './common/header';
    import Footer from './common/footer';


export default {

  components: {
    Header,
    Footer
  }
}

</script>

