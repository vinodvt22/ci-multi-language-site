This sample project explains how to create a multi language website in codeigniter.

To run this project change $config['base_url'] in application/config/config.php

To create a multilanguage site in codeigniter we can use language library,

1. create a new file content_lang.php in application/language/english/ for english language. create another content_lang.php file directory dutch for dutch language in application/language/dutch (Create a directory if not exist). Like this we can create any number of language files.

2. We can use the language values on the content_lang.php in view files.

3. The language files are loaded on the cntroller file (application/controllers/users.php)



