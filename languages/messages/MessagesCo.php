<?php
/** Corsican (corsu)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Ale Mister
 * @author Ale Mister (on co.wikipedia.org)
 * @author Img (on co.wikipedia.org)
 * @author Paulu
 */

$fallback = 'it';

$messages = array(
# User preference toggles
'tog-hideminor' => "Piattà e mudifiche minore in l'ultime mudifiche",
'tog-hidepatrolled' => "Piattà e mudifiche verificate in l'ultime mudifiche",
'tog-newpageshidepatrolled' => 'Piattà e pagine verificate da a lista di e pagine più recente',
'tog-watchlisthidebots' => 'Piattà e mudifiche di i boti in e pagine speciale',
'tog-showhiddencats' => 'Mustrà e categurie nascoste',

'underline-always' => 'Sempre',
'underline-never' => 'Mai',

# Dates
'sunday' => 'dumenica',
'monday' => 'luni',
'tuesday' => 'marti',
'wednesday' => 'mercuri',
'thursday' => 'ghjovi',
'friday' => 'venneri',
'saturday' => 'sabbatu',
'sun' => 'dum',
'mon' => 'lun',
'tue' => 'mar',
'wed' => 'mer',
'thu' => 'ghj',
'fri' => 'ven',
'sat' => 'sab',
'january' => 'ghjennaghju',
'february' => 'ferraghju',
'march' => 'marzu',
'april' => 'aprile',
'may_long' => 'maghju',
'june' => 'ghjugnu',
'july' => 'lugliu',
'august' => 'aostu',
'september' => 'settembre',
'october' => 'ottobre',
'november' => 'nuvembre',
'december' => 'dicembre',
'january-gen' => 'ghjennaghju',
'february-gen' => 'ferraghju',
'march-gen' => 'marzu',
'april-gen' => 'aprile',
'may-gen' => 'maghju',
'june-gen' => 'ghjugnu',
'july-gen' => 'lugliu',
'august-gen' => 'aostu',
'september-gen' => 'settembre',
'october-gen' => 'ottobre',
'november-gen' => 'nuvembre',
'december-gen' => 'dicembre',
'jan' => 'ghje',
'feb' => 'fer',
'mar' => 'mar',
'apr' => 'apr',
'may' => 'mag',
'jun' => 'ghju',
'jul' => 'lug',
'aug' => 'aos',
'sep' => 'set',
'oct' => 'ott',
'nov' => 'nuv',
'dec' => 'dic',
'january-date' => '{{PLURAL:$1|1°|$1}} ghjennaghju',
'february-date' => '{{PLURAL:$1|1°|$1}} ferraghju',
'march-date' => '{{PLURAL:$1|1°|$1}} marzu',
'may-date' => '{{PLURAL:$1|1°|$1}} maghju',
'june-date' => '{{PLURAL:$1|1°|$1}} ghjugnu',
'july-date' => '{{PLURAL:$1|1°|$1}} lugliu',
'august-date' => '{{PLURAL:$1|1°|$1}} aostu',
'september-date' => '{{PLURAL:$1|1°|$1}} sittembre',
'november-date' => '{{PLURAL:$1|1°|$1}} nuvembre',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categuria|Categurie}}',
'category_header' => 'Pagine in a categuria "$1"',
'subcategories' => 'Sottucategurie',
'category-empty' => "''Sta categuria ùn cuntene alcuna pagina o file multimediale.''",
'hidden-categories' => '{{PLURAL:$1|Categuria nascosta|Categurie nascoste}}',
'hidden-category-category' => 'Categurie nascoste',
'index-category' => 'Pagine indicizate',

'about' => 'À prupositu',
'article' => 'Articulu',
'newwindow' => '(si apre in una nova finestra)',
'cancel' => 'Annullà',
'moredotdotdot' => 'Di più...',
'morenotlisted' => "'Ssa lista ùn hè micca cumpletta",
'mypage' => 'A me pagina',
'mytalk' => 'Discussione',
'anontalk' => 'Discussione per istu indirizzu IP',
'navigation' => 'Navigazione',
'and' => '&#32;è',

# Cologne Blue skin
'qbfind' => 'Truvà',
'qbbrowse' => 'Sfuglià',
'qbedit' => 'Mudificà',
'qbpageoptions' => 'Issa pagina',
'qbmyoptions' => 'E mo pagine',

# Vector skin
'vector-action-addsection' => 'Aghjunghje discussione',
'vector-action-delete' => 'Supprimà',
'vector-action-move' => 'Cullucà',
'vector-action-protect' => 'Pruteghje',
'vector-action-unprotect' => 'Cambià a prutezzione',
'vector-view-create' => 'Creà',
'vector-view-edit' => 'Mudificà',
'vector-view-history' => 'Vede a cronolugia',
'vector-view-view' => 'Leghje',
'vector-view-viewsource' => 'Vede a surghjente',
'actions' => 'Azzione',
'variants' => 'Variante',

