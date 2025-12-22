<?php
header("Access-Control-Allow-Origin=> *");
header("Access-Control-Allow-Headers=> *");
$data = [
[
     "id"=> 1,
     "photo"=> "https://www.aetherium.fr/wpe/wp-content/uploads/2019/08/aetherium-semio-batman-affiche-2.jpg",
     "titre"=> "AKA",
     "genre"=> "Thriller",
     "evaluation"=> 2,
     "stock"=> 3
   ],
[
     "id"=> 2,
     "photo"=> "https://m.media-amazon.com/images/I/71u4ibuAdsL._AC_SL1500_.jpg",
     "titre"=> "Elemental",
     "genre"=> "Comédie",
     "evaluation"=> 4.5,
     "stock"=> 8
   ],
[
     "id"=> 3,
     "photo"=> "https://m.media-amazon.com/images/I/71u4ibuAdsL._AC_SL1500_.jpg",
     "titre"=> "Misanthrope",
     "genre"=> "Thriller",
     "evaluation"=> 4.5,
     "stock"=> 10
   ],
[
     "id"=> 4,
     "photo"=> "https://www.aetherium.fr/wpe/wp-content/uploads/2019/08/aetherium-semio-batman-affiche-2.jpg",
     "titre"=> "Rye Lane",
     "genre"=> "Comédie",
     "evaluation"=> 2.5,
     "stock"=> 5
   ],
[
     "id"=> 5,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs_K-vpdaj7tLASHgA185aeDO6DvpWKEAog6UL5aeIAPozPe1_DngjJbaLixV6ZQFACag&usqp=CAU",
     "titre"=> "John Wick",
     "genre"=> "Action",
     "evaluation"=> 4.8,
     "stock"=> 6
   ],
[
     "id"=> 6,
     "photo"=> "https://fr.web.img5.acsta.net/c_310_420/pictures/21/08/10/12/20/4633954.jpg",
     "titre"=> "Avengers=> Endgame",
     "genre"=> "Action",
     "evaluation"=> 4.9,
     "stock"=> 12
   ],
[
     "id"=> 7,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb6uxNdLb3fOE9M04_jyvpIVHEJ_rTt5z3vg&s",
     "titre"=> "Interstellar",
     "genre"=> "Science-Fiction",
     "evaluation"=> 4.7,
     "stock"=> 4
   ],
[
     "id"=> 8,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNzjk_zz-xUr0f2pdWE6jI70C3y-kEQmLlCg&s",
     "titre"=> "Inception",
     "genre"=> "Science-Fiction",
     "evaluation"=> 4.6,
     "stock"=> 9
   ],
[
     "id"=> 9,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6SKN9izT0OXNSDAEBEfPkJjiX-Y7VbyKlQw&s",
     "titre"=> "The Batman",
     "genre"=> "Action",
     "evaluation"=> 4.3,
     "stock"=> 7
   ],
[
     "id"=> 10,
     "photo"=> "https://www.printoclock.com/blog/wp-content/uploads/2017/08/65c66eaba2e6a0cc1240fabac227e29d-736x1090.jpg",
     "titre"=> "Dune",
     "genre"=> "Science-Fiction",
     "evaluation"=> 4.5,
     "stock"=> 5
   ],
[
     "id"=> 11,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpOodvJ7iJoS8OmgC_X-RHxl-ZMHhjH3VWIuekTx8WEmeRBzMgrB3bPZ5CCtj1YCzRpf8&usqp=CAU",
     "titre"=> "Spider-Man=> No Way Home",
     "genre"=> "Action",
     "evaluation"=> 4.6,
     "stock"=> 10
   ],
[
     "id"=> 12,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwo_f6YIC18C-p4-cr2F7DVJzNW2tWQf3hBw&s",
     "titre"=> "Joker",
     "genre"=> "Drame",
     "evaluation"=> 4.4,
     "stock"=> 3
   ],
[
     "id"=> 13,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpOodvJ7iJoS8OmgC_X-RHxl-ZMHhjH3VWIuekTx8WEmeRBzMgrB3bPZ5CCtj1YCzRpf8&usqp=CAU",
     "titre"=> "Parasite",
     "genre"=> "Drame",
     "evaluation"=> 4.9,
     "stock"=> 6
   ],
[
     "id"=> 14,
     "photo"=> "https://www.mauvais-genres.com/39757-thickbox_default/babylon-affiche-de-film-40x54-cm-2023-brad-pitt-damien-chazelle.jpg",
     "titre"=> "The Godfather",
     "genre"=> "Drame",
     "evaluation"=> 5.0,
     "stock"=> 2
   ],
[
     "id"=> 15,
     "photo"=> "https://www.mauvais-genres.com/39757-thickbox_default/babylon-affiche-de-film-40x54-cm-2023-brad-pitt-damien-chazelle.jpg",
     "titre"=> "The Shawshank Redemption",
     "genre"=> "Drame",
     "evaluation"=> 5.0,
     "stock"=> 8
   ],
[
     "id"=> 16,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8jCCDCIPrtKYd5CcXcYK78uPIuUS_85SNzg&s",
     "titre"=> "Fight Club",
     "genre"=> "Drame",
     "evaluation"=> 4.7,
     "stock"=> 4
   ],
[
     "id"=> 17,
     "photo"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwo_f6YIC18C-p4-cr2F7DVJzNW2tWQf3hBw&s",
     "titre"=> "Pulp Fiction",
     "genre"=> "Drame",
     "evaluation"=> 4.8,
     "stock"=> 5
   ],
[
     "id"=> 18,
     "photo"=> "https://creapills.com/wp-content/uploads/2019/03/teleramasse-detournement-affiches-films-2.jpg",
     "titre"=> "The Matrix",
     "genre"=> "Science-Fiction",
     "evaluation"=> 4.8,
     "stock"=> 7
   ],
[
     "id"=> 19,
     "photo"=> "https://images.affiches-et-posters.com//albums/3/2619/medium/affiche-film-gladiator-164.jpg",
     "titre"=> "Gladiator",
     "genre"=> "Action",
     "evaluation"=> 4.7,
     "stock"=> 6
   ],
[
     "id"=> 20,
     "photo"=> "https://poster.moncinepack.fr/MA/poster/EAD25E58/320/ELRTV.jpg?optimizer=image",
     "titre"=> "The Dark Knight",
     "genre"=> "Action",
     "evaluation"=> 5.0,
     "stock"=> 9
   ]
 ]
 ;
    
echo json_encode($data);