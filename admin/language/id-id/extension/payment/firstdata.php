<?php
/**
 * File ini diterjemahkan secara manual oleh Aditya benhardi raintung dengan Penuh kesabaran & kasih sayang di Adelaide-South australia dan kadang-kadang di Melbourne-Victoria
 * Diterjemahkan khusus untuk untuk prooyo creative agency - https://prooyo.com
 * Prooyo adalah creative agency yang bergerak di bidang jasa marketing, digital Marketing atau internet marketing dan advertising
   Layanan kami seperti jasa pembuatan website perusahaan, jasa pembuatan toko online, jasa desain logo, jasa graphic design, pengelolaan website, jasa seo berkualitas dan jasa branding lengkap
 * Mohon jangan meng-upload ulang, copy, editing dan menyebarluaskan file tanpa izin dari prooyo creative agency
 * Jika anda membutuhkan izin untuk penyempurnaan file dan keperluan lainnya, mohon agar mengajukan permohonan anda terlebih dahulu melalui email hello@prooyo.com
 */
// Heading
$_['heading_title']					= 'First Data EMEA Connect (3DSecure enabled)';

// Text
$_['text_extension']			    = 'Metode pembayaran';
$_['text_success']			        = 'Berhasil: Perubahan pengaturan metode pembayaran First Data EMEA Connect yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                     = 'Ubah pengaturan';
$_['text_notification_url']			= 'URL notifikasi';
$_['text_live']						= 'Live (Aktif)';
$_['text_demo']						= 'Demo';
$_['text_enabled']					= 'Aktif';
$_['text_merchant_id']				= 'Store ID';
$_['text_secret']					= 'Shared secret';
$_['text_capture_ok']				= 'Capture was successful';
$_['text_capture_ok_order']			= 'Capture was successful, order status updated to success - settled';
$_['text_void_ok']					= 'Void was successful, order status updated to voided';
$_['text_settle_auto']				= 'Sale';
$_['text_settle_delayed']			= 'Pre auth';
$_['text_success_void']				= 'Transaction has been voided';
$_['text_success_capture']			= 'Transaction has been captured';
$_['text_firstdata']				= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment_info']				= 'Informasi pembayaran';
$_['text_capture_status']			= 'Payment captured';
$_['text_void_status']				= 'Payment voided';
$_['text_order_ref']				= 'Order ref';
$_['text_order_total']				= 'Total authorised';
$_['text_total_captured']			= 'Total captured';
$_['text_transactions']				= 'Transaksi';
$_['text_column_amount']			= 'Jumlah';
$_['text_column_type']				= 'Jenis';
$_['text_column_date_added']		= 'Tanggal ditambahkan';
$_['text_confirm_void']				= 'Are you sure you want to void the payment?';
$_['text_confirm_capture']			= 'Are you sure you want to capture the payment?';

// Entry
$_['entry_merchant_id']				= 'Store ID';
$_['entry_secret']					= 'Shared secret';
$_['entry_total']					= 'Total belanja min';
$_['entry_sort_order']				= 'No urut';
$_['entry_geo_zone']				= 'Kelompok wilayah';
$_['entry_status']					= 'Status';
$_['entry_debug']					= 'Debug logging';
$_['entry_live_demo']				= 'Mode percobaan';
$_['entry_auto_settle']				= 'Metode penyelesaian transaksi';
$_['entry_card_select']				= 'Pilih kartu';
$_['entry_tss_check']				= 'TSS checks';
$_['entry_live_url']				= 'URL koneksi Live (Aktif)';
$_['entry_demo_url']				= 'URL koneksi demo';
$_['entry_status_success_settled']	= 'Pembayaran berhasil dilakukan - Transaksi selesai(Lunas)';
$_['entry_status_success_unsettled'] = 'Pembayaran berhasil dilakukan - Transaksi belum selesai';
$_['entry_status_decline']			= 'Ditolak';
$_['entry_status_void']				= 'Dibatalkan';
$_['entry_enable_card_store']		= 'Token penyimpanan data kartu';

// Help
$_['help_live_demo']				= 'Pilih DEMO jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih LIVE jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_total']					= 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';
$_['help_notification']				= 'Anda harus memberikan URL ini pada pengaturan akun First data anda untuk mendapatkan notifikasi pembayaran.';
$_['help_debug']					= 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada permintaan khusus.';
$_['help_settle']					= 'Jika anda menggunakan pre-auth anda harus menyelesaikan tindakan/respon post-auth dalam waktu 3-5 hari atau transaksi akan dibatalkan.';

// Tab
$_['tab_account']					= 'Pengaturan API';
$_['tab_order_status']				= 'Status pesanan';
$_['tab_payment']					= 'Pengaturan pembayaran';
$_['tab_advanced']					= 'Pengaturan Advanced';

// Button
$_['button_capture']				= 'Capture';
$_['button_void']					= 'Void';

// Error
$_['error_merchant_id']				= 'Mohon maaf: Anda belum memasukan Store ID anda, atau Store ID yang anda masukan salah, mohon diperiksa kembali.';
$_['error_secret']					= 'Mohon maaf: Anda belum memasukan URL Shared secret anda, atau URL Shared secret yang anda masukan salah, mohon diperiksa kembali';
$_['error_live_url']				= 'Mohon maaf: Anda belum memasukan URL koneksi Live (Aktif), atau URL koneksi Live (Aktif) yang anda masukan salah, mohon diperiksa kembali';
$_['error_demo_url']				= 'Mohon maaf: Anda belum memasukan URL koneksi demo, atau URL koneksi demo yang anda masukan salah, mohon diperiksa kembali';
$_['error_data_missing']			= 'Mohon maaf: Terjadi kesalahan data';
$_['error_void_error']				= 'Unable to void transaction';
$_['error_capture_error']			= 'Unable to capture transaction';