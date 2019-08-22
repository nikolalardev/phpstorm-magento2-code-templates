# Magento 2 PhpStorm code templates
Collection of PhpStorm code templates for Magento 2  
   
## PhpStorm
Install the PhpStorm >= 2016.1 version for your OS from - [PhpStorm website](https://www.jetbrains.com/phpstorm/download/).

## Install
Run the following commands:  
```bash
git clone git@github.com:nikolalardev/phpstorm-magento2-code-templates.git m2-code-templates  
cd m2-code-templates
```
Find PhpStorm **file templates** directory for your OS and copy files from m2-code-templates to PhpStorm **file templates** folder:

1. Windows Vista, 7, 8, 10:
```
<SYSTEM DRIVE>\Users\<USER ACCOUNT NAME>\.<PRODUCT><VERSION>\config\fileTempates
```
Copy all files and directories recursively to this folder. Please exclude **.git** folder and README.md file.

2. Linux  
File template folder - `~/.<PRODUCT><VERSION>/fileTempates`
```bash
rsync -avr . ~/.<PRODUCT><VERSION>/config/fileTempates --exclude=README.md --exclude=.git
```

3. Mac OS X  
File template folder - `~/Library/Preferences/<PRODUCT><VERSION>/fileTempates`

```bash
rsync -avr . ~/Library/Preferences/<PRODUCT><VERSION>/fileTempates --exclude=README.md --exclude=.git
```

Restart **PhpStorm**

## Setup  

1. Go to `PhpStorm Preferences | Editor | File and Code Templates`.
2. Click on Includes tab.
3. Select **M2 PHP File Header** template.
4. Set default vendor name for Magento modules.
5. Click **Apply** and close Preferences window.
6. Go to `View | Tool Windows | Project`.
7. Try to create new file you should be able to see all M2 templates.
8. Happy coding 😀👍

Author: Nikola Lardev <nikolalardev@gmail.com>  
