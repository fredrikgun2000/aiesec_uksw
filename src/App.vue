<template>
  <div id="app">
    <Header v-if="role == 'user'"></Header>
    <Header2 v-else-if="role == 'member'"></Header2>
    <main>
      <router-view></router-view>
    </main>
    <!-- <Footer></Footer> -->
  </div>
</template>

<script>
import header from './components/public/header'
import header2 from './components/private/header'
// import footer from './components/footer'

export default {

  components: {
    'Header'  : header,
    'Header2'  : header2,
    // 'Footer'  : footer,
  },
  data: function () {
        return {
          role: '',
          
        }
    },
}
</script>

<style>
@font-face {
  font-family: headline-miring;
  src: url(~@/assets/fonts/Lato-BoldItalic.ttf);
}

@font-face {
  font-family: headline-tebal;
  src: url(~@/assets/fonts/Lato-Bold.ttf);
}


@font-face {
  font-family: konten-miring;
  src: url(~@/assets/fonts/Raleway-Italic-VariableFont_wght.ttf);
}

@font-face {
  font-family: konten-normal;
  src: url(~@/assets/fonts/Raleway-Regular.ttf);
}

.biru{
  color: #037EF3 !important;
}  

.biru-muda{
  color: #0CB9C1 !important;
}

.hijau{
  color: #00C16E !important;
}  

.kuning{
  color: #FFC845 !important;
}  

.orange{
  color: #F48924 !important;
}  

.merah{
  color: #F85A40 !important;
}  

.hitam{
  color: #52565E !important;
}

.abu{
  color: #CACCD1 !important;
}

.bg-biru{
  background-color: #037EF3 !important;
}  

.bg-biru-muda{
  background-color: #0CB9C1 !important;
}

.bg-hijau{
  background-color: #00C16E !important;
}  

.bg-kuning{
  background-color: #FFC845 !important;
}  

.bg-orange{
  background-color: #F48924 !important;
}  

.bg-merah{
  background-color: #F85A40 !important;
}  

.bg-hitam{
  background-color: #52565E !important;
}

.bg-abu{
  background-color: #CACCD1 !important;
}  

.bg-transparent{
  background-color: transparent !important;
}

.border-biru{
  border: 2px solid #037EF3 !important;
}  

.border-biru-muda{
  border: 2px solid #0CB9C1 !important;
}

.border-hijau{
  border: 2px solid #00C16E !important;
}  

.border-kuning{
  border: 2px solid #FFC845 !important;
}  

.border-orange{
  border: 2px solid #F48924 !important;
}  

.border-merah{
  border: 2px solid #F85A40 !important;
}  

.border-hitam{
  border: 2px solid #52565E !important;
}

.border-abu{
  border: 2px solid #CACCD1 !important;
}

button{
  padding: 0px 20px;
  border-radius: 10px !important;
  border: none;
}

a{
  text-decoration: none !important; 
  color: inherit !important;
}

input, select{
  background-color: transparent;
  border-radius: 20px !important;
}

*{
  padding: 0px;
  margin: 0px;
  box-sizing: border-box;
  font-family: konten-normal;
}

h1, h2, h3, h4, h5, h6 {
  font-family: headline-tebal;
}


main{
  min-height: 700px;
}

::-webkit-scrollbar {
    width: 0px;
}

@media screen and (max-width: 575px) {
  .push_mobile{
      margin-left: 10px !important;
      margin-right: 10px !important;
    }
}
</style>
