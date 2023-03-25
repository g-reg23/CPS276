<?php
require 'pdo_methods.php';

class Crud extends PdoMethods{

	public function getFiles(){
		$pdo = new PdoMethods();

		/* CREATE THE SQL */
		$sql = "SELECT * FROM files";

		//PROCESS THE SQL AND GET THE RESULTS
		$records = $pdo->selectNotBinded($sql);

		/* IF THERE WAS AN ERROR DISPLAY MESSAGE */
		if($records == 'error'){
			return 'There has been and error processing your request';
		}
		else {
			if(count($records) != 0){
				return $this->createList($records);
			}
			else {
				return 'no names found';
			}
		}
	}

	public function addFile(){
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO files (name, path) VALUES (:name, :path)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':name',$_POST['fileName'],'str'],
			[':path','folders/'.$_POST['fileName'],'str'],
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the file to the database';
		}
		else {
			return 'File has been added';
		}
	}
	private function createList($records){
		$list = '<ul>';
		foreach ($records as $row){
			$list .= "<li><a href={$row['path']} target='_blank' i>{$row['name']}</a></li>";
		}
		$list .= '</ul>';
		return $list;
	}
}