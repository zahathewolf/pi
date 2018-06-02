<div class="container">
  <div class="row">
    <div class="col">
        <table class="table table-bordered table-striped">
            <tr>
                <td>ID</td>
                <td>Naziv</td>
                <td>Autor</td>
                <td>ISBN</td>
            </tr>
            <?php foreach ($knjige as $knjiga): ?>
            <tr>
                <td><?=$knjiga['id'];?></td>
                <td><?=$knjiga['Naziv'];?></td>
                <td><?=$knjiga['Autor'];?></td>
                <td><?=$knjiga['ISBN'];?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="col">
    <form>
    <div class="form-group">
        <label for="naziv">Naziv</label>
        <input type="text" class="form-control" id="naziv" placeholder="Naziv knjige">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" placeholder="Autor knjige">
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" placeholder="ISBN knjige">
    </div>
    <button type="submit" class="btn btn-primary">Spasi knjigu</button>
    </form>
    </div>
  </div>
</div>