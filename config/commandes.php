<?php
 function Add($name,$email,$password){
 	if(require("connexion.php")){
 		$req=$access->prepare("INSERT INTO admin(name,email,password)VALUES ($name,$email,$password)");
 		$req->execute(array($name,$email,$password));
 		$req->closeCursor();
 	}
 }

function update($name,$email,$password){
 	if(require("connexion.php")){
 		$req=$access->prepare("UPDATE admin(name,email,password) SET name=$name,email=$email,password=$password WHERE id=?");
 		$req->execute(array($name,$email,$password));
 		$req->closeCursor();

 	} 
}
function delete($id){
	if(require("connexion.php")){
		$req=$access->prepare("DELETE * FROM admin WHERE id=?");
		$req->execute(array($id));
	}	
}