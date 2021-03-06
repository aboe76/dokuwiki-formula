<?php
/**
 * Dokuwiki's Main Configuration File - Local Settings
 * Generated by Saltstack dokuwiki
 */

/* Basic Settings */
$conf['title']       = "{{ salt['pillar.get']('dokuwiki:title','DokuWiki') }}";        //what to show in the title
$conf['start']       = "{{ salt['pillar.get']('dokuwiki:start','start') }}";           //name of start page
$conf['lang']        = "{{ salt['pillar.get']('dokuwiki:lang','en') }}";              //your language
$conf['template']    = "{{ salt['pillar.get']('dokuwiki:template','dokuwiki') }}";         //see lib/tpl directory
$conf['tagline']     = "{{ salt['pillar.get']('dokuwiki:tagline','') }}";                //tagline in header (if template supports it)
$conf['sidebar']     = "{{ salt['pillar.get']('dokuwiki:sidebar','sidebar') }}";         //name of sidebar in root namespace (if template supports it)
$conf['license']     = "{{ salt['pillar.get']('dokuwiki:license','cc-by-nc-sa') }}";     //see conf/license.php
$conf['savedir']     = "{{ salt['pillar.get']('dokuwiki:savedir','/var/lib/dokuwiki/data') }}";          //where to store all the files
$conf['basedir']     = "{{ salt['pillar.get']('dokuwiki:basedir','') }}";                //absolute dir from serveroot - blank for autodetection
$conf['baseurl']     = "{{ salt['pillar.get']('dokuwiki:baseurl','') }}";                //URL to server including protocol - blank for autodetect
$conf['cookiedir']   = "{{ salt['pillar.get']('dokuwiki:cookiedir','') }}";                //path to use in cookies - blank for basedir
$conf['dmode']       = "{{ salt['pillar.get']('dokuwiki:dmode',0755) }}";              //set directory creation mode
$conf['fmode']       = "{{ salt['pillar.get']('dokuwiki:fmode',0644) }}";              //set file creation mode
$conf['allowdebug']  = "{{ salt['pillar.get']('dokuwiki:allowdebug',0) }}";                 //allow debug output, enable if needed 0|1
/* Display Settings */
$conf['recent']      = "{{ salt['pillar.get']('dokuwiki:recent',20) }}";                //how many entries to show in recent
$conf['recent_days'] = "{{ salt['pillar.get']('dokuwiki:recent_days',7) }}";                 //How many days of recent changes to keep. (days)
$conf['breadcrumbs'] = "{{ salt['pillar.get']('dokuwiki:breadcrumbs',10) }}";                //how many recent visited pages to show
$conf['youarehere']  = "{{ salt['pillar.get']('dokuwiki:youarehere',0) }}";                 //show "You are here" navigation? 0|1
$conf['fullpath']    = "{{ salt['pillar.get']('dokuwiki:fullpath',0) }}";                 //show full path of the document or relative to datadir only? 0|1
$conf['typography']  = "{{ salt['pillar.get']('dokuwiki:typography',1) }}";                 //smartquote conversion 0=off, 1=doublequotes, 2=all quotes
$conf['dformat']     = "{{ salt['pillar.get']('dokuwiki:dformat','%Y/%m/%d %H:%M') }}";  //dateformat accepted by PHPs strftime() function
$conf['signature']   = "{{ salt['pillar.get']('dokuwiki:signature',' --- //[[@MAIL@|@NAME@]] @DATE@//') }}"; //signature see wiki page for details
$conf['showuseras']  = "{{ salt['pillar.get']('dokuwiki:showuseras','loginname') }}";       // 'loginname' users login name
                                                                   // 'username' users full name
                                                                   // 'email' e-mail address (will be obfuscated as per mailguard)
                                                                   // 'email_link' e-mail address as a mailto: link (obfuscated)
