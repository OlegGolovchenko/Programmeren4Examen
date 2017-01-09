<main>
    <header>
        <h1>Garage Programmeren 4</h1>
    </header>
    <article>
        <nav>
            <a href="/examen/examen912017/UnitBaseMvc.php/Home/Inserting">Inserting</a>
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
    </article>
    <footer></footer>
</main>