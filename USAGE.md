## 🛠️ Setting up the server environment

Setting up the server environment is pretty easy if you've done this before.  
You may use Windows or Linux for this.

You must install PHP, with a web server, and properly set it up (Apache, nginx, IIS, etc.).  
If you don't know how to install PHP, for Windows, you can use [XAMPP](https://www.apachefriends.org/index.html).  
Linux users, sorry I'll get round to this later on.

Once you've done that, you'll want to copy the files from this repo to your public directory.

You will also need a website domain that is **14 characters long**, including the suffix. You will also need to have working SSL.

---

## 🛠️ Patching the App

You'll need to decompile it with some apktool version; you do not need to decode resources.

You can decompile my copy of the APK, for simplicity's sake:  
[Patched.apk](https://files.catbox.moe/2h04ta.apk)

The domain name will be `berryinfra.xyz`. There are some patches in here that allow you to use Cloudflare as your DNS.  
It also removes one security check which you will need to do anything.

If you are feeling really lazy (like I was), you can just replace `berryinfra.xyz` with whatever your domain name is using Notepad++,  
as long as the length matches.

Then you just recompile and install! It should just work if you've done it all correctly.

> **NOTE:** If your device already came with BBM, you will have to remove it.  
> If you can't remove it, you will have to use another device, as the signature is different and Android will not let you install the APK.
