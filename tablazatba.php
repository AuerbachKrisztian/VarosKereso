 <h1>Táblázat / Adatmódositás / Adattörlés</h1>
        <table>
            <tr>
                <th>id</th>
                <th>Név</th>
                <th>Megye</th>
                <th>Járás</th>
                <th>Kistérség</th>
                <th>Népesség</th>
                <th>Terület</th>
                <th>Irányitószám</th>
                <th>Város allapitása</th>
                <th>Várps tipusa</th>
                

            </tr>

            <?php
            include_once 'kapcsolat.php';

            $sql = "SELECT * FROM varos";
            $eredmeny = mysqli_query($kapcsolat, $sql);

            while ($adat = mysqli_fetch_array($eredmeny)) {
                ?>
                <tr>
                    <td><?php echo $adat['ID']; ?> </td>
                    <td><?php echo $adat['nev']; ?> </td>
                    <td><?php echo $adat['megye']; ?> </td>
                    <td><?php echo $adat['jaras']; ?> </td>
                    <td><?php echo $adat['kisterseg']; ?> </td>
                    <td><?php echo $adat['nepesseg']; ?> </td>
                    <td><?php echo $adat['terulet']; ?> </td>
                    <td><?php echo $adat['iranyitoszam']; ?> </td>
                    <td><?php echo $adat['miota_varos']; ?> </td>
                    <td><?php echo $adat['tipus']; ?> </td>
                    
                    <td><a href="modosit.php?id=<?php echo $data['id']; ?>">Modositás</a></td>
                    <td><a href="torol.php?id=<?php echo $data['id']; ?>">Töröl</a></td>
                </tr>	
                <?php
            }
            ?>