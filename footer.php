<script src="<?php bloginfo('template_directory') ?>/assets/modernizr.min.js" type="text/jacascript"></script>

<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
<script type="text/javascript">			
$(document).ready(function() {
			var menuTop = document.getElementById( 'menuTop' ),
				showTop = document.getElementById( 'showTop' ),
				lukkMeny = document.getElementById( 'lukkMeny' ),
				body = document.body,
				prosjektfase1 = document.getElementById( 'prosjektfase1' ),
				prosjektfase2 = document.getElementById( 'prosjektfase2' ),
				prosjektfase3 = document.getElementById( 'prosjektfase3' ),
				fase1tekst = document.getElementById( 'fase1tekst' ),
				fase2tekst = document.getElementById( 'fase2tekst' ),
				fase3tekst = document.getElementById( 'fase3tekst' ),
				moveright = document.getElementById( 'moveright' ),
				moveleft = document.getElementById( 'moveleft' ),
				detaljerRoyKnapp = document.getElementById( 'detaljerRoyKnapp' ),
				detaljerRoy = document.getElementById( 'detaljerRoy' ),
				detaljerSigKnapp = document.getElementById( 'detaljerSigKnapp' ),
				detaljerSig = document.getElementById( 'detaljerSig' ),
				detaljerLukkRoy = document.getElementById( 'detaljerLukkRoy' ),
				omossoverskr  = document.getElementById( 'omossoverskr' ),
				detaljerLukkInteressert = document.getElementById( 'detaljerLukkInteressert' ),
				detaljerIntressert = document.getElementById( 'detaljerIntressert' ),
				detaljerInteressertKnapp = document.getElementById( 'detaljerInteressertKnapp' ),
				kontaktskyv = document.getElementById( 'kontakt-holder' ),
				ulmenu = document.getElementById( 'menu' );

			detaljerRoyKnapp.onclick = function() {
				classie.toggle( detaljerRoy, 'detaljerVis' );
				classie.toggle( detaljerRoyKnapp, 'testknapp2' );
				classie.toggle( detaljerRoy, 'zindexshow' );
				classie.toggle( moveright, 'skyvtilhoyre' );
				classie.toggle( moveleft, 'DisplayNoneSig' );
				classie.toggle( ulmenu, 'DisplayNoneSig' );
				classie.remove( showTop, 'DisplayNoneSig' );
				classie.toggle( omossoverskr, 'VisabilityHiddenSig' );
				classie.remove( menuTop, 'menuTop-open' );
				classie.add( menuTop, 'menuTopskjult');
			};
			
			detaljerSigKnapp.onclick = function() {
				classie.toggle( detaljerSig, 'detaljerVis' );
				classie.toggle( detaljerSig, 'zindexshow' );
				classie.toggle( detaljerSigKnapp, 'testknapp2' );
				classie.toggle( moveleft, 'skyvtilvenstre' );
				classie.toggle( moveright, 'DisplayNoneSig' );
				classie.toggle( ulmenu, 'DisplayNoneSig' );
				classie.remove( showTop, 'DisplayNoneSig' );
				classie.toggle( omossoverskr, 'VisabilityHiddenSig' );
				classie.remove( menuTop, 'menuTop-open' );
				classie.add( menuTop, 'menuTopskjult');
			};
			
			detaljerInteressertKnapp.onclick = function() {
				classie.toggle( detaljerIntressert, 'detaljerInteressertVis' );
				classie.toggle( kontaktskyv, 'skyv-kontakt-holder' );
				classie.toggle( detaljerIntressert, 'detaljerInteressertBunn1' );
				classie.remove( menuTop, 'menuTop-open' );
				classie.add( menuTop, 'menuTopskjult');
				classie.toggle( ulmenu, 'DisplayNoneSig' );
			};
			
			detaljerLukkRoy.onclick = function() {
				classie.remove( detaljerRoy, 'detaljerVis' );
				classie.remove( moveright, 'skyvtilhoyre' );
				classie.remove( detaljerRoy, 'zindexshow' );
				classie.remove( moveleft, 'DisplayNoneSig' );
				classie.remove( ulmenu, 'DisplayNoneSig' );
				classie.remove( detaljerRoyKnapp, 'testknapp2' );
				classie.remove( showTop, 'DisplayNoneSig' );
				classie.remove( omossoverskr, 'VisabilityHiddenSig' );
			};
			
			detaljerLukkSig.onclick = function() {
				classie.remove( detaljerSig, 'detaljerVis' );
				classie.remove( moveleft, 'skyvtilvenstre' );
				classie.remove( detaljerSig, 'zindexshow' );
				classie.remove( moveright, 'DisplayNoneSig' );
				classie.remove( ulmenu, 'DisplayNoneSig' );
				classie.remove( detaljerSigKnapp, 'testknapp2' );
				classie.remove( showTop, 'DisplayNoneSig' );
				classie.remove( omossoverskr, 'VisabilityHiddenSig' );
			};
			
			detaljerLukkInteressert.onclick = function() {
				classie.remove( detaljerIntressert, 'detaljerInteressertVis' );
				classie.remove( kontaktskyv, 'skyv-kontakt-holder' );
				classie.remove( detaljerIntressert, 'detaljerInteressertBunn1' );
				classie.toggle( ulmenu, 'DisplayNoneSig' );
			};
			
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'menuTop-open' );
				classie.toggle( showTop, 'DisplayNoneSig');
				classie.remove( menuTop, 'menuTopskjult');
				disableOther( 'showTop' );
			};
				
			lukkMeny.onclick = function() {
				classie.remove( menuTop, 'menuTop-open' );
				classie.remove( showTop, 'DisplayNoneSig' );
				classie.toggle( menuTop, 'menuTopskjult');
			};
			
			prosjektfase1.onclick = function() {
				classie.toggle( prosjektfase1, 'faseactive' ),
				classie.remove( prosjektfase2, 'faseactive' ),
				classie.remove( prosjektfase3, 'faseactive' ),
				classie.toggle( fase1tekst, 'fase1tekst' ),
				classie.remove( fase2tekst, 'fase2tekst' ),
				classie.remove( fase3tekst, 'fase3tekst' );
			};
			
			prosjektfase2.onclick = function() {
				classie.toggle( prosjektfase2, 'faseactive' ),
				classie.remove( prosjektfase1, 'faseactive' ),
				classie.remove( prosjektfase3, 'faseactive' ),
				classie.toggle( fase2tekst, 'fase2tekst' ),
				classie.remove( fase1tekst, 'fase1tekst' ),
				classie.remove( fase3tekst, 'fase3tekst' );
			};
			
			prosjektfase3.onclick = function() {
				classie.toggle( prosjektfase3, 'faseactive' ),
				classie.remove( prosjektfase2, 'faseactive' ),
				classie.remove( prosjektfase1, 'faseactive' ),
				classie.toggle( fase3tekst, 'fase3tekst' ),
				classie.remove( fase2tekst, 'fase2tekst' ),
				classie.remove( fase1tekst, 'fase1tekst' );
			};
			
			
			/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

window.classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

})( window );
   });
		</script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45180330-2', 'prosjektskogen.no');
  ga('send', 'pageview');

</script>

</body>
</html>