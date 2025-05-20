
<?php
ob_start();
$token = "412836977:AAHCpOpPrj2QCUPazK_edgicOSh7wISwg3w"; #توكنك 
define('API_KEY',$token);
$admin ="6421671483"; #ايديك 
#--------( انزل لحد بداية البوت عدل كم حاجه  )---------#
//--------------------الفانكشن والمتغيرات----------------------//
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$usernamek= $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$to =  file_get_contents("webhook/$from_id/tokens.txt");
$url =file_get_contents("webhook/$from_id/url.txt");
mkdir("webhook");
$SR=file_get_contents("https://api.telegram.org/bot$text/getwebhookinfo");
$get = file_get_contents("https://api.telegram.org/bot$text/getme"); 
$mr= json_decode($get);
$mt = $mr->result;
$username = $mt->username;
$user = $mt->first_name;
$id = $mt->id;
$ho=json_decode($SR);
$gf=$ho->result;
$urlo=$gf->url;
#--------( لوحة الادمن )---------#
$MROAN = file_get_contents("MROAN.txt");
$MROAN0 = file_get_contents("MROAN0.txt");
$MROAN1= file_get_contents("MROAN1.txt");
$MROAN5 = file_get_contents("MROAN2.txt");
$MROAN6 = file_get_contents("MROAN3.txt");
$MROAN20 = json_decode(file_get_contents('php://input'));
$MROAN18 = $update->message;
$MROAN13 = $MROAN18->chat->id;
$MROAN17 = $MROAN18->text;
$meme = $MROAN20->callback_query->data;
$MROAN12 = $MROAN20->callback_query->message->chat->id;
$MROAN14 =  $MROAN20->callback_query->message->message_id;
$MROAN15 = $MROAN18->from->first_name;
$MROAN16 = $MROAN18->from->username;
$MROAN11 = $MROAN18->from->id;
$MROAN2 = explode("\n",file_get_contents("MROAN4.txt"));
$MROAN3 = count($MROAN2)-1;
if ($MROAN18 && !in_array($MROAN11, $MROAN2)) {
    file_put_contents("MROAN4.txt", $MROAN11."\n",FILE_APPEND);
  }
$MROAN9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN0&user_id=".$MROAN11);
$MROAN10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN1&user_id=".$MROAN11);
if($MROAN18 && (strpos($MROAN9,'"status":"left"') or strpos($MROAN9,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN9,'"status":"kicked"') or strpos($MROAN10,'"status":"left"') or strpos($MROAN10,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MROAN13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$MROAN0.'
'.$MROAN1,
]);return false;}
if($MROAN17 == "/admin" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
}
if($meme == "MROAN" ){
bot('EditMessageText',[
'chat_id'=>$MROAN12,
'message_id'=>$MROAN14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN0"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@RRR6ZZZ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN0");
}
if($MROAN17 and $MROAN == "MROAN0" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN0.txt","$MROAN17");
unlink("MROAN.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN1'],
]    
]])
]);    
}
if($meme == "MROAN1"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN0.txt");
}
if($meme == "MROAN2"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@RRR6ZZZ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN1");
}
if($MROAN17 and $MROAN == "MROAN1" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN1.txt","$MROAN17");
unlink("MROAN.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN3'],
]    
]])
]);    
}
if($meme == "MROAN3"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN1.txt");
}
if($meme == "MROAN4"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $MROAN0 📢 
- القناة الثانية ،  $MROAN1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN5"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $MROAN3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN2");
}
if($MROAN18 and $MROAN == "MROAN2" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('forwardMessage', [
'chat_id'=>$MROAN2[$i],
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
unlink("MROAN.txt");
}
}
if($meme == "MROAN6"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $MROAN3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN3");
}
if($MROAN17 and $MROAN == "MROAN3" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('sendMessage', [
'chat_id'=>$MROAN2[$i],
'text'=>$MROAN17
]);
unlink("MROAN.txt");
}
}
if($meme == "MROAN7"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- عدد مشتركين البوت  [ $MROAN3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN9"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN2.txt","MROAN");
}
if($MROAN17 == "/start" and $MROAN5 == "MROAN" and $MROAN11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$MROAN15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$MROAN16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$MROAN11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $MROAN3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "MROAN10"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN2.txt");
}
if($meme == "MROAN11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN3.txt","MROAN");
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 == $admin){
bot('sendMessage',[
'chat_id'=>$MROAN18->reply_to_message->forward_from->id,
    'text'=>$MROAN17,
    ]);
}
if($meme == "MROAN12"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN3.txt");
}
#--------( بداية البوت  )---------#
$update = json_decode(file_get_contents('php://input'));

if (isset($update->message)) {
    $message = $update->message;
    $chat_id = $message->chat->id;
    $text = $message->text;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
} elseif (isset($update->callback_query)) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->from->first_name;
}

