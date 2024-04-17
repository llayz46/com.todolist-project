<?php

session_set_cookie_params([
  'lifetime' => 3600,
  'path' => '/',
  'domain' => 'todolist.local',
  'httponly' => true
]);

session_start();