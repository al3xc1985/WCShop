<?php

require_once "handlers/panel.php";

?>

<section>
    <article>
        <span>Donate Points: <?php echo $dp; ?></span>
        <span><button id="logout">Logout</button></span>
    </article>
    <table>
        <tr>
            <td>Item</td>
            <td>Character</td>
            <td>Amount</td>
            <td>Option</td>
        </tr>
        <tr>
            <td>
                Wrathful Gladiator's Plate Helm
            </td>
            <td>
                <select>
                    <option value="0" selected disabled>Character</option>
                </select>
            </td>
            <td>
                <input type="number" placeholder="Amount"></input>
            </td>
            <td>
                <button>Buy</button>
            </td>
        </tr>
    </table>
</section>