$boti = bot('getme',['bot'])->result->username;
#--------( نص قسم العربية )---------#
$artext = "*د-----------------------------------------------------------------------------د
• اهـلا بـك عـزيـزي $name 
• ارسل رسالتك الان لكي يتم ارسالها الى مدير البوت
•  وسوف يرد عليك باقرب وقت 📢
د-----------------------------------------------------------------------------د*";
#--------( نص قسم الانجليزيه  )---------#
$enText = "*--------------------------------------------------------------------------------
• ᴡᴇʟᴄᴏᴍᴇ, ᴅᴇᴀʀ $name ,
• ꜱᴇɴᴅ ʏᴏᴜʀ ᴍᴇꜳᴀɡᴇ ɴᴏᴡ ᴛᴏ ʙᴇ ꜱᴇɴᴛ ᴛᴏ ᴛʜᴇ ʙᴏᴛ ᴍᴀɴᴀɢᴇʀ ᴀɴᴅ ʜᴇ ᴡɪʟʟ ʀᴇꜱᴘᴏɴᴅ ᴛᴏ ʏᴏᴜ ᴀꜱ ꜱᴏᴏɴ ᴀꜱ ᴘᴏꜱꜱɪʙʟᴇ 📢
--------------------------------------------------------------------------------*";
#--------( امر البدايه )---------#
if (isset($text) && $text == "/start") {
    $bo = [
        'inline_keyboard' => [
            [['text' => '• حساباتي •', 'callback_data' => "acmy"]],
            [['text' => '• قنواتي •', 'callback_data' => "chmy"],
            ['text' => '• بوتاتي •', 'callback_data' => "botsmy"]],
            [['text' => 'English 🇺🇸', 'callback_data' => "english"]],
        ]
    ];
    $reply_markup = json_encode($bo);

    $ph = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getUserProfilePhotos?user_id=" . $from_id . "&limit=1"))->result->photos[0][0]->file_id;

    bot('sendPhoto', [
        'chat_id' => $chat_id,
        'photo' => $ph,
        'caption' => $artext,
        'parse_mode' => 'markdown',
        'reply_markup' => $reply_markup
    ]);
}
#--------( قسم زر الانجليزي )---------#
if (isset($data) && $data == "english") {
    $bo = [
        'inline_keyboard' => [
            [['text' => '• MY ACCOUNTS •', 'callback_data' => "acmy"]],
            [['text' => '• MY CHANNELS •', 'callback_data' => "chmy" ],
            ['text' => '• MY BOTS •', 'callback_data' => "botsmy"]],
            [['text' => ' العربية 🇸🇾', 'callback_data' => "arabic"]],
        ]
    ];
    $reply_markup = json_encode($bo);

    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => $enText,
        'reply_markup' => $reply_markup,
        'parse_mode' => 'markdown'
    ]);
}
#--------( اقسم زر العربي)---------#
if (isset($data) && $data == "arabic") {
    $bo = [
        'inline_keyboard' => [
            [['text' => '• حساباتي •', 'callback_data' => "acmy"]],
            [['text' => '• قنواتي •', 'callback_data' => "chmy"],
            ['text' => '• بوتاتي •', 'callback_data' => "botsmy"]],
            [['text' => 'English 🇺🇸', 'callback_data' => "english"]],
        ]
    ];
    $reply_markup = json_encode($bo);

    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => $artext,
        'reply_markup' => $reply_markup,
        'parse_mode' => 'markdown'
    ]);
}
#--------( قسم زر القنوات )---------#
if (isset($data) && $data == "chmy") {
#--------( عدل يوزرات القنوات و فينك تحذف يوزر عادي بينقص زر  )---------#
    $channels = [
        '@VIPCODE5',
        '@VIPCODE4',
        '@VIPCODE3',
        '@VIPCODE6',
        '@mt_4_4',
    ];

    $bo = ['inline_keyboard' => []];
    $row = [];
    $buttonsPerRow = 2;
    $buttonCount = 0;

    foreach ($channels as $channel) {
        $ch_info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=" . $channel), true);

        if ($ch_info && isset($ch_info['result']['title'])) {
            $ch_name = $ch_info['result']['title'];
        } else {
            $ch_name = '• قناتي •';
            error_log("Error getting channel info for: $channel");
        }

        $row[] = [
            'text' => $ch_name,
            'url' => 'https://t.me/' . ltrim($channel, '@')
        ];
        $buttonCount++;

        if ($buttonCount == $buttonsPerRow) {
            $bo['inline_keyboard'][] = $row;
            $row = [];
            $buttonCount = 0;
            $buttonsPerRow = ($buttonsPerRow == 2) ? 1 : 2; 
        }
    }

    if (!empty($row)) {
        $bo['inline_keyboard'][] = $row;
    }

    $bo['inline_keyboard'][] = [['text' => '• رجوع •', 'callback_data' => "back"]];

    $reply_markup = json_encode($bo);

    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => "⌯ ⁞ اهـلا بـك عـزيـزي الـمـسـتـخـدم هـذه قـائـمـة قـنـواتـي :",
        'reply_markup' => $reply_markup,
        'parse_mode' => 'markdown'
    ]);
}
#--------( قسم الحسابات )---------#
if (isset($data) && $data == "acmy") {
#--------( عدل الاسماء و اليوزرات  )---------#
    $accounts = [
        ['username' => '@B_Y_B_Y', 'name' => '『 زيِٰـِۢـڪِٰــِۢﯛرآ !🥀🎼 ، ⇣ 』'],
        ['username' => '@P_X_P_X', 'name' => '『 زيِٰـِۢـڪِٰــِۢﯛ !🥀🎼 ، ⇣ 』'],
        ['username' => '@B_N_B_N', 'name' => '『 مڪسوࢪ !🥀🎼 ، ⇣ 』'],
        
    ];

    $bo = ['inline_keyboard' => []];
    $row = [];
    foreach ($accounts as $account) {
        $row[] = [
            'text' => $account['name'],
            'url' => 'https://t.me/' . ltrim($account['username'], '@')
        ];

        if (count($row) == 2) {
            $bo['inline_keyboard'][] = $row;
            $row = [];
        }
    }
    if (!empty($row)) {
        $bo['inline_keyboard'][] = $row;
    }
    $bo['inline_keyboard'][] = [['text' => '• رجوع •', 'callback_data' => "back"]];

    $markup = json_encode($bo);

    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => "⌯ ⁞ اهـلا بـك عـزيـزي الـمـسـتـخـدم هـذه قـائـمـة حسـابـاتي الشـخصـية:",
        'reply_markup' => $markup,
        'parse_mode' => 'markdown'
    ]);
}
#--------( قسم البوتات  )---------#
if (isset($data) && $data == "botsmy") {
#--------( يوزرات بوتاتك )---------#
    $bot1 = '@ZECOVO1NBot'; 
    $bot2 = '@ZECOFONBot';  
    $bot3 = '@ZECOVONBot';  
    $bot4 = '@VIPCODE3_Bot'; 
    $bot5 = '@Em_elbot';     
    $bot6 = '@Cevirmek_bot'; 
    $bot7 = '@VVVOOO_Bot'; 
#--------( عدل اسم كل بوت  )---------#
#--------( فينك تحذف زر )---------#
    $bo = [
        'inline_keyboard' => [
            [['text' => 'تـفـاعـل 👍 | VC', 'url' => 'https://t.me/' . ltrim($bot1, '@')],
             ['text' => 'تـفـاعـل ❤️ | VC', 'url' => 'https://t.me/' . ltrim($bot2, '@')]],
            [['text' => 'تـفـاعـل 🔥 | VC', 'url' => 'https://t.me/' . ltrim($bot3, '@')]],
            [['text' => 'بريد وهمي | VC', 'url' => 'https://t.me/' . ltrim($bot4, '@')],
             ['text' => 'كشف الايدي | VC', 'url' => 'https://t.me/' . ltrim($bot5, '@')]],
            [['text' => 'ويب هوك | VC', 'url' => 'https://t.me/' . ltrim($bot6, '@')]],
            [['text' => 'حماية قنوات | VC', 'url' => 'https://t.me/' . ltrim($bot7, '@')]],
            [['text' => '• رجوع •', 'callback_data' => "back"]],
        ]
    ];

    $reply_markup = json_encode($bo);

    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => "⌯ ⁞ اهـلا بـك عـزيـزي الـمـسـتـخـدم هـذه قـائـمـة بـوتـاتـي :",
        'reply_markup' => $reply_markup,
        'parse_mode' => 'markdown'
    ]);
}
#--------( زر الرجوع )---------#
if (isset($data) && $data == "back") {
    $bo = [
        'inline_keyboard' => [
            [['text' => '• حساباتي •', 'callback_data' => "acmy"]],
            [['text' => '• قنواتي •', 'callback_data' => "chmy"],
             ['text' => '• بوتاتي •', 'callback_data' => "botsmy"]],
            [['text' => 'English 🇺🇸', 'callback_data' => "english"]],
        ]
    ];
    $reply_markup = json_encode($bo);

    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => $artext,
        'parse_mode' => 'markdown',
        'reply_markup' => $reply_markup
    ]);
}
mkdir("mid");

