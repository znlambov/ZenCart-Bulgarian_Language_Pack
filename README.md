==========================================
***Bulgarian Language Pack for ZenCart 1.5.5e,d,c***
==========================================
***Пакет с български език за ZenCart 1.5.5e,d,c***
==========================================

*Compatibility:* ZenCart versions 1.5.5e, 1.5.5d, 1.5.5c

Not official! (if there is any official ZC lang pack, anyway :) )  
Like other open source projects, this is voluntary maintained. I am not obligated to assist here, but I do so because I want to.  
Just sharing my own work with all of you (GPL). You have the freedom to run, study, share and modify the files.  
There may be some grammer or syntax errors. It is a lot of files and work and I'm just a human :)  
In some files, out of the context it is hard to understand the real meaning of some parts of the text.  
Please write to me, if you have any suggestions, criticism, questions, etc.: jung (at) abv [dot] bg  
Thank you in advance for your cooperation!

Information from here was used:  
https://www.zen-cart.com/wiki/index.php/Languages  
https://www.zen-cart.com/content.php?301-how-to-i-change-dates-from-us-format-to-dd-mm-yyyy
https://www.zen-cart.com/docs/changed_files-v1-5-5.html#v155e

==========================================
*Installation:*
==========================================

1. BackUp (FYI this language pack does not touch any of your files or DB).
2. You should make notes for every change you make to your ZC site.
3. You should first try this in a separete testing machine (e.g. VirtualMachine)!
4. Upload the files and directories to your server. Copy to your ZenCart folder keeping this structure (if your /admin/ folder name is different, change it!):

 includes/languages/bulgarian.php  
 includes/languages/bulgarian/  
 admin/includes/languages/bulgarian.php  
 admin/includes/languages/bulgarian/  
 includes/templates/template_default/buttons/bulgarian/>  

5. Go to admin panel, Admin > Localization > Languages and click the new language button.
6. If you are using different Template, you have to copy the whole directory includes/templates/YOUR_TEMPLATE/buttons/english, rename it to /bulgarian and copy it back there in order to have the new directory includes/templates/YOUR_TEMPLATE/buttons/bulgarian. Do the same thing with other similar English language parts form YOUR_TEMPLATE.
7. If you or the add-ons you installed to your ZenCart have made any changes to some of the English langauage core files, you should apply the same changes to the Bulgarian files.