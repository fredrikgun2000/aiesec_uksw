<template>
	<div>
	  <b-navbar toggleable="lg" fixed="top">
	    <b-navbar-brand href="#">
	    	<img src="@/assets/material/logo.jpg" width="150">
	    </b-navbar-brand>

	    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

	    <b-collapse id="nav-collapse" is-nav>

	      <b-navbar-nav class="ml-auto">
	        <b-nav-item href="#">Private</b-nav-item>
	        <b-nav-item-dropdown text="Hi, Astrid" right>
				<b-dropdown-item href="#">Log Out</b-dropdown-item>
				</b-nav-item-dropdown>
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