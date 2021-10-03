<template>
	<div>
		<div class="txp-landscape">
		</div>
		<div class="txp-lapis-landscape">
		</div>
		<div class="txp-landscape-konten">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="kuning">TXP</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-10">
						<p class="text-light">{{heading}}</p>
					</div>
					<div class="col-2 text-right">
						<b-button v-b-modal.modal-prevent-closing class="kuning bg-transparent border-kuning">Add</b-button>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-2">
			<div class="row">
				<div class="col-12 headingspan">
					<h4>TXP</h4>
				</div>
			</div>
			<div class="row mb-2">
				<div class="col-2">
					<b-form-select
			          id="input-3"
			          v-model="form.food"
			          :options="nama_exp"
			          required
			        ></b-form-select>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Department</b>
						</div>
						<div class="col-6">
							OGV
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Position</b>
						</div>
						<div class="col-6">
							Quality & Customer Experience
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Team Name</b>
						</div>
						<div class="col-6">
							LOKI
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Team Leader</b>
						</div>
						<div class="col-6">
							Astrid
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Team Vision</b>
						</div>
						<div class="col-6">
							
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Member Name</b>
						</div>
						<div class="col-6">
							Fredrik Gunawan
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Start Date Experience</b>
						</div>
						<div class="col-6">
							
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>End Date Experience</b>
						</div>
						<div class="col-6">

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>Start Date Review</b>
						</div>
						<div class="col-6">
							
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<b>End Date Review</b>
						</div>
						<div class="col-6">

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-12">
					<table class="table" id="datatable">
				        <thead>
				          <tr>
				            <th>No</th>
				            <th>Area</th>
				            <th>Key Driving Performance</th>
				            <th>Target</th>
				            <th>Gap</th>
				            <th>Score</th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				          	<td>a</td>
				          	<td>a</td>
				          	<td>a</td>
				          	<td>a</td>
				          	<td>a</td>
				          	<td>a</td>
				          </tr>
				          <tr>
				          	<td>b</td>
				          	<td>b</td>
				          	<td>b</td>
				          	<td>b</td>
				          	<td>b</td>
				          	<td>b</td>
				          </tr>
				          
				        </tbody>
				      </table>    
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
	       <b-form @submit="onSubmit" @reset="onReset" v-if="show" ref="form" @submit.stop.prevent="handleSubmit">
		    	<div class="row mt-2">
		    		<div class="col-6">
		    			<b-form-group
				        id="input-group-1"
				        label="Start Date"
				        label-for="input-1"
				      >
				        <b-form-input 
				     		class=""
				          id="input-1"
				          v-model="form.email"
				          type="date"
				          required
				        ></b-form-input>
				      </b-form-group>
		    		</div>
		    		<div class="col-6">
		    			<b-form-group
				        id="input-group-1"
				        label="End Date"
				        label-for="input-1"
				      >
				        <b-form-input 
				     		class=""
				          id="input-1"
				          v-model="form.email"
				          type="date"
				          required
				        ></b-form-input>
				      </b-form-group>
		    		</div>
		    	</div>
		    	<div class="row mt-2">
		    		<div class="col-6">
		    			<b-form-group id="input-group-3" label="Member Name" label-for="input-3">
					        <b-form-select
					          id="input-3"
					          v-model="form.food"
					          :options="foods"
					          required
					        ></b-form-select>
					      </b-form-group>
		    		</div>
		    		<div class="col-6">
		    			<b-form-group
				        id="input-group-1"
				        label="Team Leader"
				        label-for="input-1"
				      >
				        <b-form-input 
				     		class=""
				          id="input-1"
				          v-model="form.member_post_name"
				          type="input"
				          required
				          disabled
				        ></b-form-input>
				      </b-form-group>
		    		</div>
		    	</div>
		    	<div class="row mt-2">
		    		<div class="col-6">
		    			<b-form-group
				        id="input-group-1"
				        label="Start Date Review"
				        label-for="input-1"
				      >
				        <b-form-input 
				     		class=""
				          id="input-1"
				          v-model="form.email"
				          type="date"
				          required
				        ></b-form-input>
				      </b-form-group>
		    		</div>
		    		<div class="col-6">
		    			<b-form-group
				        id="input-group-1"
				        label="End Date Review"
				        label-for="input-1"
				      >
				        <b-form-input 
				     		class=""
				          id="input-1"
				          v-model="form.email"
				          type="date"
				          required
				        ></b-form-input>
				      </b-form-group>
		    		</div>
		    	</div>
		    </b-form>
	    </b-modal>
	</div>
</template>






<script>
	import 'jquery/dist/jquery.min.js';
	import 'bootstrap/dist/css/bootstrap.min.css';
	import "datatables.net-dt/js/dataTables.dataTables";
	import "datatables.net-dt/css/jquery.dataTables.min.css";
	import $ from 'jquery';

	export default{
		data: function () {
		    return {
				heading: '',

				i:0,
				judul:'Bagian untuk pengukuran peforma para anggota.',

		        nameState: null,
		        submittedNames: [],

		        form: {
		          member_post_name: 'Astrid Putri Rahmajati',
		          email: '',
		        },
		        foods: [{ text: 'Select One', value: null }, 'Carrots', 'Beans', 'Tomatoes', 'Corn'],
		        show: true,
		        nama_exp: [{ text: 'Select Year', value: null }, 'Igo', 'Fredrik Gunawan'],
			    }
		},
		created: function () {
			this.ketikheading();
			 $('#datatable').DataTable();
		},
		methods: {
		 onSubmit(event) {
	        event.preventDefault()
	        alert(JSON.stringify(this.form))
	      },
	      onReset(event) {
	        event.preventDefault()
	        // Reset our form values
	        this.form.email = ''
	        this.show = false
	        this.$nextTick(() => {
	          this.show = true
	        })
	      },
		  ketikheading: function () {
		  	if (this.i < this.judul.length) {
		  		this.heading += this.judul.charAt(this.i);
		  		this.i++;
		  		setTimeout(this.ketikheading, 100);
		  	}
		  }
		//   checkFormValidity() {
	 //        const valid = this.$refs.form.checkValidity()
	 //        this.nameState = valid
	 //        return valid
	 //      },
	 //      resetModal() {
	 //        this.name = ''
	 //        this.nameState = null
	 //      },
	 //      handleOk(bvModalEvt) {
	 //        // Prevent modal from closing
	 //        bvModalEvt.preventDefault()
	 //        // Trigger submit handler
	 //        this.handleSubmit()
	 //      },
	 //      handleSubmit() {
	 //        // Exit when the form isn't valid
	 //        if (!this.checkFormValidity()) {
	 //          return
	 //        }
	 //        // Push the name to submitted names
	 //        this.submittedNames.push(this.name)
	 //        // Hide the modal manually
	 //        this.$nextTick(() => {
	 //          this.$bvModal.hide('modal-prevent-closing')
	 //        })
	 //      }
		}
	}
</script>

<style>
	.txp-landscape, .txp-lapis-landscape, .txp-landscape-konten{
		width: 100%;
		height: 250px;
	}

	.txp-landscape{
		background-image: url("~@/assets/material/txplandscape.jpg");
		background-position: 0px -405px;
		background-size: cover;
	}

	.txp-lapis-landscape{
		position: absolute;
		top: 0;
		background-color: rgba(0,0,0,0.5);
	}

	.txp-landscape-konten{
		position: absolute;
		top: 20%;
	}

	.txp-landscape-konten h1::after{
		content: '';
		width: 2%;
		height: 5px;
		background-color: #FFC845;
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

	


	@media screen and (max-width: 1140px) {
		
	}
</style>