if ($text === $text && $chat_id <> $admin) { 
#--------(قائمه بالكلمات المحظوره )---------#
#--------( كل ما تضيف امر ضيفه هون كمان )---------#
    $zeze1 = [
        "/start", "/stat", "/game"
    ];
#--------( قائمه بالازرار الممنوعة)---------#
#--------( كل ما تضيف زر ضيف الداتا تبع الزر هون كمان  )---------#
    $zeze2 = [ 
        "arb", "qkar", "qkar1", "qkar2", "qkar3", "qkar4", "qkar5", "qkar11", 
        "qkar111", "qkar22", "qkar222", "qkar33", "qkar333", "qkar44", "qkar444", "qkar55", "qkar555", 
        "qjar", "qaar", "qjar11", "qjar111", "qjar22", "qjar222", "qjar33", "qjar333", "qjar44", "qjar444", 
        "qjar55", "qjar555", "qaar11", "qaar111", "qaar22", "qaar222", "qaar33", "qaar333", "qaar44", 
        "qaar444", "qaar55", "qaar555", "qaar1", "qaar2", "qaar3", "qaar4", "qaar5", "qjar1", "qjar2", 
        "qjar3", "qjar4", "qjar5", "eng", "qken", "qken1", "qken2", "qken3", "qken4", "qken5", "qken11", 
        "qken111", "qken22", "qken222", "qken33", "qken333", "qken44", "qken444", "qken55", "qken555", 
        "qjen", "qaen", "qjen11", "qjen111", "qjen22", "qjen222", "qjen33", "qjen333", "qjen44", 
        "qjen444", "qjen55", "qjen555", "qaen11", "qaen111", "qaen22", "qaen222", "qaen33", "qaen333", 
        "qaen44", "qaen444", "qaen55", "qaen555", "qaen1", "qaen2", "qaen3", "qaen4", "qaen5", 
        "qjen1", "qjen2", "qjen3", "qjen4", "qjen5", "arabic", "english" ,"botsmy", "chmy" , "acmy" , "back"
    ];
#--------( لا ينفذ لا ينفذ اي عمليه اذا كان من القائمه من الاعلى)---------#
    if (in_array($text, $zeze1) || in_array($data, $zeze2)) {
    } else {
        $mid5 = bot('ForwardMessage', [
            'chat_id' => $admin,
            'from_chat_id' => $chat_id,
            'message_id' => $message->message_id,
        ])->result->message_id;

        $mid = $message->message_id;
        file_put_contents("mid/$mid5.txt", "$chat_id|$mid");
        
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'reply_to_message_id' => $mid,
            'text' => "<b>---------------------------------------------------------------------
O● تـم ارسـال رسـالتك سـيـتـم رد عـلـيـك فـي اقـرب وقـت ●O
---------------------------------------------------------------------
                O● ʏᴏᴜ ᴡɪʟʟ ʙᴇ ᴀɴꜱᴡᴇʀᴇᴅ ꜱᴏᴏɴ ●O
---------------------------------------------------------------------</b>",
            'parse_mode' => 'html',
            'reply_markup' => $main_menu,
        ]);
    }
}
if($message->reply_to_message->message_id and $user_id == $admin){
$rchid=$message->reply_to_message->message_id;
$chid=file_get_contents("mid/$rchid.txt");
$ex=explode ("|",$chid);
    bot('SendMessage',[
       'chat_id'=>$ex[0],
        'text'=>"<b>$text</b>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
    ]);
    bot('SendMessage',[
       'chat_id'=> $admin,
       'reply_to_message_id'=>$mid,
        'text'=> "<b>-------------------------------------------------------------------
          O● لقد تم إرسال رسالتك 💬 إلى المستخدم ●O
-------------------------------------------------------------------
O● ʏᴏᴜʀ ᴍᴇꜱꜱᴀɢᴇ ʜᴀꜱ ʙᴇᴇɴ ꜱᴇɴᴛ ᴛᴏ ᴛʜᴇ ᴜꜱᴇʀ ●O
-------------------------------------------------------------------</b>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}
#-------------------آلبـಿـديهہ حقـಿـ آلعبـಿـهہ  -------------------#
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
$message = $update->message;
$from_id = $update->callback_query->from->id;
$from_id = $message->from->id;
$name = $message->from->first_name;

$text_start_bot = "⭐🇮🇶 اهلا بك عزيزي ( $name ) في قسم الأسئلة القصيرة اختر لغتك الان :

⭐🏴󠁧󠁢󠁥󠁮󠁧󠁿 Welcome, dear ($name), to the short questions bot. Choose your language now:";

if (isset($update->callback_query)) {
    $up = $update->callback_query;
    $chat_id = $up->message->chat->id;
    $from_id = $up->from->id;
    $user = $up->from->username;
    $text = $up->message->text;
    $name = $up->from->first_name;
    $message_id = $up->message->message_id;
    $data = $up->data;
}

$BotDatabase = json_decode(file_get_contents("DataBaseBot.json"), 1);

if ($data == "arb" || $data == "qkar" || $data == "qkar1" || $data == "qkar2" || $data == "qkar3" || $data == "qkar4" || $data == "qkar5" || $data == "qkar11" || $data == "qkar111" || $data == "qkar22" || $data == "qkar222" || $data == "qkar33" || $data == "qkar333" || $data == "qkar44" || $data == "qkar444" || $data == "qkar55" || $data == "qkar555" || $data == "qjar" || $data == "qaar" || $data == "qjar11" || $data == "qjar111" || $data == "qjar22" || $data == "qjar222" || $data == "qjar33" || $data == "qjar333" || $data == "qjar44" || $data == "qjar444" || $data == "qjar55" || $data == "qjar555" || $data == "qaar11" || $data == "qaar111" || $data == "qaar22" || $data == "qaar222" || $data == "qaar33" || $data == "qaar333" || $data == "qaar44" || $data == "qaar444" || $data == "qaar55" || $data == "qaar555" || $data == "qaar1" || $data == "qaar2" || $data == "qaar3" || $data == "qaar4" || $data == "qaar5" || $data == "qjar1" || $data == "qjar2" || $data == "qjar3" || $data == "qjar4" || $data == "qjar5" ||$data == "eng" || $data == "qken" || $data == "qken1" || $data == "qken2" || $data == "qken3" || $data == "qken4" || $data == "qken5" || $data == "qken11" || $data == "qken111" || $data == "qken22" || $data == "qken222" || $data == "qken33" || $data == "qken333" || $data == "qken44" || $data == "qken444" || $data == "qken55" || $data == "qken555" || $data == "qjen" || $data == "qaen" || $data == "qjen11" || $data == "qjen111" || $data == "qjen22" || $data == "qjen222" || $data == "qjen33" || $data == "qjen333" || $data == "qjen44" || $data == "qjen444" || $data == "qjen55" || $data == "qjen555" || $data == "qaen11" || $data == "qaen111" || $data == "qaen22" || $data == "qaen222" || $data == "qaen33" || $data == "qaen333" || $data == "qaen44" || $data == "qaen444" || $data == "qaen55" || $data == "qaen555" || $data == "qaen1" || $data == "qaen2" || $data == "qaen3" || $data == "qaen4" || $data == "qaen5" || $data == "qjen1" || $data == "qjen2" || $data == "qjen3" || $data == "qjen4" || $data == "qjen5") {
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
    ]);
}