$conf['toptoclevel'] = "{{ salt['pillar.get']('dokuwiki:toptoclevel',1) }}";                 //Level starting with and below to include in AutoTOC (max. 5)
$conf['tocminheads'] = "{{ salt['pillar.get']('dokuwiki:tocminheads',3) }}";                 //Minimum amount of headlines that determines if a TOC is built
$conf['maxtoclevel'] = "{{ salt['pillar.get']('dokuwiki:maxtoclevel',3) }}";                 //Up to which level include into AutoTOC (max. 5)
$conf['maxseclevel'] = "{{ salt['pillar.get']('dokuwiki:maxseclevel',3) }}";                 //Up to which level create editable sections (max. 5)
$conf['camelcase']   = "{{ salt['pillar.get']('dokuwiki:camelcase',0) }}";                 //Use CamelCase for linking? (I don't like it) 0|1
$conf['deaccent']    = "{{ salt['pillar.get']('dokuwiki:deaccent',1) }}";                 //deaccented chars in pagenames (1) or romanize (2) or keep (0)?
$conf['useheading']  = "{{ salt['pillar.get']('dokuwiki:useheading',0) }}";                 //use the first heading in a page as its name
$conf['sneaky_index']= "{{ salt['pillar.get']('dokuwiki:sneakyindex',0) }}";                 //check for namespace read permission in index view (0|1) (1 might cause unexpected behavior)
$conf['hidepages']   = "{{ salt['pillar.get']('dokuwiki:hidepages','') }}";                //Regexp for pages to be skipped from RSS, Search and Recent Changes
/* Authentication Settings */
$conf['useacl']      = "{{ salt['pillar.get']('dokuwiki:useacl',1) }}";                //Use Access Control Lists to restrict access?
$conf['autopasswd']  = "{{ salt['pillar.get']('dokuwiki:autopasswd',1) }}";                //autogenerate passwords and email them to user
$conf['authtype']    = "{{ salt['pillar.get']('dokuwiki:authtype','authplain') }}";      //which authentication backend should be used
$conf['passcrypt']   = "{{ salt['pillar.get']('dokuwiki:passcrypt','smd5') }}";           //Used crypt method (smd5,md5,sha1,ssha,crypt,mysql,my411)
$conf['defaultgroup']= "{{ salt['pillar.get']('dokuwiki:defaultgroup','user') }}";           //Default groups new Users are added to
$conf['superuser']   = "{{ salt['pillar.get']('dokuwiki:superuser','@admin') }}";    //The admin can be user or @group or comma separated list user1,@group1,user2
$conf['manager']     = "{{ salt['pillar.get']('dokuwiki:manager','@manager') }}";    //The manager can be user or @group or comma separated list user1,@group1,user2
$conf['profileconfirm'] = "{{ salt['pillar.get']('dokuwiki:profileconfirm',1) }}";             //Require current password to confirm changes to user profile
$conf['rememberme'] = "{{ salt['pillar.get']('dokuwiki:rememberme',1) }}";                 //Enable/disable remember me on login
$conf['disableactions'] = "{{ salt['pillar.get']('dokuwiki:disableactions','') }}";            //comma separated list of actions to disable
$conf['auth_security_timeout'] = "{{ salt['pillar.get']('dokuwiki:auth_security_timeout',900) }}";    //time (seconds) auth data is considered valid, set to 0 to recheck on every page view
$conf['securecookie'] = "{{ salt['pillar.get']('dokuwiki:securecookie',1) }}";               //never send HTTPS cookies via HTTP
$conf['remote']      = "{{ salt['pillar.get']('dokuwiki:remote',0) }}";                //Enable/disable remote interfaces
$conf['remoteuser']  = "{{ salt['pillar.get']('dokuwiki:remoteuser','!!not set !!') }}";   //user/groups that have access to remote interface (comma separated)
/* Antispam Features */
$conf['usewordblock']= "{{ salt['pillar.get']('dokuwiki:usewordblock',1) }}";                //block spam based on words? 0|1
$conf['relnofollow'] = "{{ salt['pillar.get']('dokuwiki:relnofollow',1) }}";                //use rel="nofollow" for external links?
$conf['indexdelay']  = "{{ salt['pillar.get']('dokuwiki:indexdelay','60*60*24*5') }}";       //allow indexing after this time (seconds) default is 5 days
$conf['mailguard']   = "{{ salt['pillar.get']('dokuwiki:mailguard','hex') }}";            //obfuscate email addresses against spam harvesters?
                                                                  //valid entries are:
                                                                  //  'visible' - replace @ with [at], . with [dot] and - with [dash]
                                                                  //  'hex'     - use hex entities to encode the mail address
                                                                  //  'none'    - do not obfuscate addresses
