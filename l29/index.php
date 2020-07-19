<?php

//$user = isset($_GET['user']) ? $_GET['user'] : 'quest';
echo $user = $_GET['user'] ?? 'quest';