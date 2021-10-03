<template>
	<div>
	  <b-navbar toggleable="lg" fixed="top">
	    <b-navbar-brand href="#">
	    	<img src="@/assets/material/logo.jpg" width="150">
	    </b-navbar-brand>

	    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

	    <b-collapse id="nav-collapse" is-nav>

	      <b-navbar-nav class="ml-auto">
	        <b-nav-item href="#">User</b-nav-item>
	      </b-navbar-nav>
	    </b-collapse>
	  </b-navbar>
	</div>
</template>

<style scoped>
#app .nav-item a{
  color:#037EF3;
}


</style>