if ($text == "/game") {
    bot('sendMessage',[
        'chat_id' => $chat_id,
        'text' => $text_start_bot,
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'العربية 🇮🇶', 'callback_data' => "arb"]],
                [['text' => 'english 🏴󠁧󠁢󠁥󠁮󠁧󠁿', 'callback_data' => "eng"]],
            ]
        ])
    ]);
}

if ($data == "arb") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اهلا بك عزيزي في بوت الأسئلة اختر نوع الأسئلة 🎛️😄",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اسئلة كرة قدم ⚽', 'callback_data' => "qkar"]],
                [['text' => 'اسئلة جغرافية 🗺️', 'callback_data' => "qjar"]],
                [['text' => 'اسئلة اسلامية 🕋', 'callback_data' => "qaar"]],
            ]
        ])
    ]);
}


if ($data == "qkar") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س1/ من الفائز في دوري ابطال اوربا سنة 2012 ؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'تشلسي', 'callback_data' => "qkar1"]],
                [['text' => 'ريال مدريد', 'callback_data' => "qkar11"]],
                [['text' => 'النجمة الحمراء', 'callback_data' => "qkar111"]],
            ]
        ])
    ]);
}


if ($data == "qkar11") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar1"]],
            ]
        ])
    ]);
}


if ($data == "qkar111") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar1"]],
            ]
        ])
    ]);
}