'errorpagetitle' => 'Errore',
'returnto' => 'Vultà à $1.',
'tagline' => 'À prupositu di {{SITENAME}}',
'help' => 'Aiutu',
'search' => 'Ricerca',
'searchbutton' => 'Ricerca',
'go' => 'Andà',
'searcharticle' => 'Andà',
'history' => 'Cronolugia',
'history_short' => 'Cronolugia',
'updatedmarker' => 'Mudificata dapoi a me ultima visita',
'printableversion' => 'Versione stampevule',
'permalink' => 'Ligame permanente',
'print' => 'Stampà',
'view' => 'Vede',
'edit' => 'Mudificà',
'create' => 'Creà',
'create-this-page' => "Creà 'ssa pagina",
'delete' => 'Supprimà',
'deletethispage' => 'Cancellà issa pagina',
'protect' => 'Pruteghje',
'protect_change' => 'Cambià',
'protectthispage' => 'Pruteghje issa pagina',
'unprotect' => 'Cambià a prutezzione',
'unprotectthispage' => 'Cambià a prutezzione di sta pagina',
'newpage' => 'Pagina nova',
'talkpage' => "Discussione di 'ssa pagina",
'talkpagelinktext' => 'discussione',
'specialpage' => 'Pagina speciale',
'personaltools' => 'Strumenti persunali',
'postcomment' => 'Nova sezione',
'articlepage' => "Vede l'articulu",
'talk' => 'Discussione',
'toolbox' => 'Stuvigli',
'userpage' => 'Vede a pagina di utilizatore',
'projectpage' => 'Vede a pagina prutetta',
'mediawikipage' => 'Vede i missaghji',
'templatepage' => 'Vede a pagina di mudellu',
'viewhelppage' => 'Vede a pagina di aiutu',
'categorypage' => 'Vede a pagina di categuria',
'viewtalkpage' => 'Vede a discussione',
'otherlanguages' => 'In altre lingue',
'lastmodifiedat' => 'Ultima mudifica di sta pagina u $1 à e $2.',
'protectedpage' => 'Pagina prutetta',
'jumpto' => 'Andà à:',
'jumptonavigation' => 'navigazione',
'jumptosearch' => 'ricerca',
'pool-errorunknown' => 'Errore scunnisciutu',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'À prupositu di {{SITENAME}}',
'aboutpage' => 'Project:À prupositu',
'currentevents' => 'Ultimi evenimenti',
'currentevents-url' => 'Project:Ultimi evenimenti',
'disclaimers' => 'Avvertimenti',
'disclaimerpage' => 'Project:Avertimenti generali',
'helppage' => 'Help:Cuntenutu',
'mainpage' => 'Pagina maestra',
'mainpage-description' => 'Pagina maestra',
'portal' => 'Purtone di a cumunità',
'portal-url' => 'Project:Purtone di a cumunità',
'privacy' => 'Pulitica pè a riservatezza',
'privacypage' => 'Project:Pulitica pè a riservatezza',

'versionrequired' => 'A version $1 di MediaWiki hè necessaria',

'ok' => "D'accordu",
'retrievedfrom' => 'Ricacciatu da "$1"',
'youhavenewmessagesmulti' => 'Ha novi missaghji nantu à $1',
'editsection' => 'mudificà',
'editold' => 'mudificà',
'viewsourceold' => 'Vede a surghjente',
'editlink' => 'mudificà',
'viewsourcelink' => 'Vede a surghjente',
'editsectionhint' => 'Mudificà a sezzione: $1',
'toc' => 'Cuntenutu',
'showtoc' => 'mustrà',
'hidetoc' => 'piattà',
'collapsible-collapse' => 'Cumprime',
'feed-atom' => 'Atomu',
'red-link-title' => '$1 (a pagina ùn esiste micca)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Articulu',
'nstab-user' => 'Pagina di cuntributore',
'nstab-special' => 'Pagina spiciale',
'nstab-project' => 'Pagina di prugettu',
'nstab-image' => 'Schedariu',
'nstab-mediawiki' => 'Messaghju',
'nstab-template' => 'Mudellu',
'nstab-help' => "Pagina d'aiutu",
'nstab-category' => 'Categuria',

