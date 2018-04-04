<?php
    header("content-type:text/html;charset=\"UTF-8\"");//设置包信息
	require('phpmailer.class.php');
	require('class.smtp.php');
	
	//开始调用发送邮件类
	$mail = new PHPMailer();//实例化
	$mail->IsSMTP(); //开启SMTP邮件协议
	$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码 
	$mail->SMTPAuth = true; //开启认证 
	$mail->Port = 25; //端口号
	$mail->Host = "smtp.163.com"; //代发邮件的服务器（腾讯）
	$mail->Username = "13632953647@163.com";//发送邮件的账号
	$mail->Password = "Pl18771567717"; //生成的授权码或者密码用于登录(此为授权码，不能登录的！)
	$mail->AddReplyTo("13632953647@163.com","猜猜我是谁");//回复地址
	$mail->From = "13632953647@163.com"; //来自地址
	$mail->FromName = "你的朋友"; //名称
	$to = '15658858446@163.com';//收件人邮箱地址（可以改为自己的邮箱测试，！！
                               //注意：尽可能别使用QQ邮箱，屏蔽比较严重，使用163，sina,126等邮箱）
	$mail->AddAddress($to); 
	$mail->Subject = "来自好友的问候！";
	$mailcontent='<h1 style="color:red;">什么时候有时间，一起出去玩耍可好。</h1>';//邮件正文
	$mail->Body = $mailcontent; 
	$mail->AltBody = "提示邮件，请勿回复！"; //当邮件不支持html时备用显示，可以省略 
	$mail->WordWrap = 80; // 设置每行字符串的长度
	$mail->AddAttachment("013.JPG"); //可以添加附件
	$mail->IsHTML(true);

//	$mail->Send();//发送
     echo '<br/>';

    if(!$mail->Send()){
        echo "Message could not be sent. <p>";
        echo "Mailer Error: ".$mail->ErrorInfo;//提示错误的原因
        echo '<h1>如果出现问题，可以参考此文档</h1>';
        echo '<a style="color: red" href="https://blog.csdn.net/haiqiao_2010/article/details/8557211">点击查看</a>';
        exit();
    } else {
        echo "Message has been sent";
    };

 
?>