if ($data == "qkar1") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س2/من أخذ جائزة نادي القرن ؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اياكس', 'callback_data' => "qkar22"]],
                [['text' => 'ريال مدريد', 'callback_data' => "qkar2"]],
                [['text' => 'ليفربول', 'callback_data' => "qkar222"]],
            ]
        ])
    ]);
}

if ($data == "qkar22") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar1"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar2"]],
            ]
        ])
    ]);
}


if ($data == "qkar222") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar1"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar2"]],
            ]
        ])
    ]);
}


if ($data == "qkar2") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س3/من الفائز بالدوري الإيطالي سنة 2000/2001 ؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'يوڤينتوس', 'callback_data' => "qkar333"]],
                [['text' => 'ميلان', 'callback_data' => "qkar33"]],
                [['text' => 'روما', 'callback_data' => "qkar3"]],
            ]
        ])
    ]);
}

if ($data == "qkar33") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar2"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar3"]],
            ]
        ])
    ]);
}


if ($data == "qkar333") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar2"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar3"]],
            ]
        ])
    ]);
}


if ($data == "qkar3") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س4/ من افضل فريق في الدوري التركي الممتاز ؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'عنتاب', 'callback_data' => "qkar44"]],
                [['text' => 'غلطة سراي', 'callback_data' => "qkar4"]],
                [['text' => 'بشيكتاش', 'callback_data' => "qkar444"]],
            ]
        ])
    ]);
}

if ($data == "qkar44") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar3"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar4"]],
            ]
        ])
    ]);
}


if ($data == "qkar444") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qkar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qkar3"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qkar4"]],
            ]
        ])
    ]);
}


if ($data == "qkar4") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س5/ من افضل لاعب في العالم ؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رونالدو', 'callback_data' => "qkar5"]],
                [['text' => 'ميسي', 'callback_data' => "qkar5"]],
            ]
        ])
    ]);
}