# General errors
'error' => 'Errore',
'missingarticle-rev' => '(numeru di a versione: $1)',
'internalerror' => 'Errore internu',
'internalerror_info' => 'Errore internu: $1',
'badtitle' => 'Titulu scurrettu',
'viewsource' => 'Vede a surghjente',
'viewsource-title' => 'Vede a sughjente di $1',
'actionthrottled' => 'Azzione attimpata',
'viewsourcetext' => 'Si pò vede è cupià u codice surghjente di sta pagina:',

# Virus scanner
'virus-unknownscanner' => 'antivirus scunnisciutu:',

# Login and logout pages
'yourname' => 'Nome di cuntributore:',
'yourpassword' => 'Parolla secreta:',
'yourpasswordagain' => 'Ripete a parolla secreta:',
'yourdomainname' => 'U to duminiu:',
'login' => 'Cunnessione',
'nav-login-createaccount' => 'Cunnessione / registramentu',
'userlogin' => 'Cunnessione / registramentu',
'logout' => 'Scunnessione',
'userlogout' => 'Scunnessione',
'nologin' => 'Ùn ha ancu un accessu? $1.',
'nologinlink' => 'Registramentu',
'createaccount' => 'Registramentu',
'gotaccount' => 'Ùn ha ancu un accessu? $1.',
'gotaccountlink' => 'Cunnessione',
'createaccountreason' => 'Mutivu:',
'createacct-reason' => 'Mutivu',
'loginsuccesstitle' => 'Cunnessione fatta',
'acct_creation_throttle_hit' => "Desulatu, ai digià fattu $1 registramenti. Ùn ne poi micca fà d'altri.",
'accountcreated' => 'Registramentu fattu',
'accountcreatedtext' => "U registramentu di l'utilizatore $1 hè statu fattu.",
'loginlanguagelabel' => 'Lingua: $1',

# Change password dialog
'retypenew' => 'Scrive torna a nova parulla secreta:',
'resetpass-submit-cancel' => 'Cancillà',

# Special:ChangeEmail
'changeemail-cancel' => 'Cancillà',

# Edit page toolbar
'bold_sample' => 'Grassettu',
'bold_tip' => 'Grassettu',
'italic_sample' => 'Italicu',
'italic_tip' => 'Italicu',
'link_sample' => 'Titulu di u ligame',
'link_tip' => 'Ligame internu',
'extlink_tip' => 'Ligamu esternu (cù u prefissu http:// )',
'headline_sample' => 'Testu di intestatura',
'headline_tip' => 'Intestamentu di 2° livellu',
'nowiki_sample' => 'Inserisce quì u testu micca furmattatu',
'nowiki_tip' => 'Ignurà a furmattazione wiki',
'image_sample' => 'Esempiu.jpg',
'hr_tip' => 'Linia orizuntale (da imprudà incù ghjudiziu)',

