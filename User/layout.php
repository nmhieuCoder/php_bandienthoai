<?php
    require_once("config.php");
    require_once(lib_path."db.php");    
    session_start();
    
    if($isIndex==true)
    {
        require_once($level.head_path."head_index.php");
        require_once($level.head_path."header.php");
        require_once($level.body_path."slideshow_index.php");
        require_once($level.body_path."sanphamkhac_index.php");
        require_once($level.body_path."sansale_index.php");
    }
    if($isMuaHang==true)
    {
        require_once($level.head_path."head_index.php");
        require_once($level.head_path."header.php");
        require_once($level.body_path."danhsachsanpham.php");   
        require_once($level.body_path."thuonghieu.php");
    }
    if($isChiTietSanPham==true)
    {
        require_once($level.head_path."head_index.php");
        require_once($level.head_path."header.php");
        require_once($level.body_path."content_chitietsanpham.php");
        require_once($level.comp_path."muahang_pro.php");
        require_once($level.body_path."article_chitietsanpham.php");
        require_once($level.body_path."comment_chitietsanpham.php");
    }
    if($isCart==true){
        // require_once($level.head_path."head_cart.php");
        // require_once($level.head_path."header.php");
        require_once($level.head_path."head_index.php");
        require_once($level.head_path."header.php");
        require_once($level.body_path."GioHang_cart.php");
        require_once($level.api_path."add_to_cart.php");
        require_once($level.body_path."danhsachsanpham_cart.php");
    }
    if($isLienHe==true)
    {
        require_once($level.head_path."head_cart.php");
        require_once($level.head_path."header.php");
        require_once($level.body_path."map_lienhe.php");
        require_once($level.body_path."contact_lienhe.php");
    }
    if($isThongTin==true)
    {
        require_once($level.head_path."head_cart.php");
        require_once($level.head_path."header.php");
        require_once($level.body_path."banner_thongtin.php");
        require_once($level.body_path."section_thongtin.php");
        require_once($level.body_path."brand_thongtin.php");
    }
    if($isDangNhap==true){
        // require_once($level.head_path."head_cart.php");
        // require_once($level.head_path."header.php");
        require_once($level.head_path."head_index.php");
        require_once($level.head_path."header.php");
        require_once($level.api_path."dangnhap.php");
        require_once($level.body_path."dangnhap_content.php");
    }
    if($isDangKy==true){
        require_once($level.head_path."head_index.php");
        require_once($level.head_path."header.php");
        require_once($level.api_path."dangki.php");
        require_once($level.body_path."dangky_content.php");
    }
    if($isThongTinTK==true)
    {
        require_once($level.head_path."head_index.php");
        require_once($level.head_path."header.php");
        require_once($level.api_path."laythongtin.php");
        require_once($level.body_path."thongtintaikhoan_content.php");
    }
    require_once($level.footer_path."foot_index.php");
?>