<?php
class especialidadesController extends controller {


	public function index() {
		$dados = array();
 
		$this->loadTemplateEspecialidades('especialidades', $dados);

	}

}