# Edit pages
'minoredit' => 'Hè una mudifica minore',
'watchthis' => "Fighjulà 'ssa pagina",
'savearticle' => 'Arrighjistrà a pagina',
'preview' => 'Previsualisazione',
'showpreview' => 'Previsualizà',
'showdiff' => 'Mustrà i cambiamenti',
'anoneditwarning' => "'''Attenzione:''' Ùn ai micca fattu a cunnessione. U to indirizzu IP sarà salvatu in a cronolugia di sta pagina.",
'loginreqlink' => 'cunnessione',
'accmailtitle' => 'Parulla secreta inviata.',
'accmailtext' => 'A parulla secreta per "$1" hè stata inviata à l\'indirizzu $2.',
'newarticle' => '(Novu)',
'previewnote' => "'''Attentu: questa ùn hè ch'è una previsualisazzione.'''
E to mudifiche ùn sò ancora state salvate!",
'editing' => 'Mudifica di $1',
'creating' => 'A pagina $1 hà da esse creata',
'editingsection' => 'Mudifica di $1 (sezzione)',
'editingcomment' => 'Mudifica di $1 (cummentu)',
'editconflict' => 'Cunflittu di mudificazione: $1',
'yourtext' => 'U to testu',
'yourdiff' => 'Differenze',
'templatesused' => "{{PLURAL:$1|Mudellu imprudatu|Mudelli imprudati}} in 'ssa pagina:",
'template-protected' => '(prutettu)',
'template-semiprotected' => '(mezu prutettu)',
'hiddencategories' => 'Sta pagina appartene à {{PLURAL:$1|una categuria nascosta|$1 categurie nascoste}}:',

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''Attenti:''' a dimensione di i mudelli inclusi è troppa maiò.
Parechji mudelli ùn seranu micca inclusi.",
'post-expand-template-inclusion-category' => 'Pagine per e quale a dimensione di i mudelli inclusi supereghja a limita',
'post-expand-template-argument-category' => 'Pagine cuntinenti argumenti di mudellu mancanti',

# Account creation failure
'cantcreateaccounttitle' => 'Registramentu micca pussibile',

# History pages
'currentrev' => 'Ultima revisione',
'currentrev-asof' => 'Versione attuale di e $1',
'revisionasof' => 'Versione di e $1',
'revision-info' => 'Versione di e $4 à e $5 di $2',
'previousrevision' => '← Versione menu ricente',
'currentrevisionlink' => 'Ultima revisione',
'cur' => 'att',
'page_first' => 'prima',
'history-fieldset-title' => 'Parcorre a cronolugia',
'history-show-deleted' => 'Solu quelli cancellati',
'histfirst' => 'prima',
'histlast' => 'ultima',
'historysize' => '({{PLURAL:$1|1 ottettu|$1 ottetti}})',

# Revision feed
'history-feed-title' => 'Cronolugia di e revisione',
'history-feed-item-nocomment' => 'da $1 à $2',

# Revision deletion
'rev-delundel' => 'mustrà/piattà',
'revdelete-log' => 'Mutivu:',
'revdel-restore' => 'cambià a visibilità',

# History merging
'mergehistory-reason' => 'Mutivu:',

# Diffs
'history-title' => '$1: cronolugia di e mudifiche',
'lineno' => 'Linia $1:',
'compareselectedversions' => 'Paragunà e versione selezziunate',
'editundo' => 'Cancillà a modifica',

# Search results
'searchresults' => 'Risultati di a ricerca',
'searchresults-title' => 'Risultati di a ricerca di "$1"',
'prevn' => '{{PLURAL:$1|precidente|precidenti $1}}',
'nextn' => '{{PLURAL:$1|siguente|siguenti $1}}',
'prevn-title' => '{{PLURAL:$1|Risultatu precidente|$1 risultati precidenti}}',
'nextn-title' => '{{PLURAL:$1|Risultatu|$1 risultati}}',
'shown-title' => 'Mustrà {{PLURAL:$1|un risultatu|$1 risultati}} per pagina',
'searchmenu-exists' => "'''Esiste nantu à u situ una pagina intitulata \"[[:\$1]]\"'''",
'searchmenu-new' => 'Creà a pagina "[[:$1]]" annantu à \'ssu situ',
'searchprofile-articles' => 'Pagine di cuntenuti',
'searchprofile-project' => 'Pagine di aiutu è relative à u prugettu',
'searchprofile-everything' => 'Tuttu',
'searchprofile-advanced' => 'Avanzatu',
'searchprofile-articles-tooltip' => 'Circà in $1',
'searchprofile-project-tooltip' => 'Circà in $1',
'searchprofile-everything-tooltip' => 'Circà dapertuttu (incluse e pagine di discussione)',
'search-result-size' => '$1 ({{PLURAL:$2|1 parolla|$2 parolle}})',
'search-section' => '(sezzione $1)',
'search-suggest' => 'Forse vulii dì',
'searchrelated' => 'currilati',
'showingresultsheader' => "{{PLURAL:$5|Risultatu '''$1''' di '''$3'''|Risultati '''$1 - $2''' di '''$3'''}} per '''$4'''",
'search-nonefound' => 'A ricerca ùn hà micca datu risultati.',
'powersearch-ns' => 'Circà in u spaziu di nomi',

# Preferences page
'preferences' => 'Preferenze',
'mypreferences' => 'Preferenze',
'prefs-rc' => 'Ultimi cambiamenti',
'prefs-watchlist' => 'Articuli seguitati',
'columns' => 'Culonne:',
'searchresultshead' => 'Ricerca',
'localtime' => 'Ora lucale',
'allowemail' => 'Abilità a ricezzione di e-mail da altri utilizatori',
'prefs-files' => 'Schedarii',
'youremail' => 'Indirizzu di currieru elettronicu:',
'yourrealname' => 'Casata reale:',
'yourlanguage' => "Lingua di l'interfaccia:",
'yourvariant' => 'Variante',
'yournick' => 'Signatura pè e discussioni:',

# User rights
'editinguser' => "Mudifica di '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-groupsmember' => 'Membru di:',
'userrights-reason' => 'Mutivu:',

# Groups
'group' => 'Gruppu:',
'group-bot' => 'Boti',
'group-sysop' => 'Amministratori',
'group-bureaucrat' => 'Burocrati',
'group-all' => '(tutti)',

'group-bot-member' => 'Botu',
'group-sysop-member' => 'Amministratore',
'group-bureaucrat-member' => 'Burocratu',

'grouppage-bot' => '{{ns:project}}:Boti',
'grouppage-sysop' => '{{ns:project}}:Amministratori',
'grouppage-bureaucrat' => '{{ns:project}}:Burocrati',

