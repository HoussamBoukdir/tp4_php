
<?php
$les_filieres=['Developpement','Reseaux',
'Gestion','Commerce','Gestion'
];
$les_loisirs=['Lecture','Sport','Voyage','Langues','Autres']
?>
<html>
    <head>
        <title>Learn PHP</title>
    </head>
    <body>
        <h3>les formulaires en PHP</h3>
        <form action="" method="post">
            <div>
                <label for="nom">Nom:</label>
<input type="text" name="nom" 
value="<?php if(isset($_POST['nom'])) {echo $_POST['nom'] ;}
?>"
>

            </div>
            <div>
                <label for="fil">Filiere:</label>
                <select name="fil" >
                <?php foreach($les_filieres as $fil) : ?>
<option value="<?= $fil ?>"

<?= (isset($_POST['fil']) and $_POST['fil']==$fil)? 'selected':''  ?>
><?= $fil ?></option>
                <?php endforeach ?>
                </select>
            </div>
            <div>
                <label for="genre">Genre:</label>
                <input type="radio" name="genre" value="M" 
                <?= (isset($_POST['genre']) and $_POST['genre']=='M' )? 'checked':'' ?>
                >M
                <input type="radio" name="genre" value="F" 
                <?= (isset($_POST['genre']) and $_POST['genre']=='F' )? 'checked':'' ?>
                >F
                
            </div>
            <div>
                <label for="email">Email:</label>
<input type="email" name="email"
value="<?= (isset($_POST['email']))? $_POST['email']:'' ?>">

            </div>
            <div>
              <label for="loisirs">Les loisirs:</label>
            <?php foreach($les_loisirs as $loisir): ?>
<input type="checkbox" name="loisirs[]" value="<?=$loisir ?>"
<?php  if (isset($_POST['loisirs']) and in_array($loisir,$_POST['loisirs'])) {echo 'checked';}   ?>

><?=$loisir ?>  
            <?php endforeach ?>
            </div>

            <input type="submit" name="display" value="Afficher">
        
</form>
        <?php
   /*  echo "<pre>";
    print_r($_SERVER);
    echo "</pre>"; */
   // if($_SERVER['REQUEST_METHOD']==='POST')
   $errors=[];
   if(isset($_POST['display']))
    {
    $nom=$_POST['nom'];
    $fil=$_POST['fil'];
    $email=$_POST['email'];
    $genre=$_POST['genre'];
    $loisirs=$_POST['loisirs'];
    echo "Nom du Visiteur:".$nom."<br/>";
    echo "Filiére du Visiteur:".$fil."<br/>";
    echo "Genre du Visiteur:".$genre."<br/>";
    echo "Email du Visiteur:".$email."<br/>";
    echo "Loisirs: <br/>";
    foreach($loisirs as $loisir)
    {
        echo $loisir." - ";
    }


}
?>

    </body>
   
</html>




