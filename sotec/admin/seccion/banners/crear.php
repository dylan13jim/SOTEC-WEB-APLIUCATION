<?php include("../../templates/header.php");?>
<br/>

<div class="card">
    <div class="card-header">Banners</div>
    <div class="card-body">
        <form action="" method="post"></form>

        <div class="form-group row">
            <label for="titulo" class="col-sm-2 col-form-label">Titulo:</label>
            <div class="col-sm-10">
                <input type="text" name="titulo" aria-describedby="helpId" class="form-control" id="titulo" placeholder="Escriba el titulo del banner..">
            </div>
        </div>
        <br/>

        <div class="form-group row">
            <label for="link" class="col-sm-2 col-form-label">Link:</label>
            <div class="col-sm-10">
                <input type="text" name="link" aria-describedby="helpId" class="form-control" id="link" placeholder="Escriba el link..">
            </div>
        </div>
        <br/>
        <button type="submit" class="btn btn-dark">Crear Banner</button>
        <a
            name=""
            id=""
            class="btn btn-light"
            href="index.php"
            role="button"
            >Cancelar</a
        >     
        
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../templates/footer.php");?>