# Special:Log/newusers
'newuserlogpage' => 'Novi cuntributori',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => "mudificà 'ssa pagina",

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|mudifica|mudifiche}}',
'recentchanges' => 'Ultimi cambiamenti',
'recentchanges-legend' => "Ozzione per l'ultime mudifiche",
'recentchanges-summary' => 'Sta pagina prisenta e mudifiche più recente à u cuntenutu di u situ.',
'recentchanges-label-newpage' => "'Ssa mudifica hà creatu una pagina nova",
'recentchanges-label-minor' => 'Hè una mudifica minore',
'recentchanges-label-bot' => 'Sta mudifica hè stata effettuata da un botu',
'recentchanges-label-unpatrolled' => 'Sta mudifica ùn hè ancu stata verificata',
'recentchanges-label-plusminus' => "A dimensione di a pagina hè stata cambiata di 'ssu numaru d'ottetti",
'recentchanges-legend-newpage' => '(vede ancu [[Special:NewPages|a lista di e pagine nove]])',
'rcnotefrom' => "Quì seguitanu e mudifiche dapoi u '''$2''' ('''$1''' à u massimu).",
'rclistfrom' => 'Mustrà e mudifiche dapoi u $1',
'rcshowhideminor' => '$1 i cambiamenti minori',
'rcshowhidebots' => '$1 i boti',
'rcshowhideliu' => '$1 i cuntributori righjistrati',
'rcshowhideanons' => '$1 i cuntributori anonimi',
'rcshowhidepatr' => '$1 e mudifiche verificate',
'rcshowhidemine' => '$1 e mo cuntribuzioni',
'rclinks' => "Mustrà l'ultime $1 mudifiche in i $2 ghjorni scorsi<br />$3",
'hist' => 'cron',
'hide' => 'piattà',
'show' => 'mustrà',
'rc-enhanced-hide' => 'Nasconde i dittagli',

# Recent changes linked
'recentchangeslinked' => 'Mudifiche assuciate',
'recentchangeslinked-feed' => 'Cambiamenti assuciati',
'recentchangeslinked-toolbox' => 'Cambiamenti assuciati',
'recentchangeslinked-title' => 'Mudifiche assuciate à "$1"',
'recentchangeslinked-page' => 'Nome di a pagina:',
'recentchangeslinked-to' => 'Mustrà solu e mudifiche à a pagine legate à quella specificata',

# Upload
'upload' => 'Incaricà un schedariu',
'uploadbtn' => 'Incaricà un schedariu',
'filename' => 'Nome di u schedariu',
'filestatus' => "Statu di u dirittu d'autore:",

'upload-file-error' => 'Errore internu',

'license' => 'Licenzia:',
'license-header' => 'Licenzia:',

# Special:ListFiles
'imgfile' => 'schedariu',
'listfiles_date' => 'Data',
'listfiles_name' => 'Nome',
'listfiles_user' => 'Utilizatore',

# File description page
'file-anchor-link' => 'Schedariu',
'filehist' => "Cronolugia di l'imagine",
'filehist-deleteone' => 'supprimà',
'filehist-user' => 'Cuntributore',
'filehist-dimensions' => 'Dimensione',
'filehist-comment' => 'Cummentu',
'imagelinks' => 'Usu di u schedariu',

# File reversion
'filerevert-comment' => 'Mutivu:',

# File deletion
'filedelete-comment' => 'Mutivu:',
'filedelete-submit' => 'Supprimà',

# Unused templates
'unusedtemplateswlh' => 'altri ligami',

# Random page
'randompage' => 'Pagina à casu',

# Statistics
'statistics' => 'Statistiche',
'statistics-header-users' => "Statistiche nant'à l'utilizatori",

'brokenredirects-edit' => 'mudificà',

# Miscellaneous special pages
'ncategories' => '$1 {{PLURAL:$1|categuria|categurie}}',
'nmembers' => '$1 {{PLURAL:$1|elementu|elementi}}',
'specialpage-empty' => 'Issa pagina hè biota.',
'popularpages' => 'Pagine populare',
'prefixindex' => 'Indice di e pagine per lettere iniziale',
'shortpages' => 'Pagine corte',
'longpages' => 'Pagine longhe',
'protectedpages' => 'Pagine prutette',
'listusers' => 'Listinu di i cuntributori',
'newpages' => 'Pagine nove',
'ancientpages' => 'Pagine vechje',
'move' => 'Cullucà',
'pager-newer-n' => '{{PLURAL:$1|1 più ricente|$1 più ricenti}}',
'pager-older-n' => '{{PLURAL:$1|1 menu ricente|$1 menu ricenti}}',

# Book sources
'booksources' => 'Libri di fonti',
'booksources-go' => 'Andà',