if ($data == "qkar5") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك صحيحة ⚽

تم اكتمال الأسئلة 💠",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "arb"]],
            ]
        ])
    ]);
}




if ($data == "qjar") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س1/ ما هي أطول نهر في العالم؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'نهر النيل', 'callback_data' => "qjar1"]],
                [['text' => 'نهر الامازون', 'callback_data' => "qjar11"]],
                [['text' => 'نهر دجلة', 'callback_data' => "qjar111"]],
            ]
        ])
    ]);
}


if ($data == "qjar1") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س2/ما هو أكبر بحر في العالم من حيث المساحة؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'بحر البلطيق', 'callback_data' => "qjar22"]],
                [['text' => 'بحر الكاريبي', 'callback_data' => "qjar222"]],
                [['text' => 'بحر الصين الشرقي', 'callback_data' => "qjar2"]],
            ]
        ])
    ]);
}


if ($data == "qjar2") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س3/ما هي الدولة التي تشترك في قارتين؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'الكويت', 'callback_data' => "qjar333"]],
                [['text' => 'العراق', 'callback_data' => "qjar33"]],
                [['text' => 'روسيا', 'callback_data' => "qjar3"]],
            ]
        ])
    ]);
}


if ($data == "qjar3") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س4/ما هي عاصمة الصين؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'شنغهاي', 'callback_data' => "qjar44"]],
                [['text' => 'بكين', 'callback_data' => "qjar4"]],
                [['text' => 'تيانجين', 'callback_data' => "qjar444"]],
            ]
        ])
    ]);
}


if ($data == "qjar4") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س5/ أي دولة تقع جزئياً في كل من أوروبا وآسيا؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'تركيا', 'callback_data' => "qjar5"]],
                [['text' => 'اليونان', 'callback_data' => "qjar55"]],
                [['text' => 'الصومال', 'callback_data' => "qjar555"]],
            ]
        ])
    ]);
}


if ($data == "qjar5") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك صحيحة 🗺️

تم اكتمال الأسئلة 💠",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "arb"]],
            ]
        ])
    ]);
}

if ($data == "qjar11") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar1"]],
            ]
        ])
    ]);
}


if ($data == "qjar111") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar1"]],
            ]
        ])
    ]);
}

if ($data == "qjar22") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar1"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar2"]],
            ]
        ])
    ]);
}


if ($data == "qjar222") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar1"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar2"]],
            ]
        ])
    ]);
}


if ($data == "qjar33") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar2"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar3"]],
            ]
        ])
    ]);
}


if ($data == "qjar333") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar2"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar3"]],
            ]
        ])
    ]);
}


if ($data == "qjar44") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar3"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar4"]],
            ]
        ])
    ]);
}

if ($data == "qjar444") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar3"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qjar4"]],
            ]
        ])
    ]);
}

if ($data == "qjar55") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar4"]],
            ]
        ])
    ]);
}

if ($data == "qjar555") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qjar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qjar4"]],
            ]
        ])
    ]);
}


if ($data == "qaar") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س1/من هو أول نبي؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'عيسى (ع)', 'callback_data' => "qaar11"]],
                [['text' => 'محمد(ص)', 'callback_data' => "qaar111"]],
                [['text' => 'ادم (ع)', 'callback_data' => "qaar1"]],
            ]
        ])
    ]);
}


if ($data == "qaar1") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س2/ ما هو أول شهر في التقويم الهجري؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'محرم', 'callback_data' => "qaar2"]],
                [['text' => 'رمضان', 'callback_data' => "qaar22"]],
                [['text' => 'شوال', 'callback_data' => "qaar222"]],
            ]
        ])
    ]);
}


if ($data == "qaar2") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س3/هو الصوم الذي يُعتبر واجبًا في الإسلام؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'صوم رمضان', 'callback_data' => "qaar3"]],
                [['text' => 'صوم محرم', 'callback_data' => "qaar33"]],
                [['text' => 'صوم شعبان', 'callback_data' => "qaar333"]],
            ]
        ])
    ]);
}


if ($data == "qaar3") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س4/ما هو الحج؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'الصلاة الخاصة بالسفر', 'callback_data' => "qaar44"]],
                [['text' => 'الصوم في شهر رمضان', 'callback_data' => "qaar444"]],
                [['text' => 'الركن الخامس من أركان الإسلام', 'callback_data' => "qaar4"]],
            ]
        ])
    ]);
}


if ($data == "qaar4") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "س5/من هو أبو الأنبياء؟",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'ادم(ع)', 'callback_data' => "qaar55"]],
                [['text' => 'نوح(ع)', 'callback_data' => "qaar555"]],
                [['text' => 'ابراهيم', 'callback_data' => "qaar5"]],
            ]
        ])
    ]);
}


if ($data == "qaar5") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك صحيحة 🗺️

تم اكتمال الأسئلة 💠",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "arb"]],
            ]
        ])
    ]);
}

