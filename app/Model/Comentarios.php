
<?php

class Comentario
{
    public static function selecionaComentarios($idPost)
    {
        $con  = Connection::getConn();
        
        $sql = "SELECT * FROM comentarios WHERE id_postagem = :id";
        $sql = $con->prepare($sql);
        $sql->bindValue(':id',$idPost,PDO::PARAM_INT);
        $sql->execute();

        $resultado = array();

        while($row = $sql->fetchObject('Comentario'))
        {
            $resultado[] = $row;
        }       
        
        return $resultado;
    }   
}


?>