# Special:Log
'specialloguserlabel' => 'Utilizatore:',
'speciallogtitlelabel' => 'Titulu:',
'log' => 'Righjistramenti',
'all-logs-page' => "Tutte l'azzioni",

# Special:AllPages
'allpages' => 'Tutte e pagine',
'alphaindexline' => 'da $1 à $2',
'nextpage' => 'Pagina seguente ($1)',
'prevpage' => 'Pagina precedente ($1)',
'allpagesfrom' => 'Mustrà e pagine à parte da:',
'allarticles' => 'Tutte e pagine',
'allinnamespace' => 'Tutte e pagine di u spaziu $1',
'allpagessubmit' => 'Và',
'allpagesprefix' => 'Mustrà e pagine chì cumincianu cù:',
'allpages-bad-ns' => 'U spaziu "$1" ùn esiste micca nant\'à {{SITENAME}}',

# Special:Categories
'categories' => 'Categurie',

# Special:LinkSearch
'linksearch-ns' => 'Spaziu:',
'linksearch-ok' => 'Ricerca',
'linksearch-line' => '$1 hè culligatu à a pagina $2',

# Special:ListUsers
'listusers-submit' => 'Mustrà',

# Special:ListGroupRights
'listgrouprights-members' => '(Lista di i membri)',

# Email user
'emailuser' => "Scrive à 'ssu cuntributore",
'emailto' => 'À:',
'emailsubject' => 'Sughjettu:',
'emailmessage' => 'Messaghju:',
'emailsend' => 'Invià',

# Watchlist
'watchlist' => 'Seguitati',
'mywatchlist' => 'Seguitati',
'watchlistfor2' => 'Per $1 ($2)',
'watch' => 'Suvità',
'unwatch' => 'Ùn suvità micca',
'wlshowlast' => "Mustrà l'ultime $1 ore $2 ghjorni $3",

'enotif_reset' => 'Marcà tutte e pagine visitate',
'created' => 'creatu',
'changed' => 'cambiatu',

# Delete
'deletepage' => 'Supprimà a pagina',
'excontent' => "u cuntenutu era: '$1'",
'excontentauthor' => "u cuntenutu era: '$1' (è u solu cuntributore era '[[Special:Contributions/$2|$2]]')",
'exblank' => 'a pagina era biota',
'delete-legend' => 'Supprimà',
'actioncomplete' => 'Azzione compia',
'actionfailed' => 'Azione faltata',
'dellogpage' => 'Cancellamenti',
'deletecomment' => 'Mutivu:',

# Protect
'protectedarticle' => 'hai prutettu "[[$1]]"',
'prot_1movedto2' => 'hà mossu [[$1]] à [[$2]]',
'protect-legend' => 'Cunfirmà a prutezzione',
'protectcomment' => 'Mutivu:',
'protect-level-autoconfirmed' => 'Bluccà i cuntributori micca arrighjistrati',

# Restrictions (nouns)
'restriction-edit' => 'Mudificà',
'restriction-create' => 'Creà',

# Restriction levels
'restriction-level-autoconfirmed' => 'mezu prutettu',

# Undelete
'viewdeletedpage' => 'Fighjulà e p agine supprimate',
'undeleteviewlink' => 'vede',
'undeletecomment' => 'Mutivu:',
'undelete-search-box' => 'Circà e pagine supprimate',
'undelete-search-submit' => 'Ricerca',

# Namespace form on various pages
'namespace' => 'Spaziu:',
'blanknamespace' => '(Principale)',

# Contributions
'contributions' => 'Mudifiche fatte da i {{GENDER:$1|cuntributori|cuntributrici}}',
'contributions-title' => 'Cuntribuzione di $1',
'mycontris' => 'Cuntribuzioni',
'contribsub2' => 'Per {{GENDER:$3|$1}} ($2)',
'month' => 'Da u mese (è nanzu):',
'year' => "Da l'annu (è nanzu):",

'sp-contributions-newbies' => 'Mustrà solu e mudifiche di i novi cuntributori',
'sp-contributions-talk' => 'discussione',
'sp-contributions-search' => 'Ricercà e cuntribuzione',
'sp-contributions-submit' => 'Circà',

# What links here
'whatlinkshere' => 'Pagine chì leganu quì',
'whatlinkshere-title' => 'Pagine ligate à "$1"',
'linkshere' => "E seguente pagine sò culligate à '''[[:$1]]''':",
'istemplate' => 'inclusione',
'whatlinkshere-prev' => '{{PLURAL:$1|precidente|precidenti $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|seguente|seguenti $1}}',
'whatlinkshere-links' => '$1 ligami',
'whatlinkshere-hidetrans' => 'inclusione',
'whatlinkshere-hidelinks' => '$1 ligami',

