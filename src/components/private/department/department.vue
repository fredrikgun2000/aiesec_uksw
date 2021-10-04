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
		<div class="container">
			<div class="row mt-2">
				<div class="col-12">
					<table width="100%" class="text-center" border="1">
						<tr class="bg-hijau text-light">
							<th>ID</th>
							<th>Name</th>
							<th>LCVP</th>
							<th>Team Name</th>
							<th>Team Vision</th>
							<th>Action</th>
						</tr>
						<tr v-for="d in departmentdata" v-bind:key ="d.id">
							<td>{{d.id}}</td>
							<td>{{d.department_name}}</td>
							<td>{{d.lcvp_name}}</td>
							<td>{{d.team_name}}</td>
							<td>{{d.team_vision}}</td>
							<td>
								<b-icon-pencil class="mx-1 biru"></b-icon-pencil>
								<b-icon-trash class="mx-1 merah" @click="deletedepartement(d.id, d.department_name)"></b-icon-trash>
							</td>
						</tr>
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
	          label-for="lcvps">
		        <select
		          id="lcvps"
		          v-model ="lcvp"
		          class="department-input form-control"
		        >
			        <option :value="lcvp">Select One</option>
			        <option v-for="d in lcvpss" v-bind:key ="d.id" :value="d.id">
			        	{{d.fullname}}
			        </option>

		        </select>
		      </b-form-group>
	        <b-form-group
	          label="Team Name"
	          label-for="teamname-input"
	        >
	          <b-form-input
	            id="teamname-input"
	            v-model="teamname"
	            placeholder="ex : Loki, Thor ..."
	            class="department-input"
	          ></b-form-input>
	        </b-form-group>
	        <b-form-group
	          label="Team Vision"
	          label-for="teamvision-input"
	        >
	          <b-form-input
	            id="teamvision-input"
	            v-model="teamvision"
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
	import axios from 'axios';
	export default{
		data: function () {
		    return {
				heading: '',

				i:0,
				judul:'Bagian untuk mengatur data Department.',

				departmentnames:null,
		        departmentnamesState: null,
		        departmentname: [{ text: 'Select One', value: null },'Outgoing Global Volunteer', 'Marketing', 'External Relation', 'Finance Governance and Legal','Executive Board'],

		        lcvpss:undefined,
		        lcvp:null,
		        lcvpsState: null,
				teamname: '',
		        teamnameState: null,
				teamvision: '',
		        teamvisionState: null,

		        departmentdata:undefined,
		        
		    }
		},
		created: function () {
			this.ketikheading();
			this.getLCVP();
			this.getdepartment();
		},
		methods: {
			// method
			ketikheading() {
			  	if (this.i < this.judul.length) {
			  		this.heading += this.judul.charAt(this.i);
			  		this.i++;
			  		setTimeout(this.ketikheading, 100);
			  	}
			  },

			// ambil data
			getLCVP(){
				axios({
				  method: 'get',
				  url: 'http://localhost:8000/api/admin/department/lcvpdata',
				}).then(
					(response) => {
						this.lcvpss = response.data.data;
					} 
				);
			},
			getdepartment(){
				axios({
				  method: 'get',
				  url: 'http://localhost:8000/api/admin/department/departmentdata',
				}).then(
					(response) => {
						this.departmentdata = response.data.data;
					} 
				);
			},


			// hapus Data
			deletedepartement(id,name){
				this.$swal({
				  title: 'Ingin menghapus?',
				  text: 'Data yang anda akan hapus adalah department '+name+'.',
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#037EF3',
				  cancelButtonColor: '#F85A40',
				  confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				  if (result.isConfirmed) {
			        let data = new FormData();
			        data.append('department_id', id);
			        axios({
					  method: 'post',
					  url: 'http://localhost:8000/api/admin/department/hapusdata',
					  data: data,
					});

			        this.$nextTick(() => {
					    this.$swal(
					      'Deleted!',
					      'department <b>'+name+'</b> berhasil di hapus.',
					      'success'
					    )

			        });
			      }

			  })
			},

			// simpan Data
			checkFormValidity() {
				const valid = this.$refs.form.checkValidity()
				this.lcvpsState = valid
				this.departmentnamesState = valid
				this.teamnameState = valid
				this.teamvisionState = valid
				return valid
			},
			resetModal() {
				this.lcvp = null
				this.lcvpState = null
				this.departmentnames = null
				this.departmentnamesState = null
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
	        if (!this.checkFormValidity()) {
	          return
	        }

	        let data = new FormData();
	        data.append('lcvp_id', this.lcvp);
	        data.append('department_name', this.departmentnames);
	        data.append('team_name', this.teamname);
	        data.append('team_vision', this.teamvision);

	        axios({
			  method: 'post',
			  url: 'http://localhost:8000/api/admin/department/submitdata',
			  data: data,
			});

	        this.$nextTick(() => {
	          this.$bvModal.hide('modal-prevent-closing');
	          this.getdepartment();
	        })
	      }


		}
	}
</script>