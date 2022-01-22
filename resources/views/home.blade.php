@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
	body{
		overflow-x: hidden;
	
	}

	.sidebar{
		position: fixed;
		width: 300px;
		height: 100%;
		overflow-x: hidden;

		z-index: 2;
	}
	.sidebar ul li {
		width: 100%;
		list-style: none;
	}
	.sidebar ul li:hover {
		background: #9C9E9E ;
	}
	.sidebar ul li:first-child{
		line-height: 60px;
		margin-bottom: 20px;
		font-weight: 600;
		border-bottom: 1px solid black;
	}
	.sidebar ul li:first-child:hover{
		background: none;
	}
	.sidebar ul li a {
		width: 100%;
		text-decoration: none;
		color: black;
		height: 60px;
		display: flex;
		align-items: center;
	}
	.sidebar ul li a i {
		min-width: 30%;
		font-size: 24px;
		text-align: center;
	}

</style>

<body>
	
	<div class="sidebar">
		<div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
    <img
         class="rounded-pill img-fluid"
         width="65"
         src="images/Profil.png"
         alt="">
    <div class="ms-2">
      <h5 class="fs-6 mb-0">
        <a class="text-decoration-none" href="#">Ameni Ben Slimen</a>
      </h5>
      <p class="mt-1 mb-0">Developpeuse web.</p>
    </div>
  </div>
		<ul>
			<li>
				<a href="#">
					<i class="fas fa-clinic-medical"></i>
					<div class="title">Dashboard</div>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-bullhorn"></i>
					<div class="title" onclick="mafonction();">Publier un nouveau article</div>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-check-circle"></i>
					<div class="title" id="togg1">Voir tous les articles</div>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="far fa-eye"></i>
					<div class="title">Le nombre des articles</div>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="far fa-id-card"></i>
					<div class="title">Profil</div>
				</a>
			</li>
		</ul>
	</div>
	<script>

	</script>
 
</body>
</html>

@endsection