# Block/unblock
'ipadressorusername' => 'Adrizzu IP o nome di cuntributore',
'ipbreason' => 'Mutivu:',
'ipboptions' => '2 ore:2 hours,1 ghjornu:1 day,3 ghjorni:3 days,1 sittimana:1 week,2 sittimane:2 weeks,1 mese:1 month,3 mesi:3 months,6 mesi:6 months,1 annu:1 year,infinitu:infinite',
'ipblocklist' => 'Cuntributori bluccati',
'blocklist-reason' => 'Mutivu',
'ipblocklist-submit' => 'Ricerca',
'anononlyblock' => 'solu i cuntributori anonimi',
'blocklink' => 'bluccà',
'unblocklink' => 'sbluccà',
'change-blocklink' => 'cambià u bloccu',
'contribslink' => 'cuntribuzione',
'blocklogentry' => 'ha bluccatu [[$1]] per un periodu di $2 $3',
'block-log-flags-anononly' => 'solu cuntributori anonimi',
'block-log-flags-nocreate' => 'registramentu pruibitu',

# Move page
'move-page-legend' => 'Move a pagina',
'movearticle' => 'Move a pagina',
'move-watch' => 'Fighjulà issa pagina',
'movepagebtn' => 'Move a pagina',
'movelogpagetext' => 'Elencu di e pagine mosse.',
'movereason' => 'Mutivu:',
'delete_and_move_confirm' => 'Iè, supprimà issa pagina',

# Export
'export' => 'Espurtà pagine',
'export-submit' => 'Espurtà',
'export-addcat' => 'Aghjunghje',

# Namespace 8 related
'allmessages' => 'Messagi di sistemu',
'allmessagesname' => 'Nome',
'allmessagesdefault' => 'Testu predefinitu',
'allmessagescurrent' => 'Testu attuale',
'allmessagestext' => 'Ista pagina riperturia a lista di tutti i messagi dispunibili in u spaziu MediaWiki. Per cuntribuì à a lucalizazione generica di MediaWiki, visità [[translatewiki:|Translatewiki.net]].',
'allmessagesnotsupportedDB' => "Ista pagina ùn hè dispunibile perchè '''\$wgUseDatabaseMessages''' ùn hè micca attivu.",
'allmessages-filter-legend' => 'Filtru',
'allmessages-filter' => 'Filtrà per statu di mudifica:',
'allmessages-filter-unmodified' => 'Micca mudificati',
'allmessages-filter-all' => 'Tutti',
'allmessages-filter-modified' => 'Mudificati',
'allmessages-prefix' => 'Filtrà per prefissu:',
'allmessages-language' => 'Lingua:',
'allmessages-filter-submit' => 'Applicà',

# Thumbnails
'thumbnail-more' => 'Allargà',

# Special:Import
'import-interwiki-submit' => 'Impurtà',
'importnopages' => 'Micca pagine da impurtà.',
'importfailed' => 'Importu fiascatu: $1',

