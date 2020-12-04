# Block facebook on android

1. Install ES File Explorer Open ES File Explorer and tap the "/" button at the top. Tap on system > etc.
2. In this folder, you'll see the hosts file - tap it and in the pop up menu, tap text. In the next pop up, tap ES Note Editor.
3. Tap the three dots button in the top right, and tap edit.
4. Now, you're editing the file, and to block sites, you want to redirect their DNS. To do this, just start a new line, and type "127.0.0.1 _www.blockedwebsite.com_" (without the quotes, where blocked website is the name of the site you're blocking) for each website you want to block. For example, you'll have to type 127.0.0.1 _www.google.com_ to block Google.
5. Reboot your Android device.

