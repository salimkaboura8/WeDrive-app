<div class="container p-4">
    <div class="row">
        <h3 class="col-md-4 mytitle"> Rechercher Voyages </h3>
        </br> </br>
    </div>

    <div class="row">
        <div class="col">
            <form method="POST" action="" id="rechercheForm">
                <input type="hidden" name="action" id="rechercheInput" value="<?php echo $action ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group p-2 mb-1 text-white" for="depart">Ville de départ </label>
                    </div>
                    <select name="depart" id="depart" class="custom-select">
                        <?php foreach($context->villes as $ville) { ?>
                        <?php if(isset($_REQUEST['depart']) && $_REQUEST['depart'] == $ville){ ?>
                        <option value="<?php echo $ville ?>" selected><?php echo $ville ?></option>
                        <?php }else{ ?>
                        <option value="<?php echo $ville ?>"><?php echo $ville ?></option>
                        <?php } } ?>
                    </select>
                </div>
        </div>
        <div class="col">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group p-2 mb-1 text-light" for="arrivee">Ville d'arrivée </>
                </div>
                <select name="arrivee" id="arrivee" class="custom-select">
                    <?php foreach($context->villes as $ville) { ?>
                    <?php if(isset($_REQUEST['arrivee']) && $_REQUEST['arrivee'] == $ville){ ?>
                    <option value="<?php echo $ville ?>" selected><?php echo $ville ?></option>
                    <?php }else{ ?>
                    <option value="<?php echo $ville ?>"><?php echo $ville ?></option>
                    <?php } } ?>
                </select>
            </div>
        </div>
        </br> </br>
        <div class="col"> <button type="submit" id="searchButton" class="btn btn-light btn-sm p-2">
                Rechercher</button> </div>
        </form>
    </div>
    <div id="resultatDiv">
    </div>
</div>