# Import log
'importlogpage' => 'Importu log',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|revisione|revisione}}',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'A to pagina di cuntributore',
'tooltip-pt-mytalk' => 'A to pagina di discussione',
'tooltip-pt-preferences' => 'E to preferenze',
'tooltip-pt-watchlist' => "Lista di e pagine ch'è tù suviti",
'tooltip-pt-mycontris' => 'Lista di e to cuntribuzioni',
'tooltip-pt-login' => 'U registramentu hè suggeritu, micca ubligatoriu',
'tooltip-pt-logout' => 'Esce da a sessione',
'tooltip-ca-talk' => 'Vede e discussione relative à sta pagina',
'tooltip-ca-edit' => "Pò mudificà 'ssa pagina. Per piacè improda l'ozzione di previsualisazzione prima di salvà",
'tooltip-ca-addsection' => 'Cumincià una nova sezzione',
'tooltip-ca-viewsource' => 'Sta pagina hè prutetta, ma si pò vede u so codice surghjente',
'tooltip-ca-history' => 'Versione precedente di sta pagina',
'tooltip-ca-protect' => 'Prutege sta pagina',
'tooltip-ca-delete' => 'Supprime sta pagina',
'tooltip-ca-move' => "Move 'ssa pagina",
'tooltip-ca-watch' => "Aghjunghje 'ssa pagina à u listinu di e pagine ch'è tù suviti",
'tooltip-search' => 'Circà in {{SITENAME}}',
'tooltip-search-go' => "Andà à una pagina incù u titolu indicatu, s'ella esiste",
'tooltip-search-fulltext' => 'Circà e pagine cuntinenti stu testu',
'tooltip-p-logo' => 'Pagina maestra',
'tooltip-n-mainpage' => 'Andà à a Pagina maestra',
'tooltip-n-mainpage-description' => 'Andà à a pagina maestra',
'tooltip-n-portal' => 'À prupositu di u prugettu, ciò chì si pò fà, induve truvà qualcosa',
'tooltip-n-currentevents' => "Informazione nantu à l'evvenimenti di attualità",
'tooltip-n-recentchanges' => "Listinu di l'ultime mudifiche di u situ",
'tooltip-n-randompage' => "Sceglie una pagina à l'accasu",
'tooltip-n-help' => 'Pagine di aiutu',
'tooltip-t-whatlinkshere' => 'Listinu di tutte e pagine chì sò ligate à quessa',
'tooltip-t-recentchangeslinked' => "Versione di l'ultime mudifiche à e pagine legate à quessa",
'tooltip-t-contributions' => "Listinu di e mudifiche di 'ssu cuntributore",
'tooltip-t-specialpages' => 'Listinu di tutte e pagine spiciale',
'tooltip-t-print' => "Versione stampevule di 'ssa pagina",
'tooltip-t-permalink' => 'Ligame permanente à e revisione di sta pagina',
'tooltip-ca-nstab-main' => "Vede u cuntenutu di l'articulu",
'tooltip-ca-nstab-user' => 'Vede a pagina di cuntributore',
'tooltip-ca-nstab-project' => 'Vede a pagina di u prugettu',
'tooltip-ca-nstab-template' => 'Vede u mudellu',
'tooltip-ca-nstab-category' => 'Vede a pagina di categuria',
'tooltip-minoredit' => "Signalà com'è mudifica minore",
'tooltip-save' => 'Arrighjistrà i cambiamenti',
'tooltip-preview' => 'Previsualizà i cambiamenti (si cunsiglia di salvà prima)',
'tooltip-diff' => 'Mustrà e mudifiche fatte à u testu',
'tooltip-compareselectedversions' => 'Vede e differenze trà e dui versione selezziunate di sta pagina.',

# Attribution
'anonymous' => '{{PLURAL:$1|Utilizatore anonimu|Utilizatori anonimi}} di {{SITENAME}}',
'others' => 'altri',

# Info page
'pageinfo-toolboxlink' => 'Infurmazione annantu à a pagina',

# Media information
'file-nohires' => 'Una diversione incù una risoluzione più alta ùn hè micca dispunibile.',
'show-big-image' => 'Schedariu originale',
'show-big-image-other' => '{{PLURAL:$2|Altra risuluzione|Altre risuluzioni}}: $1.',

# Special:NewFiles
'showhidebots' => '($1 boti)',
'noimages' => 'Nulla da vede.',
'ilsubmit' => 'Ricerca',
'bydate' => 'per data',

# Exif tags
'exif-orientation' => 'Orientazione',
'exif-imagedescription' => "Titulu di l'imagine",
'exif-artist' => 'Autore',
'exif-usercomment' => "Cummenti di l'utilizatore",

'exif-orientation-1' => 'Nurmale',

'exif-componentsconfiguration-0' => 'ùn esiste micca',

'exif-meteringmode-255' => 'Altru',

'exif-scenecapturetype-2' => 'Ritrattu',

'exif-contrast-0' => 'Nurmale',

'exif-saturation-0' => 'Nurmale',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'tutte',
'monthsall' => 'tutti',

# action=purge
'confirm_purge_button' => "D'accordu",

# Table pager
'table_pager_next' => 'Pagina seguente',
'table_pager_prev' => 'Pagina precedente',
'table_pager_first' => 'Prima pagina',
'table_pager_last' => 'Ultima pagina',
'table_pager_limit' => 'Mustrà $1 elementi per pagina',
'table_pager_limit_label' => 'Risultati per pagina:',
'table_pager_limit_submit' => 'Invià',
'table_pager_empty' => 'Micca risultati',

# Auto-summaries
'autoredircomment' => 'Reindirizzamentu à [[$1]]',
'autosumm-new' => 'Pagina nova: $1',

# Watchlist editor
'watchlistedit-raw-titles' => 'Pagine:',

# Watchlist editing tools
'watchlisttools-view' => 'Vede e modifiche assuciate',

# Special:Version
'version' => 'Versione',
'version-specialpages' => 'Pagine spiciale',

# Special:SpecialPages
'specialpages' => 'Pagine spiciale',

# Special:Tags
'tags-edit' => 'mudificà',

# New logging system
'logentry-move-move' => '$1 {{GENDER:$2|hà spustatu}} a pagina $3 à $4',
'rightsnone' => '(nessunu)',

# Special:ExpandTemplates
'expand_templates_output' => 'Risultatu',

);
