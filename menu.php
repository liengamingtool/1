<?php
$do="\033[1;31m";
$xanh="\033[1;32m";
$vang="\033[1;33m";
$tim="\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$xnhac = "\033[1;36m";
$xam = "\033[1;38m";
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$thu = date("l"); 

function logo($menu)
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
        for($i = 0; $i < strlen($menu); $i++){
            echo $menu[$i];
            usleep(1000);
        }
    } else { 
        @system('cls'); 
        echo $logo;
    }
}
$thu = strtolower($thu);switch($thu) { case 'monday': $thu = "$xanh Thứ $vang 2"; break; case 'tuesday': $thu= "$xanh Thứ $vang 3"; break; case 'wednesday': $thu = "$xanh Thứ $vang 4"; break; case 'thursday': $thu= "Thứ 5"; break; case 'friday': $thu= "$xanh Thứ $vang 6"; break; case 'saturday': $thu = "$xanh Thứ $vang 7"; break; default: $thu = "$vang CN"; break; }
date_default_timezone_set("Asia/Ho_Chi_Minh");
$dau = $do."[".$xanh."•ᴗ•".$do."]".$trang." => ";
$dau1 = $do."[".$xanh."LGM".$do."]".$trang." => ";
$ad = $do."[".$xanh."MENU".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$menu = "\033[1;32m    
     ░ ░░ \033[1;92m  ░ ▒░  ░ 
        ░      ░
       ░ ░░   ░ \033[1;34m▒░  ░ ░░  ░▒ ░
    ░   ░  ░░
      \033[1;92m ░  ░   \033[1;36m ░▒ ░ ░ ▒░   ▒ 
\033[1;31m   ██   ██   \033[1;92m███████   ███       ██                 
\033[1;92m   ██   \e[38;5;208m     ██        ██ ██     ██ 
\033[1;36m   ██   ██   █████     ██ \033[1;91m  ██   ██
\033[1;95m   ██   ██   ██        ██     ██ ██   
\033[1;33m   ███████  \033[1;92m ███████   ██       ███ 
    ░ ▒░  \033[1;92m ▒ ▒   ░ ▐ \033[1;36m░  ▒▓▒░ ░  ░
       ░ ░░ \033[1;95m  ░ ▒░  ░ \033[1;91m ░░  ░▒ ░ ░ 
       ░ ░░   ░ ▒ \e[38;5;208m░  ░ ░░  ░▒ ░
   \033[1;32m[\033[1;31mBY CODE\033[1;31m\033[1;32m]\033[1;35mLIÊN GAMING\n\n
 $ad $do BẢN QUYỀN:$xanh LIÊN GAMING
 $ad $xanh FACEBOOK:$vang Liên Hack Gaming
 $ad $hong BOX MESSENGER: https://m.me/j/AbZThdaxTxmjs4wY/
 $ad $vang TIKTOK:$xnhac
 $ad $xanh HÔM NAY:$xanh $ngay $do /$xanh $thang $do/$xanh $nam $do/$thu
  $thanhngang\n\n";
  logo($menu);
echo"\033[1;32m
     ╔════════════════════════╗
\033[1;32m     ║        \033[1;36mMENU TOOL    \033[1;32m   ║
\033[1;32m     ╚════════════════════════╝\n";
   echo "$xanh MÌNH THẤT BẠI RỒI \n";
   echo "$hong MỌI NGƯỜI VÀO NHÓM message để Mình tạo riêng cho mọi người bản theo tên của mọi người nha \n";
   echo " $xanh link nhóm:  https://m.me/j/AbZThdaxTxmjs4wY/ \n";






