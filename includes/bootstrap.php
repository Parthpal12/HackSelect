<?php
if(session_status()===PHP_SESSION_NONE) session_start();
require_once __DIR__.'/../config/database.php';
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function redirect($p){header('Location: '.$p);exit;}
function flash($type,$msg){$_SESSION['flash']=[$type,$msg];}
function take_flash(){ $f=$_SESSION['flash']??null; unset($_SESSION['flash']); return $f; }
function student_required(){if(empty($_SESSION['student_id'])) redirect('../login.php');}
function admin_required(){if(empty($_SESSION['admin_id'])) redirect('../admin-login.php');}
function selected_count(PDO $pdo,$pid){$s=$pdo->prepare("SELECT COUNT(*) FROM selections WHERE problem_id=? AND status IN ('SELECTED','CONFIRMED')");$s->execute([$pid]);return (int)$s->fetchColumn();}