if ($data == "qaar11") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar1"]],
            ]
        ])
    ]);
}


if ($data == "qaar111") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar1"]],
            ]
        ])
    ]);
}

if ($data == "qaar22") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar1"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar2"]],
            ]
        ])
    ]);
}


if ($data == "qaar222") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar1"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar2"]],
            ]
        ])
    ]);
}


if ($data == "qaar33") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar2"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar3"]],
            ]
        ])
    ]);
}


if ($data == "qaar333") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar2"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar3"]],
            ]
        ])
    ]);
}


if ($data == "qaar44") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar3"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar4"]],
            ]
        ])
    ]);
}

if ($data == "qaar444") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar3"]],
                [['text' => 'تخطي السؤال والذهاب الى بعده ⬅️', 'callback_data' => "qaar4"]],
            ]
        ])
    ]);
}

if ($data == "qaar55") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar4"]],
            ]
        ])
    ]);
}

if ($data == "qaar555") {
	bot('sendMessage', [
	'chat_id' => $chat_id,
        'text' => "اجابتك خاطئة ❌",
        'parse_mode' => "markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اعادة من البداية ↪️', 'callback_data' => "qaar"]],
                [['text' => 'اعادة السوأل 🔄', 'callback_data' => "qaar4"]],
            ]
        ])
    ]);
}


if ($data == "eng") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Welcome, dear, to the question bot. Choose the type of question 🎛️😄",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Football questions ⚽', 'callback_data' => "qken"]],
                 [['text' => 'Geographic questions 🗺️', 'callback_data' => "qjen"]],
                 [['text' => 'Islamic questions 🕋', 'callback_data' => "qaen"]],
             ]
         ])
     ]);
 }


if ($data == "qken") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q1/ Who won the Champions League in 2012?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Chelsea', 'callback_data' => "qken1"]],
                 [['text' => 'Real Madrid', 'callback_data' => "qken11"]],
                 [['text' => 'red star', 'callback_data' => "qken111"]],
             ]
         ])
     ]);
 }


 if ($data == "qken11") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken1"]],
             ]
         ])
     ]);
 }


 if ($data == "qken111") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken1"]],
             ]
         ])
     ]);
 }
 
 
 
 if ($data == "qken1") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q2/Who won the Club of the Century award?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'ajax', 'callback_data' => "qken22"]],
                 [['text' => 'Real Madrid', 'callback_data' => "qken2"]],
                 [['text' => 'Liverpool', 'callback_data' => "qken222"]],
             ]
         ])
     ]);
 }

 if ($data == "qken22") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken1"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken2"]],
             ]
         ])
     ]);
 }


 if ($data == "qken222") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken1"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken2"]],
             ]
         ])
     ]);
 }
 
 
 if ($data == "qken2") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q3/Who won the Italian League in 2000/2001?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Juventus', 'callback_data' => "qken333"]],
                 [['text' => 'Milan', 'callback_data' => "qken33"]],
                 [['text' => 'Rome', 'callback_data' => "qken3"]],
             ]
         ])
     ]);
 }

 if ($data == "qken33") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken2"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken3"]],
             ]
         ])
     ]);
 }


 if ($data == "qken333") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken2"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken3"]],
             ]
         ])
     ]);
 }
 
 
 if ($data == "qken3") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q4/ Who is the best team in the Turkish Super League?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Gaziantep', 'callback_data' => "qken44"]],
                 [['text' => 'Galatasaray', 'callback_data' => "qken4"]],
                 [['text' => 'Besiktas', 'callback_data' => "qken444"]],
             ]
         ])
     ]);
 }

 if ($data == "qken44") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken3"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken4"]],
             ]
         ])
     ]);
 }


 if ($data == "qken444") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qken"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qken3"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qken4"]],
             ]
         ])
     ]);
 }
 
 
 if ($data == "qken4") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q5/ Who is the best player in the world?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Ronaldo', 'callback_data' => "qken5"]],
                 [['text' => 'Messi', 'callback_data' => "qken5"]],
             ]
         ])
     ]);
 }


 if ($data == "qken5") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is correct ⚽

 Questions have been completed 💠",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'back', 'callback_data' => "eng"]],
             ]
         ])
     ]);
 }
 
 

