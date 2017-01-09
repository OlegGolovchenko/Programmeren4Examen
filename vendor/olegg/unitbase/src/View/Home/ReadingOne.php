<main>
    <header>
        <h1>Garage Programmeren 4</h1>
    </header>
    <article>
        <nav>
            <a href="/examen/examen912017/UnitBaseMvc.php/Home/Inserting">Inserting</a>
            <a href="/examen/examen912017/UnitBaseMvc.php/Home/Updating/<?php echo $item['Id'];?>">Updating</a>
            <a href="/examen/examen912017/UnitBaseMvc.php/Home/Delete/<?php echo $item['Id'];?>">Select</a>
        </nav>
        <section>
            <?php
                if (count($model->getList()) > 0) { ?>
                <table border="1">
                    <thead>
                        <tr>
                            <td>
                                Naam
                            </td>
                            <td>
                                Beschrijving
                            </td>
                            <td>
                                Verzendkostfactor
                            </td>
                            <td>
                                Code
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($model->getList() as $item) { ?>
                        <tr>
                            <td>
                                <?php echo $item['Name'];?>
                            </td>
                            <td>
                                <?php echo $item['Description'];?>
                            </td>
                            <td>
                                <?php echo $item['ShippingCostMultiplier'];?>
                            </td>
                            <td>
                                <?php echo $item['Code']?>
                            </td>
                            <td><a href="/examen/examen912017/UnitBaseMvc.php/Home/ReadingOne/<?php echo $item['Id'];?>">Select</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                } else { ?>
                    <p>Geen UnitBase gevonden</p>
                <?php 
                } ?>
        </section>
        <section>
           <form>
                <div>
                    <label for="UnitBaseName">Naam</label>
                    <input readonly type="text" name="UnitBaseName" value="<?php echo $model->getName();?>"></div>
                <div>
                    <label for="UnitBaseDescription">Beschrijving</label>
                    <input readonly type="text" name="UnitBaseDescription" value="<?php echo $model->getDescription();?>"></div>
                <div>
                    <label for="UnitBaseShippingCostMultiplier">Verzendkostfactor</label>
                    <input readonly type="text" name="UnitBaseShippingCostMultiplier" value="<?php echo $model->getShippingCostMultiplier();?>"></div>
                <div>
                    <label for="UnitBaseCode">Code</label>
                    <input readonly type="text" name="UnitBaseCode" value="<?php echo $model->getCode();?>"></div>
            </form>
        </section>
    </article>
</main>