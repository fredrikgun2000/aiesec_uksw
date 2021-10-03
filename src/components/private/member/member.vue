<template>
	<div>
		<div class="member-landscape">
		</div>
		<div class="member-lapis-landscape">
		</div>
		<div class="member-landscape-konten">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="biru">Member</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-10">
						<p class="text-light">{{heading}}</p>
					</div>
					<div class="col-2 text-right">
						<b-button v-b-modal.modal-prevent-closing class="biru bg-transparent border-biru" >Add</b-button>
					</div>
				</div>
			</div>
		</div>

		<b-modal
	      id="modal-prevent-closing"
	      ref="modal"
	      title="Submit Your Name"
	      @show="resetModal"
	      @hidden="resetModal"
	      @ok="handleOk"
	    >
	      <form ref="form" @submit.stop.prevent="handleSubmit">
	        <b-form-group
	          label="Full Name"
	          label-for="fullname-input"
	          invalid-feedback="Full Name is required"
	          :state="fullnameState"
	        >
	          <b-form-input
	            id="fullname-input"
	            v-model="fullname"
	            :state="fullnameState"
	            required
	            placeholder="Full Name ..."
	            class="member-input"
	          ></b-form-input>
	        </b-form-group>
	        <b-form-group
	          label="NIM"
	          label-for="nim-input"
	          invalid-feedback="Full Name is required"
	          :state="nimState"
	        >
	          <b-form-input
	            id="nim-input"
	            v-model="nim"
	            :state="nimState"
	            required
	            placeholder="NIM ..."
	            class="member-input"
	          ></b-form-input>
	        </b-form-group>
	        <b-form-group
	          label="Email"
	          label-for="email-input"
	          invalid-feedback="email is required"
	          :state="emailState"
	        >
	          <b-form-input
	            id="email-input"
	            v-model="email"
	            :state="emailState"
	            required
	            placeholder="Email ..."
	            class="member-input"
	          ></b-form-input>
	        </b-form-group>
	        <b-form-group
	          label="Password"
	          label-for="password-input"
	          invalid-feedback="password is required"
	          :state="passwordState"
	        >
	          <b-form-input
	            id="password-input"
	            v-model="password"
	            :state="passwordState"
	            required
	            placeholder="Password ..."
	            class="member-input"
	          ></b-form-input>
	        </b-form-group>
	          <b-form-group id="department-group" label="Department" label-for="department">
			        <b-form-select
			          id="department"
			          v-model="departments"
			          :options="department"
			          class="member-input"
			          required
			        ></b-form-select>
			      </b-form-group>

	        
	      </form>
	    </b-modal>
	</div>
</template>
<style>
	.member-landscape, .member-lapis-landscape, .member-landscape-konten{
		width: 100%;
		height: 250px;
	}

	.member-landscape{
		background-image: url("~@/assets/material/txplandscape.jpg");
		background-position: 0px -405px;
		background-size: cover;
	}

	.member-lapis-landscape{
		position: absolute;
		top: 0;
		background-color: rgba(0,0,0,0.5);
	}

	.member-landscape-konten{
		position: absolute;
		top: 20%;
	}

	.member-landscape-konten h1::after{
		content: '';
		width: 2%;
		height: 5px;
		background-color: #037EF3;
		display: block;
	}

	nav{
		background-color: white;
	}

	.headingspan{
		text-align: center;
	}

	.headingspan h4::after{
		content: '';
		display: block;
		background-color: #FFC845;
		width: 5%;
		height: 5px;
		margin: 5px auto;
	}

	.member-input{
		border: 1px solid #037EF3 !important;
	}


	@media screen and (max-width: 1140px) {
		
	}
</style>
<script>
	export default{
		data: function () {
		    return {
				heading: '',

				i:0,
				judul:'Bagian untuk mengatur data anggota.',

				fullname: '',
		        fullnameState: null,
				nim: '',
		        nimState: null,
				email: '',
		        emailState: null,
				password: '',
		        passwordState: null,
		        departments:null,
		        department: [{ text: 'Select One', value: null }, 'Carrots', 'Beans', 'Tomatoes', 'Corn'],
		        submittedNames: [],
			    }
		},
		created: function () {
			this.ketikheading();
		},
		methods: {
			ketikheading: function () {
			  	if (this.i < this.judul.length) {
			  		this.heading += this.judul.charAt(this.i);
			  		this.i++;
			  		setTimeout(this.ketikheading, 100);
			  	}
			  },
			checkFormValidity() {
				const valid = this.$refs.form.checkValidity()
				this.fullnameState = valid
				this.nimState = valid
				this.emailState = valid
				this.passwordState = valid
				return valid
			},
			resetModal() {
				this.fullname = ''
				this.fullnameState = null
				this.nim = ''
				this.nimState = null
				this.email = ''
				this.emailState = null
				this.password = ''
				this.passwordState = null
				this.departments = ''
			},
			handleOk(bvModalEvt) {
				// Prevent modal from closing
				bvModalEvt.preventDefault()
				// Trigger submit handler
				this.handleSubmit()
			},
			handleSubmit() {
				// Exit when the form isn't valid
				if (!this.checkFormValidity()) {
				  return
			}
				// Push the name to submitted names
				this.submittedNames.push(this.name)
				// Hide the modal manually
				this.$nextTick(() => {
				  this.$bvModal.hide('modal-prevent-closing')
				})
			}
		}
	}
</script>