$conf['iexssprotect']= "{{ salt['pillar.get']('dokuwiki:iexssprotect',1) }}";                // check for JavaScript and HTML in uploaded files 0|1
/* Editing Settings */
$conf['usedraft']    = "{{ salt['pillar.get']('dokuwiki:usedraft',1) }}";                //automatically save a draft while editing (0|1)
$conf['htmlok']      = "{{ salt['pillar.get']('dokuwiki:htmlok',0) }}";                //may raw HTML be embedded? This may break layout and XHTML validity 0|1
$conf['phpok']       = "{{ salt['pillar.get']('dokuwiki:phpok',0) }}";                //may PHP code be embedded? Never do this on the internet! 0|1
$conf['locktime']    = "{{ salt['pillar.get']('dokuwiki:locktime','15*60') }}";            //maximum age for lockfiles (defaults to 15 minutes)
$conf['cachetime']   = "{{ salt['pillar.get']('dokuwiki:cachetime','60*60*24') }}";         //maximum age for cachefile in seconds (defaults to a day)
/* Link Settings */
// Set target to use when creating links - leave empty for same window
$conf['target']['wiki']      = "{{ salt['pillar.get']('dokuwiki:target_wiki','') }}";
$conf['target']['interwiki'] = "{{ salt['pillar.get']('dokuwiki:target_interwiki','') }}";
$conf['target']['extern']    = "{{ salt['pillar.get']('dokuwiki:target_extern','') }}";
$conf['target']['media']     = "{{ salt['pillar.get']('dokuwiki:target_media','') }}";
$conf['target']['windows']   = "{{ salt['pillar.get']('dokuwiki:target_windows','') }}";
/* Media Settings */
$conf['mediarevisions'] = "{{ salt['pillar.get']('dokuwiki:mediarevisions',1) }}";             //enable/disable media revisions
$conf['refcheck']    = "{{ salt['pillar.get']('dokuwiki:refcheck',1) }}";                //check for references before deleting media files
$conf['gdlib']       = "{{ salt['pillar.get']('dokuwiki:gdlib',2) }}";                //the GDlib version (0, 1 or 2) 2 tries to autodetect
$conf['im_convert']  = "{{ salt['pillar.get']('dokuwiki:im_convert','') }}";               //path to ImageMagicks convert (will be used instead of GD)
$conf['jpg_quality'] = "{{ salt['pillar.get']('dokuwiki:jpg_quality','70') }}";             //quality of compression when scaling jpg images (0-100)
$conf['fetchsize']   = "{{ salt['pillar.get']('dokuwiki:fetchsize',0) }}";                //maximum size (bytes) fetch.php may download from extern, disabled by default
/* Notification Settings */
$conf['subscribers'] = "{{ salt['pillar.get']('dokuwiki:subscribers',0) }}";                //enable change notice subscription support
$conf['subscribe_time'] = "{{ salt['pillar.get']('dokuwiki:subscribe_time','24*60*60') }}";      //Time after which digests / lists are sent (in sec, default 1 day)
                                         //Should be smaller than the time specified in recent_days
$conf['notify']      = "{{ salt['pillar.get']('dokuwiki:notify','') }}";               //send change info to this email (leave blank for nobody)
$conf['registernotify'] = "{{ salt['pillar.get']('dokuwiki:registernotify','') }}";            //send info about newly registered users to this email (leave blank for nobody)
$conf['mailfrom']    = "{{ salt['pillar.get']('dokuwiki:mailfrom','') }}";               //use this email when sending mails
$conf['mailprefix']  = "{{ salt['pillar.get']('dokuwiki:mailprefix','') }}";               //use this as prefix of outgoing mails
$conf['htmlmail']    = "{{ salt['pillar.get']('dokuwiki:htmlmail',1) }}";                //send HTML multipart mails
/* Syndication Settings */
$conf['sitemap']     = "{{ salt['pillar.get']('dokuwiki:sitemap',0) }}";                //Create a google sitemap? How often? In days.
$conf['rss_type']    = "{{ salt['pillar.get']('dokuwiki:rsstype','rss1') }}";           //type of RSS feed to provide, by default:
                                                                  //  'rss'  - RSS 0.91
                                                                  //  'rss1' - RSS 1.0
                                                                  //  'rss2' - RSS 2.0
                                                                  //  'atom' - Atom 0.3
                                                                  //  'atom1' - Atom 1.0
$conf['rss_linkto'] = "{{ salt['pillar.get']('dokuwiki:rss_linkto','diff') }}";            //what page RSS entries link to:
                                                                  //  'diff'    - page showing revision differences
                                                                  //  'page'    - the revised page itself
                                                                  //  'rev'     - page showing all revisions
                                                                  //  'current' - most recent revision of page
$conf['rss_content'] = "{{ salt['pillar.get']('dokuwiki:rss_content','abstract') }}";       //what to put in the items by default?
                                                                  //  'abstract' - plain text, first paragraph or so
                                                                  //  'diff'     - plain text unified diff wrapped in <pre> tags
                                                                  //  'htmldiff' - diff as HTML table
                                                                  //  'html'     - the full page rendered in XHTML
$conf['rss_media']   = "{{ salt['pillar.get']('dokuwiki:rss_media','both') }}";           //what should be listed?
                                                                  //  'both'     - page and media changes
                                                                  //  'pages'    - page changes only
                                                                  //  'media'    - media changes only
