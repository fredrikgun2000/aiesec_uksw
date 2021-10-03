<template>
	<div class="home-landscape">
		<div class="home-landscape-konten">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="biru">{{heading}}</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p>
							<b>AIESEC</b> merupakan oraganisasi yang digerakkan mahasiswa terbesar di dunia. Organisasi yang berfokus pada pengembangan kepemimpinan para pemuda dan menjadi duta di luar negeri untuk menjalankan proyek sosial.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data: function () {
		    return {
		      heading: '',
		      
		      i:0,
		      judul:'What is AIESEC?'
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
		  }
		}
	}
</script>

<style>
	.home-landscape{
		background-image: url("~@/assets/material/landscape.jpg");
		width: 100%;
		background-size: contain;
		background-repeat: no-repeat;
		height: 700px;
	}

	.home-landscape-konten{
		height: 700px;
		position: absolute;
		top: 40%;
		left: 100px;
	}

	.home-landscape-konten h1::after{
		content: '';
		width: 5%;
		height: 5px;
		background-color: #037EF3;
		display: block;
	}

	.home-landscape-konten p{
		text-align: justify;
		width: 40%;
	}

	@media screen and (max-width: 1140px) {
		
	}
</style>