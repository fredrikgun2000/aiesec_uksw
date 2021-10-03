<template>
	<div>
		<div class="row">
			<div class="col-12" style="background-color: #f4f4f5;">
				<div class="container-fluid">
					<div class="row">
						<div class="push_mobile col-lg-6 col-md-10 col-sm-12" style=" margin: 220px auto; ">
							<div class="row mb-3">
								<h3 class="mx-auto"><b class="text-light bg-biru px-2">AIESEC</b> IN UKSW</h3>
							</div>
							<div class="row" style="background-color: white; border-radius: 0px 10px 10px 0px;">
								<div class="col-6 login-landscape">
									<img src="@/assets/material/logobiru.png" width="15%">
								</div>
								<div class="col-6 text-center py-4">
									<div class="row">
										<div class="col-12">
											<h5>Login <b class="biru">Member</b></h5>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<small class="text-secondary">Tagline</small>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12">
											<form>
												<div class="row mt-2">
													<div class="col-12">
														<input type="text" name="" placeholder="Email ..." class="input form-control input">
													</div>
												</div>
												<div class="row mt-2">
													<div class="col-12">
														<input type="text" name="" placeholder="Password ..." class="input form-control">
													</div>
												</div>
												<div class="row mt-2">
													<div class="col-12">
														<button class="bg-biru text-light">Login</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-12">
											<router-link to="/">
												<small class="biru">
													Forget Password
												</small>
											</router-link>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

	export default{
	}
</script>

<style>
	body{
		overflow-x: hidden;
		overflow-y: hidden;
	}

	.login-landscape{
		background-image: url("~@/assets/material/txplandscape.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}

	.input{
		border: 1px solid #037EF3 !important;
	}

	@media screen and (max-width: 768px) {
		body{
			overflow-y: auto;
		}
	}
</style>