$conf['rss_update'] = "{{ salt['pillar.get']('dokuwiki:rss_update','5*60') }}";              //Update the RSS feed every n seconds (defaults to 5 minutes)
$conf['rss_show_summary'] = "{{ salt['pillar.get']('dokuwiki:rss_show_summary',1) }}";           //Add revision summary to title? 0|1
/* Advanced Settings */
$conf['updatecheck'] = "{{ salt['pillar.get']('dokuwiki:updatecheck',0) }}";                //automatically check for new releases?
$conf['userewrite']  = "{{ salt['pillar.get']('dokuwiki:userewrite',0) }}";                //this makes nice URLs: 0: off 1: .htaccess 2: internal
$conf['useslash']    = "{{ salt['pillar.get']('dokuwiki:useslash',0) }}";                //use slash instead of colon? only when rewrite is on
$conf['sepchar']     = "{{ salt['pillar.get']('dokuwiki:sepchar','_') }}";              //word separator character in page names; may be a
                                                                  //  letter, a digit, '_', '-', or '.'.
$conf['canonical']   = "{{ salt['pillar.get']('dokuwiki:canonical',0) }}";                //Should all URLs use full canonical http://... style?
$conf['fnencode']    = "{{ salt['pillar.get']('dokuwiki:fnencode','url') }}";            //encode filenames (url|safe|utf-8)
$conf['autoplural']  = "{{ salt['pillar.get']('dokuwiki:autoplural',0) }}";                //try (non)plural form of nonexisting files?
$conf['compression'] = "{{ salt['pillar.get']('dokuwiki:compression','gz') }}";             //compress old revisions: (0: off) ('gz': gnuzip) ('bz2': bzip)
                                                                  //  bz2 generates smaller files, but needs more cpu-power
$conf['gzip_output'] = "{{ salt['pillar.get']('dokuwiki:gzip_output',0) }}";                //use gzip content encodeing for the output xhtml (if allowed by browser)
$conf['compress']    = "{{ salt['pillar.get']('dokuwiki:compress',1) }}";                //Strip whitespaces and comments from Styles and JavaScript? 1|0
$conf['cssdatauri']  = "{{ salt['pillar.get']('dokuwiki:cssdatauri',0) }}";                //Maximum byte size of small images to embed into CSS, won't work on IE<8
$conf['send404']     = "{{ salt['pillar.get']('dokuwiki:send404',0) }}";                //Send a HTTP 404 status for non existing pages?
$conf['broken_iua']  = "{{ salt['pillar.get']('dokuwiki:broken_iua',0) }}";                //Platform with broken ignore_user_abort (IIS+CGI) 0|1
$conf['xsendfile']   = "{{ salt['pillar.get']('dokuwiki:xsendfile',0) }}";                //Use X-Sendfile (1 = lighttpd, 2 = standard)
$conf['renderer_xhtml'] = "{{ salt['pillar.get']('dokuwiki:renderer_xhtml','xhtml') }}";       //renderer to use for main page generation
$conf['readdircache'] = "{{ salt['pillar.get']('dokuwiki:readdircache',0) }}";               //time cache in second for the readdir operation, 0 to deactivate.
/* Network Settings */
$conf['dnslookups'] = "{{ salt['pillar.get']('dokuwiki:dnslookups',1) }}";                 //disable to disallow IP to hostname lookups
// Proxy setup - if your Server needs a proxy to access the web set these
$conf['proxy']['host']    = "{{ salt['pillar.get']('dokuwiki:proxy_host','') }}";
$conf['proxy']['port']    = "{{ salt['pillar.get']('dokuwiki:proxy_port','') }}";
$conf['proxy']['user']    = "{{ salt['pillar.get']('dokuwiki:proxy_user','') }}";
$conf['proxy']['pass']    = "{{ salt['pillar.get']('dokuwiki:proxy_pass','') }}";
$conf['proxy']['ssl']     = "{{ salt['pillar.get']('dokuwiki:proxy_ssl',0) }}";
$conf['proxy']['except']  = "{{ salt['pillar.get']('dokuwiki:proxy_except','') }}";
// Safemode Hack - read http://www.dokuwiki.org/config:safemodehack !
$conf['safemodehack'] = "{{ salt['pillar.get']('dokuwiki:safemodehack',0) }}";
$conf['ftp']['host'] = "{{ salt['pillar.get']('dokuwiki:ftp_host','localhost') }}";
$conf['ftp']['port'] = "{{ salt['pillar.get']('dokuwiki:ftp_port','21') }}";
$conf['ftp']['user'] = "{{ salt['pillar.get']('dokuwiki:ftp_user','user') }}";
$conf['ftp']['pass'] = "{{ salt['pillar.get']('dokuwiki:ftp_pass','password') }}";
$conf['ftp']['root'] = "{{ salt['pillar.get']('dokuwiki:ftp_root','/home/user/htdocs') }}";
