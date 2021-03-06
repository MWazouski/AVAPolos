<?php
//RafaelV3.0
set_time_limit(0);


require_once(dirname(__FILE__) . '/../../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once('simpleform.php'); // require do arquivo de formulario
require_once('functions.php'); // require do arquivo de funções
admin_externalpage_setup('tool_avapolos'); // Bloco lateral direito
echo $OUTPUT->header(); // header da página OBLIGATORY
define("IP", "10.230.0.65");
define("PORT", 22);

// Instantiate simplehtml_form
$exportform = new export_form();
$importform = new import_form();

require_once("$CFG->libdir/filestorage/file_storage.php");
$file_storage = new file_storage();

// Form processing and displaying is done here
if ($exportform->is_cancelled() || $importform->is_cancelled()) {
  // Handle form cancel operation, if cancel button is present on form
}
else if ($fromform = $exportform->get_data()) {
  //
  $choice = [];
  foreach ($fromform as $aux) {
    $choice[] = $aux;
  }

  $file_storage->cron(true);
  //
  if($choice[0] == "offline"){
    try{
      $ssh = new Connect_SSH(IP, PORT, "avapolos","avapolos");
      $ssh->create_ssh_connection();
      $ssh->exec_ssh_export();
    
      echo "Aguardando exportação...";
      echo "<script src='sweetalert2.all.min.js'></script>
      <script> 
        let timerInterval = Swal.fire({
          title: 'Aguarde exportação em andamento!',
          allowOutsideClick: false,
          onBeforeOpen: () => {
            Swal.showLoading()
            let temporizadorAjax = setInterval(()=>{
              var request = new XMLHttpRequest();
                request.onreadystatechange = function() {
                  if(request.readyState === 4) {
                    if(request.status === 200) {
                      let response = request.responseText;
                      console.log(response);
                      if(response != false){
                        Swal.close();
                        clearInterval(temporizadorAjax);
                        Swal.fire({
                          type: 'success',
                          title: 'Exportação realizada com sucesso!',
		          allowOutsideClick: false,
                           html: '<b><a href=\"'+response+'\">Clique aqui para baixar arquivo de exportação.</a> <br /><br /><a href=\"http://localhost/moodle\">Voltar para a página inicial.</a></b>',
                           showConfirmButton: false,
                        })
                      }else{
                        console.log('Ainda não');
                      }


                    } else {
                      console.log(request.status + ' ' + request.statusText);
                    } 
                  }
                }
                 
                request.open('Get', 'verifyFile.php');
                request.send();
            },5000);
          },
          onClose: () => {
            clearInterval(timerInterval)
          }
        })
    </script>";

    }
   
    catch(\Exption $e){
      echo $e;
    }
  }
  else if($choice[0] == "online"){
    
  }
}

//Importação
else if($fromform = $importform->get_data()){  
  $fileName = "dadosImportTemp.tar.gz";
  // salvar o arquivo no diretório
  $success = $importform->save_file('sqlfile', "./$fileName", true);
  if(!$success)
    exit("ERRO AO SALVAR ARQUIVO DE SINCRONIZAÇÃO (sincro.php), CONTATE O ADMINISTRADOR.");

 $file_storage->cron(true);
	  
 try {
    $ssh = new Connect_SSH(IP, PORT, "avapolos","avapolos");
    $ssh->create_ssh_connection();
    $ssh->exec_ssh_import();
    echo "
	  <script src='sweetalert2.all.min.js'></script>
	  <script>
		let timerInterval = Swal.fire({
		title: 'Aguarde, sincronização em andamento.',
		allowOutsideClick: false,
		onBeforeOpen: () => {
		  Swal.showLoading()
		  let temporizadorAjax = setInterval(()=>{
		    var request = new XMLHttpRequest();
		      request.onreadystatechange = function() {
		        if(request.readyState === 4) {
		          if(request.status === 200) {
		            let response = request.responseText;
		            console.log(response);
		            if(response == true){
		              Swal.close();
		              clearInterval(temporizadorAjax);
		              Swal.fire({
				allowOutsideClick: false,
		                type: 'success',
		                title: 'Importação realizada com sucesso!',
		                 html: '<b><a href=\"http://localhost/moodle\">Clique para ser redirecionado.</a></b>',
		                 showConfirmButton: false,
		              })
		            }else{
		              console.log('Ainda não');
		            }


		          } else {
		            console.log(request.status + ' ' + request.statusText);
		          } 
		        }
		      }
		       
		      request.open('Get', 'verifyFile.php');
		      request.send();
		  },5000);
		},
		onClose: () => {
		  clearInterval(timerInterval)
		}
	      })
	  </script>";
    }
    catch(Exception $e){
      echo $e;
    }

  }

else {
  // this branch is executed if the form is submitted but the data doesn't validate and the form should be redisplayed
  // or on the first display of the form.

  // Set default data (if any)
  $exportform->set_data($toform);
  // displays the form
  echo "<h3>Exportar</h3>";
  $exportform->display();
  //==============================
  echo "<hr>";
  //==============================
  echo "<h3>Importar</h3>";
  // Set default data (if any)
  $importform->set_data($toform);
  // displays the form
  $importform->display();
  /*echo "
  <script src='sweetalert2.all.min.js'></script>
  <script>
    document.getElementById('mform2').onsubmit = function(event){ 
        let timerInterval = Swal.fire({
        title: 'Aguarde, upload do arquivo em andamento.',
        allowOutsideClick: false,
        onBeforeOpen: () => {
          Swal.showLoading()
          let temporizadorAjax = setInterval(()=>{
            var request = new XMLHttpRequest();
              request.onreadystatechange = function() {
                if(request.readyState === 4) {
                  if(request.status === 200) {
                    let response = request.responseText;
                    console.log(response);
                    if(response == true){
                      Swal.close();
                      clearInterval(temporizadorAjax);
                      Swal.fire({
                        type: 'success',
                        title: 'Importação realizada com sucesso!',
                         html: '<b><a href=\"http://localhost/moodle\">Clique para ser redirecionado.</a></b>',
                         showConfirmButton: false,
                      })
                    }else{
                      console.log('Ainda não');
                    }


                  } else {
                    console.log(request.status + ' ' + request.statusText);
                  } 
                }
              }
               
              request.open('Get', 'verifyFile.php');
              request.send();
          },5000);
        },
        onClose: () => {
          clearInterval(timerInterval)
        }
      })
    }
  </script>";*/
}


echo $OUTPUT->footer();

// $popUp = "<script>document.querySelectorAll('#id_submitbutton')[1].addEventListener('click',(element)=>{alert('A importação pode demorar até 20 minutos ou mais. DESLIGUE O SLAVE!!!!!')});</script>";
echo $popUp;
