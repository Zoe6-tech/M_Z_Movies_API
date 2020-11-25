<?php
// movie.php has own class prepare any movie object that we want to use in API 
// interface
//ini_set('display_errors',1);
class Movie{
    private $conn;

    public $movie_table='';
    public $genre_table='';
    public $movie_genre_linking_table='';
    
    //pass exist data connecter
    public function __construct($db_connector){
        $this->conn = $db_connector;// dont need $
    }
    
    public function getMovies(){
        //TODP: this will return all movies
    //     $query='SELECT * FROM `tbl_movies`';
    //     $stmt=$this->conn->prepare($query);//statement
    //     $stmt->execute();
    //     return $stmt->fetchALL(PDO::FETCH_ASSOC);
    // }

    public function getMovieByGenre($genre){
        //TODO: this will retuen moves that under give genre, maybe 7 moives under comedy
    }

    public function getMovieByID($id){
        //TODO: this will return one movie that matches its ID

        // return array(
        //     'test_message'=>'you are request movie that MATCH ID ===>'.$id
        // );

        $query = 'SELECT * FROM `tbl_movies` where `movies_ID`=' .$id;
        //make sure query can execute and containes  right query:
          // echo $query;
          //return $query;
          //exit;
        //checked! 

        //php execute the SQL query, like $runquery
        $stmt=$this->conn->prepare($query);//statement
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
        //The parameter PDO::FETCH_ASSOC tells PDO to return the result as an associative array.
    }
}
