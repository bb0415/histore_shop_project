<?php
session_start();
session_destroy();
?>
<script>
            echo "<script>alert('로그아웃이 되었습니다.');</script>";
            echo "<script>location.href='/';</script>";  
</script>