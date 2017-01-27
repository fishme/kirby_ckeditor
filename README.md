# Kirby2 ckeditor

##Description
This the WYSIWYG Editor for Kirby2.

##How to use?

clone inside your project /site/fields/

```bash
git clone https://github.com/fishme/kirby_ckeditor.git
```
or download/paste 

* clone or download/paste the repo
* add 2 rules in your .htaccess (see below)
* done

open your .htaccess file and add these two lines before "RewriteRule ^site/(.*) index.php [L]"

```bash
RewriteRule ^assets/fields/([a-zA-Z0-9\.\-_%=]+)/(.*)$ site/fields/$1/assets/$2 [L,N]
RewriteCond $1 !^fields/[a-zA-Z0-9\.\-_%=]+/assets/.*
RewriteRule ^site/(.*) index.php [L]
```

How to call the ckeditor inside your blueprint file?

```yaml
  text:
    label: Text
    type: ckeditor
```

That was it. :)

To see the editor click inside the Textarea field.


##Why?
I know that Kirby2 works with Markdown and I like that. But in some cases it is necessary to have a simple Visual Editor for HTML Code.

##Todos
there are some todos :)

* remove Kirby2 Listener on the textarea field
* markdown should works (still now not everything is working)
* better configuration for the ckeditor

##Feedback
go to my page <http://www.fishme.de>