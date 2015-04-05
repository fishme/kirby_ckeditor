# Kirby2 ckeditor

##Description
This is the WYSIWYG Editor for Kirby2.
I used the powerful <http://ckeditor.com/> for this plugin.

##How to use?

clone inside your project /site/fields/ (maybe rename directory to "ckeditor")

```bash
git clone https://github.com/fishme/kirby_ckeditor.git
```
or download/paste 

Still now I did't fix the problem with the .htaccess. 
That everything is working you have to turnoff the rule for the site inside the .htaccess (maybe you will have then a security issue, but don't worry I will find a way "in the future")

```bash
# block all files in the site folder from being accessed directly
#RewriteRule ^site/(.*) error [R=301,L]
```
what I need here is an exception for this url
"/site/fields/ckeditor/assets/*"
If you can fix that, please make a pullrequest.

so back to the description.

* clone or download/paste the repo
* comment the site rule from the .htaccess
* done

How to call the ckeditor inside your blueprint file?

```yaml
  text:
    label: Text
    type: ckeditor
```

That was it. :)

To see the editor click inside the Textarea field.
![Image of Yaktocat](http://www.fishme.de/github/kirby2_ckeditor.png)


###update/change ckeditor

If you want to change the setup from the ckeditor go to the page <http://ckeditor.com/download> and choose "customize". After the easy setup download the package directly inside /site/ckeditor/assets/js/

##Why?
I know that Kirby2 works with Markdown and I like that. But in some cases it is necessary to have a simple Visual Editor for HTML Code.

##Todos
there are some todos :)

* remove Kirby2 Listener on the textarea field
* markdown should works (still now not everything is working)
* better configuration for the ckeditor
* code refactor (etc: fix url)
* find a solution for the .htaccess problem

##Feedback
go to my page <http://www.fishme.de>