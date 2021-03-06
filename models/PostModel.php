<?php
namespace Model;
use App\DB;
use PDO;
/**
 * Post Model for basic CRUD functionality
 */
class PostModel extends DB {

    public function get(){
     $db = new DB();
     $sql=('SELECT * FROM posts');
     $stmt = $db->connect()->prepare($sql);        
     $stmt->execute([$sql]);     
     $results = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $results;
    }
    /**
     * getpost is method for retriving only one post with param $id
     */
    public function getpost($id){
        $db = new DB();
        $sql='SELECT * FROM posts WHERE id= :id';
        $stmt = $db->connect()->prepare($sql);        
        $stmt->execute(['id'=>$id]);     
        $results = $stmt->fetch(PDO::FETCH_OBJ);
           
           return $results;
       }
    /**
     * $title,$body,$author,$date are var from create form
     * set() method store data in posts table
     */
    public function set($title,$body,$author,$created_at){
        $db = new DB();
        $sql = 'INSERT INTO posts(title,body,author,created_at) VALUES (:title,:body,:author,:created_at)';
        $stmt = $db->connect()->prepare($sql);        
        $stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author, 'created_at'=>$created_at]);    
     
        
        return true;
    }
    public function update($title,$body,$author,$created_at,$id){
        $db = new DB();
        $sql = 'UPDATE posts SET title=:title, body=:body, author=:author ,created_at=:created_at WHERE id=:id';
        $stmt = $db->connect()->prepare($sql);        
        $stmt->execute([ 'title'=>$title, 'body'=>$body, 'author'=>$author, 'created_at'=>$created_at,'id'=>$id]); 
    }
    public function delete($id){
         $db = new DB();
         $sql = 'DELETE FROM posts WHERE id=:id';
         $stmt=$db->connect()->prepare($sql);
         $stmt->execute(['id'=>$id]);
    }
}