<template>
  <div id="app">
    <Header></Header>
    <main>
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
import header from './components/public/header'

export default {
  components: {
    'Header'  : header,
  }
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

.text-biru{
  color: #037EF3;
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
</style>
