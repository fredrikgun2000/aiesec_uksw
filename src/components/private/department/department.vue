<template>
	<div>
		<div class="department-landscape">
		</div>
		<div class="department-lapis-landscape">
		</div>
		<div class="department-landscape-konten">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="hijau">Department</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-10">
						<p class="text-light">{{heading}}</p>
					</div>
					<div class="col-2 text-right">
						<b-button v-b-modal.modal-prevent-closing class="hijau bg-transparent border-hijau" >Add</b-button>
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
          id="departmentname-group" 
          label="Department Name" 
          label-for="departmentnames" 
          :state="departmentnamesState"
          invalid-feedback="Department Name is required">
		        <b-form-select
		          id="departmentnames"
		          v-model="departmentnames"
		          :options="departmentname"
				  :state="departmentnamesState"
		          required
		          class="department-input"
		        ></b-form-select>
		      </b-form-group>
	        <b-form-group 
          id="lcvp-group" 
          label="lcvp" 
          label-for="lcvps" 
          :state="lcvpsState"
          invalid-feedback="lcvp is required">
		        <b-form-select
		          id="lcvps"
		          v-model="lcvps"
		          :options="lcvp"
				  :state="lcvpsState"
		          required
		          class="department-input"
		        ></b-form-select>
		      </b-form-group>
	        <b-form-group
	          label="Team Name"
	          label-for="teamname-input"
	          invalid-feedback="Team Name is required"
	          :state="teamnameState"
	        >
	          <b-form-input
	            id="teamname-input"
	            v-model="teamname"
	            :state="teamnameState"
	            required
	            placeholder="ex : Loki, Thor ..."
	            class="department-input"
	          ></b-form-input>
	        </b-form-group>
	        <b-form-group
	          label="Team Vision"
	          label-for="teamvision-input"
	          invalid-feedback="Team Vision is required"
	          :state="teamvisionState"
	        >
	          <b-form-input
	            id="teamvision-input"
	            v-model="teamvision"
	            :state="teamvisionState"
	            required
	            placeholder="teamvision ..."
	            class="department-input"
	          ></b-form-input>
	        </b-form-group>

	        
	      </form>
	    </b-modal>
	</div>
</template>
<style>
	.department-landscape, .department-lapis-landscape, .department-landscape-konten{
		width: 100%;
		height: 250px;
	}

	.department-landscape{
		background-image: url("~@/assets/material/txplandscape.jpg");
		background-position: 0px -405px;
		background-size: cover;
	}

	.department-lapis-landscape{
		position: absolute;
		top: 0;
		background-color: rgba(0,0,0,0.5);
	}

	.department-landscape-konten{
		position: absolute;
		top: 20%;
	}

	.department-landscape-konten h1::after{
		content: '';
		width: 2%;
		height: 5px;
		background-color: #00C16E;
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

	.department-input{
		border: 1px solid #00C16E !important;
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
				judul:'Bagian untuk mengatur data Department.',

				departmentnames:null,
		        departmentnamesState: null,
		        departmentname: [{ text: 'Select One', value: null }, 'Outgoing Global Volunteer', 'Marketing', 'External Relation', 'Finance Governance and Legal','Executive Board'],

		        lcvps:null,
		        lcvpsState: null,
		        lcvp: [{ text: 'Select One', value: null }, ''],
				teamname: '',
		        teamnameState: null,
				teamvision: '',
		        teamvisionState: null,
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
				this.positionsState = valid
				this.departmentnamesState = valid
				this.teamnameState = valid
				this.teamvisionState = valid
				return valid
			},
			resetModal() {
				this.positions = null
				this.positionsState = null
				this.departments = ''
				this.departmentsState = null
				this.teamname = ''
				this.teamnameState = null
				this.teamvision = ''
				this.teamvisionState = null
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
				alert(this.positions)
				this.submittedNames.push(this.name)
				// Hide the modal manually
				this.$nextTick(() => {
				  this.$bvModal.hide('modal-prevent-closing')
				})
			}
		}
	}
</script>