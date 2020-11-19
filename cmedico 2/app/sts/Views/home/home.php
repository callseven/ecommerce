<?php
// if (!defined('URL')) {
//     header("Location: /");
//     exit();
// }

//echo "View HOME <br>";
//var_dump($this->Dados['sts_carousels']);
?>
<!-- <head> -->
<style>.wizard-container2 {
  padding-top: 1px;
  z-index: 3; }
  .wizard-container2 .wizard-navigation2 {
    position: relative; }

    /* .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
     */
    </style>
	<!-- <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" /> -->
    <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
<!-- </head>  -->

<body>
	<!-- <div class="image-container set-full-height" style="background-image: url('assets/img/wizard-book.jpg')">
	    <!--   Creative Tim Branding   -->
	    <!-- <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a> -->

		 <!-- Made With Material Kit 
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a> --> 

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-12 col-sm-offset-0">
		            <!--      Wizard container        -->
		            <div class="wizard-container2">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Médicos 
		                        	</h3>
									<h5>Lista de médicos cadastrados e especialidades</h5>
                                </div>
                                
								<div class="wizard-navigation">
									<!-- <ul>
			                            <li><a href="#details" data-toggle="tab">Account</a></li>
			                            <li><a href="#captain" data-toggle="tab">Room Type</a></li>
			                            <li><a href="#description" data-toggle="tab">Extra Details</a></li>
			                        </ul>
								</div> -->

                                

                                

    <div class="jumbotron servicos">
      
    <div class="container">
    <div class="row col-md-12 col-md-offset-0 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="cadmedico"  class="btn btn-xs btn-dark pull-right">Cadastrar Médico</a>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CRM</th>
            <th>Email</th>
            <th>Especialidades</th>
            <th>Imagem</th>
            <th>Criado</th>
            <!-- <th>Editado</th> -->
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <?php
                foreach ($this->Dados['medicos'] as $medicos) {
                    extract($medicos);
                    ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nome; ?></td>
                <td><?php echo $crm; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $nomeesp; ?></td>
                <td><?php echo $imagem; ?></td>
                <td><?php echo $created; ?></td>
                <!-- <td><?php echo $modified; ?></td> -->

                <td class="text-center">
                <a class='btn btn-round btn-info btn-xs' href='editar-carousel/edit-carousel/$id'>
                <span class="glyphicon glyphicon-edit"></span>Editar</a> 
                <a href="#" class="btn btn-round btn-danger btn-xs">
                <span class="glyphicon glyphicon-remove"></span>Apagar</a></td>
                
            </tr>
			<?php
                }
                ?>
            
    </table>
    </div>
</div>

                
                </tbody>
            </table>
<!-- <termino carousel> -->

										</div>
	                                </div> 
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <!-- <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/material-bootstrap-wizard">here.</a>
	        </div>
	    </div> -->
	</div>


</main>