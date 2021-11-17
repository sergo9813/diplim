<?php
include "glsud.php";
?>
<form id="create_table_form_minimal" name="dip" method="post" action="do_showfielder.php" class="lock-page">
            <legend>
                Название соревнований:
                <input type="text" name="table_name" maxlength="64"  required="required">
            </div>
                <p>Количество столбцов:
                <input type="number" min="1" name="num_fields" value="4" required="required">
            </div>
            <div class="clearfloat"></div>
            <input class="btn btn-primary" type="submit" value="Вперёд">
    </form>
