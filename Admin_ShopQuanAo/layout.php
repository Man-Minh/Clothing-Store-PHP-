<?php

  if($p_login==false && $p_lockscreen==false)
  {
	   include (head_path.'Head.php');
  }
   else
  {
	  if($p_login==true || $p_lockscreen==true)
	  include ($level.head_path.'Head_PL.php');
  }
  //
  if($p_index==true || $p_thongke==true || $p_profile==true || $p_taikhoan==true  || $p_CtHoaDon==true ||  $p_KhachHang== true ||$p_qlSuasp==true
  || $p_qlSua_KhachHang==true ||$p_qlSua_Tk==true ||$p_qlSua_Hd==true || $p_qlDuyetDon == true) 
  {
	include (content_path.'Wrapper.php');
	include (content_path.'LEFT-SIDEBAR.php');
  }
 
  //index
  if($p_index==true)
  {
	include (main_path.'Main_index.php');
	include (content_path.'Script_index.php');
  }
  //tai khoan
  if($p_taikhoan==true)
  {
	  include ($level.main_path.'Main_Taikhoan.php');
  }
  //ql tai khoan
  if($p_qlSua_Tk==true)
  {
	  include ($level.main_path.'Main_QL_SuaTk.php');
  }
  //hoa don
   if($p_HoaDon==true)
  {
	  include ($level.main_path.'Main_QLHoaDon.php');
  }
  // sua hoa don
  if($p_qlSua_Hd==true)
  {
	  include ($level.main_path.'Main_QL_SuaHd.php');
  }
  // ct hoa don
  if($p_CtHoaDon==true)
  {
	  include ($level.main_path.'Main_CtHoaDon_detail.php');
  }
  //Thong ke
  if($p_thongke==true)
  {
	  include ($level.main_path.'Main_ThongKe.php');
  }
  //Profile
  if($p_profile==true)
  { 	
	include ($level.profile_path.'Main_1.php');
	include ($level.profile_path.'Main_2.php');
	include ($level.profile_path.'Script.php');
  }
  //Don hang
  if($p_donhang==true)
  {
	include ($level.dh_path.'Style.php');
	include ($level.dh_path.'Navbar.php');
	include ($level.content_path.'LEFT-SIDEBAR.php');
	include ($level.main_path.'Main_dh.php');
	include ($level.dh_path.'Script.php');
  } //QL Don hang
 
  //QLSP
  if($p_qlsp==true)
  { 	
	include ($level.content_path.'Style_sp.php');
	include ($level.content_path.'Wrapper.php');
	include ($level.content_path.'LEFT-SIDEBAR.php');
	include ($level.main_path.'Main_QLSP.php');
  }
  //QLSP
   if($p_qlSuasp==true)
  { 	
	include ($level.content_path.'Style_sp.php');
	include ($level.content_path.'Wrapper.php');
	include ($level.content_path.'LEFT-SIDEBAR.php');
	include ($level.main_path.'Main_QL_SuaSP.php');
  }
  //San pham
  if($p_sanpham==true)
  { 	
	include ($level.content_path.'Style_sp.php');
	include ($level.content_path.'Wrapper.php');
	include ($level.content_path.'LEFT-SIDEBAR.php');
	include ($level.main_path.'Main_SP.php');
  }
  //Khach hang
   if($p_KhachHang==true)
  {
	include ($level.content_path.'Style_sp.php');
	include ($level.content_path.'Wrapper.php');
	include ($level.content_path.'LEFT-SIDEBAR.php');
	include ($level.main_path.'Main_KhacHang.php');
  }
 //QL Sua khach hang
  if($p_qlSua_KhachHang==true)
  {
	 include ($level.content_path.'Style_sp.php');
	include ($level.content_path.'Wrapper.php');
	include ($level.content_path.'LEFT-SIDEBAR.php');
	include ($level.main_path.'Main_QL_SuaKH.php');
  }
  //Login
  if($p_login==true)
  { 	
	include ($level.content_path.'Wrapper_Login.php');
  }
  //LockScreen
  if($p_lockscreen==true)
  { 	
	include ($level.lock_path.'Wrapper.php');
  }
  // Duyet don
  if($p_qlDuyetDon == true)
  {
	include ($level.dh_path.'Style.php');
	include ($level.dh_path.'Navbar.php');
	include ($level.content_path.'LEFT-SIDEBAR.php');
	include ($level.main_path.'Main_QL_DuyetDon.php');
	include ($level.dh_path.'Script.php');
  }
  
?>