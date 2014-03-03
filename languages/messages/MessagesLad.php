<?php
/** Ladino (Ladino)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author ILVI
 * @author Jewbask
 * @author Maor X
 * @author Menachem.Moreira
 * @author Remember the dot
 * @author Runningfridgesrule
 * @author Taichi
 * @author Universal Life
 * @author לערי ריינהארט
 */

$fallback = 'es';

$namespaceNames = array(
	NS_MEDIA            => 'Medya',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Diskusyón',
	NS_USER             => 'Usador',
	NS_USER_TALK        => 'Messaje_de_Usador',
	NS_PROJECT_TALK     => 'Diskusyón_de_$1',
	NS_FILE             => 'Dosya',
	NS_FILE_TALK        => 'Diskusyón_de_Dosya',
	NS_MEDIAWIKI        => 'MedyaViki',
	NS_MEDIAWIKI_TALK   => 'Diskusyón_de_MedyaViki',
	NS_TEMPLATE         => 'Xablón',
	NS_TEMPLATE_TALK    => 'Diskusyón_de_Xablón',
	NS_HELP             => 'Ayudo',
	NS_HELP_TALK        => 'Diskusyón_de_Ayudo',
	NS_CATEGORY         => 'Kateggoría',
	NS_CATEGORY_TALK    => 'Diskusyón_de_Kateggoría',
);

$namespaceAliases = array(
	// Backward compat. Fallbacks from 'es'.
	'Especial'            => NS_SPECIAL,
	'Discusión'           => NS_TALK,
	'Usuario'             => NS_USER,
	'Usuario_Discusión'   => NS_USER_TALK,
	'$1_Discusión'        => NS_PROJECT_TALK,
	'Archivo'             => NS_FILE,
	'Archivo_Discusión'   => NS_FILE_TALK,
	'MediaWiki_Discusión' => NS_MEDIAWIKI_TALK,
	'Plantilla'           => NS_TEMPLATE,
	'Plantilla_Discusión' => NS_TEMPLATE_TALK,
	'Ayuda'               => NS_HELP,
	'Ayuda_Discusión'     => NS_HELP_TALK,
	'Categoría'           => NS_CATEGORY,
	'Categoría_Discusión' => NS_CATEGORY_TALK,

	'Meddia'                   => NS_MEDIA,
	'Diskussión'               => NS_TALK,
	'Empleador'                => NS_USER,
	'Message_de_Empleador'     => NS_USER_TALK,
	'Diskussión_de_$1'         => NS_PROJECT_TALK,
	'Dossia'                   => NS_FILE,
	'Diskussión_de_Dossia'     => NS_FILE_TALK,
	'Diskussión_de_Xabblón'    => NS_MEDIAWIKI_TALK,
	'Xabblón'                  => NS_TEMPLATE,
	'Diskusyón_de_Xabblón'     => NS_TEMPLATE_TALK,
	'Diskussión_de_Ayudo'      => NS_HELP_TALK,
	'Katēggoría'               => NS_CATEGORY,
	'Diskusyón_de_Katēggoría'  => NS_CATEGORY_TALK,
);

// Remove Spanish gender aliases (bug 37090)
$namespaceGenderAliases = array();

