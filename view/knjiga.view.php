<div class="container">
  <div class="row">
    <div class="col">
        <table class="table table-bordered table-striped">
            <tr>
                <td>ID</td>
                <td>Naziv</td>
                <td>Autor</td>
                <td>ISBN</td>
                <td>Akcije</td>
            </tr>
            <?php foreach ($knjige as $knjiga): ?>
            <tr>
                <td><?=$knjiga['id'];?></td>
                <td><?=$knjiga['Naziv'];?></td>
                <td><?=$knjiga['Autor'];?></td>
                <td><?=$knjiga['ISBN'];?></td>
                <td>
                    <a href="index.php?controller=knjiga&action=brisi_knjigu&knjigaid=<?=$knjiga['id'];?>">Briši knjigu</a>
                    <a href="index.php?controller=knjiga&action=uredi_knjigu&knjigaid=<?=$knjiga['id'];?>">Uredi knjigu</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="col">
    <form action="index.php?controller=knjiga&action=dodaj_knjigu" method="POST">
    <input type="hidden" name="Id" value="<?php if(isset($uKnjiga['id'])) echo $uKnjiga['id'];?>" />
    <div class="form-group">
        <label for="naziv">Naziv</label>
        <input type="text" class="form-control" id="naziv" name="Naziv" value="<?php if(isset($uKnjiga['Naziv'])) echo $uKnjiga['Naziv'];?>" placeholder="Naziv knjige">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="Autor" value="<?php if(isset($uKnjiga['Autor'])) echo $uKnjiga['Autor'];?>" placeholder="Autor knjige">
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="ISBN" value="<?php if(isset($uKnjiga['ISBN'])) echo $uKnjiga['ISBN'];?>" placeholder="ISBN knjige">
    </div>
    <button type="submit" class="btn btn-primary">Spasi knjigu</button>
    </form>
    </div>
  </div>
</div>