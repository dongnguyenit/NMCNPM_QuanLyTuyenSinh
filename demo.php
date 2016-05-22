<html>
      <head>
	  <title> Demo Website </title>
	  </head>
	  <body>
	  Bạn đang xem web 
	  <?php
	  class User 
      {
        private        $arr_user; // = array ;
        private        $arr_password;// = array;
        private        $arr_true_false;// = array;
        function DangNhap  ($user, $pass  )
        {
            //
            return true;
            //
            return false;
        }
        function DangXuat ($user, $pass)
       {
             //
            return true;
            //
            return false;
       }       
        
      }    
      class sinhvien
      {
        // thuoc tinh nhu file bao cao
        // ham nhu file bao cao
        
      }
      class NhanVien
      {
        // thuoc tinh nhu file bao cao
        function DangNhap ()
        {
            $User = new User();
            // nhan du lieu user va pass truyen vao $use_d, $pass_d
            $use_d; $pass_d;
            $User->DangNhap($use_d,$pass_d);
            
        }
        // khi click dang xuat
        function DangXuat()
        {
            $User = new User();
            // nhan du lieu user va pass truyen vao $use, $pass
             $use_d; $pass_d;
            $User->DangXuat($user_d,$pass_d);
        }
      }
      class NVNhapXuat extends NhanVien
      {
        
      }
      class NVNhapDiem extends NhanVien
      {
        
      }
      class NVTuVan extends NhanVien
      {
        
      }
      class NVQuanLy extends NhanVien
      {
        
      }
      // cac class xu ly database http://freetuts.net/class-xu-ly-database-trong-huong-doi-tuong-phan-1-188.html
	   ?>
    
	  </body>
</html>