$specialPageAliases = array(
	'Activeusers'               => array( 'UsadoresAktivos' ),
	'Allmessages'               => array( 'TodosLosMessajes' ),
	'Allpages'                  => array( 'TodasLasHojas' ),
	'Ancientpages'              => array( 'HojasViejas' ),
	'Blankpage'                 => array( 'VaziarHoja' ),
	'Block'                     => array( 'Bloquear' ),
	'Booksources'               => array( 'FuentesDeLivros' ),
	'BrokenRedirects'           => array( 'DireksionesBozeadas' ),
	'Categories'                => array( 'Katēggorías' ),
	'ChangePassword'            => array( 'TrocarKóddiche' ),
	'ComparePages'              => array( 'KompararHojas' ),
	'Confirmemail'              => array( 'AverdadearLetral' ),
	'Contributions'             => array( 'Àjustamientos' ),
	'CreateAccount'             => array( 'KrîarCuento' ),
	'Deadendpages'              => array( 'HojasSinAtamientos' ),
	'DeletedContributions'      => array( 'AjustamientosEfassados' ),
	'DoubleRedirects'           => array( 'DireksionesDobles' ),
	'EditWatchlist'             => array( 'TrocarLista_de_Akavidamiento' ),
	'Emailuser'                 => array( 'MandarLetralUsador' ),
	'ExpandTemplates'           => array( 'AlargarXabblones' ),
	'Export'                    => array( 'AktarearAfuera' ),
	'Fewestrevisions'           => array( 'MankoEddisyones' ),
	'FileDuplicateSearch'       => array( 'BuscarDosyasDobles' ),
	'Filepath'                  => array( 'Pozisyón_de_dosya' ),
	'Import'                    => array( 'AktarearAriento' ),
	'Invalidateemail'           => array( 'DesverdadearLetral' ),
	'BlockList'                 => array( 'UsadoresBloqueados' ),
	'LinkSearch'                => array( 'Busqueda_de_atamientos' ),
	'Listadmins'                => array( 'ListaDeAdministradores' ),
	'Listbots'                  => array( 'ListaDeBotes' ),
	'Listfiles'                 => array( 'ListaDosyas' ),
	'Listgrouprights'           => array( 'DerechosGruposUsadores' ),
	'Listredirects'             => array( 'TodasLasDireksyones' ),
	'Listusers'                 => array( 'ListaUsadores' ),
	'Lockdb'                    => array( 'BloquearBasa_de_dados' ),
	'Log'                       => array( 'Rējistro' ),
	'Lonelypages'               => array( 'HojasHuérfanas' ),
	'Longpages'                 => array( 'HojasLargas' ),
	'MergeHistory'              => array( 'ÀjuntarÎstoria' ),
	'MIMEsearch'                => array( 'BuscarPorMIME' ),
	'Mostcategories'            => array( 'MásKateggorizadas' ),
	'Mostimages'                => array( 'DosyasLoMásMunchoLinkeadas' ),
	'Mostlinked'                => array( 'HojasLoMásMunchoLinkeadas' ),
	'Mostlinkedcategories'      => array( 'KatēggoríasMásUsadas' ),
	'Mostlinkedtemplates'       => array( 'XablonesMásUsados' ),
	'Mostrevisions'             => array( 'MásEddisyones' ),
	'Movepage'                  => array( 'TaxirearHoja' ),
	'Mycontributions'           => array( 'MisÀjustamientos' ),
	'Mypage'                    => array( 'MiHoja' ),
	'Mytalk'                    => array( 'MiDiskusyón' ),
	'Myuploads'                 => array( 'MisCargamientos' ),
	'Newimages'                 => array( 'MuevasDosyas' ),
	'Newpages'                  => array( 'HojasMuevas' ),
	'PasswordReset'             => array( 'Meter_á_zero_el_kóddiche' ),
	'PermanentLink'             => array( 'AtamientoPermanente' ),
	'Popularpages'              => array( 'HojasMásVisitadas' ),
	'Preferences'               => array( 'Preferencias' ),
	'Prefixindex'               => array( 'Fijhrist_de_prefiksos' ),
	'Protectedpages'            => array( 'HojasGuardadas' ),
	'Protectedtitles'           => array( 'TítůlosGuardados' ),
	'Randompage'                => array( 'KualunkeHoja' ),
	'Randomredirect'            => array( 'KualunkeDireksyón' ),
	'Recentchanges'             => array( 'TrocamientosFreskos' ),
	'Recentchangeslinked'       => array( 'TrocamientosÈnterassados' ),
	'Revisiondelete'            => array( 'EfassarRēvizyón' ),
	'Search'                    => array( 'Buscar' ),
	'Shortpages'                => array( 'HojasKurtas' ),
	'Specialpages'              => array( 'HojasEspesyales' ),
	'Statistics'                => array( 'Estatistika' ),
	'Tags'                      => array( 'Etiketas' ),
	'Unblock'                   => array( 'Desblokea' ),
	'Uncategorizedcategories'   => array( 'KatēggoríasNoKateggorizadas' ),
	'Uncategorizedimages'       => array( 'DosyasNoKateggorizadas' ),
	'Uncategorizedpages'        => array( 'HojasNoKateggorizadas' ),
	'Uncategorizedtemplates'    => array( 'XablonesNoKateggorizados' ),
	'Undelete'                  => array( 'TraerAtrás' ),
	'Unlockdb'                  => array( 'DesblokearBasa_de_dados' ),
	'Unusedcategories'          => array( 'KatēggoríasSinUso' ),
	'Unusedimages'              => array( 'DosyasSinUso' ),
	'Unusedtemplates'           => array( 'XablonesSinUso' ),
	'Unwatchedpages'            => array( 'HojasSinKudiadas' ),
	'Upload'                    => array( 'KargarDosya' ),
	'UploadStash'               => array( 'Muchedumbre_de_kargamientos' ),
	'Userlogin'                 => array( 'Entrada_del_usador' ),
	'Userlogout'                => array( 'Salida_del_usador' ),
	'Userrights'                => array( 'DerechosUsadores' ),
	'Version'                   => array( 'Versión' ),
	'Wantedcategories'          => array( 'KatēggoríasDemandadas' ),
	'Wantedfiles'               => array( 'DosyasDemandadas' ),
	'Wantedpages'               => array( 'HojasDemandadas' ),
	'Wantedtemplates'           => array( 'XablonesDemandados' ),
	'Watchlist'                 => array( 'Lista_de_eskojidos' ),
	'Whatlinkshere'             => array( 'LoKeSeAtaKonAkí' ),
	'Withoutinterwiki'          => array( 'SinIntervikis' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#DIRIJAR', '#DIRECCIÓN', '#REDIRECCIÓN', '#REDIRECCION', '#REDIRECT' ),
	'fullpagename'              => array( '1', 'NOMBREDEHOJACOMPLETA', 'NOMBREDEPÁGINACOMPLETA', 'NOMBREDEPAGINACOMPLETA', 'NOMBREDEPÁGINAENTERA', 'NOMBREDEPAGINAENTERA', 'NOMBRECOMPLETODEPÁGINA', 'NOMBRECOMPLETODEPAGINA', 'FULLPAGENAME' ),
	'subpagename'               => array( '1', 'NOMBREDEHOJICA', 'NOMBREDESUBPAGINA', 'NOMBREDESUBPÁGINA', 'SUBPAGENAME' ),
	'msg'                       => array( '0', 'MSJ:', 'MSG:' ),
	'img_left'                  => array( '1', 'cierda', 'izquierda', 'izda', 'izq', 'left' ),
	'img_none'                  => array( '1', 'dinguna', 'dinguno', 'ninguna', 'nada', 'no', 'ninguno', 'none' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Suliñar los atamientos:',
'tog-hideminor' => 'Esconder los trocamientos chikos en la hoja de los "trocamientos freskos"',
'tog-hidepatrolled' => 'Esconder los trocamientos surveyados en la hoja de los "trocamientos freskos"',
'tog-newpageshidepatrolled' => 'Esconder las hojas surveyadas de la lista de las hojas muevas',
'tog-extendwatchlist' => 'Anchar mi lista de akavidamiento afín de àmostrar todos los trocamientos, no sólo los muevos',
'tog-usenewrc' => 'Agrupar kambios por pajinas en kambios resiente y lista',
'tog-numberheadings' => 'Numerotar otomatika mente los títolos de los kapítolos',
'tog-showtoolbar' => 'Amostrar el chibuk de aparatos',
'tog-editondblclick' => 'Trocar las hojas con doble klik',
'tog-editsectiononrightclick' => 'Pueder trocar los kapítůlos, en pizando el botón derecho del ratón encima el títůlo',
'tog-rememberpassword' => 'Acordarse de mi entrada en este navigador (a lo más muńcho $1 {{PLURAL:$1|día|días}})',
'tog-watchcreations' => 'Anyadir lad pajinas ke kree i archivos ke karge a mi lista',
'tog-watchdefault' => 'Anyadir pajinas i archivos ke edite a mi lista',
'tog-watchmoves' => 'Anyadir pajinas i archivo ke move a mi lista',
'tog-watchdeletion' => 'Anyadir pajinas i archivos que efasso a mi lista',
'tog-minordefault' => 'Yir marcando todos los trocamientos como chiquiticos',
'tog-previewontop' => 'Àmostar el previsteo enriva del cuadro de trocamiento',
'tog-previewonfirst' => 'Àmostar el previsteo al primer trocamiento',
'tog-enotifwatchlistpages' => 'Embiame un korreo elektroniko kuando una pajina o archivo kambia en mi lista',
'tog-enotifusertalkpages' => 'Cuando y ay un trocamineto en mi hoja de diskusyón, mándame una letral (e-mail)',
'tog-enotifminoredits' => 'Tambien embiame un korreo elektroniko para los trocamientos chiquiticos de pajnas i archivos',
'tog-enotifrevealaddr' => 'En las letrales de avizo, amóstrame á mi el adresso de letral mío',
'tog-shownumberswatching' => 'Àmostrar el kadhar de usadores que están akavidando las hojas',
'tog-oldsig' => 'La firma presente',
'tog-fancysig' => 'Tratar la firma como un vikiteksto (sin un atamiento otomatiko)',
'tog-uselivepreview' => 'Usar el "previsteo bivo" (eksperimental)',
'tog-forceeditsummary' => 'Avizarme cuando dexo el somaryo vazío',
'tog-watchlisthideown' => 'Esconder mis trocamientos en mi lista de akavidamiento',
'tog-watchlisthidebots' => 'Esconder trocamientos de bot en mi lista de akavidamiento',
'tog-watchlisthideminor' => 'Esconder trocamientos chiquiticos en mi lista de akavidamiento',
'tog-watchlisthideliu' => 'Esconder trocamientos de los usadores enrejistrados en mi lista de akavidamiento',
'tog-watchlisthideanons' => 'Esconder trocamientos de los usadores anōnimes en mi lista de akavidamiento',
'tog-watchlisthidepatrolled' => 'Esconder trocamientos surveyados en mi lista de akavidamiento',
'tog-ccmeonemails' => 'Mandarme copias de las letrales (e-mail) que mando a otros usadores',
'tog-diffonly' => 'No amostrar el contenido de la hoja debaxo las diffes (diferencias entre los trocamientos)',
'tog-showhiddencats' => 'Amostrar las katēggorías escondidas',
'tog-norollbackdiff' => 'No amostrar la diff doeśpués de aboltar',
'tog-useeditwarning' => 'Avirteme kuando desho la pajina sin guardar los kambios',
'tog-prefershttps' => 'Siempre uza un koneksyon segura kuando entra al sistema',

'underline-always' => 'Siempre',
'underline-never' => 'Nunca',
'underline-default' => 'Aspekto o opsyon prederminada del navegador',

# Font style option in Special:Preferences
'editfont-style' => 'Modo de tipografía de la rējión de trocamiento',
'editfont-default' => 'Modo supozado del navigador',
'editfont-monospace' => 'Tipografía que cuvre lugar fikso',
'editfont-sansserif' => 'Tipografía sans-serif',
'editfont-serif' => 'Tipografía serif',

# Dates
'sunday' => 'Alḥad',
'monday' => 'Lunes',
'tuesday' => 'Martes',
'wednesday' => 'Miércoles',
'thursday' => 'Juğeves',
'friday' => 'Viernes',
'saturday' => 'Shabbath',
'sun' => 'Alḥ',
'mon' => 'Lun',
'tue' => 'Mar',
'wed' => 'Mie',
'thu' => 'Juğ',
'fri' => 'Vie',
'sat' => 'Shab',
'january' => 'Jenero',
'february' => 'Febrero',
'march' => 'Março',
'april' => 'Abril',
'may_long' => 'Mayo',
'june' => 'Juño',
'july' => 'Julio',
'august' => 'Agosto',
'september' => 'Setiembre',
'october' => 'Ochobre',
'november' => 'Noviembre',
'december' => 'Diziembre',
'january-gen' => 'Jenero',
'february-gen' => 'Febrero',
'march-gen' => 'Março',
'april-gen' => 'Abril',
'may-gen' => 'Mayo',
'june-gen' => 'Juño',
'july-gen' => 'Julio',
'august-gen' => 'Agosto',
'september-gen' => 'Setiembre',
'october-gen' => 'Ochobre',
'november-gen' => 'Noviembre',
'december-gen' => 'Diziembre',
'jan' => 'Jen',
'feb' => 'Feb',
'mar' => 'Mar',
'apr' => 'Abr',
'may' => 'May',
'jun' => 'Juñ',
'jul' => 'Jul',
'aug' => 'Ago',
'sep' => 'Set',
'oct' => 'Ocho',
'nov' => 'Nov',
'dec' => 'Diz',
'january-date' => 'Jenero $1',
'february-date' => 'Fevrero $1',
'march-date' => 'Marso $1',
'april-date' => 'Avril $1',
'may-date' => 'Mayo $1',
'june-date' => 'Junio $1',
'july-date' => 'Djulio $1',
'august-date' => 'Agosto $1',
'september-date' => 'Sietembre $1',
'october-date' => 'Oktubre $1',
'november-date' => 'Noviembre $1',
'december-date' => 'Disiembre $1',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategoría|Kategorías}}',
'category_header' => 'Artíkolos en la kategoría "$1"',
'subcategories' => 'Sòkategorías',
'category-media-header' => 'Dosyas de multimedya en la kategoría "$1"',
'category-empty' => "''Esta kategoría oy día, no contiene ni hojas ni dosyas de multimedya''",
'hidden-categories' => '{{PLURAL:$1|Kategoría escondida|Kategorías escondidas}}',
'hidden-category-category' => 'Katēggorías escondidas',
'category-subcat-count' => '{{PLURAL:$2|Esta kategoría contiene sólo la su-kategoría venidera.|Esta kategoría contiene {{PLURAL:$1|la su-kategoría venidera|$1 su-kategorías venideras}}, de un total de $2 su-kategorías.}}',
'category-subcat-count-limited' => 'Esta katēggoría contiene {{PLURAL:$1|la baxo-katēggoría venidera|$1 baxo-katēggorías venideras}}.',
'category-article-count' => '{{PLURAL:$2|Esta kategoría contiene sólo la hoja venidera.|{{PLURAL:$1|La hoja venidera apartiene|Las $1 hojas venideras apartienen}} a esta kategoría, de un total de $2.}}',
'category-article-count-limited' => '{{PLURAL:$1|La hoja venidera apartiene|Las $1 hojas venideras apartienen}} a esta katēggoría.',
'category-file-count' => '{{PLURAL:$2|Esta katēggoría contiene sólo la dosya venidera.|{{PLURAL:$1|La dosya venidera apartiene|Las $1 dosyas venideras apartienen}} a esta katēggoría, de un total de $2.}}',
'category-file-count-limited' => '{{PLURAL:$1|La dosya venidera apartiene|Las $1 dosyas venideras apartienen}} a esta katēggoría.',
'listingcontinuesabbrev' => 'cont.',
'index-category' => 'Hojas arregladas en lista',
'noindex-category' => 'Hojas no arregladas en lista',
'broken-file-category' => 'Hojas que tienen atamientos rotos de arxivos',

'about' => 'Encima de',
'article' => 'Artícůlo de contenido',
'newwindow' => '(se avre en una mueva ventana)',
'cancel' => 'Anular',
'moredotdotdot' => 'Mas...',
'morenotlisted' => 'Esta lista no esta kompleta',
'mypage' => 'Hoja',
'mytalk' => 'Diskusyón',
'anontalk' => 'Diskusyón para este adresso de IP',
'navigation' => 'Navigación',
'and' => '&#32;i',

# Cologne Blue skin
'qbfind' => 'Topar',
'qbbrowse' => 'Navigar',
'qbedit' => 'Trocar',
'qbpageoptions' => 'Esta hoja',
'qbmyoptions' => 'Mis hojas',
'faq' => 'DDS',
'faqpage' => 'Project:DDS',

# Vector skin
'vector-action-addsection' => 'Ajustar sujeto',
'vector-action-delete' => 'Efassar',
'vector-action-move' => 'Taşirear',
'vector-action-protect' => 'Guadrar',
'vector-action-undelete' => 'Traer atrás',
'vector-action-unprotect' => 'Trocar proteksyon',
'vector-view-create' => 'Criar',
'vector-view-edit' => 'Trocar',
'vector-view-history' => 'Ver la istoria',
'vector-view-view' => 'Meldar',
'vector-view-viewsource' => 'Ver su manadero',
'actions' => 'Aksiones',
'namespaces' => 'Espacios de nombres',
'variants' => 'Variantes',

'navigation-heading' => 'Menu de navigasyon',
'errorpagetitle' => 'Yerro',
'returnto' => 'Tornar a $1.',
'tagline' => 'De {{SITENAME}}',
'help' => 'Ayudo',
'search' => 'Buxcar',
'searchbutton' => 'Buxcar',
'go' => 'Ir',
'searcharticle' => 'Ir',
'history' => 'La istoria de la hoja',
'history_short' => 'Istoria',
'updatedmarker' => 'trocado desde mi visita de alcavo',
'printableversion' => 'La forma parâ imprimir',
'permalink' => 'Atamiento permanente',
'print' => 'Imprimir',
'view' => 'Ver',
'edit' => 'Trocar',
'create' => 'Criar',
'editthispage' => 'Trocar esta hoja',
'create-this-page' => 'Criar esta hoja',
'delete' => 'Efaçar',
'deletethispage' => 'Efassar esta hoja',
'undeletethispage' => 'Restorar esta pajina',
'undelete_short' => 'Traer atrás $1 {{PLURAL:$1|trocamientos|trocamientos}}',
'viewdeleted_short' => 'Ver {{PLURAL:$1|un trocamiento efassado|$1 trocamientos efassados}}',
'protect' => 'Guadrar',
'protect_change' => 'trocar',
'protectthispage' => 'Guardar esta hoja',
'unprotect' => 'Trocar guardadijo',
'unprotectthispage' => 'Trocar el guardadijo desta hoja',
'newpage' => 'Hoja mueva',
'talkpage' => 'Diskutir la hoja',
'talkpagelinktext' => 'Messaje',
'specialpage' => 'Hoja Especial',
'personaltools' => 'Aparates personales',
'postcomment' => 'Capítůlo muevo',
'articlepage' => 'Ver el artícůlo de contenido',
'talk' => 'Diskusyón',
'views' => 'Vistas',
'toolbox' => 'Aparates',
'userpage' => 'Ver la hoja del usador',
'projectpage' => 'Ver la hoja del projeto',
'imagepage' => 'Ver la hoja de la dosya',
'mediawikipage' => 'Ver la hoja de messaje',
'templatepage' => 'Ver la hoja del xablón',
'viewhelppage' => 'Ver la hoja de ayudo',
'categorypage' => 'Ver la hoja de la katēggoría',
'viewtalkpage' => 'Ver la diskusyón',
'otherlanguages' => 'En otras linguas',
'redirectedfrom' => '(Redirijado de $1)',
'redirectpagesub' => 'Hoja redirigida',
'lastmodifiedat' => 'Esta hoja fue trocada por la vez dalcavo en el $1, a las $2 la ora.',
'viewcount' => 'Este pajina fue vijitado {{PLURAL:$1|una vez|$1 vezes}}.',
'protectedpage' => 'Hoja guardada',
'jumpto' => 'Saltar a:',
'jumptonavigation' => 'navigación',
'jumptosearch' => 'buxcar',
'view-pool-error' => 'Diskulpe, los servidores estan sovrekargado en est momento.
Ay demaziado usuarios estan aprovando a ver esta pajina.
Aspera un momento antes de aprovar esta pajina de muevo.

$1',
'pool-timeout' => 'Tiempo de asperar esta asperando por el kandado',
'pool-queuefull' => 'Kola de lavoro esta yeno',
'pool-errorunknown' => 'Yerro deskonosido',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'Encima de {{SITENAME}}',
'aboutpage' => 'Project:Encima de',
'copyright' => 'El kontenido se puede topar debasho de la $1 salvo ke indika al kontrario.',
'copyrightpage' => '{{ns:project}}:Derechos del otor',
'currentevents' => 'Novedades',
'currentevents-url' => 'Project:Novedades',
'disclaimers' => 'Refuzo de responsabilitá',
'disclaimerpage' => 'Project:Refuzo de responsabilitá jeneral',
'edithelp' => '¿Cómo se la troca?',
'helppage' => 'Help:Contènidos',
'mainpage' => 'La Primera Hoja',
'mainpage-description' => 'La Primera Hoja',
'policy-url' => 'Project:Politikas',
'portal' => 'Portal de la komunitá',
'portal-url' => 'Project:Portal de la komunitá',
'privacy' => 'Prencipio de partikolaridad',
'privacypage' => 'Project:Prencipio de partikolaridad',

'badaccess' => 'Yerro de permissión',
'badaccess-group0' => 'No estas autorizado a egzekutir el aksyon que a demandado.',
'badaccess-groups' => 'El aksyon ke a demandado esta limitado a los usuarios ke estan en {{PLURAL:$2|el grupo|uno de los grupos}}: $1',

'versionrequired' => 'Se nesesite la versyon $1 de MediaWiki',
'versionrequiredtext' => 'Se nesesita versyon $1 de MediaWiki para uzar este pajina. Ver [[Special:Version|La pajina de versyon]].',

'ok' => 'DE ACORDDO',
'retrievedfrom' => 'Acojido del adresso "$1"',
'youhavenewmessages' => '{{PLURAL:$3|Tienes}} $1 ($2).',
'youhavenewmessagesfromusers' => '{{PLURAL:$4|Tiene}} $1 de {{PLURAL:$3|otro usuario|$3 usuarios}}($2).',
'youhavenewmessagesmanyusers' => 'Tiene $1 de munchos usuarios ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|un muevo mesaje|999=mesajes muevos}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|ulitmo kambio|999=ultimos kambios}}',
'youhavenewmessagesmulti' => 'Tienes messajes nuevos en $1',
'editsection' => 'trocar',
'editold' => 'trocar',
'viewsourceold' => 'Ver su manadero',
'editlink' => 'trocar',
'viewsourcelink' => 'ver su manadero',
'editsectionhint' => 'Troca el kapítolo: $1',
'toc' => 'Contènidos',
'showtoc' => 'Amostrar',
'hidetoc' => 'esconder',
'collapsible-collapse' => 'Eskonder',
'collapsible-expand' => 'Revelar',
'thisisdeleted' => 'Ver o restorar $1?',
'viewdeleted' => 'Desea ver $1?',
'restorelink' => '{{PLURAL:$1|un edisyon efasada|$1 edisyones efasadas}}',
'feedlinks' => 'Kanal:',
'feed-invalid' => 'Tipo de kanal de subskripsyon es invalido.',
'feed-unavailable' => 'Kanales de subskripsyon no estan disponibles',
'site-rss-feed' => 'Fuente de RSS de $1',
'site-atom-feed' => 'Canal Atomo de $1',
'page-rss-feed' => '"$1" Fuente RSS',
'page-atom-feed' => 'Canal Atomo de $1',
'red-link-title' => '$1 (la hoja no egziste)',
'sort-descending' => 'Atakanar en orden desendente',
'sort-ascending' => 'Atakanar en orden asendente',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Hoja',
'nstab-user' => 'Hoja de usador',
'nstab-media' => 'Hoja de Meddia',
'nstab-special' => 'Hoja especial',
'nstab-project' => 'Hoja del projeto',
'nstab-image' => 'Dosya',
'nstab-mediawiki' => 'Messaj',
'nstab-template' => 'Şablón',
'nstab-help' => 'Ayudo',
'nstab-category' => 'Kategoría',

# Main script and global functions
'nosuchaction' => 'No egziste esa aksyon',
'nosuchactiontext' => 'La aksyon espesefikada por el URL es invalido.
Es posivle ke el URL fue eskrito mal, o ke segite un enlase inkorrecto.
Tambiem puede indikar un yerro en la programa uzado por {{SITENAME}}.',
'nosuchspecialpage' => 'No ay tala hoja especial',
'nospecialpagetext' => '<strong>Demandaste una pajina espesial invalida.</strong>

Puede topar una lista de pajinas espesiales validas en[[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Yerro',
'databaseerror' => 'Yerro de la Databasa',
'databaseerror-text' => 'Afito un yerro en la demanda del base de data.
Esto puede indikar un yerro en la programa.',
'databaseerror-textcl' => 'Afito un yerro en la demanda del base de data.',
'databaseerror-query' => 'Demanda: $1',
'databaseerror-function' => 'Fonksyon: $1',
'databaseerror-error' => 'Yerro: $1',
'laggedslavemode' => "'''Aviso:''' Puede ke la pajina no kontiene las aktualizasyones mas resientes.",
'readonly' => 'Base de datos blokeada',
'enterlockreason' => 'Eskrive un razon por el blokeo,incluyendo un estimasyon de kuando libera el blokeo',
'readonlytext' => 'La base de datos esta blokeada a muevas entradas i otras modifikasyones,probablemente para mantenemento rutinas, Kuando akava se enkontra dispozible.

El administrador ke blokeo dio esta esplikasyon: $1',
'missing-article' => 'La basa de dados no topó el teksto de una hoja llamada "$1" $2.

En lo mas muncho esto passa por cavsa de un atamiento (link) istoriko a una hoja efaçada.

Si esto no es el cavso, puede ser que topates una chincha (un yerro) en el lojikal (la proǵrama).
Alora, házemos el plazer de avisar un [[Special:ListUsers/sysop|administrador]] y también de escrivirlo la URL (el adresso). Mercí muncho.',
'missingarticle-rev' => '(nº. de revisión: $1)',
'missingarticle-diff' => '(Dif.: $1, $2)',
'readonly_lag' => 'La base de datos se a blokeado mientres los servidores se sinkronizan',
'internalerror' => 'Yerro enterno',
'internalerror_info' => 'Yerro enterno: $1',
'fileappenderrorread' => 'No se pudo meldar "$1" durante enkashyon.',
'fileappenderror' => 'No se pudo enkashar "$1" a "$2".',
'filecopyerror' => 'No se pudo copiar el arxiv "$1" a "$2".',
'filerenameerror' => 'No se pudo renombrar archivo "$1" a "$2".',
'filedeleteerror' => 'No se pudo efasar archivo "$1".',
'directorycreateerror' => 'No se pudo krear direktorio "$1".',
'filenotfound' => 'No se pudo topar archivo "$1".',
'fileexistserror' => 'No se pudo eskrivir al archivo "$1": Archivo ya egziste.',
'unexpected' => 'Valor enasperado: "$1"="$2".',
'formerror' => 'Yerro: No se pudo embiar fomulario.',
'badarticleerror' => 'No se puede azer esta aksyon en este pajina.',
'cannotdelete' => 'No pudo efasar esta pajina o archivo "$1".
Puede ser ke ya a efasado otra persona.',
'cannotdelete-title' => 'No se puede efasar pajina "$1"',
'delete-hook-aborted' => 'Efasyon fue anulado por "hook".',
'no-null-revision' => 'No pudo krear la mueva revizyon nula para la pajina "$1"',
'badtitle' => 'Titolo negro',
'badtitletext' => 'El título de la hoja demandada está vazío, no es valible, o es un link interlingua o interwiki incorrecto.
Puede ser que contiene uno o más caracteres que no se pueden usar en los títulos.',
'perfcached' => 'Los sigiente datos se enkontra en el cache i puede ser ke no esta aktualizada. Un maksimo de {{PLURAL:$1|un resultado esta|$1 resultados estan}} enkontrado en el cache.',
'perfcachedts' => 'Los sigiente datos se enkontra en el cache, i fue aktualizado $1. Un maksimo de {{PLURAL:$4|un resultado esta|$1 resultados estan}} enkontrado en el cache.',
'querypage-no-updates' => 'Las aktualizasyones de esta pajina esta desaktivado.
Las datos no va aktualizar agora.',
'viewsource' => 'Ver su manadero',
'viewsource-title' => 'Ver la fuente de $1',
'actionthrottled' => 'Aksyon limitada',
'actionthrottledtext' => 'Komo prekosyon kontra el spam, ay un limite de kuanto vezes puede azer este aksyon en poko tiempo, i sovrepasaste este limite.
Aprovar de muevo en unos minutos.',
'protectedpagetext' => 'La pajina esta guardado kontra esdisyones i otras aksyones.',
'viewsourcetext' => 'Puede ver i kopiar la fuente de este pajina:',
'viewyourtext' => 'Puede ver i kopiar la fuente de "tus edisyones" a esta pajina:',
'protectedinterface' => 'Esta pajina abastese teksto de la interfaz para la programa de este viki, i es guardado para empedir abuso.
Para anyadir o kambiar traduksyones para todos los vikis, uza [//translatewiki.net/translatewiki.net], el projecto de lokalizasyon de MediaWiki.',
'editinginterface' => "'''Aviso:''' Estas editando una pajina uzada para abasteser teksto de la interfaz para la programa.
Kambios a esta pajina afectara la aparesemiento de la interfaz de usuario para los otros usuarios en este viki.
Para anyadir o kambiar traduksyones para todos los vikis, uza [//translatewiki.net/translatewiki.net], el projecto de lokalizasyon de MediaWiki.",

# Virus scanner
'virus-unknownscanner' => 'antivirus deskonosido:',

# Login and logout pages
'welcomeuser' => 'Bienvinidos, $1',
'yourname' => 'Nombre de kullaneador:',
'userlogin-yourname' => 'Nombre de usuario',
'userlogin-yourname-ph' => 'Eskrive tu nombre de usuario',
'createacct-another-username-ph' => 'Eskrive el nombre de usuario',
'yourpassword' => 'Kóddiche:',
'userlogin-yourpassword' => 'Kontrasenya',
'userlogin-yourpassword-ph' => 'Eskriva tu kontrasenya',
'createacct-yourpassword-ph' => 'Eskriva una kontrasenya',
'yourpasswordagain' => 'Entra de muevo el kóddiche:',
'createacct-yourpasswordagain' => 'Konfirme contrasenya',
'createacct-yourpasswordagain-ph' => 'Eskrive la kontrasenya de muevo',
'remembermypassword' => 'Acódrate de mi entrada de kullaneador en este navigador (por un maksimum de {{PLURAL:$1|día|días}})',
'yourdomainname' => 'Tu dominyo:',
'password-change-forbidden' => 'No se puede kambiar contrasenyas en este viki.',
'login' => 'Entrar',
'nav-login-createaccount' => 'Entrar / criar un cuento',
'loginprompt' => 'Kale tener "cookies" aktivadas enel navegador para enrejistrarse en {{SITENAME}}',
'userlogin' => 'Entrar / Criar cuento',
'logout' => 'Salir',
'userlogout' => 'Salir',
'userlogin-noaccount' => 'No tiene un kuento?',
'userlogin-joinproject' => 'Abonar {{SITENAME}}',
'nologin' => "¿No tienes un cuento? '''$1'''.",
'nologinlink' => 'Criar un kuento',
'createaccount' => 'Criar un cuento',
'gotaccount' => "¿Ya tienes un cuento? '''$1'''.",
'gotaccountlink' => 'Entrar',
'userlogin-resetlink' => 'Olvidates tus detalyos de akseso?',
'userlogin-resetpassword-link' => 'Olvidaste tu kontrasenya?',
'userlogin-createanother' => 'Krear otro kuento',
'createacct-join' => 'Eskrive abasho tu informasyon',
'createacct-emailrequired' => 'Adreso de korreo elektroniko',
'createacct-emailoptional' => 'Korreo elektroniko (opsyonal)',
'createacct-email-ph' => 'Eskrive tu adreso de korreo elektroniko',
'createacct-another-email-ph' => 'Eskrive el adreso de korreo elektronico',
'createaccountmail' => 'Uzar una contrasenya temporal y embiarla al korreo elektronico espesificado',
'createacct-realname' => 'Nombre verdadero (opsyonal)',
'createaccountreason' => 'Razon:',
'createacct-reason' => 'Razon',
'createacct-submit' => 'Krear tu cuento',
'createacct-another-submit' => 'Krear otro kuento',
'createacct-benefit-heading' => '{{SITENAME}} es izo por djente komo tu.',
'createacct-benefit-body1' => '{{PLURAL:$1|edisyon|edisyones}}',
'createacct-benefit-body2' => '{{PLURAL:$1|pajina|pajinas}}',
'userexists' => 'El nombre de usuario que eskrivites ya se uza.
Eskoje un nombre diferente.',
'createacct-error' => 'Yerro de kreasyon de kuento',
'createaccounterror' => 'No se pudo crear el cuento: $1',
'password-name-match' => 'Tu contrasenya kale ser diferente de tu usuario.',
'mailmypassword' => 'Restableser kóddiche',
'mailerror' => 'Falta al embiar korreo: $1',
'emailconfirmlink' => 'Confirma su adderesso de letra electrónica',
'accountcreated' => 'Cuento creado',
'accountcreatedtext' => 'El kuento de usuario para [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|talk]]) fue kreado.',
'loginlanguagelabel' => 'Lingua: $1',

# Change password dialog
'changepassword' => 'Trocar el kóddiche',
'resetpass_header' => 'Kambiar kontrasenya del kuento',
'oldpassword' => 'Kóddiche viejo:',
'newpassword' => 'Kóddiche muevo:',
'retypenew' => 'Eskrive de muevo la kontrasenya mueva',
'resetpass_forbidden' => 'No se puede kambiar las kontrasenyas',
'resetpass-submit-loggedin' => 'Kambiar kontrasenya',
'resetpass-submit-cancel' => 'Anular',

# Special:PasswordReset
'passwordreset' => 'Restableser kontrasenya',
'passwordreset-legend' => 'Restableser kontrasenya',
'passwordreset-username' => 'Nombre de usador:',
'passwordreset-domain' => 'Dominio:',
'passwordreset-email' => 'Adresso de letral:',
'passwordreset-emailelement' => 'Usuario: $1
Kontrasenya temporal: $2',

# Special:ChangeEmail
'changeemail' => 'Kambiar adreso de korreo elektroniko',
'changeemail-header' => 'Kambiar adreso de korreo elektroniko de kuento',
'changeemail-oldemail' => 'Adreso de korreo elektroniko aktual:',
'changeemail-newemail' => 'Muevo adreso de korreo elektroniko:',
'changeemail-none' => '(dinguno)',
'changeemail-password' => 'Tu kontrasenya en {{SITENAME}}:',
'changeemail-submit' => 'Trocar letral',
'changeemail-cancel' => 'Anular',

# Special:ResetTokens
'resettokens-token-label' => '$1(valor aktual: $2)',

# Edit page toolbar
'bold_sample' => 'Teksto reforçado',
'bold_tip' => 'Teksto reforçado',
'italic_sample' => 'Teksto aladado',
'italic_tip' => 'Teksto aladado',
'link_sample' => 'Títolo del atamiento',
'link_tip' => 'Atamiento (link) interno',
'extlink_sample' => 'http://www.example.com Títolo del atamiento',
'extlink_tip' => 'Atamiento esterno (link de afuera: acόdrate de ajustar el prefikso http://)',
'headline_sample' => 'Teksto del títolo',
'headline_tip' => 'Títolo de nivel 2',
'nowiki_sample' => 'El teksto sin formato, escrívelo aquí',
'nowiki_tip' => 'Iñora el formato viki',
'image_tip' => 'Dosya encaxada',
'media_tip' => 'Atamiento de la dosya',
'sig_tip' => 'Tu firma con la data y la ora',
'hr_tip' => 'Liña orizontal (kulanea poco)',

# Edit pages
'summary' => 'Rezümé:',
'subject' => 'Tema/título:',
'minoredit' => 'Esto es un trocamiento chiquitico',
'watchthis' => 'Cudia esta hoja',
'savearticle' => 'Enrejistra la hoja',
'preview' => 'Echar una ojada',
'showpreview' => 'Echar una ojada',
'showlivepreview' => 'Previsteo bivo',
'showdiff' => 'Amostrar los trocamientos',
'anoneditwarning' => '<strong>Aviso:</strong> No entrates a tu cuento.
Tu adresso de IP se va a enrejistrar en la istoria de trocamientos de la hoja.',
'summary-preview' => 'Previsualización del resumen:',
'blockedtitle' => 'El usador está blokeado',
'blockednoreason' => 'La razόn no se diό',
'whitelistedittext' => 'Tienes que $1 para pueder trocar artículos.',
'nosuchsectiontitle' => 'No se puede topar seksyon',
'loginreqtitle' => 'Entrar es menester',
'loginreqlink' => 'entrar',
'loginreqpagetext' => 'Tienes que $1 para pueder ver otras hojas.',
'accmailtitle' => 'La kontrasenya ha sido embiada.',
'accmailtext' => "Se a embiado a $2 una kontrasenya jenerado por [[User talk:$1|$1]]. Se puede kambiar en la pajina ''[[Special:ChangePassword|cambiar kontrasenya]]'' al entrar.",
'newarticle' => '(Muevo)',
'newarticletext' => 'Arrivates a una hoja que daínda no egziste.
Para crear esta hoja, empeça a escribir en la caxa de abaxo. Mira [[{{MediaWiki:Helppage}}|la hoja de ayudo]] para saber más.
Si venites aquí por yerro, torna a la hoja de antes.',
'noarticletext' => 'En este momento no ay teksto en esta hoja.
Puedes [[Special:Search/{{PAGENAME}}|buxcar el títolo desta hoja]] en otras hojas,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} buxcar en los rejistros],
u [{{fullurl:{{FULLPAGENAME}}|action=edit}} trocar esta hoja]</span>.',
'noarticletext-nopermission' => 'En este momento no ay teksto en esta hoja.
Puedes [[Special:Search/{{PAGENAME}}|buxcar el títolo desta hoja]] en otras hojas,
u <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} buxcar en los rejistros]</span>, ma no tienes la permissión de criar esta hoja.',
'userpage-userdoesnotexist-view' => 'El cuento del usador $1 no está enrejistrado.',
'updated' => '(Aktualizado)',
'note' => "'''Nota:'''",
'previewnote' => "¡Akórdate ke esto es sólo una previsualizasion i aínda no se enrejistró!'''
Los tus trokamientos no se tienen guadrados!",
'editing' => 'Trocando $1',
'editingsection' => 'Trocando $1 (sección)',
'editingcomment' => 'Trocando $1 (kapítůlo)',
'yourtext' => 'Tu teksto',
'yourdiff' => 'Diferencias',
'copyrightwarning' => "Si puede ser, observa que todas las contribuciones a {{SITENAME}} se consideran hechas públicas abaxo la $2 (ver detalyos en $1). Si no queres que la gente endereche tus tekstos escritos sin piadad i los esparta libberamente, alora no los metas aquí. También nos estás asegurando ansí que escribites este teksto tu mismo i sos el dueño de los derechos de autor, o lo copiates desde el dominio público u otra fuente libbero.'''¡QUE N0 USES TEKSTOS ESCRITOS CON COPYRIGHT SIN PERMISSIÓN!'''<br />",
'templatesused' => '{{PLURAL:$1|El şablón usado|Los şablones usados}} en esta hoja:',
'templatesusedpreview' => '{{PLURAL:$1|El xabblón usado|Los xabblones usados}} en esta vista:',
'template-protected' => '(guadrada)',
'template-semiprotected' => '(media guadrada)',
'hiddencategories' => 'Esta hoja es un miembro de {{PLURAL:$1|1 kategoría escondida|$1 kategorías escondidas}}:',
'nocreate-loggedin' => 'No tienes el permisso de creas hojas nuevas.',
'permissionserrorstext-withaction' => 'No tienes el permiso para $2, por las {{PLURAL:$1|razón|razones}} venideras:',
'recreate-moveddeleted-warn' => "'''Aviso: Estas kriando una oja la kuala fue efassada antes.'''
Kale ke penses si es menesterozo editar esta oja.
El enrejistro de efassado i taxireado para esta oja puede ser meldado aki:",
'moveddeleted-notice' => "Esta ója fue efassada.
El ''log'' de efassado i taxireado de la ója es amostrado abasho para dar referensia.",
'edit-already-exists' => 'No se puede krear una pajina mueva.
Ya egziste.',
'defaultmessagetext' => 'Teksto de mesaje predeterminado',

# Content models
'content-model-wikitext' => 'vikiteksto',
'content-model-text' => 'teksto simple',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''Aviso:''' Ay munchos şablones y kaji no quedó lugar.
Algunos şablones no van a caver.",
'post-expand-template-inclusion-category' => 'Hojas con sovrecarga de şablones',
'post-expand-template-argument-warning' => "'''Aviso:''' Esta oja tiene kuanto menos un kampo enel xablon muy lungo.
Este o estos kampos no van ser amostrados",
'post-expand-template-argument-category' => 'Ojas ke tienen xablones kon parametros no uzados',

# Account creation failure
'cantcreateaccounttitle' => 'No se puede krear el kuento',

# History pages
'viewpagelogs' => 'Ver los registros de esta hoja',
'currentrev' => "Enderechamiento d'al cavo",
'currentrev-asof' => 'Enderechamiento dalcavo de $2 a las $3 la ora',
'revisionasof' => 'Enderechamiento de $2 a las $3 la ora',
'revision-info' => 'Revision en data $1 por $2',
'previousrevision' => '← Enderechamiento de antes',
'nextrevision' => 'Revizión venidera →',
'currentrevisionlink' => 'Revisión actual',
'cur' => 'cor',
'next' => 'venidero',
'last' => 'ant',
'page_first' => 'primeras',
'page_last' => 'de alcabo',
'histlegend' => "Selección de diferencias: marca los selectores de las versiones a comparar y pulsa ''enter'' o el botón de abajo.<br />
Leyenda: (act) = diferencias con la versión actual,
(prev) = diferencias con la versión previa, M = edición menor",
'history-fieldset-title' => 'Navegar en la istoria',
'history-show-deleted' => 'Sólamente efassado',
'histfirst' => 'Lo mas viejo',
'histlast' => 'Lo mas muevo',
'historysize' => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty' => '(vazío)',

# Revision feed
'history-feed-title' => 'Îstoria de nderechamientos',
'history-feed-item-nocomment' => '$1 en $2',

# Revision deletion
'rev-deleted-user' => '(se kito el nombre de usuario)',
'rev-delundel' => 'amostrar/esconder',
'rev-showdeleted' => 'mostra',
'revdelete-show-file-submit' => 'Si',
'revdelete-hide-image' => 'Eskonder el kontenido de archivo',
'revdelete-hide-user' => 'Nombre de usuario/adreso de IP del Redaktor',
'revdelete-radio-same' => '(no troques)',
'revdelete-radio-set' => 'Eskondido',
'revdelete-radio-unset' => 'Visible',
'revdelete-log' => 'Razon:',
'revdel-restore' => 'trocar la vizibilitá',
'pagehist' => 'La storia de la hoja',
'revdelete-otherreason' => 'Otro razon/razon adisiyonal',
'revdelete-reasonotherlist' => 'Otra razón',

# History merging
'mergehistory-from' => 'Pajina de orijen',
'mergehistory-reason' => 'Razon:',

# Merge log
'revertmerge' => 'Apartar',

# Diffs
'history-title' => 'Istorya de trokamientos para «$1»',
'lineno' => 'Liña $1:',
'compareselectedversions' => 'Comparar versiones escojidas',
'editundo' => 'des-hazer',

# Search results
'searchresults' => 'Resultados de la búxquida',
'searchresults-title' => 'Resultados de la búxquida de «$1»',
'notextmatches' => 'No se pudo topar en dinguna hoja.',
'prevn' => '{{PLURAL:$1|$1}} de antes',
'nextn' => '{{PLURAL:$1|$1}} venideras',
'prevn-title' => '$1 {{PLURAL:$1|resultado|resultados}} de antes',
'nextn-title' => '$1 {{PLURAL:$1|resultado|resultados}} venideros',
'shown-title' => 'Amostrar $1 {{PLURAL:$1|resultado|resultados}} por hoja',
'viewprevnext' => 'Ver ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists' => 'Egziste una oja yamada "[[:$1]]" en esta viki',
'searchmenu-new' => '<strong>Criar la hoja «[[:$1]]» en este viki!</strong>{{PLURAL:$2|0=|También ver la hoja topada con tu búxquida.|También ver las resultas de tu búxquida.}}',
'searchprofile-articles' => 'Hojas de contènido',
'searchprofile-project' => 'Hojas de ayudo y hojas de projeto',
'searchprofile-images' => 'Multimedya',
'searchprofile-everything' => 'Todo',
'searchprofile-advanced' => 'Adelantado',
'searchprofile-articles-tooltip' => 'Buxcar en $1',
'searchprofile-project-tooltip' => 'Buxcar en $1',
'searchprofile-images-tooltip' => 'Buxcar dosyas',
'searchprofile-everything-tooltip' => 'Buxca en todo el contènido (y mismo en las hojas de diskusyón)',
'searchprofile-advanced-tooltip' => 'Buxcar en espacios de nombres partikolares',
'search-result-size' => '$1 ({{PLURAL:$2|1 biervo|$2 biervos}})',
'search-result-category-size' => '{{PLURAL:$1|1 miembro|$1 miembros}} ({{PLURAL:$2|1 basho-kateggoria|$2 basho-kateggoria}}, {{PLURAL:$3|1 dossia|$3 dossias}})',
'search-redirect' => '(redireksión de $1)',
'search-section' => '(kapítolo $1)',
'search-suggest' => 'Quijites dezir: $1',
'search-interwiki-caption' => 'Proyectos hermanos',
'search-interwiki-default' => 'Los resultados de $1:',
'search-interwiki-more' => '(mas)',
'searchrelated' => 'lisionado',
'searchall' => 'todos',
'showingresultsheader' => "{{PLURAL:$5|Resultado '''$1''' de '''$3'''|Resultados '''$1-$2''' de '''$3'''}} parâ '''$4'''",
'search-nonefound' => 'No ay resultados por esta búxquida.',
'powersearch-legend' => 'Búsqueda adelantada',
'powersearch-ns' => 'Busca en los espacios de nombres:',
'powersearch-redir' => 'Mostra las redirecciones',
'powersearch-toggleall' => 'Todos',
'powersearch-togglenone' => 'dingun',
'search-external' => 'Búsqueda eksterna',

# Preferences page
'preferences' => 'Preferencias',
'mypreferences' => 'Preferencias',
'prefs-edits' => 'Numero de edisyones:',
'prefs-skin' => 'Vista',
'skin-preview' => 'Previstear',
'prefs-datetime' => 'Data i ora',
'prefs-user-pages' => 'Pajinas de usuario',
'prefs-personal' => 'Profil de usuario',
'prefs-rc' => 'Los Trocamientos de Alcabo',
'prefs-watchlist' => 'Lista de los Trocamientos Preferidos',
'prefs-watchlist-days' => 'El número de los días a mostrar en la lista de los trocamientos preferidos:',
'prefs-watchlist-days-max' => '$1 {{PLURAL:$1|diya|diyas}} a lo más muncho',
'prefs-resetpass' => 'Trocar la parola',
'prefs-changeemail' => 'Kambiar adreso de korreo elektroniko',
'prefs-rendering' => 'Vista',
'saveprefs' => 'Enrejistrar',
'searchresultshead' => 'Bushkar',
'timezoneregion-africa' => 'África',
'timezoneregion-america' => 'América',
'timezoneregion-antarctica' => 'Antárctica',
'timezoneregion-arctic' => 'Artiko',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Oseano Atlantiko',
'timezoneregion-australia' => 'Ostralia',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Oseano Indiko',
'timezoneregion-pacific' => 'Oseano Pasifiko',
'prefs-searchoptions' => 'Bushkar',
'prefs-files' => 'Dosyas',
'youremail' => 'Letral:',
'username' => '{{GENDER:$1|Nombre de usuario}}:',
'yourrealname' => 'Nombre verdadero:',
'yourlanguage' => 'Lengua:',
'yournick' => 'Firma mueva:',
'gender-unknown' => 'Prefiero no dezir',
'gender-male' => 'El redakto pajinas de viki',
'gender-female' => 'Eya redakto pajinas de viki',
'email' => 'Korreo elektroniko',
'prefs-help-email' => 'El adreso de korreo elektroniko es opsional, ma es menester para alimpiar la tu kontrasenya, si la olvidates',
'prefs-help-email-others' => 'Endemas puedes eskojer si keres dar pueder a otros usadores de azer kontakto kon ti por modre de e-posta, a  traverso de un atamiento en tus ojas de usador i de diskusyon.',
'prefs-help-email-required' => 'Se nesesita adreso de korreo elektroniko.',
'prefs-info' => 'Informasyon basiko',
'prefs-i18n' => 'Internasionalisasyion',
'prefs-signature' => 'Firma',
'prefs-editor' => 'Redaktor',

# User rights
'userrights-groupsmember' => 'Miembro de:',
'userrights-reason' => 'Razon:',

# Groups
'group' => 'Grupo:',
'group-user' => 'Usadorers',
'group-bot' => 'Bots',
'group-sysop' => 'Administradores',
'group-bureaucrat' => 'Burokratos',
'group-all' => '(todos)',

'group-user-member' => '{{GENDER:$1|usuario}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-bureaucrat-member' => '{{GENDER:$1|burokrato}}',

'grouppage-user' => '{{ns:project}}:Usuarios',
'grouppage-bot' => '{{ns:project}}:Bots',
'grouppage-sysop' => '{{ns:project}}:Administradores',
'grouppage-bureaucrat' => '{{ns:project}}:Burokratos',

# Rights
'right-read' => 'Meldar pajinas',
'right-edit' => 'Trocar las hojas',
'right-createpage' => 'Krear pajinas (ke no son pajinas de diskusyon)',
'right-createtalk' => 'Krear pajinas de diskusyon',
'right-createaccount' => 'Krear muevos kuentos de usuarios',
'right-minoredit' => 'Marcar trocamientos como "chiquiticos"',
'right-move' => 'Mover pajinas',
'right-movefile' => 'Mover archivo',
'right-delete' => 'Efassar hojas',
'right-sendemail' => 'Embiar korreo elektroniko a otro usuario',

# Special:Log/newusers
'newuserlogpage' => 'Registro de creación de usuarios',

# User rights log
'rightslog' => 'Trocamientos de profil de usuario',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'meldar esta hoja',
'action-edit' => 'trocar esta hoja',
'action-createpage' => 'crear hojas',
'action-createtalk' => 'Krear pajinas de diskusyon',
'action-createaccount' => 'Krear este kuento de usuario',
'action-minoredit' => 'sinyalar este kambio komo chiko',
'action-delete' => 'efassar esta hoja',
'action-sendemail' => 'embiar korreo elektronikos',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|trocamiento|trocamientos}}',
'enhancedrc-history' => 'istoria',
'recentchanges' => 'Trocamientos freskos',
'recentchanges-legend' => 'Escojimientos de los trocamientos freskos',
'recentchanges-summary' => 'Perseguid en esta hoja, los trocamientos de alcabo realizados en la Viki.',
'recentchanges-feed-description' => 'Perseguir los trocamientos más nuevos en el viki en este feed.',
'recentchanges-label-newpage' => 'Este trocamiento crió una mueva hoja',
'recentchanges-label-minor' => 'Esto es un trocamiento chiquitico',
'recentchanges-label-bot' => 'Este trocamiento era hecho por la parte de un bot',
'recentchanges-label-unpatrolled' => 'Este trocamiento no fue patrullado daínda',
'recentchanges-legend-plusminus' => "(''±123'')",
'rcnotefrom' => "Debasho se amostran los trokamientos desde '''$2''' (amostrados fina <b>$1</b>)",
'rclistfrom' => 'Amostrar los trocamientos muevos empeçando el $1',
'rcshowhideminor' => '$1 trocamientos chiquiticos',
'rcshowhidebots' => '$1 botes',
'rcshowhideliu' => '$1 usadores enrejistrados',
'rcshowhideanons' => '$1 usadores anónimos',
'rcshowhidepatr' => '$1 trocamientos akavidados',
'rcshowhidemine' => '$1 mis trocamientos',
'rclinks' => 'Ver los $1 trocamientos dalcavo en los $2 días dalcavo<br />$3',
'diff' => 'dif',
'hist' => 'ist',
'hide' => 'Esconder',
'show' => 'Amostrar',
'minoreditletter' => 'ch',
'newpageletter' => 'M',
'boteditletter' => 'b',
'rc_categories_any' => 'Kualkyer',
'rc-enhanced-expand' => 'Amostrar los detalios',
'rc-enhanced-hide' => 'Esconder los detalios',

# Recent changes linked
'recentchangeslinked' => 'Trocamientos atados',
'recentchangeslinked-feed' => 'Trocamientos conectados',
'recentchangeslinked-toolbox' => 'Trocamientos atados',
'recentchangeslinked-title' => 'Los trocamientos atados a "$1"',
'recentchangeslinked-summary' => "Esto es una lista de trocamientos dalcavo en las hojas atadas de una hoja partikolara (u en los miembros de una kategoría partikolara).
Las hojas en tu [[Special:Watchlist|lista de acavidamiento]] son '''reforçadas'''.",
'recentchangeslinked-page' => 'Nombre de la hoja:',
'recentchangeslinked-to' => 'Al lugar de la hoja indikada, amostra los trocamientos en las hojas atadas a esta hoja',

# Upload
'upload' => 'Suvir una dosya',
'uploadlogpage' => 'Subidas de arxivos',
'filename' => 'Nombre de archivo',
'filedesc' => 'Rezümé',
'filereuploadsummary' => 'Kambios de archivo:',
'filesource' => 'Fuente:',
'filename-tooshort' => 'El nombre del archivo es muy kurto.',
'savefile' => 'Guardar archivo',
'uploadedimage' => 'suvió «[[$1]]»',

# File backend
'backend-fail-notexists' => 'El archivo $1 no egziste.',
'backend-fail-alreadyexists' => 'El archivo "$1" ya egziste.',

# img_auth script messages
'img-auth-nofile' => 'El archivo "$1" no egziste.',

'license' => 'Lecencia:',
'license-header' => 'Lesensiamyénto',

# Special:ListFiles
'imgfile' => 'archivo',
'listfiles' => 'Lista de archivos',
'listfiles_thumb' => 'Minyatura',
'listfiles_date' => 'Data',
'listfiles_name' => 'Nombre',
'listfiles_user' => 'Usuario',
'listfiles_size' => 'Boy',
'listfiles-latestversion-yes' => 'Si',
'listfiles-latestversion-no' => 'No',

# File description page
'file-anchor-link' => 'Dosya',
'filehist' => 'La istoria de la dosya',
'filehist-help' => 'Taquea (pisa con el ratón) encima de una data/ora parâ ver como era la dosya en esta data.',
'filehist-revert' => 'aboltar',
'filehist-current' => 'corriente',
'filehist-datetime' => 'Data/Ora',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => 'Miniatura de la versión de $1',
'filehist-nothumb' => 'Sin minyatura',
'filehist-user' => 'Usador',
'filehist-dimensions' => 'Boy',
'filehist-filesize' => 'El boy de la dosya',
'filehist-comment' => 'Esplicación',
'filehist-missing' => 'No se topa el archivo',
'imagelinks' => 'Usos de la dosya',
'linkstoimage' => '{{PLURAL:$1|La hoja venidera se ata|Las hojas venideras se atan}} a esta dosya:',
'nolinkstoimage' => 'No ay hojas con atamientos a esta dosya.',
'sharedupload' => 'Este arxivo es de $1 i puede ser usado por otros proyectos.',
'sharedupload-desc-here' => 'Esta hoja es de $1 y se puede kulanear en otros projetos.
La esplicación en su [$2 hoja de esplicacíon de la dosya] se ve abaxo.',
'filepage-nofile' => 'No egziste dingun archivo de este nombre.',
'uploadnewversion-linktext' => 'Subir una nueva versión de este arxivo',
'shared-repo-from' => 'de $1',

# File reversion
'filerevert-comment' => 'Razon:',

# File deletion
'filedelete-comment' => 'Razon:',
'filedelete-nofile' => "'''$1''' no egziste.",
'filedelete-otherreason' => 'Otra razon/razon adisiyonal',
'filedelete-reason-otherlist' => 'Otra razon',

# MIME search
'mimesearch' => 'bushkida por MIME',
'download' => 'deskargar',

# Unused templates
'unusedtemplateswlh' => 'otros enlases',

# Random page
'randompage' => 'Hoja por azardo',

# Random page in category
'randomincategory-selectcategory-submit' => 'Ir',

# Statistics
'statistics' => 'Estatísticas',
'statistics-articles' => 'Pajinas de kontenido',
'statistics-pages' => 'Pajinas',
'statistics-users-active' => 'Usuarios aktivos',

'pageswithprop-submit' => 'Ir',

'doubleredirects' => 'Redireksyones dobles',

'brokenredirects-edit' => 'trocar',
'brokenredirects-delete' => 'efasar',

'withoutinterwiki' => 'Pajinas sin enlases de lenguas',
'withoutinterwiki-submit' => 'Amostrar',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bayt|baytes}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|enlase|enlases}}',
'nmembers' => '$1 {{PLURAL:$1|miembro|miembros}}',
'nmemberschanged' => '$1 → $2 {{PLURAL:$2|miembro|miembros}}',
'nimagelinks' => 'Uzado en $1 {{PLURAL:$1|pajina|pajinas}}',
'ntransclusions' => 'uzado en $1 {{PLURAL:$1|pajina|pajinas}}',
'prefixindex' => 'Todas las hojas con prefixo',
'shortpages' => 'Pajinas kurtas',
'longpages' => 'Pajinas largas',
'listusers' => 'Lista de usuario',
'usercreated' => '{{GENDER:$3|Enrejistrado|Enrejistrada}} el $1 a las $2',
'newpages' => 'Hojas muevas',
'newpages-username' => 'Nombre de usuario:',
'ancientpages' => 'Artikolos mas viejos',
'move' => 'Taşirear',
'movethispage' => 'Tashirea esta hoja',
'pager-newer-n' => '{{PLURAL:$1|1 venidero|$1 venideros}}',
'pager-older-n' => '{{PLURAL:$1|1 de antes|$1 de antes}}',

# Book sources
'booksources' => 'Fuentes de livros',
'booksources-search-legend' => 'Buscar fuentes de libros',
'booksources-go' => 'Ir',

# Special:Log
'log' => 'Rejistros',

# Special:AllPages
'allpages' => 'Todas las hojas',
'alphaindexline' => 'De $1 fina $2',
'nextpage' => 'La sigiente pajina ($1)',
'prevpage' => 'Hoja de antés ($1)',
'allpagesfrom' => 'Mostrar hojas que empecen por:',
'allpagesto' => 'Mostrar hojas escapadas con:',
'allarticles' => 'Todas las hojas',
'allinnamespace' => 'Todas las pajinas (espasio $1)',
'allpagessubmit' => 'Ir',

# Special:Categories
'categories' => 'Kategorías',
'special-categories-sort-count' => 'ordenar por número',
'special-categories-sort-abc' => 'ordenar alefbeticamente',

# Special:LinkSearch
'linksearch' => 'Bushkida de enlases eksternos',
'linksearch-ok' => 'Bushkar',
'linksearch-line' => 'Atamiento para $1 en la hoja $2',

# Special:ListUsers
'listusers-submit' => 'Amostrar',
'listusers-noresult' => 'No se topo usuario',

# Special:ActiveUsers
'activeusers-hidebots' => 'Eskonder bots',
'activeusers-noresult' => 'No se toparon usuario.',

# Special:ListGroupRights
'listgrouprights' => 'Derechos del grupo de usuario',
'listgrouprights-group' => 'Grupo',
'listgrouprights-rights' => 'Derechos',
'listgrouprights-helppage' => 'Help:Derechos de grupo',
'listgrouprights-members' => '(ver los miembros de este grupo)',
'listgrouprights-addgroup' => 'Anyadir {{PLURAL:$2|grupo|grupos}}: $1',
'listgrouprights-removegroup' => 'Kitar {{PLURAL:$2|grupo|grupos}}: $1',
'listgrouprights-addgroup-all' => 'Anyadir todos los grupos',
'listgrouprights-removegroup-all' => 'Kitar todos los grupos',

# Email user
'emailuser' => 'Embia korreo elektroniko a este usuario',
'emailuser-title-target' => 'Embiar un korreo elektroniko a {{Gender:$1|este usuario|esta usuaria}}',
'emailuser-title-notarget' => 'Embiar un korreo elektroniko a un usuario',
'emailpage' => 'Embiar un korreo elektroniko a un usuario',
'defemailsubject' => 'Korreo elektroniko del usuario "$1" de {{SITENAME}}',
'emailusername' => 'Nombre de usuario:',
'emailfrom' => 'De:',
'emailto' => 'Para:',
'emailsubject' => 'Sujeto:',
'emailmessage' => 'Mesaje:',
'emailsend' => 'Embiar',
'emailsent' => 'Korreo elektroniko embiado',

# Watchlist
'watchlist' => 'Lista de akavidamiento',
'mywatchlist' => 'Lista de acavidamientos',
'watchlistfor2' => 'Para $1 $2',
'addedwatchtext' => 'La pajina "[[:$1]]" fue anyadido a tu [[Special:Watchlist|lista de escogidas]]. Los trocamientos venideros en esta pajina i en tu pajina de diskusyon assosiada va apareser ayi.',
'removedwatchtext' => 'La hoja «[[:$1]]» fue eliminada de tu [[Special:Watchlist|lista de escogidas]].',
'watch' => 'cudiar',
'watchthispage' => 'Cudia esta hoja',
'unwatch' => 'dexa de cudiar',
'watchlist-details' => '{{PLURAL:$1|$1 hoja|$1 hojas}} en tu lista de escogidas, sin contar las de la diskussión.',
'wlshowlast' => 'Ver los trocamientos de las últimas $1 oras, $2 días  $3',
'watchlist-options' => 'Opciones de la lista de escogidas',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Cudiando...',
'unwatching' => 'Dexando de cudiar...',

'enotif_impersonal_salutation' => '{{SITENAME}} usuario',

# Delete
'deletepage' => 'Efassar esta hoja',
'confirmdeletetext' => 'Estás al punto de efassar una hoja
en forma turable, ansí como todo su istoria.
Si puede ser, confirma que de verdad queres hazer esto, que estás entendiendo las
resultados, i que lo estás haziendo de acorddo con las [[{{MediaWiki:Policy-url}}|Políticas]].',
'actioncomplete' => 'Aksion kompleta',
'actionfailed' => 'Aksión sin reuşitá',
'deletedtext' => '"$1" fue efassado.
Mira $2 para un registro de los efassados nuevos.',
'dellogpage' => 'Registro de efassados',
'deletecomment' => 'Razón:',
'deleteotherreason' => 'Otra razon/razon adisiyonal:',
'deletereasonotherlist' => 'Otra razón',
'deletereason-dropdown' => '* Razones komunes de efassamientos
** Spam
** Vandalismo
** Violasyon del derecho de otor
** Demande del otor mizmo
** Redireksyon rota',

# Rollback
'rollbacklink' => 'hazer aboltar',

# Protect
'protectlogpage' => 'Protecciones de las hojas',
'protectedarticle' => 'guardó «[[$1]]»',
'modifiedarticleprotection' => 'trocó el nivel de protección de «[[$1]]»',
'prot_1movedto2' => '[[$1]] trasladado a [[$2]]',
'protectcomment' => 'Razon:',
'protectexpiry' => 'Escapa:',
'protect_expiry_invalid' => 'Tiempo de escapación yerrado.',
'protect_expiry_old' => 'El tiempo de escapación está en el passado.',
'protect-text' => "Puedes ver i trocar el nivel de protección de la hoja '''$1'''.",
'protect-locked-access' => "Tu cuento no tiene permissión para trocar los niveles de protección de una hoja.
A continuación se mostran las opciones actuales de la hoja '''$1''':",
'protect-cascadeon' => 'Esta hoja está guardada en momento porque está incluida en {{PLURAL:$1|la hoja venidera|las hojas venideras}}, que tienen activada la opción de protección en grados. Puedes trocar el nivel de protección de esta hoja, ma no va afectar a la protección en grados.',
'protect-default' => 'Permitir todos los usuarios',
'protect-fallback' => 'Solo permitir usuarios kon permiso "$1"',
'protect-level-autoconfirmed' => 'Solo permitir usuarios otokonfirmados',
'protect-level-sysop' => 'Solo permitir administradores',
'protect-summary-cascade' => 'con grados',
'protect-expiring' => 'caduca el $1 (UTC)',
'protect-cascade' => 'Protección en cascada - guardar todas las hojas incluidas en ésta.',
'protect-cantedit' => 'No puedes trocar el nivel de protección porque no tienes permissión para hazer ediciones.',
'protect-otherreason' => 'Otra razon/razon adisiyonal',
'protect-otherreason-op' => 'Otra razon',
'protect-expiry-options' => '1 ora:1 hour,1 diya:1 day,1 semana:1 week,2 semanas:2 weeks,1 mez:1 month,3 mezes:3 months,6 mezes:6 months,1 anyo:1 year,para siempre:infinite',
'restriction-type' => 'Permiso:',
'restriction-level' => 'Nivel de restricción:',

# Restrictions (nouns)
'restriction-create' => 'Krear',

# Undelete
'undeletelink' => 'ver/traer atrás',
'undeleteviewlink' => 'ver',
'undeletecomment' => 'Razon:',
'undelete-search-submit' => 'Bushkar',
'undelete-show-file-submit' => 'Si',

# Namespace form on various pages
'namespace' => 'Espacio de nombres:',
'invert' => 'Aboltar escojimiento',
'blanknamespace' => '(Prencipal)',

# Contributions
'contributions' => 'Ajustamientos {{GENDER:$1|del kullaneador|de la kullaneadera}}',
'contributions-title' => 'Ajustamientos {{GENDER:$1|del usuario|de la usuaria}} $1',
'mycontris' => 'Kontribüsyones',
'contribsub2' => 'Para {{GENDER:$3|$1}}($2)',
'uctop' => '(korriente)',
'month' => 'Desde el mes (i antes):',
'year' => 'Desde el anyo (i antes):',

'sp-contributions-newbies' => 'Mostrar solo las ajustamientos de los usuarios nuevos',
'sp-contributions-blocklog' => 'registro de bloqueos',
'sp-contributions-uploads' => 'suvidas',
'sp-contributions-logs' => 'enrejistros',
'sp-contributions-talk' => 'Diskusyón',
'sp-contributions-search' => 'Buxcar ajustamientos',
'sp-contributions-username' => 'Adreso de IP o nombre de usuario:',
'sp-contributions-toponly' => "Amostrar solo revisiones d'alkavo",
'sp-contributions-submit' => 'Buxcar',

# What links here
'whatlinkshere' => 'Hojas atadas',
'whatlinkshere-title' => 'Hojas que dan link a "$1"',
'whatlinkshere-page' => 'Hoja:',
'linkshere' => "Las hojas venideras dan link a '''[[:$1]]''':",
'nolinkshere' => "Dinguna ója tiene atamientos kon '''[[:$1]]'''",
'isredirect' => 'Hoja redirigida',
'istemplate' => 'inclusión',
'isimage' => 'atamiento de la dosya',
'whatlinkshere-prev' => '{{PLURAL:$1|de antes|de antes $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|venidera|venideras $1}}',
'whatlinkshere-links' => '← atamientos',
'whatlinkshere-hideredirs' => '$1 redirecciones',
'whatlinkshere-hidetrans' => '$1 inclusiones',
'whatlinkshere-hidelinks' => '$1 atamientos',
'whatlinkshere-hideimages' => '$1 atamientos a dosyas',
'whatlinkshere-filters' => 'Filtres',

# Block/unblock
'blockip' => 'Bloquear usuario',
'ipadressorusername' => 'Adreso de IP o nombre de usuario:',
'ipbreason' => 'Razon:',
'ipboptions' => '2 oras:2 hours,1 día:1 day,3 días:3 days,1 semana:1 week,2 semanas:2 weeks,1 mes:1 month,3 meses:3 months,6 meses:6 months,1 año:1 year,parâ siempre:infinite',
'badipaddress' => 'Adreso de IP invalido',
'ipblocklist' => 'Usuarios blokeados',
'blocklist-reason' => 'Razon',
'ipblocklist-submit' => 'Bushkar',
'infiniteblock' => 'para siempre',
'blocklink' => 'blokar',
'unblocklink' => 'quitar el bloko',
'change-blocklink' => 'trocar el bloko',
'contribslink' => 'kontribüsyones',
'emaillink' => 'embiar korreo elektroniko',
'blocklogpage' => 'Blokos de kullaneadores',
'blocklogentry' => 'blokó a [[$1]] $3 durante un tiempo de $2',
'unblocklogentry' => 'desbloqueó a "$1"',
'block-log-flags-nocreate' => 'desactivada la kreasyon de kuentos',
'block-log-flags-hiddenname' => 'nombre de usuario eskondido',

# Developer tools
'lockedbyandtime' => '(por {{GENDER:$1|$1}} el $2 a la $3)',

# Move page
'movepagetext' => "Uzando el sigiente formulario va renombrar una pajina, kitando todo su istoria a su nuevo nombre.
El titulo orijinal se va convertir en una redireksyon al muevo titulo.
Puede aktualizar otomatikamente las redireksyones al titulo orijinal.
Si eskoje no azerlo, asegurate de verifikar ke no ay  [[Special:DoubleRedirects|redireksyones dobles]] o [[Special:BrokenRedirects|rotas]].
Tú sos responsable de asegurar ke los enlases funksyonan korrectamente.

Nota ke la pajina '''no''' va ser renombrada si ya egziste una hoja con esta muevo título, a no ser que sea una redireksyon sin istoria.
Esto sinyifica que vas pueder renombrar una pajina a su titulo orijinal si hazes un yerro, ma que no vas pueder sobreskrivir una pajina que ya existe.

'''Aviso!'''
Este puede ser un trocamiento muy muy emportante e inesperado para una pajina popular;
asegurate de entender las resultados del lo que azes antes de ir endelantre.",
'movepagetalktext' => "La hoja de diskussión associada, si egziste, va ser renombrada otomáticamente '''a menos que:'''
*Esté renombrando la hoja entre espacios de nombres diferentes,
*Una hoja de diskussión no vazía ya egziste con el nombre nuevo, o
*Desactivara la opción \"Renombrar la hoja de diskussión también\".

En estos casos, va deber trasladar manualmente el contenido de la hoja de diskussión.",
'movearticle' => 'Renombra la hoja',
'newtitle' => 'A título nuevo',
'move-watch' => 'Cudiar este artículo',
'movepagebtn' => 'Renombra la hoja',
'pagemovedsub' => 'Renombrado realizado con reuxitá',
'movepage-moved' => '\'\'\'"$1" fue renombrado a "$2".\'\'\'',
'articleexists' => 'Una hoja con este nombre ya egziste, o el nombre que escogites no es valable.
Si puede ser, escoge otro nombre.',
'movetalk' => 'Renombrar la hoja de diskussión también, si es possible.',
'movelogpage' => 'Registro de traslados',
'movereason' => 'Razon:',
'revertmove' => 'aboltar',

# Export
'export' => 'Eksportar las hojas',
'export-addcat' => 'Anyadir',
'export-addns' => 'Anyadir',
'export-download' => 'Guardar komo archivo',

# Namespace 8 related
'allmessages' => 'Mesajes del sistema',
'allmessagesname' => 'Nombre',
'allmessagesdefault' => 'Teksto por defekto',
'allmessagescurrent' => 'Teksto aktual',
'allmessages-filter-all' => 'Todos',
'allmessages-language' => 'Lengua:',
'allmessages-filter-submit' => 'Ir',

# Thumbnails
'thumbnail-more' => 'Engrandecer',
'thumbnail_error' => 'Yerro kriando la minyatura: $1',

# Special:Import
'import-interwiki-submit' => 'Importar',
'import-upload-filename' => 'Nombre de archivo:',
'importnopages' => 'No ay pajinas para importar.',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Tu hoja de usador',
'tooltip-pt-mytalk' => 'Tu hoja de diskusyón',
'tooltip-pt-preferences' => 'Mis preferencias',
'tooltip-pt-watchlist' => 'Una lista de trocamientos en las hojas que escojites parâ cudiar u süivar (seguir)',
'tooltip-pt-mycontris' => 'La lista de tus kontribüsyones',
'tooltip-pt-login' => 'Te encorajamos de entrar ma no estás obligado',
'tooltip-pt-logout' => 'Sal de tu cuento',
'tooltip-ca-talk' => 'Diskusyón encima del artíkolo',
'tooltip-ca-edit' => 'Puedes trocar esta hoja. Ma te rogamos para que eches una ojada (previsteo) antes de enrejistrarla.',
'tooltip-ca-addsection' => 'Ajusta un kapítolo muevo',
'tooltip-ca-viewsource' => 'Esta hoja está guadrada.
Puedes ver su manadero',
'tooltip-ca-history' => 'Enderechamientos passados desta hoja',
'tooltip-ca-protect' => 'Guardar esta hoja',
'tooltip-ca-delete' => 'Efassar esta hoja',
'tooltip-ca-move' => 'Taşirea esta hoja (troca el nombre desta hoja)',
'tooltip-ca-watch' => 'Ajusta esta hoja a tu lista de acavidamientos',
'tooltip-ca-unwatch' => 'Quita esta hoja de tu lista de acavidamientos',
'tooltip-search' => 'Buxca en {{SITENAME}}',
'tooltip-search-go' => 'Vate a la hoja con este nombre egzakto, si egziste.',
'tooltip-search-fulltext' => 'Buxca este teksto en las hojas',
'tooltip-p-logo' => 'Vijita la primera hoja',
'tooltip-n-mainpage' => 'Vijita la primera hoja',
'tooltip-n-mainpage-description' => 'Vijita la primera hoja',
'tooltip-n-portal' => 'Encima del projeto, lo que puedes hazer y ande topar todo',
'tooltip-n-currentevents' => 'Jhaberes de oy día en ancho',
'tooltip-n-recentchanges' => 'Lista de los trocamientos dalcavo en el viki',
'tooltip-n-randompage' => 'Carga una hoja por azardo',
'tooltip-n-help' => 'Ambézate y topa ayudo',
'tooltip-t-whatlinkshere' => 'Una lista de todas las hojas del viki que tienen atamientos a esta hoja',
'tooltip-t-recentchangeslinked' => 'Los trocamientos dalcavo en las hojas atadas a la ésta',
'tooltip-feed-rss' => 'Sindicación RSS de esta hoja',
'tooltip-feed-atom' => 'Canal Atomo parâ esta hoja',
'tooltip-t-contributions' => 'Lista de kontribüsyón (ajustamientos) deste usador',
'tooltip-t-emailuser' => 'A este usuario, mándale una letra electrόnica (ímey)',
'tooltip-t-upload' => 'Suve dosyas',
'tooltip-t-specialpages' => 'Lista de todas las hojas especiales',
'tooltip-t-print' => 'La forma apropiada parâ imprimir esta hoja',
'tooltip-t-permalink' => 'Atamiento permanente (fikso) a este enderechamiento de la hoja',
'tooltip-ca-nstab-main' => 'Ve el artíkolo',
'tooltip-ca-nstab-user' => 'Ver la hoja del usador',
'tooltip-ca-nstab-special' => 'Esta es una hoja especial, la hoja ya no se puede trocar',
'tooltip-ca-nstab-project' => 'Ver la hoja del prodjekto',
'tooltip-ca-nstab-image' => 'Ver la hoja de la dosya',
'tooltip-ca-nstab-template' => 'Ve el şablón',
'tooltip-ca-nstab-category' => 'Ve la hoja de kategoría',
'tooltip-minoredit' => 'Márcalo como un trocamiento chiquitico',
'tooltip-save' => 'Enrejistra los trocamientos que hizites',
'tooltip-preview' => 'Echa una ojada a tus trocamientos y assibivas házelo antes de enrejistrar!',
'tooltip-diff' => 'Te amostra los trocamientos que hizites en el teksto',
'tooltip-compareselectedversions' => 'Ve las diferencias entre las dos versiones escogidas de esta hoja.',
'tooltip-watch' => 'Ajusta esta hoja a tu lista de escojidas',
'tooltip-rollback' => '«Hazer aboltar» haze aboltar todos los trocamientos del usador dalcavo, sólo en klikando una vez.',
'tooltip-undo' => '«Des-hazer» abolta este trocamiento y lo avre en el modo de previsteo. Permete escrivir una razón en el rezümé.',
'tooltip-summary' => 'Esplica en pocos biervos',

# Attribution
'anonymous' => '{{PLURAL:$1|Uzuario anonimo|Uzuarios anonimos}} de {{SITENAME}}',

# Info page
'pageinfo-contentpage-yes' => 'Si',
'pageinfo-protect-cascading-yes' => 'Si',

# Browsing diffs
'previousdiff' => '← Trocamiento más antiguo',
'nextdiff' => 'Edición más nueva →',

# Media information
'file-info-size' => '$1 × $2 píkseles; boy de la dosya: $3; tipo MIME: $4',
'file-nohires' => 'No disponible a mayor resolución.',
'svg-long-desc' => 'arxivo SVG, nominalmente $1 × $2 píkseles, boy del arxivo: $3',
'show-big-image' => 'Dosya orijinal',

# Special:NewFiles
'showhidebots' => '($1 bots)',
'ilsubmit' => 'Bushkar',
'bydate' => 'por data',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 segundo|$1 segundos}}',
'minutes' => '{{PLURAL:$1|$1 minuto|$1 minutos}}',
'hours' => '{{PLURAL:$1|$1 ora|$1 oras}}',
'days' => '{{PLURAL:$1|$1 diya|$1 diyas}}',
'weeks' => '{{PLURAL:$1|$1 semana|$1 semanas}}',
'months' => '{{PLURAL:$1|$1 mez|$1 mezes}}',
'years' => '{{PLURAL:$1|$1 anyo|$1 anyos}}',
'ago' => 'aze $1',
'just-now' => 'endagora',

# Human-readable timestamps
'hours-ago' => 'aze $1{{PLURAL:$1|ora|oras}}',
'minutes-ago' => 'aze {{PLURAL:$1|minuto|minutos}}',
'seconds-ago' => 'aze {{PLURAL:$1|segundo|segundos}}',
'monday-at' => 'El lunes a la $1',
'tuesday-at' => 'El martes a la $1',
'wednesday-at' => 'El mierkoles a la $1',
'thursday-at' => 'El djuves a la $1',
'friday-at' => 'El viernes a la $1',
'saturday-at' => 'El shabat a la $1',
'sunday-at' => 'El alhad a la $1',
'yesterday-at' => 'Ayer a la $1',

# Bad image list
'bad_image_list' => 'El formato es ansina:

Sólo elementos de lista (liñas empeçando con *) se toman en konsidherasyón.
El primer atamiento de cada liña se deve de atar a una dosya negra (la dosya que se quere blokar).
Los atamientos venideros que están en la misma liña se konsidheran como eksepsiones (hojas, ande la dosya puede aparecer en la liña, ande se puede kulanear la dosya).',

# Metadata
'metadata' => 'Metadados',
'metadata-help' => 'Esta dosya contiene información ajustada (metadados), que la ajustó puede ser la kamerá dijital u el eskáner en cavso si se kulaneó parâ criar u dijitalizar la dosya. 
Si la dosya fue trocada, algunos detalios pueden amostrar no la dosya trocada, ma la dosya orijinal.',
'metadata-expand' => 'Mostra los detalyos ekstendidos',
'metadata-collapse' => 'Esconder los detalyos ekstendidos',
'metadata-fields' => 'Los campos de metadatos que se listan en este messaje se van a amostrar en la hoja de la deskripsión de la foto daínda cuando la tabla de metadatos está cerrada.
Los otros campos se van a guardar por defecto.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-artist' => 'Otor',
'exif-filesource' => 'Manadéro de archivo',
'exif-gpstimestamp' => 'Tiémpo GPS (óra atómica)',
'exif-gpsdatestamp' => 'Dáta GPS',
'exif-languagecode' => 'Lengua',

'exif-copyrighted-true' => 'Kon derechos del otor',

'exif-componentsconfiguration-0' => 'no egziste',

'exif-exposureprogram-1' => 'Giya',

'exif-meteringmode-255' => 'Otro',

'exif-lightsource-9' => 'Bueno tiémpo',
'exif-lightsource-10' => 'Tiémpo nuvlozo',

'exif-saturation-0' => 'Normal',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometros por óra',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometros',

'exif-dc-rights' => 'Derechos',

'exif-iimcategory-hth' => 'Salud',
'exif-iimcategory-lab' => 'Lavoro',
'exif-iimcategory-sci' => 'Sensiya i teknolojiya',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'todos',
'namespacesall' => 'todos',
'monthsall' => '(todos)',

# Email address confirmation
'confirmemail' => 'Konfirmar adreso de korreo elektronika',
'confirmemail_send' => 'Embiar el kodigo de konfirmasion.',
'confirmemail_sent' => 'Konfirmasion de pósta embiada.',
'confirmemail_success' => 'Su adreso de korreo elektronika a sido konfirmada. Agóra puedes [[Special:UserLogin|entrar]] e kolaborar en el wiki.',

# Delete conflict
'recreate' => 'Krear de muevo',

# action=purge
'confirm_purge_button' => 'Akseptár',

# action=watch/unwatch
'confirm-watch-button' => "D'akodro",
'confirm-unwatch-button' => "D'akodro",

# Separators for various lists, etc.
'quotation-marks' => '"$1"',

# Multipage image navigation
'imgmultipageprev' => '← pajina anterior',
'imgmultipagenext' => 'siguiente pajina →',
'imgmultigo' => 'Ir!',

# Language selector for translatable SVGs
'img-lang-go' => 'Ir',

# Table pager
'table_pager_next' => 'Pajina siguiente',
'table_pager_prev' => 'Pajina anterior',
'table_pager_first' => 'Primera pajina',
'table_pager_last' => 'Ultima pajina',
'table_pager_limit_submit' => 'Ir',
'table_pager_empty' => 'No hay resultados',

# Auto-summaries
'autoredircomment' => 'Redireksionado a [[$1]]',
'autosumm-new' => 'Pajina kreado con "$1"',

# Live preview
'livepreview-loading' => 'Cargando...',
'livepreview-ready' => 'Cargando… ¡Pronto!',

# Watchlist editing tools
'watchlisttools-view' => 'Ver los trocamientos',
'watchlisttools-edit' => 'Ver i trocar tu lista de escogidas',
'watchlisttools-raw' => 'Troca tu lista de escogidas en crudo',

# Core parser functions
'duplicate-defaultsort' => '\'\'\'Aviso:\'\'\' la klave primaria para ordenamiento "$2" anula la primera "$1"',

# Special:Version
'version' => 'Versión',
'version-specialpages' => 'Pajinas espesiales',
'version-other' => 'Otros',
'version-version' => '(Versión $1)',
'version-ext-colheader-credits' => 'Otores',
'version-poweredby-others' => 'otros',
'version-software-version' => 'Versión',
'version-entrypoints-header-url' => 'URL',

# Special:Redirect
'redirect-submit' => 'Ir',
'redirect-value' => 'Valor:',
'redirect-file' => 'Nombre de archivo',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'Nombre de archivo:',
'fileduplicatesearch-submit' => 'Bushkar',

# Special:SpecialPages
'specialpages' => 'Hojas especiales',
'specialpages-group-users' => 'Usadores y derechos',

# External image whitelist
'external_image_whitelist' => ' #Desha esta linea ansina komo esta<pre>
#Mete partes de frasas (solo la parte ke va entre los //) enbasho
#Eyas van ser komparadas kon las URLs de las dossias ekternas (hotlinked)
#Akeyos iguales van ser amostrados komo una imej; si no, solo el su atamientoque 
#Las lineas ke empiezan kor «#» son konsideradas komentarios
#Esta no aze diferente el senso se la letra

#Mete todas las partes de frasas regex enriva de esta linea. Desha esta ansina komo se topa</pre>',

# Special:Tags
'tag-filter' => 'Filtro de [[Special:Tags|etiquetas]]:',
'tag-filter-submit' => 'Filtro',
'tags-active-yes' => 'Si',
'tags-active-no' => 'No',
'tags-edit' => 'trocar',
'tags-hitcount' => '$1 {{PLURAL:$1|kambio|kambios}}',

# Special:ComparePages
'compare-page1' => 'Hoja 1',
'compare-page2' => 'Hoja 2',
'compare-rev1' => 'Enderechamiento 1',
'compare-rev2' => 'Enderechamiento 2',
'compare-submit' => 'Comparar',

# HTML forms
'htmlform-selectorother-other' => 'Otro',
'htmlform-no' => 'No',
'htmlform-yes' => 'Si',

# New logging system
'logentry-newusers-autocreate' => 'El cuento de usuario $1 fue {{GENDER:$2|kreado}} otomatikamente',
'rightsnone' => '(dinguno)',

# Feedback
'feedback-subject' => 'Sujeto',
'feedback-message' => 'Messaje',
'feedback-cancel' => 'Anular',

# Search suggestions
'searchsuggest-search' => 'Bushkar',

# Durations
'duration-seconds' => '$1{{PLURAL:$1|segundo|segundos}}',
'duration-minutes' => '$1{{PLURAL:$1|minuto|minutos}}',
'duration-hours' => '$1{{PLURAL:$1|ora|oras}}',
'duration-days' => '$1{{PLURAL:$1|diya|diyas}}',
'duration-weeks' => '$1{{PLURAL:$1|semana|semanas}}',
'duration-years' => '$1{{PLURAL:$1|anyo|anyos}}',
'duration-decades' => '$1{{PLURAL:$1|syekolo|syekolos}}',
'duration-centuries' => '$1{{PLURAL:$1|syekolo|syekolos}}',

# Limit report
'limitreport-cputime-value' => '$1{{PLURAL:$1|segundo|segundos}}',
'limitreport-walltime-value' => '$1{{PLURAL:$1|segundo|segundos}}',

# Special:ExpandTemplates
'expand_templates_ok' => "D'akodro",

);
