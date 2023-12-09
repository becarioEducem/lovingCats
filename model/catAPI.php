<?php
    //! NO POTS MODIFICAR AQUEST FITXER

    //Obtenim totes les categories de gats existents i retornem un array amb els tags
    function getTags(){
        $res  = file_get_contents("https://cataas.com/api/tags");
        $tags = json_decode($res, true);
        return $tags;
    }

    //Obtenim els gats de les categories especificades i retornem un array amb els gats
    function getCats($tag,$limit=4,$skip=0){
        $tag  = urlencode($tag);
        $res  = file_get_contents("https://cataas.com/api/cats?tags=$tag&limit=$limit&skip=$skip");
        $cats = json_decode($res, true);
        return $cats;
    }

