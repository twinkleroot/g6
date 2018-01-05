<?php

class RouterToDo {
    // 게시글 목록
    function board_list($bo_table, $board, $member, $qstr, $is_admin, $is_guest, $write, $group, $sca, $sop, $stx, $sfl, $write_table, $spt, $page, $board_skin_url, $is_member, $sst, $config, $board_skin_path, $g5)
    {
        require G5_PATH. "/bbs/board.php";
        exit();
    }

    // 게시글 보기
    function board_view($bo_table, $wr_id, $board, $member, $qstr, $is_admin, $is_guest, $write, $group, $sca, $sop, $stx, $sfl, $write_table, $spt, $page, $board_skin_url, $is_member, $sst, $config, $board_skin_path, $g5)
    {
        require G5_PATH. "/bbs/board.php";
        exit();
    }

    // 게시글 쓰기 양식
    function board_create($bo_table, $w, $board, $member, $is_member, $write, $is_admin, $group, $is_guest, $qstr, $g5, $config, $board_skin_path, $board_skin_url)
    {
        require G5_PATH. "/bbs/write.php";
        exit();
    }

    // 게시글 수정 양식
    function board_edit($bo_table, $w, $wr_id, $board, $member, $is_member, $write, $is_admin, $group, $is_guest, $qstr, $g5, $config, $board_skin_path, $board_skin_url, $write_table)
    {
        require G5_PATH. "/bbs/write.php";
        exit();
    }

    // 게시글 답변 양식
    function board_reply($bo_table, $w, $wr_id, $board, $member, $is_member, $write, $is_admin, $group, $is_guest, $qstr, $g5, $config, $board_skin_path, $board_skin_url, $write_table)
    {
        require G5_PATH. "/bbs/write.php";
        exit();
    }

    // 게시글 수정 양식
    function board_store($bo_table, $g5, $board, $is_admin, $board_skin_path, $member, $is_guest, $config, $write_table, $group, $qstr)
    {
        require G5_PATH. "/bbs/write_update.php";
        exit();
    }
}
