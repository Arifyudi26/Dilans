<?php 
    function get_notification($operation, $status) {
        $notification = "";
        $keterangan = "";

        if($status == 1) {
            $status = "berhasil";
            $keterangan = "Reload halaman list untuk melihat perubahan";
        }
        else {
            $status = "gagal";
            $keterangan = "Cek kembali pada form Anda";
        }

        switch($operation) {
            case "insert" : 
                $operation = "di simpan";
            break;
        
            case "update" : 
                $operation = "di ubah";
            break;		
        
            case "delete" : 
                $operation = "di hapus";
            break;

            case "suspend" : 
                $operation = "di suspend";
                $keterangan = "";
            break;
        
            case "approval" : 
                $operation = "di setujui";
            break;
        
            case 'cancel' : 
                $operation = 'dibatalkan';
            break;

            case 'no_count' : 
                $operation  = 'di simpan,';
                $keterangan = 'karena tidak ditemukan data pada List Item';
            break;

            case 'job_status' :
                $operation  = 'di ubah';
                $keterangan = 'karena dibatasi oleh privillage';
            break;

            case 'preference' :
                $operation  = '';
                $keterangan = 'Settingan preference belum lengakap, silahkan setting ulang';
            break;

            case 'coa' :
                $operation  = '';
                $keterangan = 'AccountNumber ini tidak terdaftar di company';
            break;
			
			case 'journal' :
                $operation  = '';
                $keterangan = 'Settingan preference belum lengakap, silahkan setting ulang';
            break;

            case 'reverse_transaksi' :
                $operation  = 'di reverse.';
                $keterangan = 'Karena sudah ada transaksi payment dengan no payment ';
            break;

            case 'not_approved' :
                $operation  = '';
                $keterangan = 'Masih ada transaksi yang belum di approved. Transaksi Number : ';
            break;

            case 'not_reconcile' :
                $operation  = '';
                $keterangan = 'Masih ada transaksi yang belum di reconcile. Transaksi Number : ';
            break;

            case 'month_interval' :
                $operation  = '';
                $keterangan = 'Karena interval bulan end period tidak sesuai';
            break;

            case 'month_lower' :
                $operation  = '';
                $keterangan = 'Karena bulan dan tahun end period tidak sesuai';
            break;

            case 'coa_diff_kurs' :
                $operation  = '';
                $keterangan = 'Maaf, coa selisih kurs akhir period tidak ditemukan';
            break;

            case 'master_currency' :
                $operation  = '';
                $keterangan = 'Karena Master Currency null';
            break;

            case 'coa_fail' :
                $operation  = 'di save';
                $keterangan = 'Karena Account Laba (Rugi) Penjualan Aktiva Tetap tidak ditemukan.';
            break;

            case 'already_in_period' :
                $operation  = '';
                $keterangan = 'Period End sudah dilakukan untuk Bulan dan Tahun yang dipilih';
            break;

            case 'period' :
                $operation  = 'di period end';
                $keterangan = 'Silahkan cek kembali semua transaksi.';
            break;

            case 'approved_transaksi' :
                $operation  = 'di approved';
                $keterangan = 'Karena transaksi piutang afiliasi belum di approved';
            break;

            case 'recalculate_coa' :
                $operation  = 'di period end';
                $keterangan = 'Kalkulasi ulang coa tidak balance. Mohon cek kembali coa ini : ';
            break;

            case 'reverse_in_period' :
                $operation  = 'di reversed';
                $keterangan = 'Karena transaksi bulan ini sudah di end period.';
            break;

            case 'JVB' :
                $operation  = 'di approved';
                $keterangan = 'Karena total payment + JVB lebih dari piutang. Mohon cek kembali.';
            break;

            case 'checking_approval' :
                $operation  = 'di approved';
                $keterangan = 'Transaksi ini sudah di suspend atau di approved. Halaman akan di reload.';
            break;

            case 'checking_suspend' :
                $operation  = 'di suspend';
                $keterangan = 'Transaksi ini sudah di suspend atau di approved. Halaman akan di reload.';
            break;

            case 'checking_update' :
                $operation  = 'di update';
                $keterangan = 'Transaksi ini sudah di suspend atau di approved. Halaman akan di reload.';
            break;

            case 'checking_reverse' :
                $operation  = 'di reversed';
                $keterangan = 'Transaksi ini sudah di reversed. Halaman akan di reload.';
            break;

            case 'checking_payment_save' :
                $operation  = 'di saved';
                $keterangan = 'Transaksi dengan payment period ini sudah ada. Halaman akan di reload.';
            break;

            case 'check_item' :
                $operation  = 'di saved';
                $keterangan = 'Item Code dan Vendor Code sudah terdaftar.';
            break;

            case 'check_status' :
                $operation  = 'di saved';
                $keterangan = 'Sudah ada Invoice untuk transaksi ini.';
            break;

            case 'check_no' :
                $operation  = 'di saved';
                $keterangan = 'Transaction Number sudah terdaftar.';
            break;

            case 'check_po' :
                $operation  = 'di approved';
                $keterangan = 'Transaction Purchase Order belum selesai.';
            break;

            case 'check_code' :
                $operation  = 'di saved';
                $keterangan = 'Code Item sudah terdaftar.';
            break;

            case 'check_warehouse' :
                $operation  = 'di saved';
                $keterangan = 'Default Warehouse tidak di temukan.';
            break;

            case 'job_level' :
                $operation  = 'di saved';
                $keterangan = 'Job Level sudah terdaftar.';
            break;
        
            case 'non_account' :
                $operation  = 'di Approved';
                $keterangan = 'AccountNumber tidak ditemukan.';
            break;

            case 'lower_date_cg' :
                $operation  = 'di Approved';
                $keterangan = 'Kurang dari tanggal efektif cek / giro.';
            break;

            case 'dep_lock' :
                $operation  = 'di Approved';
                $keterangan = 'Deposit Lock.';
            break;

            case 'lock' :
                $operation  = 'di Lock';
                $keterangan = '';
            break;

            case 'unlock' :
                $operation  = 'di UnLock';
                $keterangan = '';
            break;
        
            default : 
                $operation = "";
            break;	
        }

        $notification = "Data " . $status . ' '. $operation . '. ' . $keterangan;
        return $notification;
    }
	
    function get_notification_transaksi($transaction, $operation, $status, $no_transaction) {                
        $notification = '';
        $keterangan = '';

        if(is_int($status)){
            if($status == 0) {
                $status     		= 'gagal';
                $keterangan 		= 'Cek kembali pada form Anda';
				if($operation == 'insert'){
					$number_transaction = '';
				}
				else{
					$number_transaction = '';
				}
            }
            elseif($status == 1) {
                $status     		= 'berhasil';
                $keterangan 		= 'Menunggu approval dari atasan Anda';
				
				if($operation == 'insert'){
					$number_transaction = 'No Transaction anda . <br>'.$no_transaction.'.';
				}
				else{
					$number_transaction = '';
				}
            }
        }
        else{
            $status_info    = explode(',', $status);
            $status         = $status_info[0] . ' (' . $status_info[1] . ')';
        }

        switch($operation) {
            case 'insert' : 
                $operation = 'di simpan';
            break;
        
            case 'update' : 
                $operation = 'di ubah';
            break;		
        
            case 'delete' : 
                $operation = 'di hapus';
            break;

            case 'reverse' : 
                $operation = 'di reverse';
            break;

            case 'journal' :
                $operation  = '';
                $keterangan = 'Pengaturan Preference Journal Template belum lengkap.';                
            break;
                
            default : 
                $operation = '';
            break;	
        }
        
        $notification = $transaction . ' ' . $status . ' ' . $operation. '. ' . $keterangan. ', <br>'.$number_transaction;
        return $notification;
    }
	
	function get_notification_transaksi_master($transaction, $operation, $status) {                
        $notification = '';
        $keterangan = '';

        if(is_int($status)){
            if($status == 0) {
                $status     		= 'gagal';
                $keterangan 		= 'Cek kembali pada form Anda';
            }
            elseif($status == 1) {
                $status     		= 'berhasil';
                $keterangan 		= 'Menunggu approval dari atasan Anda';
            }
        }
        else{
            $status_info    = explode(',', $status);
            echo $status;
			$status         = $status_info[0] . ' (' . $status_info[1] . ')';
        }

        switch($operation) {
            case 'insert' : 
                $operation = 'di simpan';
            break;
        
            case 'update' : 
                $operation = 'di ubah';
            break;		
        
            case 'delete' : 
                $operation = 'di hapus';
            break;

            case 'journal' :
                $operation  = '';
                $keterangan = 'Pengaturan Preference Journal Template belum lengkap.';                
            break;
                
            default : 
                $operation = '';
            break;	
        }
        
        $notification = $transaction . ' ' . $status . ' ' . $operation. '. ' . $keterangan;
        return $notification;
    }
	
	function msg_reverse_sq($msg_data, $operation, $transaksi){
		switch($msg_data) {
            case 'msg_do' : 
                $msg_return = ''.$transaksi.' tidak bisa di Reverse karena masih ada '.$operation.' yang menggunakan '.$transaksi.' ini, silahkan Suspend '.$operation.' Tersebut.';
            break;
			
			case 'msg_so' : 
                $msg_return = ''.$transaksi.' tidak bisa di Reverse karena masih ada '.$operation.' yang menggunakan '.$transaksi.' ini, silahkan Suspend '.$operation.' Tersebut.';
            break;
        }
        return $msg_return;
	}
	
	function msg_confirmation_blok($msg_data, $operation, $transaksi){
		switch($msg_data) {
            case 'msg_do_direct' : 
                $msg_return = 'Maaf transaksi '.$operation.' gagal, no po ' .$transaksi. ' belum dibuat silahkan buat terlebih dahulu';
            break;
			case 'msg_sales_recip' : 
                $msg_return = 'Maaf transaksi '.$operation.' gagal, no Sales Receipts ' .$transaksi. ' Invoice sudah lunas';
            break;
        }
        return $msg_return;
	}
	
	 function get_notification_preference($operation, $status, $AccounName, $Currency) {
        $notification 	= "";
        $keterangan 	= "";
        $status 		= "gagal";
		
        switch($operation) {
			case 'journal' :
                $operation  = '';
                $keterangan = 'Akun belum tersedia di COA, dengan akun '.$AccounName.' dan currency ('.$Currency.'), silahkan seting kembali';
            break;
			case 'preference' :
                $operation  = '';
                $keterangan = 'Akun belum tersedia di Preference, dengan akun '.$AccounName.', silahkan seting kembali di Preference';
            break;
        }

        $notification = "Data " . $status . ' '. $operation . '. ' . $keterangan;
        return $notification;
    }
?>