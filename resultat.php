<?php


class utilisateurs {
	public static function select_utilisateurs() {
           global $link;
           $mon_tableau_de_utilisateurs=array();
           $sql = "SELECT * FROM `utilisateurs`";
           $result = mysqli_query($link, $sql);
           if($result) {
              $i=0;
              while($data=mysqli_fetch_assoc($result)) {
                 $mon_tableau_de_utilisateurs[$i]['id']=$data['id'];
                 $mon_tableau_de_utilisateurs[$i]['nom']=$data['nom'];  
				     $mon_tableau_de_utilisateurs[$i]['phone']=$data['phone'];
                 $mon_tableau_de_utilisateurs[$i]['message']=$data['message'];
                 $mon_tableau_de_utilisateurs[$i]['mail']=$data['mail'];

                 $i++;
          }
       }
       return $mon_tableau_de_utilisateurs;
    }
    
    public static function select_id($id) {

        global $link; $mon_tableau_de_utilisateurs=array();
        $query = "SELECT * FROM `utilisateurs` WHERE `id` LIKE '".$id."'" ;
	var_dump ($query);

    $result = mysqli_query($link, $query);
           if($result) {
              $i=0;
              while($data=mysqli_fetch_assoc($result)) {
                $mon_tableau_de_utilisateurs[$i]['id']=$data['id'];
                $mon_tableau_de_utilisateurs[$i]['nom']=$data['nom'];  
                $mon_tableau_de_utilisateurs[$i]['phone']=$data['phone'];
                $mon_tableau_de_utilisateurs[$i]['message']=$data['message'];
                $mon_tableau_de_utilisateurs[$i]['mail']=$data['mail'];

                 $i++;
          }
        }
        return $mon_tableau_de_utilisateurs;


    }
   }

   ?>