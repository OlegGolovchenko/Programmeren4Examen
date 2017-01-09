</header>
    <article>
      <nav>
            <a href=""></a>
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
      <form action="/examen/examen912017/UnitBaseMvc.php/Home/Insert" method="post">
            <div>
                    <label for="UnitBaseName">Naam</label>
                    <input type="text" name="UnitBaseName" value="<?php echo $model->getName();?>"></div>
                <div>
                    <label for="UnitBaseDescription">Beschrijving</label>
                    <input type="text" name="UnitBaseDescription" value="<?php echo $model->getDescription();?>"></div>
                <div>
                    <label for="UnitBaseShippingCostMultiplier">Verzendkostfactor</label>
                    <input type="text" name="UnitBaseShippingCostMultiplier" value="<?php echo $model->getShippingCostMultiplier();?>"></div>
                <div>
                    <label for="UnitBaseCode">Code</label>
                    <input type="text" name="UnitBaseCode" value="<?php echo $model->getCode();?>"></div>
            <div>
                  <input type="submit" value="Insert"/>
            </div>
      </form>
      </article>
</main>