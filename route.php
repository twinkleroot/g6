<?php

include_once(dirname(__FILE__). '/common.php');

function __autoload($class_name)
{
    require_once(dirname(__FILE__). "/plugin/RegexRouter/$class_name.php");
}

$router = new Router();
$todo = new RouterToDo();

// 게시글 목록
$router->route('GET', $basepath. '/board/[a-z0-9_]+', array($todo, 'board_list'), array($bo_table, $board, $member, $qstr, $is_admin, $is_guest, $write, $group, $sca, $sop, $stx, $sfl, $write_table, $spt, $page, $board_skin_url, $is_member, $sst, $config, $board_skin_path, $g5));

// 게시글 보기
$router->route('GET', $basepath. '/board/[a-z0-9_]+/(\d+)', array($todo, 'board_view'), array($bo_table, $wr_id, $board, $member, $qstr, $is_admin, $is_guest, $write, $group, $sca, $sop, $stx, $sfl, $write_table, $spt, $page, $board_skin_url, $is_member, $sst, $config, $board_skin_path, $g5));

// 게시판 글쓰기 양식
$router->route('GET', $basepath. '/board/[a-z0-9_]+/(create)', array($todo, 'board_create'), array($bo_table, '', $board, $member, $is_member, $write, $is_admin, $group, $is_guest, $qstr, $g5, $config, $board_skin_path, $board_skin_url));

// 게시판 글수정 양식
$router->route('GET', $basepath. '/board/[a-z0-9_]+/(\d+)/(edit)', array($todo, 'board_edit'), array($bo_table, 'u', $wr_id, $board, $member, $is_member, $write, $is_admin, $group, $is_guest, $qstr, $g5, $config, $board_skin_path, $board_skin_url, $write_table));

// 게시판 글답변 양식
$router->route('GET', $basepath. '/board/[a-z0-9_]+/(\d+)/(reply)', array($todo, 'board_reply'), array($bo_table, 'r', $wr_id, $board, $member, $is_member, $write, $is_admin, $group, $is_guest, $qstr, $g5, $config, $board_skin_path, $board_skin_url, $write_table));

// 게시판 글쓰기 실행
$router->route('POST', $basepath. '/board/[a-z0-9_]+/(store)', array($todo, 'board_store'), array($bo_table, $g5, $board, $is_admin, $board_skin_path, $member, $is_guest, $config, $write_table, $group, $qstr));

$router->execute($_SERVER['REQUEST_URI']);
