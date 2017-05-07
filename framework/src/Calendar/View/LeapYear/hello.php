<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 09.04.2017
 * Time: 19:22
 */

error_reporting(E_ALL);

$name = $request->get('name', 'World') ?>

Hello---- <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
