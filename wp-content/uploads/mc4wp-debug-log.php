<?php exit; ?>
[2020-12-30 10:59:37] INFO: Form 147 > Submitted with errors: invalid_email
[2020-12-30 10:59:44] INFO: Form 147 > Submitted with errors: invalid_email
[2020-12-30 11:44:28] WARNING: Form 147 > chri*@ma******.com is already subscribed to the selected list(s)
[2020-12-30 11:45:38] WARNING: Form 147 > chri*@ma******.com is already subscribed to the selected list(s)
[2020-12-30 11:49:39] WARNING: Form 147 > chri*@ma******.com is already subscribed to the selected list(s)
[2020-12-30 12:17:38] ERROR: Form 147 > Mailchimp API error: 400 Bad Request. Invalid Resource. khri***************@gm***.com has signed up to a lot of lists very recently; we're not allowing more signups for now

Request: 
PATCH https://us19.api.mailchimp.com/3.0/lists/fde33a7b22/members/dfdf3d4065e0fe1a493f587e7fbe7446

{"status":"pending","email_address":"khri***************@gm***.com","interests":{},"merge_fields":{},"email_type":"html","ip_signup":"127.0.0.1","tags":[]}

Response: 
400 Bad Request
{"type":"http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/","title":"Invalid Resource","status":400,"detail":"khri***************@gm***.com has signed up to a lot of lists very recently; we're not allowing more signups for now","instance":"e6c04a61-be0e-47de-9978-3d903fe1e40c"}