if ($data == "qjen") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q1/ What is the longest river in the world?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Nile River', 'callback_data' => "qjen1"]],
                 [['text' => 'Amazon River', 'callback_data' => "qjen11"]],
                 [['text' => 'Tigris River', 'callback_data' => "qjen111"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen1") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q2/ What is the largest sea in the world in terms of area?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Baltic Sea', 'callback_data' => "qjen22"]],
                 [['text' => 'Caribbean Sea', 'callback_data' => "qjen222"]],
                 [['text' => 'East China Sea', 'callback_data' => "qjen2"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen2") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q3/ What is the country that shares two continents?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Kuwait', 'callback_data' => "qjen333"]],
                 [['text' => 'Iraq', 'callback_data' => "qjen33"]],
                 [['text' => 'Russia', 'callback_data' => "qjen3"]],
             ]
         ])
     ]);
 }
 
 
 if ($data == "qjen3") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q4/What is the capital of China?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Shanghai', 'callback_data' => "qjen44"]],
                 [['text' => 'Beijing', 'callback_data' => "qjen4"]],
                 [['text' => 'Tianjin', 'callback_data' => "qjen444"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen4") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q5/ Which country is partly located in both Europe and Asia?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Turkey', 'callback_data' => "qjen5"]],
                 [['text' => 'Greece', 'callback_data' => "qjen55"]],
                 [['text' => 'Somalia', 'callback_data' => "qjen555"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen5") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is correct 🗺️

 Questions have been completed 💠",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'back', 'callback_data' => "eng"]],
             ]
         ])
     ]);
 }
 
 
 if ($data == "qjen11") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen1"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen111") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen1"]],
             ]
         ])
     ]);
 }

 if ($data == "qjen22") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen1"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen2"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen222") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen1"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen2"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen33") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen2"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen3"]],
             ]
         ])
     ]);
 }


 if ($data == "qjen333") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen2"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen3"]],
             ]
         ])
     ]);
 }
 
 
 if ($data == "qjen44") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen3"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen4"]],
             ]
         ])
     ]);
 }

 if ($data == "qjen444") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen3"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qjen4"]],
             ]
         ])
     ]);
 }

 if ($data == "qjen55") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen4"]],
             ]
         ])
     ]);
 }

 if ($data == "qjen555") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from beginning ↪️', 'callback_data' => "qjen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qjen4"]],
             ]
         ])
     ]);
 }
 
 
 if ($data == "qaen") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q1/Who is the first prophet?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Isa (ع)', 'callback_data' => "qaen11"]],
                 [['text' => 'Muhammad (ص)', 'callback_data' => "qaen111"]],
                 [['text' => 'Adam (ع)', 'callback_data' => "qaen1"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen1") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q2/ What is the first month in the Hijri calendar?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Muharram', 'callback_data' => "qaen2"]],
                 [['text' => 'Ramadan', 'callback_data' => "qaen22"]],
                 [['text' => 'Shawwal', 'callback_data' => "qaen222"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen2") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q3/Is fasting considered obligatory in Islam?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Ramadan fasting', 'callback_data' => "qaen3"]],
                 [['text' => 'Muharram fast', 'callback_data' => "qaen33"]],
                 [['text' => 'Shaaban fast', 'callback_data' => "qaen333"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen3") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q4/What is Hajj?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Prayer for travel', 'callback_data' => "qaen44"]],
                 [['text' => 'Fasting during the month of Ramadan', 'callback_data' => "qaen444"]],
                 [['text' => 'The Fifth Pillar of Islam', 'callback_data' => "qaen4"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen4") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Q5/Who is the father of the prophets?",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Adam (ع)', 'callback_data' => "qaen55"]],
                 [['text' => 'Noah (ع)', 'callback_data' => "qaen555"]],
                 [['text' => 'Ibrahim (ع)', 'callback_data' => "qaen5"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen5") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is correct 🗺️

 Questions have been completed 💠",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'back', 'callback_data' => "eng"]],
             ]
         ])
     ]);
 }
 
 
 
 if ($data == "qaen11") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'return question 🔄', 'callback_data' => "qaen"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen1"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen111") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'return question 🔄', 'callback_data' => "qaen"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen1"]],
             ]
         ])
     ]);
 }

 if ($data == "qaen22") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen1"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen2"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen222") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen1"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen2"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen33") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen2"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen3"]],
             ]
         ])
     ]);
 }


 if ($data == "qaen333") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen2"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen3"]],
             ]
         ])
     ]);
 }
 
 
 
 if ($data == "qaen44") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen3"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen4"]],
             ]
         ])
     ]);
 }

 if ($data == "qaen444") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen3"]],
                 [['text' => 'Skip the question and go to the next question ⬅️', 'callback_data' => "qaen4"]],
             ]
         ])
     ]);
 }

 if ($data == "qaen55") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen4"]],
             ]
         ])
     ]);
 }

 if ($data == "qaen555") {
 bot('sendMessage', [
 'chat_id' => $chat_id,
         'text' => "Your answer is wrong ❌",
         'parse_mode' => "markdown",
         'disable_web_page_preview' => true,
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => 'Repeat from the beginning ↪️', 'callback_data' => "qaen"]],
                 [['text' => 'Callback 🔄', 'callback_data' => "qaen4"]],
             ]
         ])
     ]);
 }
//=================//
//~~~~~~~@B_O_B_O_B~~~~~~//
/*
انشر بذكر المصدر : زيكو السوري 😀
تغيير حقوق تبين علامه فشلك 🐸
*/
//~~~~~~~@B_O_B_O_B~~~~~~//